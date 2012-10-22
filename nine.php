<?php

$xmlstr= '<Address><to>James</to><from>Jani</from><heading>Reminder</heading><body>Please check your mail.</body></Address>' ;
$t1 = microtime(true);
echo ReadXml($xmlstr);
$t2 = microtime(true);

echo $t2-$t1;

function ReadXml($xmlstr)
{
	static $res = '';
	$xml = new SimpleXMLElement($xmlstr);

	if(count($xml->children()))
	{
		$res .= $xml->getName().PHP_EOL;
		foreach($xml->children() as $child)
		{
			ReadXml($child->asXML());
		}
	}
	else
	{
		$res .= $xml->getName().': '.(string)$xml.PHP_EOL;
	}

	return $res;
}

function ReadXmlBak($xmlstr){
	$newXMLStr = "<?xml version='1.0' encoding='UTF-8'?>";
	$xmlStr = $newXMLStr. $xmlstr;
	$xml = new SimpleXMLElement($xmlStr);
	$str = $xml->getName();
	foreach($xml->children() as $child)
	{
		$str .= $child->getName().':'.$child;
	}
	return $str;
}




