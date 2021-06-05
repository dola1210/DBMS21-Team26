
<html lang="zh-Hant-TW">
    <head>
		<title>
            搜尋結果
        </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
	<body background="bg.jpg">
	<body>
		<ul>
			<p align="center"><font size="8"><b>搜尋結果</b><font></p>
			<br>
		</ul>
	</body>
</html>	


<font size="5">
<?php
require_once 'db.php';
$SID = $_POST["sid"];
$hi = mysqli_query($link, "SELECT * FROM history WHERE HID=$SID");
if(!$hi)
	echo "無此搜尋記錄";
else if (mysqli_num_rows($hi)==0)
	echo "無此搜尋記錄";
else{
	$row = mysqli_fetch_assoc($hi);

	$dist = $row["dist"];
	$mrtst = $row["mrtst"];
	$mar = $row["mar"];
	$sc = $row["sc"];
	$hos = $row["hos"];
	$elemen = $row["elemen"];
	$junior = $row["junior"];
	$senior = $row["senior"];

	if(!$dist)
		$sqldist = "1";
	else
		$sqldist = "S.address LIKE '$dist%'";

	if(!$mrtst){
		$selmrt = "";
		$sqlmrt = "1";
		$setmrt = "";
	}
	else{
		$selmrt = ", SMRT.name AS MRT";
		$sqlmrt = "S.address=SMRT.address";
		$setmrt = ",(SELECT DISTINCT S.address, MR.name, (SQRT((S.X-MR.X)*100.7*(S.X-MR.X)*100.7+(S.Y-MR.Y)*111.1*(S.Y-MR.Y)*111.1)) AS dis
					FROM (SELECT DISTINCT address, X, Y FROM sale)AS S, mrt MR
					WHERE SQRT((S.X-MR.X)*100.7*(S.X-MR.X)*100.7+(S.Y-MR.Y)*111.1*(S.Y-MR.Y)*111.1)<0.5
					ORDER BY dis DESC) AS SMRT";
	}

	if(!$mar){
		$selmar = "";
		$sqlmar = "1";
		$setmar = "";
	}
	else{
		$selmar = ", SM.name AS Market";
		$sqlmar = "S.address=SM.address";
		$setmar = ",(SELECT DISTINCT S.address, M.name, (SQRT((S.X-M.X)*100.7*(S.X-M.X)*100.7+(S.Y-M.Y)*111.1*(S.Y-M.Y)*111.1)) AS dis
					FROM (SELECT DISTINCT address, X, Y FROM sale)AS S, market M
					WHERE SQRT((S.X-M.X)*100.7*(S.X-M.X)*100.7+(S.Y-M.Y)*111.1*(S.Y-M.Y)*111.1)<0.5
					ORDER BY dis DESC) AS SM";
	}

	if(!$sc){
		$selsc = "";
		$sqlsc = "1";
		$setsc = "";
	}	
	else{
		$selsc = ", SSP.name AS SportCenter";
		$sqlsc = "S.address=SSP.address";
		$setsc = ",(SELECT DISTINCT S.address, SP.name, (SQRT((S.X-SP.X)*100.7*(S.X-SP.X)*100.7+(S.Y-SP.Y)*111.1*(S.Y-SP.Y)*111.1)) AS dis
					FROM (SELECT DISTINCT address, X, Y FROM sale)AS S, sportcenter SP
					WHERE SQRT((S.X-SP.X)*100.7*(S.X-SP.X)*100.7+(S.Y-SP.Y)*111.1*(S.Y-SP.Y)*111.1)<0.5
					ORDER BY dis DESC) AS SSP";
	}

	if(!$hos){
		$selhos = "";
		$sqlhos = "1";
		$sethos = "";
	}	
	else{
		$selhos = ", SH.name AS Hospital";
		$sqlhos = "S.address=SH.address";
		$sethos = ",(SELECT DISTINCT S.address, H.name, (SQRT((S.X-H.X)*100.7*(S.X-H.X)*100.7+(S.Y-H.Y)*111.1*(S.Y-H.Y)*111.1)) AS dis
					FROM (SELECT DISTINCT address, X, Y FROM sale)AS S, hospital H
					WHERE SQRT((S.X-H.X)*100.7*(S.X-H.X)*100.7+(S.Y-H.Y)*111.1*(S.Y-H.Y)*111.1)<1
					ORDER BY dis DESC) AS SH";
	}	

	if(!$elemen){
		$selelemen = "";
		$sqlelemen = "1";
		$setelemen = "";
	}	
	else{
		$selelemen = ", SELE.name AS Elesch";
		$sqlelemen = "S.address=SELE.address";
		$setelemen = ",(SELECT DISTINCT S.address, SC.name, (SQRT((S.X-SC.X)*100.7*(S.X-SC.X)*100.7+(S.Y-SC.Y)*111.1*(S.Y-SC.Y)*111.1)) AS dis
						FROM (SELECT DISTINCT address, X, Y FROM sale)AS S, school SC
						WHERE SC.level='國小' AND SQRT((S.X-SC.X)*100.7*(S.X-SC.X)*100.7+(S.Y-SC.Y)*111.1*(S.Y-SC.Y)*111.1)<0.5
						ORDER BY dis DESC) AS SELE";
	}	

	if(!$junior){
		$seljunior = "";
		$sqljunior = "1";
		$setjunior = "";
	}	
	else{
		$seljunior = ", SJU.name AS Jusch";
		$sqljunior = "S.address=SJU.address";
		$setjunior = ",(SELECT DISTINCT S.address, SC.name, (SQRT((S.X-SC.X)*100.7*(S.X-SC.X)*100.7+(S.Y-SC.Y)*111.1*(S.Y-SC.Y)*111.1)) AS dis
						FROM (SELECT DISTINCT address, X, Y FROM sale)AS S, school SC
						WHERE SC.level='國中' AND SQRT((S.X-SC.X)*100.7*(S.X-SC.X)*100.7+(S.Y-SC.Y)*111.1*(S.Y-SC.Y)*111.1)<0.5
						ORDER BY dis DESC) AS SJU";
	}	

	if(!$senior){
		$selsenior = "";
		$sqlsenior = "1";
		$setsenior = "";
	}	
	else{
		$selsenior = ", SSE.name AS Sesch";
		$sqlsenior = "S.address=SSE.address";
		$setsenior = ",(SELECT DISTINCT S.address, SC.name, (SQRT((S.X-SC.X)*100.7*(S.X-SC.X)*100.7+(S.Y-SC.Y)*111.1*(S.Y-SC.Y)*111.1)) AS dis
						FROM (SELECT DISTINCT address, X, Y FROM sale)AS S, school SC
						WHERE SC.level='高中' AND SQRT((S.X-SC.X)*100.7*(S.X-SC.X)*100.7+(S.Y-SC.Y)*111.1*(S.Y-SC.Y)*111.1)<0.5
						ORDER BY dis DESC) AS SSE";
	}	

	$sql = "SELECT DISTINCT S.address $selmrt $selmar $selsc $selhos $selelemen $seljunior $selsenior
			FROM sale S $setmrt $setmar $setsc $sethos $setelemen $setjunior $setsenior
			WHERE $sqldist AND $sqlmrt AND $sqlmar AND $sqlsc AND $sqlhos AND $sqlelemen AND $sqljunior AND $sqlsenior
			GROUP BY S.address
			ORDER BY address";
	$re = mysqli_query($link, $sql);

	if ($re) {
		if (mysqli_num_rows($re)>0) {
			while ($row = mysqli_fetch_assoc($re)) {
				echo $row["address"]." 附近<br>";
				if($mrtst || $mar || $sc || $hos || $elemen || $junior || $senior)
					echo "鄰";
				if($mrtst)
					echo " 捷運".$row["MRT"];
				if($mar)
					echo " ".$row["Market"];
				if($sc)
					echo " ".$row["SportCenter"];
				if($hos)
					echo " ".$row["Hospital"];
				if($elemen)
					echo " ".$row["Elesch"];
				if($junior)
					echo " ".$row["Jusch"];
				if($senior)
					echo " ".$row["Sesch"];
				echo "<hr size=2>";
			}
		}
		else
			echo "查無符合條件之結果";
	}
	else {
		echo "語法執行失敗，錯誤訊息: " . mysqli_error($link);
	}
	mysqli_free_result($hi);
}



?>
<font>

<html lang="zh-Hant-TW">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
	<body>
		<ul>			
			<p align="center"><input type="button" value="回搜尋記錄" onclick="location.href='histories.php'">  <input type="button" value="回主選單" onclick="location.href='index.php'"></p>
		</ul>
	</body>
</html>
