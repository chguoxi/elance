<?php
$t1 = microtime(true);
SplitEmailAddress1('changiougx@yahoo.cn');
$t2 =microtime(true);

echo $t2-$t1;

function SplitEmailAddress($address){
	list($username,$domain) = explode('@',$address);
	$userArray = array('user'=>$username,'domain'=>$domain);
	return $userArray;
}


function SplitEmailAddress1($address)
{
	list($user, $domain) = explode('@',$address);
	return array('user' => $user, 'domain' => $domain);
}
