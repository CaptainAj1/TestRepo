<div align="center">
<b>The first 1000 Prime numbers</b><br><br>
<table border="1px solid" cellpadding="10">
	<tr><th>Item #</th><th>Prime</th></tr>
<?php
$time_start=(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])*1000;
 function primeno($n){   
  $ncount=0;
  $num=2;
 while($ncount<$n)
{
	$div_count=0;
		for($i=1;$i<=$num;$i++)
		{
			if($num%$i==0)
			{
				$div_count++;
			}
		}
	if($div_count<3)
			{
	    $ncount=$ncount+1;?>			
	<tr><td align="center"><?php echo $ncount;?></td>
	<td align="center"><?php echo $num;?></td></tr>				
			<?php } 
	$num=$num+1;
   		}
	}
	primeno(1000)?>
</table><br>
<?php 
$time_end=(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])*1000;
$execution_time=($time_end-$time_start);
echo "<b>Start time: </b>".$time_start." ms"."</br>";
echo "<b>End time: </b>".$time_end." ms"."</br>";		
echo "<b>Total execution time: </b>".$execution_time." ms"."</br>";	
?>
</div>