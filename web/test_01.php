<?php
// comment out the following two lines when deployed to production
function creat_sign($value){
	if (empty($value)){
		$value = time ();
	}
	echo "Data:".$value;
	echo "<br>";
	echo date('Y-m-d h:i:s', $value);
	$unSign = "timestamp=".$value;
	echo "<br>".$unSign;
	$sign_key = "KoQAW@ee@IR!Q@w348lPuh06ik4LDkJl";
	$res = $unSign.$sign_key;
	echo "<br>".$res;
	$sign = md5($res);
	echo "<br>".$sign;
}
$size = 0;
$value = !empty($_REQUEST['value'])?$_REQUEST['value']:time();
creat_sign($value);

if(!empty($_REQUEST['size'])){
	$size = $_REQUEST['size'];
	echo $size ;
	$end = round($size/1024,2);
	echo "</br>";
	echo "The size ".$size."bytes =".$end."KB"."</br>";
}	
echo "
	<meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
	<form name='input' action='test_01.php' method='get'>
	Size: <input type='text' value='{$size}' name='size'>
	Data:<input type = 'text' value='{$value}' name='value'>
	<input type='submit' value='Submit'>
	</form>
	"; 
?>


