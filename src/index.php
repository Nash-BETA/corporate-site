<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageDescription = '助ズ（joz）は「テクノロジーで助太刀を」をモットーに、Webアプリ・業務システム開発、ITコンサルティング、コーポレートサイト制作を手がけるシステム開発会社です。お気軽にご相談ください。';
$newsData = getNewsData();
$latestNews = array_slice($newsData, 0, 3);

require_once __DIR__ . '/includes/header.php';
?>

    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="badge-dot"></span>
                        システム開発・ITコンサルティング
                    </div>
                    <h1>一人でも多くの人に、<br><span class="hero-accent">テクノロジーで助太刀を。</span></h1>
                    <p>助ズ（joz）― "助太刀"の複数形。<br>一人でも多くの人に、技術の力で助太刀したい。その想いが、私たちの原点です。</p>
                    <div class="hero-actions">
                        <a href="/contact.php" class="btn">
                            お問い合わせ
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        </a>
                        <a href="/service.php" class="btn btn-ghost">事業内容を見る</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-deco hero-deco-1"></div>
                    <div class="hero-deco hero-deco-2"></div>
                    <svg viewBox="0 0 480 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="100" y="60" width="280" height="200" rx="16" fill="#1E293B" stroke="#334155" stroke-width="2"/>
                        <rect x="112" y="72" width="256" height="176" rx="8" fill="#0F172A"/>
                        <rect x="132" y="96" width="80" height="8" rx="4" fill="#E67E49" opacity="0.8"/>
                        <rect x="132" y="116" width="120" height="8" rx="4" fill="#3B82F6" opacity="0.5"/>
                        <rect x="152" y="136" width="100" height="8" rx="4" fill="#10B981" opacity="0.5"/>
                        <rect x="152" y="156" width="140" height="8" rx="4" fill="#94A3B8" opacity="0.3"/>
                        <rect x="132" y="176" width="60" height="8" rx="4" fill="#E67E49" opacity="0.5"/>
                        <rect x="200" y="176" width="90" height="8" rx="4" fill="#3B82F6" opacity="0.4"/>
                        <rect x="152" y="196" width="110" height="8" rx="4" fill="#94A3B8" opacity="0.3"/>
                        <rect x="132" y="216" width="40" height="8" rx="4" fill="#E67E49" opacity="0.6"/>
                        <rect x="210" y="260" width="60" height="12" rx="2" fill="#334155"/>
                        <rect x="190" y="272" width="100" height="8" rx="4" fill="#475569"/>
                        <g opacity="0.9" style="animation: floatSlow 5s ease-in-out infinite">
                            <rect x="30" y="120" width="56" height="56" rx="14" fill="#FFF4EE" stroke="#E67E49" stroke-width="1.5"/>
                            <path d="M46 148l8-12h12l8 12-8 12H54l-8-12z" fill="#E67E49" opacity="0.6"/>
                        </g>
                        <g opacity="0.9" style="animation: float 7s ease-in-out infinite">
                            <rect x="400" y="80" width="52" height="52" rx="14" fill="#DBEAFE" stroke="#3B82F6" stroke-width="1.5"/>
                            <circle cx="426" cy="106" r="12" fill="#3B82F6" opacity="0.4"/>
                            <path d="M420 106h12M426 100v12" stroke="#3B82F6" stroke-width="2" stroke-linecap="round"/>
                        </g>
                        <g opacity="0.9" style="animation: floatSlow 6s ease-in-out 1s infinite">
                            <rect x="380" y="220" width="48" height="48" rx="12" fill="#D1FAE5" stroke="#10B981" stroke-width="1.5"/>
                            <path d="M396 244l8-8 8 8" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M404 236v16" stroke="#10B981" stroke-width="2" stroke-linecap="round"/>
                        </g>
                        <circle cx="82" cy="180" r="4" fill="#E67E49" opacity="0.4"/>
                        <circle cx="400" cy="170" r="3" fill="#3B82F6" opacity="0.3"/>
                        <circle cx="340" cy="320" r="5" fill="#10B981" opacity="0.3"/>
                        <line x1="86" y1="165" x2="100" y2="150" stroke="#E67E49" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                        <line x1="397" y1="168" x2="380" y2="150" stroke="#3B82F6" stroke-width="1" stroke-dasharray="3 3" opacity="0.3"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>
                    <span class="section-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </span>
                    事業内容
                </h2>
                <p class="section-title-en">Service</p>
            </div>
            <div class="service-grid">
                <div class="service-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/></svg>
                    </div>
                    <h3>システム開発</h3>
                    <p>Webアプリケーション・業務システムの設計・開発を行います。</p>
                    <span class="card-arrow">詳しく見る <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></span>
                </div>
                <div class="service-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                    </div>
                    <h3>WP作成・運用</h3>
                    <p>WordPressを活用したWebサイトの構築・運用を行います。</p>
                    <span class="card-arrow">詳しく見る <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></span>
                </div>
                <div class="service-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 0h.008v.008h-.008V7.5z"/></svg>
                    </div>
                    <h3>コーポレートサイト作成</h3>
                    <p>企業の顔となるコーポレートサイトを企画・デザイン・制作いたします。</p>
                    <span class="card-arrow">詳しく見る <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></span>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="section-title animate-on-scroll">
                <h2>
                    <span class="section-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/></svg>
                    </span>
                    お知らせ
                </h2>
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
                <a href="/news.php" class="btn btn-outline">一覧を見る <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></a>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-inner animate-on-scroll">
                <h2>あなたにも、助太刀を</h2>
                <p>システム開発・ITに関するお悩み、まずはお気軽にご相談ください。</p>
                <a href="/contact.php" class="btn">お問い合わせはこちら <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
