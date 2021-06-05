<?php
require_once 'db.php';
?>
<html lang="zh-Hant-TW">
    <head>
		<title>
            搜尋
        </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
	<body background="bg.jpg">
	<body>
		<ul>
			<p align="center"><font size="8"><b>搜尋</b><font></p>		
			<form method="post" action="result.php">
				<p align="center">
				<font size="4">
				偏好區域：
				<select name="dist">
					<option value=0>不指定</option>
					<option value="中正區">中正區</option>
					<option value="大同區">大同區</option>
					<option value="中山區">中山區</option>
					<option value="松山區">松山區</option>
					<option value="大安區">大安區</option>
					<option value="萬華區">萬華區</option>
					<option value="信義區">信義區</option>
					<option value="士林區">士林區</option>
					<option value="北投區">北投區</option>
					<option value="內湖區">內湖區</option>
					<option value="南港區">南港區</option>
					<option value="文山區">文山區</option>
				</select>
				<br>
				鄰近學校(可複選)：
				<input type="checkbox" name="elemen" value=1> 國小
				<input type="checkbox" name="junior" value=1> 國中
				<input type="checkbox" name="senior" value=1> 高中
				<br>
				捷運站：
				<select name="mrtst">
					<option value=0>不指定</option>
					<option value=1">有</option>
				</select>
				<br>
				市場：
				<select name="mar">
					<option value=0>不指定</option>
					<option value=1">有</option>
				</select>
				<br>
				運動中心：
				<select name="sc">
					<option value=0>不指定</option>
					<option value=1">有</option>
				</select>
				<br>
				醫院：
				<select name="hos">
					<option value=0>不指定</option>
					<option value=1>有</option>
				</select>
				<font>
				</p>
				<p align="center"><input type="submit" value="搜尋">  <input type="reset" value="清空條件"></p>
			</form>						  
			<p align="center"><input type="button" value="回主選單" onclick="location.href='index.php'"></p>
		</ul>
	</body>
</html>
