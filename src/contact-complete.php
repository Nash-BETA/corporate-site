<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isPost() || empty($_SESSION['contact_data'])) {
    header('Location: /contact.php');
    exit;
}

if (!validateCsrfToken($_POST['csrf_token'] ?? '')) {
    header('Location: /contact.php');
    exit;
}

$data = $_SESSION['contact_data'];

// 管理者への通知メール
$to = CONTACT_TO_EMAIL;
$mailSubject = CONTACT_SUBJECT_PREFIX . sanitizeMailHeader($data['subject']);
$mailBody = "以下のお問い合わせがありました。\n\n"
    . "━━━━━━━━━━━━━━━━━━━━━━━━━━\n"
    . "お名前: {$data['name']}\n"
    . "メールアドレス: {$data['email']}\n"
    . "件名: {$data['subject']}\n"
    . "━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n"
    . "お問い合わせ内容:\n"
    . $data['message'] . "\n";

$headers = "From: " . sanitizeMailHeader(CONTACT_TO_EMAIL) . "\r\n"
    . "Reply-To: " . sanitizeMailHeader($data['email']) . "\r\n"
    . "Content-Type: text/plain; charset=UTF-8\r\n";

@mail($to, $mailSubject, $mailBody, $headers);

// お客様への自動返信メール
$replySubject = "【助ズ】お問い合わせありがとうございます";
$replyBody = "{$data['name']} 様\n\n"
    . "この度はお問い合わせいただき、誠にありがとうございます。\n"
    . "以下の内容でお問い合わせを受け付けました。\n\n"
    . "━━━━━━━━━━━━━━━━━━━━━━━━━━\n"
    . "件名: {$data['subject']}\n"
    . "━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n"
    . "お問い合わせ内容:\n"
    . $data['message'] . "\n\n"
    . "━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n"
    . "内容を確認の上、担当者より折り返しご連絡いたします。\n"
    . "通常2〜3営業日以内にご返信いたしますので、\n"
    . "しばらくお待ちくださいますようお願いいたします。\n\n"
    . "※このメールは自動返信です。\n"
    . "　このメールへのご返信はお控えください。\n\n"
    . "──────────────────────\n"
    . COMPANY_NAME . "（" . COMPANY_NAME_EN . "）\n"
    . COMPANY_ADDRESS . "\n"
    . "Email: " . CONTACT_TO_EMAIL . "\n"
    . "Web: " . SITE_URL . "\n"
    . "──────────────────────\n";

$replyHeaders = "From: " . sanitizeMailHeader(CONTACT_TO_EMAIL) . "\r\n"
    . "Reply-To: " . sanitizeMailHeader(CONTACT_TO_EMAIL) . "\r\n"
    . "Content-Type: text/plain; charset=UTF-8\r\n";

@mail(sanitizeMailHeader($data['email']), $replySubject, $replyBody, $replyHeaders);

// セッションクリア
unset($_SESSION['contact_data']);
regenerateCsrfToken();

$pageTitle = '送信完了';

require_once __DIR__ . '/includes/header.php';
?>

    <div class="page-header">
        <div class="container">
            <h1>送信完了</h1>
            <p class="page-header-en">Complete</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="complete-message">
                <h2>お問い合わせありがとうございます</h2>
                <p>
                    お問い合わせ内容を受け付けました。<br>
                    確認後、担当者よりご連絡させていただきます。<br>
                    しばらくお待ちくださいますようお願いいたします。
                </p>
                <a href="/" class="btn btn-outline">TOPに戻る</a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
