<?php
$t1 = microtime(true);
SplitEmailAddress('changiougx@yahoo.cn');
$t2 =microtime(true);

echo $t2-$t1;

//this is better ------------------------------------------------------------------------
//cost 1.3113021850586E-5
function SplitEmailAddress($address){
	list($username,$domain) = explode('@',$address);
	//return $value;
	return array('user'=>$username,'domain'=>$domain);
}

//this ont so good ------------------------------------------------------------------------
//cost 1.4781951904297E-5
// function SplitEmailAddress1($address)
// {
// 	list($user, $domain) = explode('@',$address);
// 	return array('user' => $user, 'domain' => $domain);
// }
