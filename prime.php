<?php
    $ncount=0;
	$num=2;
while($ncount<1000){
	$count=0;
		for($i=1;$i<=$num;$i++)
		{
			if($num%$i==0)
			{
				$count++;
			}
		}
	if($count<3)
			{
		
	echo $num." , ";
	$ncount=$ncount+1;			
			
			} $num=$num+1;
   		}
?>