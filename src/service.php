<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle = '事業内容';
$pageDescription = '助ズ（joz）の事業内容。システム開発、受託開発、ITコンサルティング、コーポレートサイト作成、WP作成・運用を提供しています。';

require_once __DIR__ . '/includes/header.php';
?>

    <div class="page-header">
        <div class="container">
            <h1>事業内容</h1>
            <p class="page-header-en">Service</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="service-detail animate-on-scroll" style="transition-delay: 0.1s;">
                <span class="icon">&#128187;</span>
                <div>
                    <h3>システム開発</h3>
                    <p>
                        Webアプリケーションや業務システムの企画・設計・開発・保守まで一貫して対応いたします。
                        お客様のビジネス要件を丁寧にヒアリングし、最適な技術選定と設計で、
                        使いやすく拡張性の高いシステムを構築します。
                    </p>
                </div>
            </div>
            <div class="service-detail animate-on-scroll" style="transition-delay: 0.2s;">
                <span class="icon">&#128640;</span>
                <div>
                    <h3>受託開発</h3>
                    <p>
                        お客様のご要望に合わせた柔軟なシステム開発を承ります。
                        新規サービスの立ち上げから既存システムの改修まで、
                        プロジェクトの規模や特性に応じた最適な開発体制でご支援します。
                    </p>
                </div>
            </div>
            <div class="service-detail animate-on-scroll" style="transition-delay: 0.3s;">
                <span class="icon">&#128161;</span>
                <div>
                    <h3>ITコンサルティング</h3>
                    <p>
                        DX推進、システム刷新、技術選定など、ITに関する幅広い課題に対してコンサルティングを提供します。
                        現状分析から戦略策定、実行支援まで、お客様と伴走しながら最適なソリューションをご提案します。
                    </p>
                </div>
            </div>
            <div class="service-detail animate-on-scroll" style="transition-delay: 0.4s;">
                <span class="icon">&#127760;</span>
                <div>
                    <h3>コーポレートサイト作成</h3>
                    <p>
                        企業の顔となるコーポレートサイトを企画・デザイン・制作いたします。
                        レスポンシブ対応、SEO対策、アクセシビリティを考慮した
                        モダンなWebサイトを構築し、企業ブランディングをサポートします。
                    </p>
                </div>
            </div>
            <div class="service-detail animate-on-scroll" style="transition-delay: 0.5s;">
                <span class="icon">&#128221;</span>
                <div>
                    <h3>WP作成・運用</h3>
                    <p>
                        WordPressを活用したWebサイトの構築・運用を行います。
                        テーマのカスタマイズ、プラグイン開発、コンテンツ管理のサポートまで、
                        お客様が自走できる体制づくりを支援します。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>お気軽にご相談ください</h2>
            <p>サービスに関するご質問やお見積りのご依頼など、お気軽にお問い合わせください。</p>
            <a href="/contact.php" class="btn">お問い合わせはこちら</a>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
