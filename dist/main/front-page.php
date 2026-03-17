<?php get_header(); ?>
<?php

require_once(dirname(__FILE__) . "/scrape.php");
$get_contents =  new Scraping('blog.json', date("Y/m/d"));
$contents = $get_contents->scraping();
$json = json_decode($contents);

?>
<main>
    <section class="mv">
        <div class="mv__inner">
            <div class="mv__visual">
                <div class="mv__image" aria-hidden="true">
                    <div>
                        <img src="<?= get_template_directory_uri(); ?>/img/top/mv01.png" alt="">
                    </div>
                    <div>
                        <img src="<?= get_template_directory_uri(); ?>/img/top/mv01.png" alt="">
                    </div>
                    <div>
                        <img src="<?= get_template_directory_uri(); ?>/img/top/mv01.png" alt="">
                    </div>
                </div>
                <div class="mv__copy-main">
                    <h1>守り、支える。<br>愛車と、あなたを。</h1>
                    <p>茂原市クルマのかかりつけ医<br class="sp-show">「オートサービス向後」</p>
                </div>

                <div class="mv__copy-sub">
                    <p>Protect and support.<br>your beloved car and you.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="inner">
            <div class="section__wrap">
                <div class="section__heading">
                    <p class="section__en">ABOUT US</p>
                    <h2>私たちについて</h2>
                </div>
                <div class="section__content">
                    <div>
                        <div>
                            <p>目指しているのは、<br>一度当社へお越しいただいた方が、また利用したいと思っていただける店。</p>
                            <p>例えば車検や修理などの場合も、お客様のご意向を十分にお伺いして、<br>必要なものを的確に判断して交換、修理します。</p>
                            <p>お車のコンディションを最適に保つための<span>「クルマのかかりつけ医」</span>としてなんでもご相談下さい。</p>
                        </div>
                        <div class="section__link-wrap">
                            <a class="section__link" href="<?= get_home_url(); ?>/about">
                                <span>詳細はこちら</span>
                                <span class="link-icon" aria-hidden="true">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                        <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="about__gallery" aria-hidden="true">
            <div class="about__gallery-item">
                <img src="<?= get_template_directory_uri(); ?>/img/top/about01.png" alt="">
            </div>
            <div class="about__gallery-item">
                <img src="<?= get_template_directory_uri(); ?>/img/top/about02.png" alt="">
            </div>
            <div class="about__gallery-item">
                <img src="<?= get_template_directory_uri(); ?>/img/top/about03.png" alt="">
            </div>
            <div class="about__gallery-item about__gallery-item--last">
                <img src="<?= get_template_directory_uri(); ?>/img/top/about04.png" alt="">
            </div>
        </div>
        <div class="round">
            <img src="<?= get_template_directory_uri(); ?>/img/top/round.svg" alt="">
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
    <section class="new-car-sales">
        <div class="inner">
            <div class="section__head">
                <div class="section__wrap">
                    <div class="section__heading">
                        <p class="section__en">NEW CAR SALES</p>
                        <h2>新車販売</h2>
                        <div class="section__link-wrap pc-show">
                            <a class="section__link" href="<?= get_home_url(); ?>/tire-change">
                                <span>詳細はこちら</span>
                                <span class="link-icon" aria-hidden="true">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                        <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                    </svg>

                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="section__content">
                        頭金0円、しかも車検･税金･保険もコミコミの「コアラクラブユーカリプラン」をご提供。<br>
                        毎月フラット支払いでクルマを所有いただけます。
                    </div>
                    <div class="section__link-wrap sp-show">
                        <a class="section__link" href="<?= get_home_url(); ?>/tire-change">
                            <span>詳細はこちら</span>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>

                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="new-car-sales__img">
                    <img class="pc-show" src="<?= get_template_directory_uri(); ?>/img/top/new-car-sales.png">
                    <img class="sp-show" src="<?= get_template_directory_uri(); ?>/img/top/new-car-sales-sp.png">
                </div>
            </div>
        </div>
        <p class="tire-change__bg-text" aria-hidden="true">TIRE<br>CHANGE</p>
    </section>
    <section class="tire-change">
        <div class="inner">
            <div class="section__head">
                <div class="section__wrap">
                    <div class="section__heading">
                        <p class="section__en">TIRE CHANGE</p>
                        <h2>タイヤ交換</h2>

                        <div class="section__link-wrap pc-show">
                            <a class="section__link" href="<?= get_home_url(); ?>/tire-change">
                                <span>詳細はこちら</span>
                                <span class="link-icon" aria-hidden="true">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                        <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                    </svg>

                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="section__content">
                        <p>全国180店舗以上を展開する「タイヤ流通センター」の加盟店です。<br>松・竹・梅の3つのプランから選ぶだけで、タイヤのプロが厳選した最適なタイヤをご提案いたします。</p>
                    </div>
                </div>
            </div>
            <div class="section__link-wrap sp-show">
                <a class="section__link" href="<?= get_home_url(); ?>/tire-change">
                    <span>詳細はこちら</span>
                    <span class="link-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                            <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                        </svg>

                    </span>
                </a>
            </div>
            <div class="tire-change__cards" aria-hidden="true">
                <article class="tire-change__card tire-change__card--summer">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/img/global/summer-tire.png" alt="">
                    </a>
                </article>

                <article class="tire-change__card tire-change__card--winter">
                    <a href="#">
                        <img src="<?= get_template_directory_uri(); ?>/img/global/winter-tire.png" alt="">
                    </a>
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
        <div>
            <div class="service__content">
                <div class="service__image" aria-hidden="true">
                    <img class="is-active" data-service-image="01" src="<?= get_template_directory_uri(); ?>/img/top/service01.png" alt="">
                    <img data-service-image="02" src="<?= get_template_directory_uri(); ?>/img/top/service02.png" alt="">
                    <img data-service-image="03" src="<?= get_template_directory_uri(); ?>/img/top/service03.png" alt="">
                    <img data-service-image="04" src="<?= get_template_directory_uri(); ?>/img/top/service04.png" alt="">
                    <img data-service-image="05" src="<?= get_template_directory_uri(); ?>/img/top/service05.png" alt="">
                    <img data-service-image="06" src="<?= get_template_directory_uri(); ?>/img/top/service06.png" alt="">
                    <img data-service-image="07" src="<?= get_template_directory_uri(); ?>/img/top/service07.png" alt="">
                </div>
                <div class="inner">
                    <div class="service__list" aria-label="サービス一覧">
                        <a class="service__item is-active" data-service-key="01" href="#">
                            <div>
                                <p class="service__num">SERVICE 01</p>
                                <p class="service__name">カーラッピング</p>
                            </div>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                        <a class="service__item" data-service-key="02" href="#">
                            <div>
                                <p class="service__num">SERVICE 02</p>
                                <p class="service__name">車検</p>
                            </div>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                        <a class="service__item" data-service-key="03" href="#">
                            <div>
                                <p class="service__num">SERVICE 03</p>
                                <p class="service__name">鈑金</p>
                            </div>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                        <a class="service__item" data-service-key="04" href="#">
                            <div>
                                <p class="service__num">SERVICE 04</p>
                                <p class="service__name">リモートサービス</p>
                            </div>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                        <a class="service__item" data-service-key="05" href="#">
                            <div>
                                <p class="service__num">SERVICE 05</p>
                                <p class="service__name">自動車保険</p>
                            </div>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                        <a class="service__item" data-service-key="06" href="#">
                            <div>
                                <p class="service__num">SERVICE 06</p>
                                <p class="service__name">タイヤ交換</p>
                            </div>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                        <a class="service__item" data-service-key="07" href="#">
                            <div>
                                <p class="service__num">SERVICE 07</p>
                                <p class="service__name">ニコニコレンタカー</p>
                            </div>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-maintenance">
        <div class="inner">
            <div class="top-maintenance__head">
                <div class="top-maintenance__title-block">
                    <p class="top-maintenance__en">MAINTENANCE</p>
                    <h2>修理・整備</h2>
                </div>
                <div class="top-maintenance__lead">
                    <p>車の調子が気になるときは、いつでもご相談ください。</p>
                    <p>経験豊富な整備士が、部品交換からエンジン修理まで丁寧に点検・整備いたします。</p>
                </div>
            </div>
        </div>
        <p class="top-maintenance__bg-text" aria-hidden="true">MAINTENANCE</p>
        <div class="top-maintenance__cards">
            <div>
                <a class="top-maintenance__card top-maintenance__card--engine" href="<?= get_home_url(); ?>/maintenance#engine">
                    <span class="top-maintenance__card-title">エンジン</span>
                    <span class="link-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.5" y="2.5" width="43" height="43" rx="21.5" stroke="white" />
                            <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                        </svg>
                    </span>
                </a>
                <a class="top-maintenance__card top-maintenance__card--brake" href="<?= get_home_url(); ?>/maintenance#brake">
                    <span class="top-maintenance__card-title">ブレーキ</span>
                    <span class="link-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.5" y="2.5" width="43" height="43" rx="21.5" stroke="white" />
                            <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                        </svg>

                    </span>
                </a>
                <a class="top-maintenance__card top-maintenance__card--tire" href="<?= get_home_url(); ?>/maintenance#tire">
                    <span class="top-maintenance__card-title">タイヤ</span>
                    <span class="link-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.5" y="2.5" width="43" height="43" rx="21.5" stroke="white" />
                            <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                        </svg>

                    </span>
                </a>
                <a class="top-maintenance__card top-maintenance__card--other" href="<?= get_home_url(); ?>/maintenance#other">
                    <span class="top-maintenance__card-title">その他</span>
                    <span class="link-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2.5" y="2.5" width="43" height="43" rx="21.5" stroke="white" />
                            <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                        </svg>

                    </span>
                </a>
            </div>
        </div>
    </section>
    <section class="used-car-sales">
        <div class="inner">
            <div class="section__head">
                <div class="section__wrap">
                    <div class="section__heading">
                        <p class="section__en">USED CAR SALES</p>
                        <h2>中古車販売</h2>

                        <div class="section__link-wrap pc-show">
                            <a class="section__link" href="<?= get_home_url(); ?>/used-car-sales">
                                <span>詳細はこちら</span>
                                <span class="link-icon" aria-hidden="true">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                        <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                    </svg>

                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="section__content">
                        <p>お客様のライフスタイルに合った1台を、一緒にお探しします。仕入れから点検・納車まで自社でしっかり対応。<br>ご購入後も車検や整備で長く安心して乗っていただけます。</p>
                    </div>
                    <div class="section__link-wrap sp-show">
                        <a class="section__link" href="<?= get_home_url(); ?>/used-car-sales">
                            <span>詳細はこちら</span>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>

                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="used-car-sales__lists">
            <?php for ($i = 0; $i < count($json); $i++) : ?>
                <li>
                    <a href="https://www.carsensor.net<?php echo $json[$i]->url ?>" target="_blank">
                        <div>
                            <img src="<?php echo $json[$i]->thmbnail ?>">
                        </div>
                        <div>
                            <div>
                                <div>
                                    <p><?php echo $json[$i]->maker ?></p>
                                    <p><?php echo $json[$i]->title ?></p>
                                </div>
                            </div>
                            <div>
                                <p>総額</p>
                                <p><?php echo $json[$i]->totalPrice ?></p>
                            </div>
                            <div>
                                <p>本体</p>
                                <p><?php echo $json[$i]->basePrice ?></p>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endfor; ?>
        </div>
    </section>
    <section class="top-recruit-teaser">
        <div class="inner">
            <div class="top-recruit-teaser__head">
                <div class="section__heading top-recruit-teaser__title-block">
                    <p class="top-recruit-teaser__en">RECRUIT</p>
                    <h2>採用情報</h2>
                    <div class="section__link-wrap pc-show">
                        <a class="section__link" href="<?= get_home_url(); ?>/used-car-sales">
                            <span>詳細はこちら</span>
                            <span class="link-icon" aria-hidden="true">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                    <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                                </svg>

                            </span>
                        </a>
                    </div>
                </div>
                <div class="top-recruit-teaser__lead">
                    <p>当社では、お客様のカーライフを総合的にサポートするため、</p>
                    <p>カーラッピング・カーリース・車検・鈑金・リモートサービス・自動車保険など、</p>
                    <p>多様なサービスをワンストップでご提供しております。</p>
                </div>
                <div class="section__link-wrap sp-show">
                    <a class="section__link" href="<?= get_home_url(); ?>/used-car-sales">
                        <span>詳細はこちら</span>
                        <span class="link-icon" aria-hidden="true">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                            </svg>

                        </span>
                    </a>
                </div>
            </div>
        </div>
        <p class="top-recruit-teaser__bg-text" aria-hidden="true">RECRUIT</p>
    </section>

    <section class="top-recruit-visual" aria-hidden="true">
        <div class="top-recruit-visual__image">
            <img src="<?= get_template_directory_uri(); ?>/img/top/recruit.png" alt="">
        </div>
    </section>

    <section class="top-news">
        <div class="inner top-news__inner">
            <div class="top-news__head">
                <p class="top-news__en">INFORMATION</p>
                <h2>お知らせ</h2>
                <div class="section__link-wrap pc-show">
                    <a class="section__link" href="<?= get_home_url(); ?>/used-car-sales">
                        <span>詳細はこちら</span>
                        <span class="link-icon" aria-hidden="true">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                                <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                            </svg>

                        </span>
                    </a>
                </div>
            </div>
            <div class="top-news__list">
                <article class="top-news__item">
                    <div class="top-news__thumb">
                        <img src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
                    </div>
                    <div class="top-news__content">
                        <span class="top-news__category top-news__category--used">中古車情報</span>
                        <h3 class="top-news__title">【入荷】ワゴンR：袖ヶ浦000 あ0000　白</h3>
                        <p class="top-news__date">2026.01.01</p>
                    </div>
                </article>
                <article class="top-news__item">
                    <div class="top-news__thumb">
                        <img src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
                    </div>
                    <div class="top-news__content">
                        <span class="top-news__category top-news__category--info">お知らせ</span>
                        <h3 class="top-news__title">年末年始休業のお知らせ</h3>
                        <p class="top-news__date">2026.01.01</p>
                    </div>
                </article>
                <article class="top-news__item">
                    <div class="top-news__thumb">
                        <img src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
                    </div>
                    <div class="top-news__content">
                        <span class="top-news__category top-news__category--campaign">キャンペーン</span>
                        <h3 class="top-news__title">車検の「早割サービス」実施中！</h3>
                        <p class="top-news__date">2026.01.01</p>
                    </div>
                </article>
            </div>
            <div class="section__link-wrap sp-show">
                <a class="section__link" href="<?= get_home_url(); ?>/used-car-sales">
                    <span>詳細はこちら</span>
                    <span class="link-icon" aria-hidden="true">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="3" width="42" height="42" rx="21" fill="#6C5E4F" />
                            <path d="M32.5303 24.5303C32.8232 24.2374 32.8232 23.7626 32.5303 23.4697L27.7574 18.6967C27.4645 18.4038 26.9896 18.4038 26.6967 18.6967C26.4038 18.9896 26.4038 19.4645 26.6967 19.7574L30.9393 24L26.6967 28.2426C26.4038 28.5355 26.4038 29.0104 26.6967 29.3033C26.9896 29.5962 27.4645 29.5962 27.7574 29.3033L32.5303 24.5303ZM16 24V24.75H32V24V23.25H16V24Z" fill="white" />
                        </svg>

                    </span>
                </a>
            </div>
        </div>
        <p class="top-news__bg-text" aria-hidden="true">NEW CAR LIFE</p>
        <div class="round">
            <img src="<?= get_template_directory_uri(); ?>/img/top/round-info.svg" alt="">
        </div>
    </section>
    <section class="top-social-showcase">
        <div class="inner">
            <div class="top-social-showcase__grid">
                <article class="top-social-showcase__column">
                    <h2 class="top-social-showcase__title">Instagram</h2>
                    <div class="top-social-showcase__frame top-social-showcase__frame--instagram" aria-hidden="true">
                        <div class="top-social-showcase__screen"></div>
                    </div>
                </article>
                <article class="top-social-showcase__column">
                    <h2 class="top-social-showcase__title">TikTok</h2>
                    <div class="top-social-showcase__frame top-social-showcase__frame--tiktok" aria-hidden="true">
                        <div class="top-social-showcase__screen"></div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>