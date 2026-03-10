<!DOCTYPE html>
<html lang="ja">

<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="遞守炊螢ｫ豕穂ｺｺ繝峨ャ繝医・繝ｭ縺ｯ縲∝ｷ晏ｴ主ｸゅｒ諡轤ｹ縺ｫ荳ｭ蟆丈ｼ∵･ｭ蜷代￠縺ｮ遞主漁縲∽ｼ夊ｨ医∫ｵ悟霧繧ｳ繝ｳ繧ｵ繝ｫ繝・ぅ繝ｳ繧ｰ繧呈署萓帙ゆｺ区･ｭ謇ｿ邯吶｀&A縲∫ｨ主漁隱ｿ譟ｻ蟇ｾ蠢懊！PO謾ｯ謠ｴ縺ｾ縺ｧ縲∝ｰる摩逧・↑繧ｵ繝昴・繝医ｒ螻暮幕縺励∽ｼ∵･ｭ縺ｮ謌宣聞繧呈髪謠ｴ縺励∪縺吶りｪ榊ｮ壽髪謠ｴ讖滄未縺ｨ縺励※菫｡鬆ｼ縺ｧ縺阪ｋ繧｢繝峨ヰ繧､繧ｹ繧呈署萓帙・>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?php echo esc_url((is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
    <meta name="twitter:title" content="<?php echo wp_get_document_title(); ?>" />
    <meta name="twitter:description" content="遞守炊螢ｫ豕穂ｺｺ繝峨ャ繝医・繝ｭ縺ｯ縲∝ｷ晏ｴ主ｸゅｒ諡轤ｹ縺ｫ荳ｭ蟆丈ｼ∵･ｭ蜷代￠縺ｮ遞主漁縲∽ｼ夊ｨ医∫ｵ悟霧繧ｳ繝ｳ繧ｵ繝ｫ繝・ぅ繝ｳ繧ｰ繧呈署萓帙ゆｺ区･ｭ謇ｿ邯吶｀&A縲∫ｨ主漁隱ｿ譟ｻ蟇ｾ蠢懊！PO謾ｯ謠ｴ縺ｾ縺ｧ縲∝ｰる摩逧・↑繧ｵ繝昴・繝医ｒ螻暮幕縺励∽ｼ∵･ｭ縺ｮ謌宣聞繧呈髪謠ｴ縺励∪縺吶りｪ榊ｮ壽髪謠ｴ讖滄未縺ｨ縺励※菫｡鬆ｼ縺ｧ縺阪ｋ繧｢繝峨ヰ繧､繧ｹ繧呈署萓帙・ />
    <meta name="thumbnail" content="<?= get_template_directory_uri(); ?>/img/global/thumbnail.png" />
    <meta property="og:type" content="<?= og_type(); ?>" />
    <meta property="og:url" content="<?php echo esc_url((is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
    <meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
    <meta property="og:description" content="遞守炊螢ｫ豕穂ｺｺ繝峨ャ繝医・繝ｭ縺ｯ縲∝ｷ晏ｴ主ｸゅｒ諡轤ｹ縺ｫ荳ｭ蟆丈ｼ∵･ｭ蜷代￠縺ｮ遞主漁縲∽ｼ夊ｨ医∫ｵ悟霧繧ｳ繝ｳ繧ｵ繝ｫ繝・ぅ繝ｳ繧ｰ繧呈署萓帙ゆｺ区･ｭ謇ｿ邯吶｀&A縲∫ｨ主漁隱ｿ譟ｻ蟇ｾ蠢懊！PO謾ｯ謠ｴ縺ｾ縺ｧ縲∝ｰる摩逧・↑繧ｵ繝昴・繝医ｒ螻暮幕縺励∽ｼ∵･ｭ縺ｮ謌宣聞繧呈髪謠ｴ縺励∪縺吶りｪ榊ｮ壽髪謠ｴ讖滄未縺ｨ縺励※菫｡鬆ｼ縺ｧ縺阪ｋ繧｢繝峨ヰ繧､繧ｹ繧呈署萓帙・ />
    <meta property="og:site_name" content="遞守炊螢ｫ豕穂ｺｺ繝峨ャ繝医・繝ｭ | 遞主漁隱ｿ譟ｻ蟇ｾ蠢懊・莠区･ｭ謇ｿ邯吶・M&A繧ｳ繝ｳ繧ｵ繝ｫ繝・ぅ繝ｳ繧ｰ" />
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/img/global/OGP.png" />
    <meta property="og:image:secure_url" content="<?= get_template_directory_uri(); ?>/img/global/OGP.png" /> -->
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
    <header>
        <nav class="navigation__pc">
            <div class="site-header__logo-area">
                <a class="site-header__logo-link" href="<?= get_home_url(); ?>/">
                    <img class="site-header__logo" src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
                </a>
            </div>
            <div class="site-header__nav-wrap">
                <ul class="site-header__nav-list">
                    <li><a href="<?= get_home_url(); ?>/" class="site-header__nav-link">トップ <span>+</span></a></li>
                    <li><a href="<?= get_home_url(); ?>/service" class="site-header__nav-link">各種サービス <span>+</span></a></li>
                    <li><a href="<?= get_home_url(); ?>/maintenance" class="site-header__nav-link">修理・整備 <span>+</span></a></li>
                    <li><a href="<?= get_home_url(); ?>/car-sales" class="site-header__nav-link">車両販売 <span>+</span></a></li>
                    <li><a href="<?= get_home_url(); ?>/about" class="site-header__nav-link">会社概要 </a></li>
                    <li><a href="<?= get_home_url(); ?>/news" class="site-header__nav-link">新着情報 </a></li>
                    <li><a href="<?= get_home_url(); ?>/recruit" class="site-header__nav-link">採用情報 </a></li>
                </ul>
                <a href="<?= get_home_url(); ?>/contact" class="site-header__contact">お問い合わせ</a>
            </div>
        </nav>
        <button id="hamburger">MENU</button>
    </header>
    <nav class="hamburger__menu">
        <ul>
            <li><a href="<?= get_home_url(); ?>/">トップ</a></li>
            <li><a href="<?= get_home_url(); ?>/service">各種サービス</a></li>
            <li><a href="<?= get_home_url(); ?>/maintenance">修理・整備</a></li>
            <li><a href="<?= get_home_url(); ?>/car-sales">車両販売</a></li>
            <li><a href="<?= get_home_url(); ?>/about">会社概要</a></li>
            <li><a href="<?= get_home_url(); ?>/news">新着情報</a></li>
            <li><a href="<?= get_home_url(); ?>/recruit">採用情報</a></li>
            <li><a href="<?= get_home_url(); ?>/contact">お問い合わせ</a></li>
        </ul>
    </nav>