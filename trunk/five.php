<?php
$t1 = microtime(true);
GeneratePassword1(3,'t3ssdd22222');
$t2 = microtime(true);
echo $t2-$t1;
//this is better ---------------------------------------------------------------
function GeneratePassword ($length,$chars)
{
	$res = '';
	$char_length = strlen($chars);
	for($i = 0; $i < $length; $i++)
	{
		$res .= $chars[rand(0,$char_length)];
	}

	return $res;
}
//this not so good -------------------------------------------------------------
function GeneratePassword1($num,$str){
	$strArray = str_split($str);
	$password = '';
	$pwdArray = array_rand($strArray,$num);
	return implode('', $pwdArray);
}



