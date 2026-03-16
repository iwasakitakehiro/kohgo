<?php
class Model
{
  private $contents;
  static $client_address = "t.iwasaki@humansyscom.jp";
  static $client_name = "オートサービス向後";
  static $client_bunch = <<<EOT
〒290-0081
千葉県市原市五井中央西2丁目24番地13
EOT;
  public function __construct()
  {
    $this->contents = [
      "お名前" => [
        "label" => "お名前",
        "name" => "username",
        "type" => "text",
        "selects" => "",
        "class" => "",
        "placeholder" => "名前を入力してください",
        "required" => true,

        "error_message" => "お名前を入力してください"
      ],
      "フリガナ" => [
        "label" => "フリガナ",
        "name" => "ruby",
        "type" => "text",
        "selects" => "",
        "class" => "",
        "placeholder" => "フリガナを入力してください",
        "required" => true,
        "error_message" => "ふりがなを入力してください"
      ],
      "会社名" => [
        "label" => "会社名",
        "name" => "companyname",
        "type" => "text",
        "selects" => "",
        "class" => "",
        "placeholder" => "会社名を入力してください",
        "required" => false,
        "error_message" => ""
      ],
      "電話番号（半角）" => [
        "label" => "電話番号（半角）",
        "name" => "tel",
        "type" => "tel",
        "selects" => array(""),
        "class" => "",
        "placeholder" => "電話番号を入力してください",
        "required" => true,
        "error_message" => "電話番号（半角）を入力してください"
      ],
      "メールアドレス（半角）" => [
        "label" => "メールアドレス（半角）",
        "name" => "mail01",
        "type" => "mail",
        "selects" => "",
        "class" => "",
        "placeholder" => "メールアドレスを入力してください",
        "required" => true,
        "error_message" => "メールアドレス（半角）を入力してください"
      ],
      "お問い合わせ内容" => [
        "label" => "お問い合わせ内容",
        "name" => "comment",
        "type" => "textarea",
        "selects" => "",
        "class" => "",
        "placeholder" => "例：お問い合わせ内容を入力してください",
        "required" => true,
        "error_message" => "お問い合わせ内容を入力してください"
      ],
    ];
  }

  public function contents()
  {
    return $this->contents;
  }
}
