#!/usr/bin/env bash
# A tiny wrapper to start PHP's server and ngrok

PORT=6969
echo "[*] Starting PHP built‑in server on port $PORT..."
php -S 0.0.0.0:$PORT >/dev/null 2>&1 &
sleep 1
echo "[*] Launching ngrok..."
if ! command -v ngrok >/dev/null; then
  echo "Error: ngrok not found. Install from https://ngrok.com/" >&2
  exit 1
fi
ngrok http $PORT
