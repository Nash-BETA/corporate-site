<?php
/**
 * ユーティリティ関数
 */

/**
 * HTMLエスケープ
 */
function h(string $str): string
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * CSRFトークン生成
 */
function generateCsrfToken(): string
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * CSRFトークン検証
 */
function validateCsrfToken(string $token): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * CSRFトークンを再生成
 */
function regenerateCsrfToken(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

/**
 * POSTリクエストか判定
 */
function isPost(): bool
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * メールヘッダインジェクション対策
 */
function sanitizeMailHeader(string $str): string
{
    return str_replace(["\r", "\n", "%0a", "%0d"], '', $str);
}

/**
 * バリデーション: 必須チェック
 */
function validateRequired(string $value): bool
{
    return trim($value) !== '';
}

/**
 * バリデーション: メールアドレス
 */
function validateEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * 現在のページ判定（ナビゲーションのアクティブ表示用）
 */
function isCurrentPage(string $page): bool
{
    $current = basename($_SERVER['SCRIPT_NAME']);
    return $current === $page;
}

/**
 * お知らせデータ取得
 */
function getNewsData(): array
{
    return [
        [
            'date' => '2026-03-01',
            'category' => 'お知らせ',
            'title' => 'コーポレートサイトをリニューアルしました',
        ],
        [
            'date' => '2025-12-15',
            'category' => 'プレスリリース',
            'title' => '新サービス「コーポレートサイト作成」を開始しました',
        ],
        [
            'date' => '2025-10-01',
            'category' => 'お知らせ',
            'title' => 'オフィスを渋谷区に移転しました',
        ],
        [
            'date' => '2025-07-20',
            'category' => 'プレスリリース',
            'title' => 'ITコンサルティング事業を拡充しました',
        ],
        [
            'date' => '2022-05-01',
            'category' => 'お知らせ',
            'title' => '助ズを設立しました',
        ],
    ];
}

/**
 * 日付フォーマット
 */
function formatDate(string $date): string
{
    return date('Y.m.d', strtotime($date));
}
