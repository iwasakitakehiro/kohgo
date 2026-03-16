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
            <li><a href="#" aria-label="LINE">LINE</a></li>
            <li><a href="#" aria-label="Instagram">IG</a></li>
            <li><a href="#" aria-label="TikTok">TT</a></li>
        </ul>
        <div class="scroll">
            <p>SCHROLL</p>
            <span class="scroll-line"></span>
            <span class="scroll-dot"></span>
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
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance">
                        <span class="header-mega-card__image header-mega-card__image--engine" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/maintenance01.png" alt="">
                        </span>
                        <span class="header-mega-card__label">エンジン</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance">
                        <span class="header-mega-card__image header-mega-card__image--brake" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/maintenance02.png" alt="">
                        </span>
                        <span class="header-mega-card__label">ブレーキ</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance">
                        <span class="header-mega-card__image header-mega-card__image--tire" aria-hidden="true">
                            <img src="<?= get_template_directory_uri(); ?>/img/global/maintenance03.png" alt="">
                        </span>
                        <span class="header-mega-card__label">タイヤ</span>
                    </a>
                    <a class="header-mega-card" href="<?= get_home_url(); ?>/maintenance">
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

