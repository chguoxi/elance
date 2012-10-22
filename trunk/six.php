<?php

/**
 * 获取数组中最大的值
 * 包括数组中包含的数组的值
 */
$myarray = array(2,3,400,array(4,5,329,2555,5000,array(6000,10000,array(10011,array(10022)))),array(1154,500,array(2500,array(2502,2503)))
		,110);

//echo MaxArray($myarray);
$t1 = microtime(true);
print_r(MaxArray($myarray));
echo '<br />';
$t2 = microtime(true);
echo $t2-$t1;

//this is  best --------------------------------------------------------------------
//cost 8.082389831543E-5
function MaxArray($arr) {
    $max = 0;
    foreach($arr as $a) {
        $tmp = is_array($a) ? MaxArray($a) : $a;
        $max = ($tmp > $max) ? $tmp : $max;
    }
    return $max;
}

//echo $t2-$t1;

//this is better -------------------------------------------------------------------
//cost 0.00011801719665527
function MaxArray2($arr){
	$str =  serialize($arr);
	preg_match_all('/[\d]+/',$str,$new_array);
	return max($new_array[0]);
}
//this not so good  ----------------------------------------------------------------
//cost 0.00086808204650879
function MaxArray1($arr){
	//echo '替换前:---------------------------------------------------------<br />';
	//print_r($arr);
	foreach ($arr as $key=>$val){
		if(is_array($val)){
			array_splice($arr,count($arr)-1,0,$val);
			unset($arr[$key]);
			//echo '被替换掉的是'.$key.'<br />';
			break;
		}
	}
	//echo '替换后:---------------------------------------------------------<br />';
	//print_r($arr);
	foreach ($arr as $key=>$val){
		$has_array = false;
		if(is_array($val)){
			$has_array=true;
			break;
		}
		
	}
	if($has_array){
		return MaxArray1($arr);
	}
	else {
		return max($arr);
	}
}
