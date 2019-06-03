<?
if ( ! mysql_connect("localhost", "root", "12345678") )
  die("無法連線資料庫伺服器, 請聯絡系統管理員蕭志明");
//設定連線的文字集與校對為 UTF8 編碼
mysql_query("SET NAMES utf8");
if ( ! mysql_select_db('ch09') )
  die("無法使用資料庫");
?>
<?
	if($_GET['bookno2'])
	{
		$bookno2=$_GET['bookno2'];
		$sql="select * from books where books.書籍編號 = $bookno2";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
	}
?>

<body>
<form name="form6" method="get" action="books.php">
修改書本名稱：
<input type="text" name="name3" value="<? echo $row[1]; ?>" maxlength="20" size="20"><br>
修改書本價格：
<input type="text" name="cost3" value="<? echo $row[2]; ?>" maxlength="6" size="20"><br>
修改員工編號：
<input type="text" name="emp3" value="<? echo $row[3]; ?>" maxlength="6" size="20"><br>
<input type="hidden" name="no3" value="<? echo $row[0]; ?>" maxlength="6" size="20"><br>
<input type="submit" value='修改'>
<input type="reset" value='重設'>
</form>
</body>
</html>

<?
	if($_GET['name3'])
	{
		$bookno3=$_GET['no3'];
		$bookname3=$_GET['name3'];
		$bookcost3=$_GET['cost3'];
		$bookemp3=$_GET['emp3'];
		
		$sql="update books set 書籍名稱='$bookname3',價格=$bookcost3, 負責員工編號=$bookemp3 where 書籍編號=$bookno3";
		$result = mysql_query($sql);
		
		echo "<br>";
		echo "你已經修改書本編號 $bookno3";
	}
	?>