<?php
class Scraping
{
    private $filename;
    private $todayDate;
    public function __construct($filename, $todayDate)
    {
        $this->filename = $filename;
        $this->todayDate = $todayDate;

        clearstatcache();

        $today = date('Y-m-d');

        if (file_exists($this->filename)) {

            $fileDate = date('Y-m-d', filemtime($this->filename));

            // 1日1回まで更新
            if ($fileDate < $today) {
                $this->scraping();
            }
        } else {
            // ファイルが存在しなければ必ず作成
            $this->scraping();
        }
    }
    //スクレイピング処理を関数化
    function scraping()
    {
        require_once(dirname(__FILE__) . "/phpQuery/phpQuery/phpQuery.php");

        $html = file_get_contents("https://www.carsensor.net/shop/chiba/329885002/stocklist/");
        //     // 初期化
        $blog_title = array();
        $blog_maker = array();
        $blog_basePrice = array();
        $blog_totalPrice = array();
        $blog_url = array();
        $blog_img = array();
        $blog_category = array();
        $jsonData = [];

        // libxml のエラー抑制（既に追加済み）
        libxml_use_internal_errors(true);

        // ドキュメントを一度だけ作る
        $doc = phpQuery::newDocument($html);

        // タイトルと URL を取得
        $titleList = $doc->find(".casetMedia__body__title a");
        foreach ($titleList as $title) {

            $t = pq($title)->text();

            $href = pq($title)->attr("href");
            $blog_title[] = $t;
            $blog_url[] = $href;
        }

        $titleMaker = $doc->find(".casetMedia__body__maker");
        foreach ($titleMaker as $maker) {

            $t = pq($maker)->text();
            $blog_maker[] = $t;
        }

        $titleBasePrice = $doc->find(".basePrice__price__main");
        foreach ($titleBasePrice as $basePrice) {

            $t = pq($basePrice)->text();
            $blog_basePrice[] = $t;
        }

        $titleTotalPrice = $doc->find(".totalPrice__price__main");
        foreach ($titleTotalPrice as $totalPrice) {

            $t = pq($totalPrice)->text();
            $blog_totalPrice[] = $t;
        }

        // カテゴリを取得（h3 内の span を想定）
        $titleCategory = $doc->find("h3");
        foreach ($titleCategory as $category) {
            $span = pq($category)->find("span")->text();
            $blog_category[] = $span;
        }

        // .photoBox 要素を取得して各要素から直接抽出する
        $elements = $doc->find(".casetMedia__obj");
        foreach ($elements as $key => $el) {
            if ($key >= 5) {
                break;
            }

            $pq = pq($el);

            // 要素内から直接取得（見つからなければ空文字）
            $title = $blog_title[$key] ?? '';
            $maker = $blog_maker[$key] ?? '';
            $totalPrice = $blog_totalPrice[$key] ?? '';
            $basePrice = $blog_basePrice[$key] ?? '';
            $url   =  $blog_url[$key] ?? '';
            // category が .photoBox 内に無ければ外側の配列から取るために後述のフォールバックを用意
            $category = $blog_category[$key] ?? '';
            $img = $pq->find('img')->attr('src') ?? '';

            // 画像の Q → M 変換（元のロジックを簡潔化）
            if ($img !== '') {
                $img = str_replace('Q', 'M', $img);
            }

            $blog_img[] = $img;

            $jsonData[] = [
                'title'    => $title,
                'maker'    => $maker,
                'totalPrice' => $totalPrice,
                'basePrice' => $basePrice,
                'thmbnail' => $img,
                'url'      => $url,
            ];
        }

        // もし .photoBox 内に category が無く、先に取得した $blog_category を使いたい場合はフォールバック処理
        // （要素数が合わない可能性があるため、安全に上書き）
        for ($i = 0; $i < count($jsonData); $i++) {
            if (empty($jsonData[$i]['category']) && isset($blog_category[$i])) {
                $jsonData[$i]['category'] = $blog_category[$i];
            }
        }

        // libxml エラークリア（既に追加済み）
        libxml_clear_errors();


        //JSONデータを保存
        file_put_contents($this->filename, json_encode($jsonData, JSON_UNESCAPED_UNICODE));
        return file_get_contents($this->filename);
    }
}
