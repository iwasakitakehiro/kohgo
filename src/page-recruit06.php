<?php get_header(); ?>
<main class="page-shell">
  <section class="sub-visual sub-visual--service">
    <div class="sub-visual__canvas">
      <div class="sub-visual__image-blank" aria-hidden="true"></div>
      <p class="sub-visual__watermark" aria-hidden="true">RECRUIT</p>
      <h1 class="sub-visual__title">採用情報</h1>
    </div>
  </section>

  <section class="job-hero-section">
    <div class="inner">
      <div class="job-hero">
        <div class="job-hero__content">
          <p class="job-hero__eyebrow">SALES &amp; MARKETING</p>
          <h2 class="job-hero__title">営業・販売（パート・アルバイト）</h2>
        </div>
        <div class="job-hero__media" aria-hidden="true">
          <div class="job-hero__image-blank">
            <img src="<?= get_template_directory_uri(); ?>/img/recruit/recruit06.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="info-grid-section">
    <div class="inner">
      <div class="info-grid">
        <div class="info-grid__row">
          <div class="info-grid__label">職種</div>
          <div class="info-grid__value">
            <p>営業・販売（パート・アルバイト）</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">仕事内容</div>
          <div class="info-grid__value">
            <p>オイル交換、バッテリー交換、洗車、タイヤ交換などの整備から、</p>
            <p>陸運局への車両持込み、部品の発注、接客業務などをお任せします。</p>
            <p>自動車関連の資格が無い方、クルマの知識が全くない方でも、基礎知識の研修からスタートしますので、ご安心ください。</p>
            <p>働きながら車に関する技術を学んでいただけますので、一つ一つゆっくり丁寧に覚えていきましょう。</p>
            <p>正社員へのステップアップも可能です！</p>
            <p>評価基準も明確にあるので、その後も頑張り次第でキャリアアップできる環境が整っています。</p>
            <p>「クルマが好き」「興味がある」「車好きだけど経験が・・・」「手に職付けて身にしたいな」など、まずはお気軽にご相談を！その気持ちだけで大丈夫！応援します！</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">勤務地</div>
          <div class="info-grid__value">
            <p>〒297-0016 茂原市木崎620-2</p>
            <p>オートサービス向後</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">応募条件</div>
          <div class="info-grid__value">
            <p>《必須スキル》</p>
            <ul>
              <li>普通自動車免許</li>
            </ul>
            <p>《歓迎するスキル》</p>
            <ul>
              <li>自動車整備士3級</li>
              <li>Word、ExcelなどPCの基本スキル</li>
              <li>メールのやり取りができる事</li>
              <li>自動車の整備経験</li>
            </ul>
          </div>
        </div>

        <div class="info-grid__row">
          <div class="info-grid__label">雇用形態</div>
          <div class="info-grid__value">
            <p>パート・アルバイト</p>
          </div>
        </div>

        <div class="info-grid__row">
          <div class="info-grid__label">勤務時間</div>
          <div class="info-grid__value">
            <p>9:00〜19:00 の間で５時間以上。 <span class="info-grid__note-inline">※希望勤務時間はご相談下さい。</span></p>
          </div>
        </div>

        <div class="info-grid__row">
          <div class="info-grid__label">休日・休暇</div>
          <div class="info-grid__value">
            <p>週３日以上の出勤でシフト制になります。</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">待遇・福利厚生</div>
          <div class="info-grid__value">
            <ul>
              <li>一週間の労働時間により、労働基準法に基づき対応致します。</li>
              <li>各種イベント（社員旅行、忘年会、BBQ、飲み会など）</li>
            </ul>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">給与</div>
          <div class="info-grid__value">
            <p>時給960円〜1,500円</p>
            <p class="info-grid__note">※試用期間約３ヶ月あり</p>
            <p class="info-grid__note">※別途交通費(月額10,000円まで)支給あり。</p>
            <p class="info-grid__note">※給与詳細は経験、能力等を鑑み、規定により決定いたします。</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">応募方法</div>
          <div class="info-grid__value">
            <p>お電話、または <a href="<?= esc_url(home_url('/contact')); ?>">お問い合わせフォーム</a> より必須項目をご入力いただき、内容をご確認の上、送信してください。</p>
            <p>後日、採用担当者よりご連絡を差し上げます。</p>
            <p class="info-grid__note">※送信後、確認メールが届かない場合や３営業日以上たっても連絡がない場合は送信エラーの可能性があります。</p>
            <p class="info-grid__note">お手数ですがメールアドレスをご確認の上、再送信いただくかお電話でお問い合わせください。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>