    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-info">
                    <div class="footer-logo">
                        <span class="logo-main"><?= h(SITE_NAME) ?></span>
                        <span class="logo-sub"><?= h(SITE_NAME_EN) ?></span>
                    </div>
                    <p class="footer-address"><?= h(COMPANY_ADDRESS) ?></p>
                    <p class="footer-email"><a href="mailto:<?= h(COMPANY_EMAIL) ?>"><?= h(COMPANY_EMAIL) ?></a></p>
                </div>
                <nav class="footer-nav">
                    <ul>
                        <li><a href="/">TOP</a></li>
                        <li><a href="/about.php">会社概要</a></li>
                        <li><a href="/service.php">事業内容</a></li>
                        <li><a href="/news.php">お知らせ</a></li>
                        <li><a href="/contact.php">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
            <p class="footer-copyright">&copy; <?= date('Y') ?> <?= h(COMPANY_NAME) ?>（<?= h(COMPANY_NAME_EN) ?>） All Rights Reserved.</p>
        </div>
    </footer>
    <script src="/assets/js/main.js"></script>
</body>
</html>
