<?php

//連結mysql主機，一個檔案做一次
$link=@mysqli_connect( 
	'localhost', //MYSQL主機名稱
	'root',      //使用者名稱
	'123456', //密碼
	'php20170413');   //預設使用的資料庫名稱
	

if($link){
	echo "DB connected";
}else{
	echo "DB connection failed";
}

$uname=$_POST["uname"];
$school=$_POST["school"];
$birth=date($_POST["birth"]);
$city=$_POST["city"];

$sql2="INSERT INTO phpim(name,school,birth,city)VALUES('$uname','$school','$birth','$city');";

$result=mysqli_query($link,$sql2); 
$result=mysqli_query($link,"SELECT * FROM phpim");

echo "請填入資料";

echo "<table border=1>";
while ($row=mysqli_fetch_assoc($result)) {
echo "<tr>";
	echo "<td>";
	echo $row["name"];
	echo "</td>";

	echo "<td>";
	echo $row["school"];
	echo "</td>";

	echo "<td>";
	echo $row["birth"];
	echo "</td>";

	echo "<td>";
	echo $row["city"];
	echo "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link); //關閉與mysql主機的連結，在檔案最後面做
?>