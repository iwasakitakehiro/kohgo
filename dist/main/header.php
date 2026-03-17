<!DOCTYPE html>
<html lang="ja">

<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <link rel="canonical" href="<?php echo esc_url((is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
</head>

<body>
    <aside>
        <ul class="sns">
            <li><a href="#" aria-label="LINE"><img src="<?= get_template_directory_uri() ?>/img/global/icon-line.svg" alt=""></a></li>
            <li><a href="#" aria-label="Instagram"><img src="<?= get_template_directory_uri() ?>/img/global/icon-instagram.svg" alt=""></a></li>
            <li><a href="#" aria-label="TikTok"><img src="<?= get_template_directory_uri() ?>/img/global/icon-tiktok.svg" alt=""></a></li>
        </ul>
        <div class="scroll">
            <svg width="9" height="132" viewBox="0 0 9 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.122645 4.02C0.122645 2.724 0.554645 1.524 1.46665 0.516L2.52265 1.404C1.81465 2.22 1.43065 3.012 1.43065 4.056C1.43065 4.968 1.86265 5.544 2.48665 5.544H2.51065C3.09865 5.544 3.44665 5.208 3.79465 3.648C4.21465 1.86 4.76665 0.852 6.30265 0.852H6.32665C7.76665 0.852 8.76265 2.052 8.76265 3.72C8.76265 4.956 8.39065 5.904 7.70665 6.768L6.59065 5.976C7.15465 5.208 7.45465 4.464 7.45465 3.696C7.45465 2.832 7.02265 2.328 6.45865 2.328H6.43465C5.78665 2.328 5.49865 2.712 5.11465 4.332C4.65865 6.096 4.05865 7.02 2.65465 7.02H2.63065C1.04665 7.02 0.122645 5.784 0.122645 4.02ZM0.0986453 12.6558C0.0986453 10.2078 2.00665 8.38378 4.41865 8.38378H4.44265C6.83065 8.38378 8.78665 10.1718 8.78665 12.7038C8.78665 14.2638 8.24665 15.1998 7.47865 16.0038L6.38665 15.0558C7.01065 14.3718 7.41865 13.6638 7.41865 12.6918C7.41865 11.1078 6.11065 9.93178 4.46665 9.93178H4.44265C2.79865 9.93178 1.46665 11.0958 1.46665 12.7038C1.46665 13.7238 1.87465 14.3958 2.54665 15.1158L1.58665 16.0638C0.662645 15.2118 0.0986453 14.2158 0.0986453 12.6558ZM0.242645 17.6269H8.64265V19.1029H5.15065V23.1109H8.64265V24.5869H0.242645V23.1109H3.78265L3.78265 19.1029H0.242645V17.6269ZM0.242645 26.7441H8.64265V30.4881C8.64265 31.5441 8.33065 32.3721 7.80265 32.9121C7.33465 33.3561 6.72265 33.6081 5.99065 33.6081H5.96665C4.58665 33.6081 3.75865 32.7801 3.42265 31.6161L0.242645 33.8841V32.1321L3.17065 30.0681V28.2201H0.242645V26.7441ZM4.47865 28.2201V30.3801C4.47865 31.4361 5.01865 32.1081 5.88265 32.1081H5.90665C6.81865 32.1081 7.29865 31.4721 7.29865 30.3681V28.2201H4.47865ZM0.0986453 39.4239C0.0986453 36.8439 2.05465 35.0439 4.41865 35.0439H4.44265C6.79465 35.0439 8.78665 36.8679 8.78665 39.4479C8.78665 42.0279 6.83065 43.8279 4.46665 43.8279H4.44265C2.09065 43.8279 0.0986453 42.0039 0.0986453 39.4239ZM1.46665 39.4479C1.46665 41.1159 2.78665 42.2799 4.41865 42.2799H4.44265C6.07465 42.2799 7.41865 41.1039 7.41865 39.4239C7.41865 37.7559 6.09865 36.5919 4.46665 36.5919H4.44265C2.81065 36.5919 1.46665 37.7679 1.46665 39.4479ZM0.242645 45.6113H8.64265V47.0873H1.58665L1.58665 51.5033H0.242645L0.242645 45.6113ZM0.242645 53.0292H8.64265V54.5052H1.58665V58.9212H0.242645V53.0292Z" fill="#B59F86" />
                <path d="M4.24265 70L4.24264 125" stroke="#B59F86" />
                <rect y="127.243" width="6" height="6" transform="rotate(-45 0 127.243)" fill="#FFA64D" />
            </svg>

        </div>
    </aside>
    <header class="site-header" data-header-mega>
        <div class="site-header__logo-area tb-show">
            <a class="site-header__logo-link" href="<?= get_home_url(); ?>/">
                <img class="site-header__logo" src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
            </a>
        </div>
        <nav class="navigation__pc">
            <div class="site-header__logo-area">
                <a class="site-header__logo-link" href="<?= get_home_url(); ?>/">
                    <img class="site-header__logo" src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
                </a>
            </div>
            <div class="site-header__nav-wrap">
                <ul class="site-header__nav-list">
                    <li><a href="<?= get_home_url(); ?>/" class="site-header__nav-link">トップ <span>+</span></a></li>
                    <li>
                        <button type="button" class="site-header__nav-link site-header__nav-link--toggle" data-mega-trigger="service" aria-expanded="false" aria-controls="header-mega-service">各種サービス <span>+</span></button>
                    </li>
                    <li>
                        <button type="button" class="site-header__nav-link site-header__nav-link--toggle" data-mega-trigger="maintenance" aria-expanded="false" aria-controls="header-mega-maintenance">修理・整備 <span>+</span></button>
                    </li>
                    <li>
                        <button type="button" class="site-header__nav-link site-header__nav-link--toggle" data-mega-trigger="car-sales" aria-expanded="false" aria-controls="header-mega-car-sales">車両販売 <span>+</span></button>
                    </li>
                    <li><a href="<?= get_home_url(); ?>/about" class="site-header__nav-link">会社概要 </a></li>
                    <li><a href="<?= get_home_url(); ?>/news" class="site-header__nav-link">新着情報 </a></li>
                    <li><a href="<?= get_home_url(); ?>/recruit" class="site-header__nav-link">採用情報 </a></li>
                </ul>
                <a href="<?= get_home_url(); ?>/contact" class="site-header__contact">お問い合わせ</a>
            </div>
        </nav>

        <div class="header-mega-menu" data-mega-panel="service" id="header-mega-service" hidden>
            <div class="header-mega-menu__inner inner">
                <div class="header-mega-menu__heading">
                    <p class="header-mega-menu__eyebrow">SERVICE</p>
                    <h2 class="header-mega-menu__title"><a href="<?= get_home_url(); ?>/service">各種サービス</a></h2>
                </div>
                <div class="header-mega-menu__grid header-mega-menu__grid--three">
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/service">
                        <span class="header-mega-card__image header-mega-card__image--wrapping" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/service01.png" alt="">
                        </span>
                        <span class="header-mega-card__label">カーラッピング</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance">
                        <span class="header-mega-card__image header-mega-card__image--car-inspection" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/service02.png" alt="">
                        </span>
                        <span class="header-mega-card__label">車検</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/service05">
                        <span class="header-mega-card__image header-mega-card__image--paint" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/service03.png" alt="">
                        </span>
                        <span class="header-mega-card__label">鈑金</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/service04">
                        <span class="header-mega-card__image header-mega-card__image--road" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/service04.png" alt="">
                        </span>
                        <span class="header-mega-card__label">リモートサービス</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/service05">
                        <span class="header-mega-card__image header-mega-card__image--insurance" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/service05.png" alt="">
                        </span>
                        <span class="header-mega-card__label">自動車保険</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/service06">
                        <span class="header-mega-card__image header-mega-card__image--rental" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/service06.png" alt="">
                        </span>
                        <span class="header-mega-card__label">ニコニコレンタカー</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="header-mega-menu" data-mega-panel="maintenance" id="header-mega-maintenance" hidden>
            <div class="header-mega-menu__inner inner">
                <div class="header-mega-menu__heading">
                    <p class="header-mega-menu__eyebrow">REPAIR + MAINTENANCE</p>
                    <h2 class="header-mega-menu__title"><a href="<?= get_home_url(); ?>/maintenance">修理・整備</a></h2>
                </div>
                <div class="header-mega-menu__grid header-mega-menu__grid--four">
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance#engine">
                        <span class="header-mega-card__image header-mega-card__image--engine" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/maintenance01.png" alt="">
                        </span>
                        <span class="header-mega-card__label">エンジン</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance#brake">
                        <span class="header-mega-card__image header-mega-card__image--brake" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/maintenance02.png" alt="">
                        </span>
                        <span class="header-mega-card__label">ブレーキ</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance#tire">
                        <span class="header-mega-card__image header-mega-card__image--tire" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/maintenance03.png" alt="">
                        </span>
                        <span class="header-mega-card__label">タイヤ</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance#other">
                        <span class="header-mega-card__image header-mega-card__image--other" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/maintenance04.png" alt="">
                        </span>
                        <span class="header-mega-card__label">その他</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="header-mega-menu" data-mega-panel="car-sales" id="header-mega-car-sales" hidden>
            <div class="header-mega-menu__inner inner">
                <div class="header-mega-menu__heading">
                    <p class="header-mega-menu__eyebrow">CAR SALES</p>
                    <h2 class="header-mega-menu__title"><a href="<?= get_home_url(); ?>/car-sales">車両販売</a></h2>
                </div>
                <div class="header-mega-menu__grid header-mega-menu__grid--two">
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/new-car-sales">
                        <span class="header-mega-card__image header-mega-card__image--new-car" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/car-sales01.png" alt="">
                        </span>
                        <span class="header-mega-card__label">新車販売</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/used-car-sales">
                        <span class="header-mega-card__image header-mega-card__image--used-car" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/car-sales02.png" alt="">
                        </span>
                        <span class="header-mega-card__label">中古車販売</span>
                    </a>
                </div>
            </div>
        </div>

        <button id="hamburger">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="60" fill="url(#paint0_linear_236_460)" />
                <line x1="15" y1="25" x2="45" y2="25" stroke="white" stroke-width="2" stroke-linecap="round" />
                <line x1="15" y1="33" x2="45" y2="33" stroke="white" stroke-width="2" stroke-linecap="round" />
                <defs>
                    <linearGradient id="paint0_linear_236_460" x1="0" y1="30" x2="60" y2="30" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFA64D" />
                        <stop offset="1" stop-color="#E17B4E" />
                    </linearGradient>
                </defs>
            </svg>

        </button>
    </header>
    <nav class="hamburger__menu">
        <div class="hamburger__menu-inner">
            <ul class="hamburger__menu-list">
                <li><a href="<?= get_home_url(); ?>/">トップ</a></li>
                <li class="hamburger__menu-item has-child">
                    <button type="button" class="hamburger__menu-toggle" data-hamburger-child="service" aria-expanded="false">各種サービス <span>+</span></button>
                    <ul class="hamburger__submenu" data-hamburger-panel="service" hidden>
                        <li><a href="<?= get_home_url(); ?>/service">カーラッピング</a></li>
                        <li><a href="<?= get_home_url(); ?>/maintenance">車検</a></li>
                        <li><a href="<?= get_home_url(); ?>/service05">鈑金</a></li>
                        <li><a href="<?= get_home_url(); ?>/service04">リモートサービス</a></li>
                        <li><a href="<?= get_home_url(); ?>/service05">自動車保険</a></li>
                        <li><a href="<?= get_home_url(); ?>/service06">ニコニコレンタカー</a></li>
                    </ul>
                </li>
                <li class="hamburger__menu-item has-child">
                    <button type="button" class="hamburger__menu-toggle" data-hamburger-child="maintenance" aria-expanded="false">修理・整備 <span>+</span></button>
                    <ul class="hamburger__submenu" data-hamburger-panel="maintenance" hidden>
                        <li><a href="<?= get_home_url(); ?>/maintenance">エンジン</a></li>
                        <li><a href="<?= get_home_url(); ?>/maintenance">ブレーキ</a></li>
                        <li><a href="<?= get_home_url(); ?>/maintenance">タイヤ</a></li>
                        <li><a href="<?= get_home_url(); ?>/maintenance">その他</a></li>
                    </ul>
                </li>
                <li class="hamburger__menu-item has-child">
                    <button type="button" class="hamburger__menu-toggle" data-hamburger-child="car-sales" aria-expanded="false">車両販売 <span>+</span></button>
                    <ul class="hamburger__submenu" data-hamburger-panel="car-sales" hidden>
                        <li><a href="<?= get_home_url(); ?>/new-car-sales">新車販売</a></li>
                        <li><a href="<?= get_home_url(); ?>/used-car-sales">中古車販売</a></li>
                    </ul>
                </li>
                <li><a href="<?= get_home_url(); ?>/news">新着情報</a></li>
                <li><a href="<?= get_home_url(); ?>/recruit">採用情報</a></li>
            </ul>
            <a class="hamburger__contact-button" href="<?= get_home_url(); ?>/contact">お問い合わせ</a>
        </div>
    </nav>