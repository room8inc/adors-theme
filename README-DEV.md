# ADORS Theme - 開発ドキュメント

## 開発環境のセットアップ

### 必要なもの
- Node.js (v18以上推奨)
- npm または yarn

### インストール

```bash
# 依存関係のインストール
npm install

# 開発サーバーの起動（ホットリロード有効）
npm run dev

# 本番用ビルド
npm run build
```

## 技術スタック

- **WordPress**: テーマ開発
- **Vite**: モダンなビルドツール
- **Tailwind CSS**: ユーティリティファーストCSSフレームワーク
- **PostCSS**: CSS処理

## ディレクトリ構造

```
adors/
├── assets/
│   ├── css/
│   │   └── style.css          # Tailwind CSSのエントリーポイント
│   ├── js/
│   │   └── main.js            # JavaScriptのエントリーポイント
│   └── images/
│       └── logo.png
├── dist/                       # ビルド後のファイル（自動生成）
│   └── assets/
│       ├── css/
│       └── js/
├── template-parts/             # テンプレートパーツ
├── functions.php               # テーマの機能定義
├── header.php                  # ヘッダー
├── footer.php                  # フッター
├── front-page.php              # トップページ
├── page-*.php                  # 固定ページテンプレート
├── single-*.php                # 投稿タイプ別シングルページ
├── archive-*.php               # 投稿タイプ別アーカイブ
├── package.json                # npm設定
├── vite.config.js              # Vite設定
├── tailwind.config.js          # Tailwind CSS設定
└── postcss.config.js           # PostCSS設定
```

## カスタム投稿タイプ

### Works（制作実績）
- スラッグ: `works`
- アーカイブ: `/works/`
- シングル: `/works/{slug}/`

### News（お知らせ）
- スラッグ: `news`
- アーカイブ: `/news/`
- シングル: `/news/{slug}/`

## 開発ワークフロー

### 1. 開発サーバーの起動

```bash
npm run dev
```

これにより、Viteの開発サーバーが起動し、ファイルの変更を監視します。
CSSやJavaScriptを編集すると、ブラウザが自動的にリロードされます。

### 2. スタイルの編集

`assets/css/style.css` を編集してください。
Tailwind CSSのユーティリティクラスを使用できます。

### 3. JavaScriptの編集

`assets/js/main.js` を編集してください。
モダンなES6+の構文が使用できます。

### 4. 本番用ビルド

```bash
npm run build
```

最適化されたファイルが `dist/` ディレクトリに生成されます。

## Tailwind CSSのカスタマイズ

`tailwind.config.js` でカラーパレットやフォントなどをカスタマイズできます。

```javascript
theme: {
  extend: {
    colors: {
      primary: {
        DEFAULT: '#2563eb',
        // ...
      },
    },
  },
}
```

## トラブルシューティング

### スタイルが反映されない

1. 開発サーバーが起動しているか確認
2. ブラウザのキャッシュをクリア
3. `npm run build` を実行して再ビルド

### ビルドエラー

```bash
# node_modulesを削除して再インストール
rm -rf node_modules package-lock.json
npm install
```

## デプロイ

本番環境にデプロイする前に：

1. `npm run build` を実行
2. `dist/` ディレクトリの内容を確認
3. テーマディレクトリ全体をアップロード

## 注意事項

- `dist/` ディレクトリは自動生成されるため、直接編集しないでください
- `assets/` ディレクトリのソースファイルを編集してください
- 開発時は必ず `npm run dev` を起動してください

