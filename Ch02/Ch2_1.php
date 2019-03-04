<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Ch2_1.php</title>
</head>
<body>
<?php
$begin = 12;
$end = 50;
for ($i = $begin; $i <= $end; $i += 5) {
?>
<p style="font-size:<?php echo $i;?>pt">
歡迎使用PHP網頁程式設計，字體大小為<?php echo $i;?>
<?php
print "</p>";
} ?>
</body>
</html>




