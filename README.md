# PHP 課程週作業（2017）

大學 PHP 課程每週的作業，2026 年整理成能在 PHP 8 執行的版本。同一門課整理過的完整版本在 [PHP_HW](https://github.com/jennifershih/PHP_HW)。

| 資料夾 | 內容 |
|---|---|
| `week1` | Hello PHP |
| `week2` | 活動報名頁（HTML 表單） |
| `week4` | 個人資料表單，送出後顯示填寫內容 |
| `week5` | 今年倒數秒數，並依月份顯示圖片 |
| `week7` | 把表單資料存進 MySQL 並列出（`schema.sql` 建表） |

## 在本機執行

```bash
php -S localhost:8000      # 然後開 http://localhost:8000/week4/index.html
```

`week7` 需要 MySQL：先用 `schema.sql` 建表，再用 `DB_USER`、`DB_PASSWORD`、`DB_NAME` 環境變數提供連線資訊。

## 2026 年的修正

- 輸出都用 `htmlspecialchars` 處理（XSS）；表單欄位沒填時不再出現警告。
- MySQL 改用 prepared statement（SQL injection），密碼改從環境變數讀取。
- `mktime()` 在 PHP 8 不帶參數會出錯，改用 `DateTimeImmutable`。
