<?php
//this is better ------------------------------------------------------------
$t1 = microtime(true);
foreach ($_POST as $key=>$value){
	$res[] = intval(substr($key,strpos($key,'_') + 1));
}
sort($res);
echo implode(' ',$res);
echo '<br />';
$t2 = microtime(true);
echo $t2 - $t1;

//this not so good -----------------------------------------------------------
$t1 = microtime(true);
$res = array();
while(list($checkbox,) = each($_POST))
{
    $res[] = intval(substr($checkbox,strpos($checkbox,'_') + 1));
}
sort($res);
echo implode(' ',$res);
echo '<br />';
$t2 = microtime(true);
echo $t2 - $t1;

