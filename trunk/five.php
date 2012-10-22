<?php
$t1 = microtime(true);
GeneratePassword(3,'t3ssdd22222');
$t2 = microtime(true);
echo $t2-$t1;
//this is better ---------------------------------------------------------------
//cost 1.7166137695312E-5
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
//cost 2.0027160644531E-5
function GeneratePassword1($num,$str){
	$strArray = str_split($str);
	$password = '';
	$pwdArray = array_rand($strArray,$num);
	return implode('', $pwdArray);
}



