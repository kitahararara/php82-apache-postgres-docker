# PHP 8.2 + Apache + PostgreSQL (Docker)

Windows 11（Docker Desktop / WSL2）想定の開発用テンプレートです。

## 構成
- web: `php:8.2-apache`（Apache + mod_php）
- db: PostgreSQL 16

## 起動
```bash
docker compose up -d --build
```

- Web: http://localhost:8080
- PostgreSQL: localhost:5432
  - DB: `appdb`
  - USER: `appuser`
  - PASS: `apppass`

## 停止
```bash
docker compose down
```

DBも含めて削除（初期化）
```bash
docker compose down -v
```
