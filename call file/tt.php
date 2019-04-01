<?php
	for( $i=1; $i<=10; $i= $i+1){
	$a[ $i]=rand(1,5);
	}
	?>
	<table bgcolor=849faf width="0" border="0" align="center">
<?php
	echo "<tr>";
	for( $i=1; $i<=10; $i= $i+1){
	if( $a[$i ]==1)
		echo "<td><img src=10.png width=50 height=50></td>";
	if( $a[$i ]==2)
		echo "<td><img src=1.png width=50 height=50></td>";
	if( $a[$i ]==3)
		echo "<td><img src=2.png width=50 he, ight=50></td>";
	if( $a[$i ]==4)
		echo "<td><img src=3.png width=50 height=50></td>";
	if( $a[$i ]==5)
		echo "<td><img src=4.png width=50 height=50></td>";
	}
	echo"</tr>";
	
	?>
	
	</table>
	
	
	
	<?php
	$coun=$_POST['coun'];
	for($j=1;$j<=$coun;$j++)
	{
		printHeader($a);
		echo "<br>";
	echo "After $j Shift";
	echo "<br>";
	
	}
	?>
	
	<?php
	function printHeader(&$a) {
	
	for( $i=1; $i<=9; $i= $i+1){
	$a[ $i]=$a[$i+1];
	}
	$a[10]=6;
	?>
	<table bgcolor=849faf width="0" border="0" align="center">
<?php
	echo "<tr>";
	for( $i=1; $i<=10; $i= $i+1){
	if( $a[$i ]==1)
		echo "<td><img src=10.png width=50 height=50></td>";
	if( $a[$i ]==2)
		echo "<td><img src=1.png width=50 height=50></td>";
	if( $a[$i ]==3)
		echo "<td><img src=2.png width=50 height=50></td>";
	if( $a[$i ]==4)
		echo "<td><img src=3.png width=50 height=50></td>";
	if( $a[$i ]==5)
		echo "<td><img src=4.png width=50 height=50></td>";
	if( $a[$i ]==6)
		echo "<td><img src=16.png width=50 height=50></td>";
	}
	echo"</tr>";
	}
	?>
	</table>