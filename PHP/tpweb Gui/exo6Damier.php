<?php
echo "<table>";

for ($i = 0; $i < 10; $i++){
	echo "<tr>";
	for ($j=0; $j < 5; $j++){
		if ($i % 2 == 0){
			echo"<td bgcolor = #FFFFFF>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
			echo"<td bgcolor = #000000>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
			
		}
		else{
			
			echo"<td bgcolor = #000000>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
			echo"<td bgcolor = #FFFFFF>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
		}	
	}
	echo"</tr>";
}
echo"</table>" ;



?>