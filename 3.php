<?php
$num = 7;//merupakan jumlah karakter vertikal dan horisontal bernilai ganjil biar rapi
$setengah = floor($num/2);
$setengah_var = $setengah;//nilainya bisa bertambah/berkurang, sedangkan setengah tetap
$char1 = " = ";
$char2 = " @ ";
echo '<div style="font:bold 30px courier new; line-height:20px">';
//loop untuk baris
for ($row=1; $row<=$num;$row++)
{
	//loop untuk kolom
	for($col=1; $col<=$num;$col++)
	{
		$char = $col>$setengah_var && $col <=($num-$setengah_var)?$char2:$char1;
		echo $char;
		}
		$row<=$setengah?$setengah_var--:$setengah_var++;
		echo'<br>';
		
	}
	echo "</div>";
?>