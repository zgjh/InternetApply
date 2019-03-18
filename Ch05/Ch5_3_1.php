<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_3_1.php</title>
</head>
<body>
<form name="form6" method="get" action="Ch5_3_1.php">
請輸入次數:<input type="text" name="times" > </br>
<input type="submit" value='送出'>
<input type="reset" value='重寫'></br>
<?php   
$total = 0;   // 指定變數值
// for遞增迴圈
for ( $i = 1; $i <= $_GET['times']; $i++ ) {
   print "|". $i;
   $total += $i;
}
print "|<br/>for遞增迴圈從1加到".$_GET['times']."=".$total."<br/>";
$total = 0;   // 重設變數值
// for遞減迴圈
for ( $i = 60; $i >= 20; $i-- ) $total += $i;
print "for遞減迴圈從60加到20=".$total."<br/>";
?>
</body>
</html>