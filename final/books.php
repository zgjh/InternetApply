<?
if ( ! mysql_connect("localhost", "root", "12345678") )
  die("無法連線資料庫伺服器, 請聯絡系統管理員蕭志明");
//設定連線的文字集與校對為 UTF8 編碼
mysql_query("SET NAMES utf8");
if ( ! mysql_select_db('ch09') )
  die("無法使用資料庫");
?>

<h1> 書籍資料管理系統</h1>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body><form name="form1" method="get" action="books-no.php">
輸入查詢書本編號

<?
//<input type="text" name="bookon" maxlength="6" size ="8"><br>
$sql="select * from books";
$result =mysql_query($sql);
?>

<select name ="bookon" size="1">

<?
while ($row=mysql_fetch_array($result))
{
	echo "<option value=$row[0] >$row[0]";
}
?>
</option>
</select>
<br>
<input type="submit" value="查詢">
<input type="reset" value="重設">

</form>
</body>
<html>
<br>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body><form name="forml" method="get" action="books-deno.php">
輸入查詢書本編號:
<?
$sql="select * from books";
$result=mysql_query($sql);
?>
<select name="bookno" size="1">
<?
while ($row=mysql_fetch_array($result))
{
	echo "<option value=$row[0]>$row[0] ";
}
?>
</option>
</select>
<br>
<input type="submit" value='刪除'>
<input type="reset" value='重設'>
</form>
</body>
</html>

<br>
<br>

<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body><form name="form1" method="get" action="books-na.php">
輸入查詢書本名稱
<input type="text" name="bookna" maxlength="20" size ="20"><br>

<br>
<input type="submit" value="查詢">
<input type="reset" value="重設">
</form>
</body>
<html>



<body>
<form name="form1" method="get" action="books-reno.php">
輸入修改書本編號:
<?
$sql="select * from books";
$result=mysql_query($sql);
?>

<select name="bookno2" size="1">

<?
	while ($row=mysql_fetch_array($result)){
		echo "<option value=$row[0]> $row[0] ";
	}
?>

</option>
</select>
<br>
<input type="submit" value='查詢'>
<input type="reset" value='重設'>
</form>
</body>
</html>
<br>

