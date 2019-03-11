<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_2_2.php</title>
</head>
<body>
<form name="form6" method="get" action="Ch5_2_2.php">

請輸入成績:<input type="text" name="grade" >
<input type="submit" value='送出'>
<input type="reset" value='重寫'>

</form>
<?php 
$name = "江小魚";  // 指定變數值
$grade = $_GET['grade'];
// if/else條件敘述
if ( $grade >= 60 ) {
   print $name. "成績及格!<br/>";
} else {
   print $name. "成績不及格!<br/>";
} 
?>
</body>
</html>