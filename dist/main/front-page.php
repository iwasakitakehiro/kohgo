<?php get_header(); ?>
<main>
    <section class="mv">
        <div class="mv__inner">
            <div class="mv__visual">
                <div class="mv__image" aria-hidden="true">
                    <img src="<?= get_template_directory_uri(); ?>/img/top/mv01.png" alt="">
                </div>
                <div class="mv__copy-main">
                    <h1>守り、支える。<br>愛車と、あなたを。</h1>
                    <p>茂原市クルマのかかりつけ医「オートサービス向後」</p>
                </div>

                <div class="mv__copy-sub">
                    <p>Protect and support.<br>your beloved car and you.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="inner">
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
    </section>

    <section class="ranking">
        <div>
            <div class="ranking__heading">
                <h2>新車リース人気ランキング</h2>
            </div>
            <div>
                <div class="ranking__slider">
                    <div class="slider">
                        <div class="slider-wrapper">
                            <div id="ranking01" class="slider-slide">
                                <div class="myCard no-first">
                                    <a href="https://futaba-car.jp/lineup/5681/" class="card">
                                        <div class="card-img">
                                            <img src="<?= get_template_directory_uri(); ?>/img/top/nbox.png" alt="N-BOX">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title">N-BOX</p>
                                            <div class="card-price">
                                                <p>
                                                    <span class="month">月額</span>
                                                    <span class="number">10,000</span><span class="unit">円(税込)〜</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <span class="detail-button">詳細はこちら</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="ranking02" class="slider-slide">
                                <div class="myCard no-second">
                                    <a href="https://futaba-car.jp/lineup/5629/" class="card">
                                        <div class="card-img">
                                            <img src="<?= get_template_directory_uri(); ?>/img/top/spacia.png" alt="スペーシア">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title">スペーシア</p>
                                            <div class="card-price">
                                                <p>
                                                    <span class="month">月額</span>
                                                    <span class="number">10,000</span><span class="unit">円(税込)〜</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <span class="detail-button">詳細はこちら</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="ranking03" class="slider-slide">
                                <div class="myCard no-third">
                                    <a href="https://futaba-car.jp/lineup/13453/" class="card">
                                        <div class="card-img">
                                            <img src="<?= get_template_directory_uri(); ?>/img/top/husler.png" alt="ハスラー">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title">ハスラー</p>
                                            <div class="card-price">
                                                <p>
                                                    <span class="month">月額</span>
                                                    <span class="number">10,000</span><span class="unit">円(税込)〜</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <span class="detail-button">詳細はこちら</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="ranking04" class="slider-slide">
                                <div class="myCard">
                                    <a href="https://futaba-car.jp/lineup/5717/" class="card">
                                        <div class="card-img">
                                            <img src="<?= get_template_directory_uri(); ?>/img/top/tant.png" alt="タント">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title">タント</p>
                                            <div class="card-price">
                                                <p>
                                                    <span class="month">月額</span>
                                                    <span class="number">10,000</span><span class="unit">円(税込)〜</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <span class="detail-button">詳細はこちら</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="ranking05" class="slider-slide">
                                <div class="myCard">
                                    <a href="https://futaba-car.jp/lineup/14496/" class="card">
                                        <div class="card-img">
                                            <img src="<?= get_template_directory_uri(); ?>/img/top/delicamini.png" alt="デリカミニ">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-title">デリカミニ</p>
                                            <div class="card-price">
                                                <p>
                                                    <span class="month">月額</span>
                                                    <span class="number">10,000</span><span class="unit">円(税込)〜</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <span class="detail-button">詳細はこちら</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="slider-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tire-change">
        <div class="inner">
            <div class="sectioin-title__head">
                <div class="sectioin-title__title-block">
                    <p class="sectioin-title__en">TIRE CHANGE</p>
                    <h2>タイヤ交換</h2>

                    <a class="sectioin-title__link" href="<?= get_home_url(); ?>/tire-change">
                        <span>詳細はこちら</span>
                        <span class="sectioin-title__link-icon" aria-hidden="true">→</span>
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
        <div class="service-head">
            <div class="inner">
                <p class="service__en">SERVICE</p>
                <h2>各種サービス</h2>
                <p class="service__lead">
                    当社では、お客様のカーライフを総合的にサポートするため、<br>
                    カーラッピング・カールース・車検・鈑金・リモートサービス・自動車保険など、<br>
                    多様なサービスをワンストップでご提供しております。
                </p>
            </div>
            <p class="service__bg-text" aria-hidden="true">SERVICE</p>
        </div>
        <div class="inner">
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
                <div class="service__image" aria-hidden="true">
                    <img src="<?= get_template_directory_uri(); ?>/img/top/service-img.png" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>