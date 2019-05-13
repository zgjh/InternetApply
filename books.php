<?
if ( ! mysql_connect("localhost", "root", "12345678"))
	die ("無法連線資料庫伺服器");
mysql_query("SET NAMES utf8");
if ( ! mysql_select_db('ch09'))
	die ("無法使用資料庫");

$sql = "select * from books";
$result = mysql_query($sql);
echo mysql_num_rows($result);
echo "<br>";
$row = mysql_fetch_array($result);

echo "<table border=2 cellpadding=0 cellspacing=0 style=color:orange>";
echo "<tr>
		<td>Book's ID</td>
		<td>Book's Name</td>
		<td>Book's Price</td>
		<td>Employee ID</td>
		</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>
		<td align=center style=color:blue>$row[0]</td>
		<td align=center style=color:green>$row[1]</td>
		<td align=center style=color:brown>$row[2]</td>
		<td align=center style=color:red>$row[3]</td>
		</tr>";
}
echo "</table>";
?>
