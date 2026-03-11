    <footer class="site-footer">
        <section class="footer-cta">
            <div class="inner footer-cta__inner">
                <div class="footer-cta__heading">
                    <h2 class="footer-cta__title">CONTACT</h2>
                    <p class="footer-cta__subtitle">お問い合わせ</p>
                </div>
                <div class="footer-cta__body">
                    <div class="footer-cta__text">
                        <p>お車に関することなら、どんなことでもお気軽にご相談ください！</p>
                        <p>英語での対応も可能です。</p>
                        <p>LINE・お電話・お問い合わせフォームより受け付けております。</p>
                    </div>
                    <div class="footer-cta__actions">
                        <a class="footer-cta__button footer-cta__button--web" href="<?= get_home_url(); ?>/contact">
                            <span>WEBからお問い合わせ</span>
                            <span class="footer-cta__button-icon" aria-hidden="true"></span>
                        </a>
                        <a class="footer-cta__button footer-cta__button--line" href="#" aria-label="LINE友だち追加をする">
                            <span>LINE友だち追加をする</span>
                            <span class="footer-cta__button-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer-nav">
            <div class="inner footer-nav__inner">
                <div class="footer-nav__brand">
                    <a class="footer-nav__logo-link" href="<?= get_home_url(); ?>/">
                        <img class="footer-nav__logo" src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="オートサービス向後">
                    </a>
                    <div class="footer-nav__company">
                        <p>株式会社 オートサービス向後</p>
                        <p>〒297-0016 千葉県茂原市木崎620-2</p>
                    </div>
                    <div class="footer-nav__meta">
                        <p>TEL　0475-22-5581</p>
                        <p>営業時間：9:00〜19:00（年中無休）</p>
                    </div>
                </div>

                <div class="footer-nav__links-wrap">
                    <div class="footer-nav__links-grid">
                        <ul class="footer-nav__links">
                            <li><a href="<?= get_home_url(); ?>/">トップ</a></li>
                            <li><a href="<?= get_home_url(); ?>/maintenance">修理・整備 <span>+</span></a></li>
                            <li><a href="<?= get_home_url(); ?>/news">新着情報</a></li>
                            <li><a href="<?= get_home_url(); ?>/contact">お問い合わせ</a></li>
                        </ul>
                        <ul class="footer-nav__links">
                            <li><a href="<?= get_home_url(); ?>/service">各種サービス <span>+</span></a></li>
                            <li><a href="<?= get_home_url(); ?>/car-sales">車両販売 <span>+</span></a></li>
                            <li><a href="<?= get_home_url(); ?>/recruit">採用情報</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav__bottom">
                        <a class="footer-nav__policy" href="#">プライバシーポリシー</a>
                        <p class="footer-nav__copyright">Copyright © Auto service KOHGO</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_footer(); ?>
    </body>
    <script src="<?php echo get_template_directory_uri() ?>/js/bundle.js"></script>

    </html>