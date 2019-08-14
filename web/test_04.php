<?php
$arr_test01 = [1,2,3,4,5,6,7];
$arr_test02 = array(1,2,3,4,5,6);
$arr_test04 = array('a'=>1,'b'=>2,'c'=>3);
$arr_test05 =array();
$arr_test03 = array('a'=>1,'b'=>2,'c'=>3,'d'=>$arr_test05);
$arr_test06 = ['a'=>1,'b'=>2,'c'=>3];
echo count($arr_test03);
$a = array_count_values($arr_test02);
var_dump($a);

for ($i=0; $i < count($arr_test01); $i++) { 
	echo $arr_test01[$i];
	echo "&nbsp";
}

foreach ($arr_test02 as $key => $value) {
	# code...
	echo $key.":".$value;
	echo "&nbsp";
}

var_dump($arr_test02);

print_r($arr_test03);

echo("123")."</br>";
echo json_encode($arr_test01,JSON_FORCE_OBJECT);
echo "</br>";
echo json_encode($arr_test03,JSON_FORCE_OBJECT);
echo "</br>";
echo json_encode($arr_test06,JSON_FORCE_OBJECT);

function static_test(){

static $s_01 = 0;
$s_01++ ;
echo "<br>";
echo $s_01."<br>";

}

static_test();
static_test();







?>
