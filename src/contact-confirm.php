<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['contact_data'])) {
    header('Location: /contact.php');
    exit;
}

$data = $_SESSION['contact_data'];
$pageTitle = 'お問い合わせ確認';
$csrfToken = generateCsrfToken();

require_once __DIR__ . '/includes/header.php';
?>

    <div class="page-header">
        <div class="container">
            <h1>お問い合わせ確認</h1>
            <p class="page-header-en">Confirm</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <p style="text-align:center; margin-bottom: 32px;">以下の内容でよろしければ「送信する」ボタンを押してください。</p>

            <table class="confirm-table">
                <tr>
                    <th>お名前</th>
                    <td><?= h($data['name']) ?></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><?= h($data['email']) ?></td>
                </tr>
                <tr>
                    <th>件名</th>
                    <td><?= h($data['subject']) ?></td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td><?= h($data['message']) ?></td>
                </tr>
            </table>

            <form method="post" action="/contact-complete.php">
                <input type="hidden" name="csrf_token" value="<?= h($csrfToken) ?>">
                <div class="form-actions">
                    <a href="/contact.php" class="btn btn-outline">修正する</a>
                    <button type="submit" class="btn">送信する</button>
                </div>
            </form>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
