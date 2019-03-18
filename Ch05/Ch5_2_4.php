<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch5_2_4.php</title>
</head>
<body>
<form name="form6" method="post" action="Ch5_2_4.php">
請輸入成績:
<input type="text" name="grade" maxlength="6" size="8"> </br>
<input type="submit" value='查詢'>
<input type="reset" value='重寫'>
</form>
<?php 
$grade = $_POST['grade'];
if ($grade >= 80)
	$GPA = 'A';
elseif ($grade >= 70)
	$GPA = 'B';
elseif ( $grade >= 60)
	$GPA = 'C';
else
	$GPA = 'D';
echo "學生成績: $GPA<br/>";
switch ( $GPA ) { // switdh條件敘述
   case 'A':
      print "學生成績超過80<br/>";
      break;
   case 'B':
      print "學生成績超過70,低於80<br/>";
      break;
   case 'C':
      print "學生成績超過60,低於70<br/>";
      break;
   default:
      print "學生成績不及格<br/>";
}
?>
</body>
</html>