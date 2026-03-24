<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle = 'お知らせ';
$pageDescription = '助ズ（joz）からのお知らせ・プレスリリース一覧。サービスの最新情報、事業に関するニュースをお届けします。';
$newsData = getNewsData();

require_once __DIR__ . '/includes/header.php';
?>

    <div class="page-header">
        <div class="container">
            <h1>お知らせ</h1>
            <p class="page-header-en">News</p>
        </div>
        <div class="page-header-deco"></div>
    </div>

    <section class="section">
        <div class="container">
            <div class="news-list">
                <?php foreach ($newsData as $news): ?>
                <div class="news-item">
                    <span class="news-date"><?= h(formatDate($news['date'])) ?></span>
                    <span class="news-category <?= $news['category'] === 'プレスリリース' ? 'press' : '' ?>"><?= h($news['category']) ?></span>
                    <span class="news-title"><?= h($news['title']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
