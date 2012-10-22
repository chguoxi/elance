<?php

$t1 = microtime(true);
echo ReformatPhoneNumber1('012-345  69').'<br />';
$t2 =microtime(true);

echo $t2 - $t1;


//better------------------------------------------------------------------------------------
//cost 3.3140182495117E-5
function ReformatPhoneNumber($number)
{
	if (preg_match('/^(\d[ -]?){7,12}$/', $number, $matches))
	{
		return preg_replace('/[ -]/', '', $number);
	}

	throw new Exception('Invalid phone number');
}

//not so good------------------------------------------------------------------------------------
//cost 3.0994415283203E-5
function ReformatPhoneNumber1($number){
	if (preg_match('/^(\d[ -]?){7,12}$/', $number, $matches))
	{
		return preg_replace('/[ -]/', '', $number);
	}
	
	throw new Exception('Invalid phone number');

}


