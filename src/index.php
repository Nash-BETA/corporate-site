<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageDescription = 'システム開発・ITコンサルティングの助ズ（joz）。受託開発、コーポレートサイト作成など、お客様のビジネスをテクノロジーで支援します。';
$newsData = getNewsData();
$latestNews = array_slice($newsData, 0, 3);

require_once __DIR__ . '/includes/header.php';
?>

    <section class="hero">
        <div class="container">
            <h1>一人でも多くの人に、<br><span class="hero-accent">テクノロジーで助太刀を。</span></h1>
            <p>助ズ（joz）― "助太刀"の複数形。<br>一人でも多くの人に、技術の力で助太刀したい。その想いが、私たちの原点です。</p>
            <a href="/contact.php" class="btn">お問い合わせ</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>事業内容</h2>
                <p class="section-title-en">Service</p>
            </div>
            <div class="service-grid">
                <div class="service-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <span class="icon">&#128187;</span>
                    <h3>システム開発</h3>
                    <p>Webアプリケーション・業務システムの設計・開発を行います。</p>
                </div>
                <div class="service-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <span class="icon">&#128221;</span>
                    <h3>WP作成・運用</h3>
                    <p>WordPressを活用したWebサイトの構築・運用を行います。</p>
                </div>
                <div class="service-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <span class="icon">&#127760;</span>
                    <h3>コーポレートサイト作成</h3>
                    <p>企業の顔となるコーポレートサイトを企画・デザイン・制作いたします。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>お知らせ</h2>
                <p class="section-title-en">News</p>
            </div>
            <div class="news-list animate-on-scroll">
                <?php foreach ($latestNews as $news): ?>
                <div class="news-item">
                    <span class="news-date"><?= h(formatDate($news['date'])) ?></span>
                    <span class="news-category <?= $news['category'] === 'プレスリリース' ? 'press' : '' ?>"><?= h($news['category']) ?></span>
                    <span class="news-title"><?= h($news['title']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="animate-on-scroll" style="text-align: center; margin-top: 36px;">
                <a href="/news.php" class="btn btn-outline">一覧を見る</a>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>あなたにも、助太刀を</h2>
            <p>システム開発・ITに関するお悩み、まずはお気軽にご相談ください。</p>
            <a href="/contact.php" class="btn">お問い合わせはこちら</a>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
