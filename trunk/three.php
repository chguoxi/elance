<?php
//this is better ------------------------------------------------------------
//cost 2.5033950805664E-5
$t1 = microtime(true);
foreach ($_POST as $key=>$value){
    list($temp,$num) = explode('_',$key);
	$res[] = $num;
    //$res[] = intval(substr($key,strpos($key,'_') + 1));
}
sort($res);
echo implode(' ',$res);
echo '<br />';
$t2 = microtime(true);
echo $t2 - $t1;

//this not so good -----------------------------------------------------------
//cost 2.7894973754883E-5
// $t1 = microtime(true);
// $res = array();
// while(list($checkbox,) = each($_POST))
// {
//     $res[] = intval(substr($checkbox,strpos($checkbox,'_') + 1));
// }
// sort($res);
// echo implode(' ',$res);
// echo '<br />';
// $t2 = microtime(true);
// echo $t2 - $t1;

