<?php get_header(); ?>
<main>
    <section class="mv">
        <div class="mv__inner">
            <div class="mv__visual">
                <div class="mv__image-blank" aria-hidden="true"></div>

                <div class="mv__copy-main">
                    <h1>守り、支える。<br>愛車と、あなたを。</h1>
                    <p>茂原市クルマのかかりつけ医「オートサービス向後」</p>
                </div>

                <div class="mv__copy-sub">
                    <p>Protect and support.<br>your beloved car and you.</p>
                </div>

                <p class="mv__bg-text" aria-hidden="true">YOURCARSDOCTOR</p>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about__container">
            <div class="about__heading">
                <p class="about__en">ABOUT US</p>
                <h2>私たちについて</h2>
            </div>

            <div class="about__content">
                <p>目指しているのは、<br>一度当社へお越しいただいた方が、また利用したいと思っていただける店。</p>
                <p>例えば車検や修理などの場合も、お客様のご意向を十分にお伺いして、<br>必要なものを的確に判断して交換、修理します。</p>
                <p>お車のコンディションを最適に保つための<br><span>「クルマのかかりつけ医」</span>としてなんでもご相談下さい。</p>

                <div class="about__link-wrap">
                    <a class="about__link" href="<?= get_home_url(); ?>/about">
                        <span>詳細はこちら</span>
                        <span class="about__link-icon" aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="about__gallery" aria-hidden="true">
            <div class="about__gallery-item"></div>
            <div class="about__gallery-item"></div>
            <div class="about__gallery-item"></div>
            <div class="about__gallery-item about__gallery-item--last"></div>
        </div>

        <p class="about__ring" aria-hidden="true">SAFE AND SUPPORT</p>
    </section>

    <section class="tire-change">
        <div class="tire-change__inner">
            <div class="tire-change__head">
                <div class="tire-change__title-block">
                    <p class="tire-change__en">TIRE CHANGE</p>
                    <h2>タイヤ交換</h2>

                    <a class="tire-change__link" href="<?= get_home_url(); ?>/tire-change">
                        <span>詳細はこちら</span>
                        <span class="tire-change__link-icon" aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="tire-change__lead">
                    <p>全国180店舗以上を展開する「タイヤ流通センター」の加盟店です。</p>
                    <p>松・竹・梅の3つのプランから選ぶだけで、タイヤのプロが厳選した最適なタイヤをご提案いたします。</p>
                </div>
            </div>

            <div class="tire-change__cards" aria-hidden="true">
                <article class="tire-change__card tire-change__card--summer">
                    <p class="tire-change__card-label">◎ サマータイヤ</p>
                    <p class="tire-change__price">¥8,900〜</p>
                    <p class="tire-change__tax">（税込 ¥16,390〜）</p>
                    <div class="tire-change__blank-tire"></div>
                </article>

                <article class="tire-change__card tire-change__card--winter">
                    <p class="tire-change__card-label">❄ スタッドレスタイヤ</p>
                    <p class="tire-change__price">¥14,900〜</p>
                    <p class="tire-change__tax">（税込 ¥16,390〜）</p>
                    <div class="tire-change__blank-tire"></div>
                </article>
            </div>
        </div>
        <p class="tire-change__bg-text" aria-hidden="true">TIRE<br>CHANGE</p>
    </section>
    <section class="service">
        <div class="service__inner">
            <p class="service__en">SERVICE</p>
            <h2>各種サービス</h2>
            <p class="service__lead">
                当社では、お客様のカーライフを総合的にサポートするため、<br>
                カーラッピング・カールース・車検・鈑金・リモートサービス・自動車保険など、<br>
                多様なサービスをワンストップでご提供しております。
            </p>

            <div class="service__content">
                <div class="service__list" aria-label="サービス一覧">
                    <a class="service__item" href="#">
                        <div>
                            <p class="service__num">SERVICE 01</p>
                            <p class="service__name">カーラッピング</p>
                        </div>
                        <span class="service__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="service__item" href="#">
                        <div>
                            <p class="service__num">SERVICE 02</p>
                            <p class="service__name">車検</p>
                        </div>
                        <span class="service__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="service__item" href="#">
                        <div>
                            <p class="service__num">SERVICE 03</p>
                            <p class="service__name">鈑金</p>
                        </div>
                        <span class="service__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="service__item" href="#">
                        <div>
                            <p class="service__num">SERVICE 04</p>
                            <p class="service__name">リモートサービス</p>
                        </div>
                        <span class="service__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="service__item" href="#">
                        <div>
                            <p class="service__num">SERVICE 05</p>
                            <p class="service__name">自動車保険</p>
                        </div>
                        <span class="service__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="service__item" href="#">
                        <div>
                            <p class="service__num">SERVICE 06</p>
                            <p class="service__name">タイヤ交換</p>
                        </div>
                        <span class="service__arrow" aria-hidden="true">→</span>
                    </a>
                    <a class="service__item" href="#">
                        <div>
                            <p class="service__num">SERVICE 07</p>
                            <p class="service__name">ニコニコレンタカー</p>
                        </div>
                        <span class="service__arrow" aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="service__image-blank" aria-hidden="true"></div>
            </div>
        </div>
        <p class="service__bg-text" aria-hidden="true">SERVICE</p>
    </section>
</main>
<?php get_footer(); ?>