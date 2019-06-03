<?
if ( ! mysql_connect("localhost", "root", "12345678") )
  die("無法連線資料庫伺服器, 請聯絡系統管理員蕭志明");
//設定連線的文字集與校對為 UTF8 編碼
mysql_query("SET NAMES utf8");
if ( ! mysql_select_db('ch09') )
  die("無法使用資料庫");
?>
<?
if($_GET['bookno1'])
{
$bookno1=$_GET['bookno1'];
$sql="delete from books where 書籍編號= $bookno1";
$result=mysql_query($sql);
echo "你已經刪除書本編號 $bookno1";
}
?>