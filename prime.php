<?php $time_start=(microtime(true)-$_SERVER["REQUEST_TIME_FLOAT"])*1000;
function primeno($num)
 {   
	if($num<2)
		return false;
	if($num==2)
		return true;
	if(($num%2)==0)
		return false;
	$prime=true;
	 $limit=sqrt($num)+1;
		for($div=3;$div<$limit;$div+=2)
		{
			if($num%$div==0)
			{
				$prime=false;
				return $prime;
			}
		}
	 return $prime;
  }
function Isprime($pno)
{
if($pno<2)
		return false;
	if($pno==2)
		return true;
	if(($pno%2)==0)
		return false;
	$result=true;
	 $sqrt=sqrt($pno)+1;
		for($selected=3;$selected<$sqrt;$selected++)
		{
			if($pno%$selected==0)
			{
				$result=false;
				return $result;
			}
		}
	 return $result;	
}
?>

<div align="center">
<b>The first 1000 Prime numbers</b><br><br>
<table border="1px solid" cellpadding="10">
<tr><th>Item #</th><th>Prime</th></tr>

<?php	
	 $ncount=0;
     $i=1;
     $element=1;
	 $foundPrimes= array();
for($x=0;$x<=100;$x++)
{
	if (primeno($element))
	{
		array_push($foundPrimes,$element);
    }
    $element++;
}
	foreach($foundPrimes as $selected){
	}
	
 while($ncount<1000)
{
	if (Isprime($i))
	{
		$ncount++;?>
    <tr><td align="center"><?php echo $ncount;?></td>
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