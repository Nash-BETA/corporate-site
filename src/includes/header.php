<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? h($pageTitle) . ' | ' . h(SITE_NAME) : h(SITE_NAME) ?></title>
    <meta name="description" content="<?= isset($pageDescription) ? h($pageDescription) : h(SITE_DESCRIPTION) ?>">
    <meta property="og:title" content="<?= isset($pageTitle) ? h($pageTitle) . ' | ' . h(SITE_NAME) : h(SITE_NAME) ?>">
    <meta property="og:description" content="<?= isset($pageDescription) ? h($pageDescription) : h(SITE_DESCRIPTION) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= h(SITE_URL) ?>">
    <link rel="icon" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a href="/" class="site-logo">
                <span class="logo-main"><?= h(SITE_NAME) ?></span>
                <span class="logo-sub"><?= h(SITE_NAME_EN) ?></span>
            </a>
            <nav class="site-nav" id="site-nav">
                <ul class="nav-list">
                    <li><a href="/" class="<?= isCurrentPage('index.php') ? 'active' : '' ?>">TOP</a></li>
                    <li><a href="/about.php" class="<?= isCurrentPage('about.php') ? 'active' : '' ?>">会社概要</a></li>
                    <li><a href="/service.php" class="<?= isCurrentPage('service.php') ? 'active' : '' ?>">事業内容</a></li>
                    <li><a href="/news.php" class="<?= isCurrentPage('news.php') ? 'active' : '' ?>">お知らせ</a></li>
                    <li><a href="/contact.php" class="nav-contact <?= isCurrentPage('contact.php') ? 'active' : '' ?>">お問い合わせ</a></li>
                </ul>
            </nav>
            <button class="hamburger" id="hamburger" aria-label="メニューを開く" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <main>
