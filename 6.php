<?php
$num = 5;
$hasil = "";
for($i=2;$i<=$num;$i++)
{
	$p=0;
	for($j=$i;$j>=2;$j--)
	{
		if($i%$j==0){
			$p+=1;
			}
		}
		if($p<=2){
			$hasil.=$i.", ";
			echo $hasil."<br>";
			}
			
		}
		 
		
?>

