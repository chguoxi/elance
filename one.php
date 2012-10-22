<?php

$t1 = microtime(true);
echo GetLongestString1('aa','aaa','bbbb','1','2333333333').'<br />';
$t2 = microtime(true);

echo $t2-$t1;


//this is better---------------------------------------------------------------------------
//cost 2.0980834960938E-5
function GetLongestString(){
    $varArray = func_get_args();
    foreach($varArray as $var){
		$allLenArray[] = strlen($var);
	}
	return  max($allLenArray);
}

//this not so good -------------------------------------------------------------------------
//cost 2.3126602172852E-5
function GetLongestString1()
{
	$params = func_get_args();
	return max(array_map("strlen", $params));
}