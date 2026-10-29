<?php
/** HW2: show what the student filled in on the form. */
function field(string $name): string
{
    return htmlspecialchars(trim($_POST[$name] ?? ''), ENT_QUOTES, 'UTF-8');
}

$gender = $_POST['gender'] ?? '';
$interests = array_map(
    fn ($item) => htmlspecialchars($item, ENT_QUOTES, 'UTF-8'),
    (array) ($_POST['interest'] ?? [])
);
$background = $gender === 'male' ? 'yellow' : 'pink';
?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
	<meta charset="UTF-8">
	<title>HW2</title>
</head>
<body style="background-color: <?= $background ?>">
	<p>姓名：<?= field('uname') ?></p>
	<p>學校：<?= field('uschool') ?></p>
	<p>性別：<?= field('gender') ?></p>
	<p>電話：<?= field('uphone') ?></p>
	<p>郵件：<?= field('uemail') ?></p>
	<p>生日：<?= field('ubirth') ?></p>
	<p>你的興趣：<?= $interests ? implode('、', $interests) : '（未選擇）' ?></p>
	<p>住在哪裡：<?= field('city') ?></p>
</body>
</html>
