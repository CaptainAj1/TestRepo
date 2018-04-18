<?php 
$time_start=(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])*1000;
function primeLoop($number) 
{
    // Set default to true
    $prime = true;
    
	for ($div = 2; $div < $number; $div++) 
	{
		
		if (($number % $div) === 0) 
		{
            $prime = false;
            return $prime;
        }
    }
    // Return true or false
    return $prime;
}
?>

<div align="center">
<b>The first 1000 Prime numbers</b><br><br>
<table border="1px solid" cellpadding="10">
	<tr><th>Item #</th><th>Prime</th></tr>
<?php
	$count=0;
$i=2;
while ($count<1000) {
    if (primeLoop($i)) {
		$count++;?>			
	<tr><td align="center"><?php echo $count;?></td>
	<td align="center"><?php echo $i;?></td></tr>		
   <?php }
    $i++;
}

?>	
</table><br>
<?php 
$time_end=(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])*1000;
$execution_time=($time_end-$time_start);
echo "<b>Start time: </b>".$time_start." ms"."</br>";
echo "<b>End time: </b>".$time_end." ms"."</br>";		
echo "<b>Total execution time: </b>".$execution_time." ms"."</br>";	
?>
</div>