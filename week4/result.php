<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HW2</title>
</head>
<body>
<?php

	$uname=$_POST["uname"];
	$uschool=$_POST["uschool"];
	$gender=$_POST["gender"];
	$uphone=$_POST["uphone"];
	$uemail=$_POST["uemail"];
	$ubirth=$_POST["ubirth"];
	$interest=$_POST["interest"];
	$city=$_POST["city"];
	
	echo "姓名:".$uname."<br/>";
	echo "學校:".$uschool."<br/>";
	echo "性別:".$gender."<br/>";
	echo "電話:".$uphone."<br/>";
	echo "郵件:".$uemail."<br/>";
	echo "生日:".$ubirth."<br/>";
	echo "性別:".$gender."<br/>";
	
	if($gender=="male") { 
		echo "<body bgcolor='yellow'>";
	}else{ 
		echo "<body bgcolor='pink'>";
	} 

	echo "你的興趣:";
	foreach ($interest as $data) {
		echo " ".$data;
	}
	echo "<br/>";

	echo "住在哪裡:".$city."<br/>";

?>

</body>
</html>