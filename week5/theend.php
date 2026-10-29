<?php
/** HW3: countdown to the end of the year, with a picture for the current month. */
date_default_timezone_set('Asia/Taipei');

$now = new DateTimeImmutable();
$theEnd = new DateTimeImmutable($now->format('Y') . '-12-31 23:59:59');
$secondsLeft = $theEnd->getTimestamp() - $now->getTimestamp();
$month = (int) $now->format('n');
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>HW3</title>
</head>
<body>
	<p>今年還剩 <?= number_format($secondsLeft) ?> 秒！</p>
	<p>今年的最後一刻是 <?= $theEnd->format('Y 年 n 月 j 日 H 點 i 分 s 秒') ?></p>
	<p>今天是 <?= $now->format('Y 年 n 月 j 日 H 點 i 分 s 秒') ?></p>
	<p>現在是 <?= $month ?> 月</p>
	<img src="./img/<?= $month ?>.jpg" alt="<?= $month ?> 月">
</body>
</html>
