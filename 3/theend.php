<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HW3</title>
</head>
<body>
<?php
 	date_default_timezone_set("Asia/Taipei");
	$now=mktime(); //取得時間
	$nowdate=getdate($now); 
	$year=$nowdate["year"]; //宣告year
	$mon=$nowdate["mon"];
	$mday=$nowdate["mday"];
	$wday=$nowdate["wday"]; 
	$hour=$nowdate["hours"];
	$minute=$nowdate["minutes"];
	$second=$nowdate["seconds"];

	$date = new DateTime('2017-12-31'); 
	$theend=getdate($date->getTimestamp()); 
	$lyear=$theend["year"]; //宣告year
	$lmon=$theend["mon"];
	$lmday=$theend["mday"];
	$lwday=$theend["wday"]; 
	$lhour=$theend["hours"];
	$lminute=$theend["minutes"];
	$lsecond=$theend["seconds"];

	echo "你還能活這麼久!!!!";
	echo $date->getTimestamp()-$now."秒"."<br/>";

	echo "世界末日是".$lyear."年".$lmon."月".$lmday."日".$lhour."點".$lminute."分".$lsecond."秒"."<br/>";

	echo "今天是".$year."年".$mon."月".$mday."日".$hour."點".$minute."分".$second."秒"."<br/>";

	echo "現在是".$mon."月<br/>";
	echo "<img src = './img/".$mon.".jpg'>";
	// if($mon==1) { 
	// 	echo "現在是1月<br/>";
	// 	echo "<img src='./img/1.jpg'>";
	// }elseif($mon==2) { 
	// 	echo "現在是2月<br/>";
	// 	echo "<img src='./img/2.jpg'>";
	// }elseif($mon==3){ 
	// 	echo "現在是3月<br/>";
	// 	echo "<img src='./img/3.jpg'>";
	// }elseif($mon==4){ 
	// 	echo "現在是4月<br/>";
	// 	echo "<img src='./img/4.jpg'>";
	// }elseif($mon==5){ 
	// 	echo "現在是5月<br/>";
	// 	echo "<img src='./img/5.jpg'>";
	// }elseif($mon==6){ 
	// 	echo "現在是6月<br/>";
	// 	echo "<img src='./img/6.jpg'>";
	// }elseif($mon==7){ 
	// 	echo "現在是7月<br/>";
	// 	echo "<img src='./img/7.jpg'>";
	// }elseif($mon==8){ 
	// 	echo "現在是8月<br/>";
	// 	echo "<img src='./img/8.jpg'>";
	// }elseif($mon==9){ 
	// 	echo "現在是9月<br/>";
	// 	echo "<img src='./img/9.jpg'>";
	// }elseif($mon==10){ 
	// 	echo "現在是10月<br/>";
	// 	echo "<img src='./img/10.jpg'>";
	// }elseif($mon==11){ 
	// 	echo "現在是11月<br/>";
	// 	echo "<img src='./img/11.jpg'>";
	// }else{ 
	// 	echo "現在是12月<br/>";
	// 	echo "<img src='./img/12.jpg'>";
	// }
	// echo "<br/>";
?>

</body>
</html>