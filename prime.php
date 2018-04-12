<?php
    $ncount=0;
	$num=2;?>
<table border="1px solid" align="center">
	<tr><th>Table of first 1000 prime numbers</th></tr>
<?php while($ncount<1000){
	$count=0;
		for($i=1;$i<=$num;$i++)
		{
			if($num%$i==0)
			{
				$count++;
			}
		}
	if($count<3)
			{?>
		
<tr><td align="center"><?php echo $num;?></td></tr>
	<?php $ncount=$ncount+1;			
			
			} $num=$num+1;
   		}
?>
</table>