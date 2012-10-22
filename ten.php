<?php
$arr = array(34,54,67,68,141,151,161,141,54,151,54);
$t1 = microtime(true);
GetUniqueOnes1($arr);
$t2 = microtime(true);
echo $t2-$t1;

function GetUniqueOnes($arr) {
	$diffNum = array_unique($arr);
	$numStr = implode(',',$diffNum);
	return $numStr;
}


function GetUniqueOnes1($arr)
{
	$res = implode(',',array_unique($arr));
	return $res;
}
