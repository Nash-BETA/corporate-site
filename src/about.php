<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle = '会社概要';
$pageDescription = '助ズ（joz）の会社概要。所在地、事業内容などの企業情報をご覧いただけます。';

require_once __DIR__ . '/includes/header.php';
?>

    <div class="page-header">
        <div class="container">
            <h1>会社概要</h1>
            <p class="page-header-en">About</p>
        </div>
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
                <h2>代表挨拶</h2>
                <p class="section-title-en">Message</p>
            </div>
            <div class="ceo-message animate-on-scroll">
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
