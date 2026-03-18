# 助ズ（joz）コーポレートサイト

会社「助ズ」のコーポレートサイトです。

## 技術構成

- Pure PHP（フレームワーク不使用）
- CSS（Grid / Flexbox、レスポンシブ対応）
- Vanilla JavaScript

## ページ構成

| ページ | ファイル |
|--------|----------|
| TOP | `src/index.php` |
| 会社概要 | `src/about.php` |
| 事業内容 | `src/service.php` |
| お知らせ | `src/news.php` |
| お問い合わせ | `src/contact.php` |
| 確認画面 | `src/contact-confirm.php` |
| 送信完了 | `src/contact-complete.php` |

## ローカル開発

```bash
cd src
php -S localhost:8080
```

ブラウザで http://localhost:8080 を開いてください。

## デプロイ

`src/` ディレクトリの中身をWebサーバーにアップロードしてください。
