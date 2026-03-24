<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle = '会社概要';
$pageDescription = '助ズ（joz）の会社概要。2022年設立、神奈川県を拠点にシステム開発・ITコンサルティングを提供。「テクノロジーでビジネスを助ける」を理念に、お客様の課題解決に取り組んでいます。';

require_once __DIR__ . '/includes/header.php';
?>

    <div class="page-header">
        <div class="container">
            <h1>会社概要</h1>
            <p class="page-header-en">About</p>
        </div>
        <div class="page-header-deco"></div>
    </div>

    <section class="section">
        <div class="container">
            <table class="about-table animate-on-scroll">
                <tr>
                    <th>会社名</th>
                    <td><?= h(COMPANY_NAME) ?>（<?= h(COMPANY_NAME_EN) ?>）</td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td><?= h(COMPANY_FOUNDED) ?></td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td><?= h(COMPANY_ADDRESS) ?></td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td><?= h(COMPANY_SERVICES) ?></td>
                </tr>
            </table>
        </div>
    </section>

    <section class="section section-alt">
        <div class="container">
            <div class="section-title">
                <h2>
                    <span class="section-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
                    </span>
                    代表挨拶
                </h2>
                <p class="section-title-en">Message</p>
            </div>
            <div class="ceo-message animate-on-scroll">
                <svg class="ceo-quote-icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10H0z"/></svg>
                <p>
                    私たちは「テクノロジーでビジネスを助ける」という理念のもと、2022年に助ズを設立いたしました。<br><br>
                    システム開発やITコンサルティングを通じて、お客様が抱える課題を一つひとつ丁寧に解決し、
                    ビジネスの成長をサポートしてまいります。<br><br>
                    技術の力で、お客様と社会に貢献できる企業であり続けることを目指しています。
                </p>
                <p class="ceo-name"><?= h(COMPANY_NAME) ?> 代表</p>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
