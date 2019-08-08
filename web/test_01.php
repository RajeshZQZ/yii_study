<?php


$param = array("timestamp"=>"1563528205","uninterested_type"=>"0","reason"=>"1","info_id"=>'1455');
$version_1 = '1.6.0';
$version_2 = '1.5.0';

$sign_1 = getSign($param,$version_1);
$sign_2 = getSign($param,$version_2);
$sign_3 = getGameCenterSign($param);

echo json_encode($param);
echo "<h2>sign_1:".$sign_1;
echo "<h2>sign_2:".$sign_2;
echo "<h2>sign_3:".$sign_3;

//$age=array("Bill"=>"35","Steve"=>"37","Elon"=>"43");

function getSign($array, $version){
	$sign_key_new_pre_new='f#K4OLCNa@nPMeJqu8uKKOR%tD#muImm';
	$sign_key_new_pre='T$K$2$uWok3#tnLF2tzAhZBeVJnngopX';
	$sign_key_new_last='pJMZ3#V4zHdgwt@IqYRL7%s%gs0Fhh6k';
	if (isset($array['sign'])){
		unset($array['sign']);
	}

	ksort($array);
	$str = "";
	foreach ($array as $k => $v) {
		$str.= $k.$v;
	}
	if ($version >= '1.6.0') {
		$sign = strtoupper(md5($sign_key_new_pre_new.$str));
	} else {
		$sign = strtoupper(md5(md5($sign_key_new_pre.$str).$sign_key_new_last));
	}
	return $sign;
}

function getGameCenterSign($array)
{
	$sign_key_new_pre_new='f#K4OLCNa@nPMeJqu8uKKOR%tD#muImm';
	ksort($array);
	$str = "";
	foreach ($array as $k => $v) {
		$str.= $k.$v;
	}
	$sign = strtoupper(md5($sign_key_new_pre_new.$str));
	return $sign;
}


?>


