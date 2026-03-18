# 助ズ（joz）コーポレートサイト

## 概要
Pure PHP製のコーポレートサイト。フレームワーク不使用。

## ディレクトリ構成
- `src/` - デプロイ対象（この中身をサーバーにアップロード）
- `src/includes/` - 共通パーツ（config, header, footer, functions）
- `src/assets/` - CSS, JS, 画像

## 開発サーバー起動
```bash
cd src && php -S localhost:8080
```

## メインカラー
- `#E67E49`（オレンジ）
- ホバー: `#D06E3B`

## セキュリティ
- XSS対策: `h()` 関数（htmlspecialchars）で出力エスケープ
- CSRF対策: セッションベースのトークン
- メールヘッダインジェクション対策: `sanitizeMailHeader()`
- POSTのみ受付

## 注意事項
- DBは使用しない（お知らせデータはPHP配列で管理）
- `config.php` に会社情報を一元管理
