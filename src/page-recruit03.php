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
          <p class="job-hero__eyebrow">OFFICE STAFF</p>
          <h2 class="job-hero__title">事務（パート・アルバイト）</h2>
        </div>
        <div class="job-hero__media" aria-hidden="true">
          <div class="job-hero__image-blank">
            <img src="<?= get_template_directory_uri(); ?>/img/recruit/recruit03.png" alt="">
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
            <p>事務（パート・アルバイト）</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">仕事内容</div>
          <div class="info-grid__value">
            <p>車両登録書類の作成や車両管理システムに在庫車の情報登録、接客・電話の応対の他、付随する業務です。</p>
            <p>WordやExcelができればOK。</p>
            <p>経理の経験者優遇。</p>
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
              <li>Word、Excel</li>
              <li>メールのやり取りができる事</li>
              <li>簿記、経理の経験</li>
              <li>自動車関係での事務経験</li>
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
            <p>9:00〜19：00 の間で４時間以上。 <span class="info-grid__note-inline">※ご希望の時間をうかがいます。</span></p>
          </div>
        </div>

        <div class="info-grid__row">
          <div class="info-grid__label">休日・休暇</div>
          <div class="info-grid__value">
            <p>週３日からの出勤にてシフト制になります。</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">待遇・福利厚生</div>
          <div class="info-grid__value">
            <ul>
              <li>１週間の労働時間により、労働基準法に基づき対応致します。</li>
              <li>各種イベントあり（社員旅行、忘年会、BBQ、飲み会など）</li>
            </ul>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">給与</div>
          <div class="info-grid__value">
            <p>時給960円〜1,500円</p>
            <p class="info-grid__note">※試用期間約３ヶ月あり</p>
            <p class="info-grid__note">※別途交通費(月額10,000円まで)支給あり。</p>
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