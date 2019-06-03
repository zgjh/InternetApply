<?
if ( ! mysql_connect("localhost", "root", "12345678") )
  die("無法連線資料庫伺服器, 請聯絡系統管理員蕭志明");
//設定連線的文字集與校對為 UTF8 編碼
mysql_query("SET NAMES utf8");
if ( ! mysql_select_db('ch09') )
  die("無法使用資料庫");
?>

<?
if($_GET['bookon'])
{
$bookon=$_GET['bookon'];
$sql="select books.書籍編號,books.書籍名稱,books.價格,employee.姓名 from books inner join  employee on books.負責員工編號=employee.員工編號 where books.書籍編號 = $bookon";
$result=mysql_query($sql) ;
}
echo "目前有幾筆資料：";
echo mysql_num_rows($result);
echo "<br>";
echo "<table   height=80 border=10>";
echo "<tr >
    <td>書籍編號</td>
    <td>書籍名稱</td>
    <td>書籍價格</td>
	<td>負責員工姓名</td>
  </tr>";
while ($row=mysql_fetch_array($result))
{
	
echo "<tr >
    <td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
  </tr>";
}
 echo "</table>";
 
?>