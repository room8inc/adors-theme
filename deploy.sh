#!/bin/bash
# adors テーマ デプロイスクリプト
# 使い方: bash deploy.sh

set -e

# ---- 設定 ----
LOCAL_THEME="/Users/tsuruta/Local Sites/adors/app/public/wp-content/themes/adors/"
SSH_KEY="$HOME/.ssh/shinserver"
SSH_USER="wp452001"
SSH_HOST="sv6120.wpx.ne.jp"
SSH_PORT="10022"
REMOTE_THEME="/home/wp452001/adors.co.jp/public_html/wp-content/themes/adors/"

# ---- ビルド ----
echo "=== Tailwind CSS ビルド ==="
cd "$LOCAL_THEME"
npm run build
echo ""

# ---- デプロイ ----
echo "=== 本番サーバーへデプロイ ==="
rsync -avz --delete \
  --exclude 'node_modules/' \
  --exclude '.git/' \
  --exclude '.DS_Store' \
  --exclude '.cursor/' \
  --exclude 'package-lock.json' \
  --exclude 'vite.config.js' \
  --exclude 'tailwind.config.js' \
  --exclude 'postcss.config.js' \
  --exclude 'package.json' \
  --exclude '/assets/css/' \
  --exclude '/assets/js/' \
  --exclude '*.md' \
  --exclude '*.backup' \
  --exclude 'deploy.sh' \
  -e "ssh -p $SSH_PORT -i $SSH_KEY" \
  "$LOCAL_THEME" \
  "$SSH_USER@$SSH_HOST:$REMOTE_THEME"

echo ""
echo "=== デプロイ完了 ==="
