<?php get_header(); ?>
<main class="page-shell">
  <section class="sub-visual sub-visual--service">
    <div class="sub-visual__canvas">
      <div class="sub-visual__image-blank" aria-hidden="true"></div>
      <p class="sub-visual__watermark" aria-hidden="true">RECRUIT</p>
      <h1 class="sub-visual__title">採用情報</h1>
    </div>
  </section>

  <section class="story-showcase-section">
    <div class="inner">
      <div class="story-showcase">
        <div class="story-showcase__top">
          <div class="story-showcase__lead-block">
            <p class="story-showcase__eyebrow">MESSAGE</p>
            <h2 class="story-showcase__title">私たちの想い</h2>
            <div class="story-showcase__lead-text">
              <p>私たちの住む茂原という地域では、毎日の生活に自動車が欠かせません。</p>
              <br>
              <p>自動車はとてもたくさんの部品からできている工業製品です。<br>毎日使っているとどこか調子が悪くなってくるものです。</p>
              <br>
              <p>いざという時にいつでも動く自動車であってほしい。<br>ある意味当然のことですが、この地域の皆様の切なる願いです。</p>
              <br>
              <p>我々の仕事は、そんな自動車を通して、<br>地域の生活基盤を守る縁の下の力持ちのような、<br>現代地域社会に必要不可欠な役目であると自負しております。</p>
            </div>
          </div>

          <div class="story-showcase__hero" aria-hidden="true">
            <div class="story-showcase__image-blank story-showcase__image-blank--hero">
              <img src="<?= get_template_directory_uri(); ?>/img/recruit/message.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="story-showcase__bottom">
      <div class="story-showcase__gallery pc-show" aria-hidden="true">
        <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
          <img src="<?= get_template_directory_uri(); ?>/img/recruit/p1.png" alt="">
        </div>
        <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
          <img src="<?= get_template_directory_uri(); ?>/img/recruit/p2.png" alt="">
        </div>
        <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
          <img src="<?= get_template_directory_uri(); ?>/img/recruit/p3.png" alt="">
        </div>
        <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
          <img src="<?= get_template_directory_uri(); ?>/img/recruit/p4.png" alt="">
        </div>
      </div>

      <div class="story-showcase__message-text">
        <p>会社の発展を通して、社員の皆様の幸せを考え、お客様と、そしてスタッフと共に歩む。</p>
        <p>人と人との繋がりを何よりも大切にしていきたい。そして日々成長をもとめ、新しい事に対し常に挑戦していく心を忘れない。</p>
        <p>オートサービス向後はそんな人たちが集まる会社です。</p>
        <p>私たちと一緒に未来を創りましょう！</p>
      </div>
    </div>

    <div class="story-showcase__gallery sp-show" aria-hidden="true">
      <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
        <img src="<?= get_template_directory_uri(); ?>/img/recruit/p1.png" alt="">
      </div>
      <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
        <img src="<?= get_template_directory_uri(); ?>/img/recruit/p2.png" alt="">
      </div>
      <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
        <img src="<?= get_template_directory_uri(); ?>/img/recruit/p3.png" alt="">
      </div>
      <div class="story-showcase__image-blank story-showcase__image-blank--thumb">
        <img src="<?= get_template_directory_uri(); ?>/img/recruit/p4.png" alt="">
      </div>
    </div>
  </section>

  <section class="job-grid-section">
    <div class="inner">
      <div class="job-grid-header">
        <p class="job-grid-header__eyebrow">RECRUITMENT</p>
        <h2 class="job-grid-header__title">募集職種</h2>
      </div>

      <div class="job-grid">
        <article class="job-card">
          <div class="job-card__body">
            <div class="job-card__head">
              <h3 class="job-card__title">営業・販売</h3>
              <span class="job-card__type">正社員</span>
            </div>
            <div class="job-card__image-blank" aria-hidden="true">
              <img src="<?= get_template_directory_uri(); ?>/img/recruit/job1.png" alt="">
            </div>
            <p class="job-card__text">車の販売だけでなく、保険の知識も身につけたい方に向いている仕事です。接客や提案を通じて、お客様のカーライフを支えます。</p>
          </div>
          <a class="job-card__link" href="#">
            <span>募集要項はこちら</span>
            <span class="job-card__link-icon" aria-hidden="true"></span>
          </a>
        </article>

        <article class="job-card">
          <div class="job-card__body">
            <div class="job-card__head">
              <h3 class="job-card__title">事務</h3>
              <span class="job-card__type">正社員</span>
            </div>
            <div class="job-card__image-blank" aria-hidden="true">
              <img src="<?= get_template_directory_uri(); ?>/img/recruit/job2.png" alt="">
            </div>
            <p class="job-card__text">営業と工場をつなぐ大切な役割を担っていただきます。受付やOfficeの知識、経験を活かせる環境で、部署間の良い関係を一緒に築いていきませんか。</p>
          </div>
          <a class="job-card__link" href="#">
            <span>募集要項はこちら</span>
            <span class="job-card__link-icon" aria-hidden="true">

            </span>
          </a>
        </article>

        <article class="job-card job-card--muted">
          <div class="job-card__body">
            <div class="job-card__head">
              <h3 class="job-card__title">事務</h3>
              <span class="job-card__type job-card__type--light">パート・アルバイト</span>
            </div>
            <div class="job-card__image-blank" aria-hidden="true">
              <img src="<?= get_template_directory_uri(); ?>/img/recruit/job3.png" alt="">
            </div>
            <p class="job-card__text">営業と工場をつなぐサポート業務をお任せします。子育てや家事と両立しながら、無理なく働ける事務ポジションです。</p>
          </div>
          <a class="job-card__link" href="#">
            <span>募集要項はこちら</span>
            <span class="job-card__link-icon" aria-hidden="true"></span>
          </a>
        </article>

        <article class="job-card">
          <div class="job-card__body">
            <div class="job-card__head">
              <h3 class="job-card__title">鈑金塗装</h3>
              <span class="job-card__type">正社員</span>
            </div>
            <div class="job-card__image-blank" aria-hidden="true">
              <img src="<?= get_template_directory_uri(); ?>/img/recruit/job4.png" alt="">
            </div>
            <p class="job-card__text">塗装・鈑金に必要な技術は、経験豊富な先輩が丁寧に指導します。資格取得支援制度もあるので、着実にスキルアップできる環境です。</p>
          </div>
          <a class="job-card__link" href="#">
            <span>募集要項はこちら</span>
            <span class="job-card__link-icon" aria-hidden="true"></span>
          </a>
        </article>

        <article class="job-card">
          <div class="job-card__body">
            <div class="job-card__head">
              <h3 class="job-card__title">整備士</h3>
              <span class="job-card__type">正社員</span>
            </div>
            <div class="job-card__image-blank" aria-hidden="true">
              <img src="<?= get_template_directory_uri(); ?>/img/recruit/job5.png" alt="">
            </div>
            <p class="job-card__text">車好きの方にぴったりの仕事です。分解・組み立てからお客様のお車の修理まで責任を持って対応し、最新設備を活用しながら着実にスキルを磨けます。</p>
          </div>
          <a class="job-card__link" href="#">
            <span>募集要項はこちら</span>
            <span class="job-card__link-icon" aria-hidden="true"></span>
          </a>
        </article>

        <article class="job-card job-card--muted">
          <div class="job-card__body">
            <div class="job-card__head">
              <h3 class="job-card__title">整備士</h3>
              <span class="job-card__type job-card__type--light">パート・アルバイト</span>
            </div>
            <div class="job-card__image-blank" aria-hidden="true">
              <img src="<?= get_template_directory_uri(); ?>/img/recruit/job6.png" alt="">
            </div>
            <p class="job-card__text">分解・組み立て作業やお客様のお車の簡単な整備のサポートをお願いします。資格取得支援もあり、働きながらスキルアップできます。</p>
          </div>
          <a class="job-card__link" href="#">
            <span>募集要項はこちら</span>
            <span class="job-card__link-icon" aria-hidden="true"></span>
          </a>
        </article>
      </div>

      <div class="support-highlight">
        <p class="support-highlight__watermark" aria-hidden="true">CERTIFICATION<br>SUPPORT</p>
        <div class="support-highlight__heading">
          <span class="support-highlight__accent support-highlight__accent--left" aria-hidden="true"></span>
          <div>
            <p class="support-highlight__eyebrow">未経験でもOK！</p>
            <h2 class="support-highlight__title">資格取得支援します</h2>
          </div>
          <span class="support-highlight__accent support-highlight__accent--right" aria-hidden="true"></span>
        </div>
        <div class="support-highlight__text">
          <p>当社では、やる気のある方の資格取得をしっかりサポートしています。</p>
          <p>整備士・福祉車両取扱士・生命保険応用・簿記など、さまざまな資格に対応。その他の資格についても、お気軽にご相談ください。</p>
        </div>
        <div class="support-highlight__image-blank" aria-hidden="true">
          <img src="<?= get_template_directory_uri(); ?>/img/recruit/support.svg" alt="">
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>