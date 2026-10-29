<?php
/**
 * Save a submitted person to MySQL and list everyone saved so far.
 *
 * Connection settings come from environment variables (DB_HOST, DB_USER,
 * DB_PASSWORD, DB_NAME) so no password is stored in the code.
 * Table: see schema.sql.
 */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

try {
    $link = new mysqli(
        getenv('DB_HOST') ?: 'localhost',
        getenv('DB_USER') ?: 'root',
        getenv('DB_PASSWORD') ?: '',
        getenv('DB_NAME') ?: 'php20170413'
    );
    $link->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    http_response_code(500);
    exit('DB connection failed');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && trim($_POST['uname'] ?? '') !== '') {
    // Prepared statement: user input is never pasted into the SQL text.
    $stmt = $link->prepare('INSERT INTO phpim (name, school, birth, city) VALUES (?, ?, ?, ?)');
    $uname = trim($_POST['uname'] ?? '');
    $school = trim($_POST['school'] ?? '');
    $birth = trim($_POST['birth'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $stmt->bind_param('ssss', $uname, $school, $birth, $city);
    $stmt->execute();
}

$rows = $link->query('SELECT name, school, birth, city FROM phpim')->fetch_all(MYSQLI_ASSOC);
$link->close();
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>Guest list</title>
</head>
<body>
	<p><a href="index.html">請填入資料</a></p>
	<table border="1">
		<tr><th>name</th><th>school</th><th>birth</th><th>city</th></tr>
		<?php foreach ($rows as $row): ?>
		<tr><td><?= e($row['name']) ?></td><td><?= e($row['school']) ?></td><td><?= e($row['birth']) ?></td><td><?= e($row['city']) ?></td></tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
