<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = 'お問い合わせ';
$pageDescription = '助ズ（joz）へのお問い合わせ。システム開発・ITコンサルティングに関するご相談、お見積り依頼など、お気軽にお問い合わせください。';

$errors = [];
$name = '';
$email = '';
$subject = '';
$message = '';

if (isPost()) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!validateRequired($name)) {
        $errors['name'] = 'お名前を入力してください。';
    }
    if (!validateRequired($email)) {
        $errors['email'] = 'メールアドレスを入力してください。';
    } elseif (!validateEmail($email)) {
        $errors['email'] = '正しいメールアドレスを入力してください。';
    }
    if (!validateRequired($subject)) {
        $errors['subject'] = '件名を入力してください。';
    }
    if (!validateRequired($message)) {
        $errors['message'] = 'お問い合わせ内容を入力してください。';
    }

    if (!validateCsrfToken($_POST['csrf_token'] ?? '')) {
        $errors['csrf'] = '不正なリクエストです。再度お試しください。';
    }

    if (empty($errors)) {
        $_SESSION['contact_data'] = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ];
        $_SESSION['contact_confirmed'] = false;
        header('Location: /contact-confirm.php');
        exit;
    }
}

$csrfToken = generateCsrfToken();

require_once __DIR__ . '/includes/header.php';
?>

    <div class="page-header">
        <div class="container">
            <h1>お問い合わせ</h1>
            <p class="page-header-en">Contact</p>
        </div>
        <div class="page-header-deco"></div>
    </div>

    <section class="section">
        <div class="container">
            <?php if (!empty($errors['csrf'])): ?>
            <p class="form-error" style="text-align:center; margin-bottom: 24px;"><?= h($errors['csrf']) ?></p>
            <?php endif; ?>

            <form class="contact-form" method="post" action="">
                <input type="hidden" name="csrf_token" value="<?= h($csrfToken) ?>">

                <div class="form-group">
                    <label for="name">お名前<span class="required">必須</span></label>
                    <input type="text" id="name" name="name" value="<?= h($name) ?>" placeholder="山田 太郎">
                    <?php if (!empty($errors['name'])): ?>
                    <p class="form-error"><?= h($errors['name']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス<span class="required">必須</span></label>
                    <input type="email" id="email" name="email" value="<?= h($email) ?>" placeholder="example@example.com">
                    <?php if (!empty($errors['email'])): ?>
                    <p class="form-error"><?= h($errors['email']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="subject">件名<span class="required">必須</span></label>
                    <input type="text" id="subject" name="subject" value="<?= h($subject) ?>" placeholder="お問い合わせの件名">
                    <?php if (!empty($errors['subject'])): ?>
                    <p class="form-error"><?= h($errors['subject']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="message">お問い合わせ内容<span class="required">必須</span></label>
                    <textarea id="message" name="message" placeholder="お問い合わせ内容を入力してください"><?= h($message) ?></textarea>
                    <?php if (!empty($errors['message'])): ?>
                    <p class="form-error"><?= h($errors['message']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn">確認画面へ <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg></button>
                </div>
            </form>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
