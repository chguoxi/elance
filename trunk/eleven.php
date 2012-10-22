<?php
//this is better--------------------------------------------------------------------
// cost 0.00014591217041016
// $t1 = microtime(true);
// $str = '';
// for($i=200;$i<=600;$i++){
// 	if($i%8==0){
// 		$str .= $i.',';
// 	}
// }
// echo substr($str, 0, strlen($str)-1 ).'<br />';
// $t2 = microtime(true);

// echo $t2-$t1;

//this not so good------------------------------------------------------------------
// cost 0.00013494491577148
$t1 = microtime(true);
for($i=200;$i<=600;$i++){
	if($i%8==0){
		echo $i;
		if($i!=600){
			echo ',';
		}
	}
}
echo '<br />';
$t2 = microtime(true);
echo $t2-$t1;

