<?php
 include 'db/connection.php';

 $sel=mysqli_query($conn,"SELECT cid,cube_name FROM cube");
 


while($fe=mysqli_fetch_assoc($sel))
{
   $cname=$fe["cube_name"];
   $cid=$fe["cid"];
   echo "$cid - $cname  <br/>";
}

echo "<table border=1>";
	for($j=1;$j<=25;$j++)
	{
	echo "<tr>";
		for($i=1;$i<=13;$i++)
		{	
			$row="R".$j."C".$i;
			$sel=mysqli_query($conn,"SELECT * FROM cube where cube_name='$row'");
			$fe=mysqli_fetch_assoc($sel);
			echo "<td>";
			echo $row,"<br/>",$fe['cid'],"<br/>",$fe['cube_name'],"<br/>",
			$fe['load1'],"<br/>",$fe['sales'];
			echo"</td>";
		}
	echo "</tr>";
    }
echo "</table>";

?>
