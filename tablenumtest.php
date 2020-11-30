<style type="text/css">
	table{
		margin-top: 30px;
	}
	td{
		text-align: center;
		font-weight: bold;
	}
		td:empty {
		/*visibility: hidden;*/
}
</style>
<table border="3" align="center" >
	<col style="background-color: bisque;">
	<col style="background-color: #03b6fc;">
	<col style="background-color: #EBB6F6;">
	<col style="background-color: #F6F3B6;">
	<tr>
		<th>Odd Numbers</th>
		<th>Even Numbers</th>
		<th>5* Numbers</th>
		<th>10* Numbers</th>
		<?php
		
		for($i=1;$i<=20;$i++) {
			echo "<tr>";
			if($i % 2 !=0){
				echo "<td>$i</td>";
				echo "<td></td>";
				if ($i % 5 != 0){echo "<td></td>";}

			}
			else {
				echo "<td></td><td>$i</td>";
				if ($i % 5 != 0){echo "<td></td>";}
			}
			if ($i % 5 == 0)
				
				echo "<td>$i</td>";
			if ($i % 10 != 0){echo "<td></td>";}
			
			
			if ($i % 10 ==0){

				echo "<td>$i</td>";

			}
			echo "</tr>";
			
		}
		?>
	</table>