<?php

$t1 = microtime(true);
echo GetLongestString('aa','aaa','bbbb','1','2333333333').'<br />';
$t2 = microtime(true);

echo $t2-$t1;

//this is best---------------------------------------------------------------------------
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

//------------------------------------------------------------------------------------------
//cost 2.0980834960938E-5
function GetLongestString2(){
    global $maxlength;
    $numofargs = func_num_args();
    for($i=0;$i<$numofargs;$i++){
        $string = func_get_arg($i);
        $length = strlen($string);
        if($maxlength < $length){
            $maxlength = $length;
        }
    }
    return $maxlength;
}