
<html lang="zh-Hant-TW">
    <head>
		<title>
            搜尋記錄
        </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
	<body background="bg.jpg">
	<body>
		<ul>
			<p align="center"><font size="8"><b>搜尋記錄</b><font></p>
			<br>
		</ul>
	</body>
</html>	

<font size="5">
<?php
require_once 'db.php';
if(isset($_POST['clear']))
	mysqli_query($link, "TRUNCATE TABLE history");

$h = mysqli_query($link, "SELECT * FROM history ORDER BY HID");
if ($h) {
    if (mysqli_num_rows($h)>0) {
        while ($row = mysqli_fetch_assoc($h)) {
			echo "ID：".$row["HID"]."<br>區域：";
			if(!$row["dist"])
				echo "不指定<br>";
			else
				echo $row["dist"]."<br>";
			echo "學校：";
			if(!$row["elemen"] && !$row["junior"] && !$row["senior"])
				echo "不指定<br>";
			else{
				if($row["elemen"])
					echo "國小 ";
				if($row["junior"])
					echo "國中 ";
				if($row["senior"])
					echo "高中 ";
				echo "<br>";
			}
			echo "捷運站：";
			if(!$row["mrtst"])
				echo "不指定<br>";
			else
				echo "有<br>";
			echo "市場：";
			if(!$row["mar"])
				echo "不指定<br>";
			else
				echo "有<br>";
			echo "運動中心：";
			if(!$row["sc"])
				echo "不指定<br>";
			else
				echo "有<br>";
			echo "醫院：";
			if(!$row["hos"])
				echo "不指定";
			else
				echo "有";
			
			echo "<hr size=2>";
        }
    }
	else
		echo "尚無搜尋記錄";
}

?>
<font>

<html lang="zh-Hant-TW">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
	<body>
		<ul>		
			<form method="post" action="history.php">
				<p align="center">
				<input name="sid" placeholder="請輸入搜尋記錄ID"> <input type="submit" value="再次搜尋">  
				</p>
			</form>	
			<form method="post" action="histories.php">
				<p align="center">
				<input type="submit" name="clear" value="清空記錄">  
				<input type="button" value="回主選單" onclick="location.href='index.php'">
				</p>
			</form>	
		</ul>
	</body>
</html>
