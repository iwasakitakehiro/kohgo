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
          <p class="job-hero__eyebrow">BODYWORK &amp; PAINT</p>
          <h2 class="job-hero__title">鈑金・塗装（正社員）</h2>
        </div>
        <div class="job-hero__media" aria-hidden="true">
          <div class="job-hero__image-blank">
            <img src="<?= get_template_directory_uri(); ?>/img/recruit/recruit04.png" alt="">
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
            <p>鈑金・塗装（正社員）</p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">仕事内容</div>
          <div class="info-grid__value">
            <p>修理箇所の鈑金及びパテ、下塗り、上塗り、研磨等を行って頂きます。</p>
            <p>必要に応じてコーティング作業、ルームクリーニング業務もあります。</p>
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
              <li>自動車鈑金・塗装の経験のある方</li>
            </ul>
            <p>《歓迎するスキル》</p>
            <ul>
              <li>フレーム修正、骨格修正の経験のある方大歓迎！</li>
            </ul>
          </div>
        </div>

        <div class="info-grid__row">
          <div class="info-grid__label">雇用形態</div>
          <div class="info-grid__value">
            <p>正社員</p>
          </div>
        </div>

        <div class="info-grid__row">
          <div class="info-grid__label">勤務時間</div>
          <div class="info-grid__value">
            <p>9:00〜19：00 <span class="info-grid__note-inline">※休憩２時間半</span></p>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">休日・休暇</div>
          <div class="info-grid__value">
            <p>希望の固定休日を設定します！</p>
            <ul>
              <li>夏期休暇</li>
              <li>年末年始</li>
              <li>特別休暇</li>
              <li>有給休暇</li>
              <li>産前産後・育児休暇</li>
            </ul>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">待遇・福利厚生</div>
          <div class="info-grid__value">
            <ul>
              <li>健康保険</li>
              <li>厚生年金保険</li>
              <li>雇用保険</li>
              <li>労災保険</li>
              <li>各種イベント（社員旅行、忘年会、BBQ、飲み会など）</li>
            </ul>
          </div>
        </div>

        <div class="info-grid__row info-grid__row--multiline">
          <div class="info-grid__label">給与</div>
          <div class="info-grid__value">
            <p>月給 300,000円 〜 450,000円</p>
            <p class="info-grid__note">※試用期間約３ヶ月あり</p>
            <p class="info-grid__note">※月給に製造、訪問手当・交通費(月額5,000円まで)支給あり。</p>
            <p class="info-grid__note">※給与詳細は経験、能力等を鑑み、規定により決定いたします。</p>
            <p class="info-grid__note">※歩合制あり</p>
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
