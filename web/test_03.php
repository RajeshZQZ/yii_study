<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>Javascript 二维码生成库：QRCode</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<script type="text/javascript" src="//cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//static.runoob.com/assets/qrcode/qrcode.min.js"></script>
</head>
<body>
<input id="text" type="text" value="http://www.baidu.com" style="width:80%" /><br />
<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>

<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>
</body>
</html>



<?php
//test
// function myTest()
// {
// static $x = 6;
// echo $x;
// $x++;
// }
// echo "----first----";
// myTest();
// echo "----secend----";
// myTest();
// echo "----third----";
// myTest();
// echo "one","tow","three";
// $a = "one"."tow"."three";
// echo "<br>".$a."</br>";
// echo "$a"."<br>";
// echo '{$a}'."<br>";
// $arr = array(1,2,3);
// echo '{$arr[0]}';

// print "1234";
// $b = print("$a");
// print("</br>");
// print $b;
// $c = print "";
// echo "<br>".$c;
// echo "<br>--------------------new------------------<br>";
// $x = 5985;
// var_dump($x);
// echo "<br>"; 
// $x = -345; // 负数 
// var_dump($x);
// echo "<br>"; 
// $x = 0x8C; // 十六进制数
// var_dump($x);
// echo "<br>";
// $x = 047; // 八进制数
// var_dump($x);
// $y = "abcde";
// var_dump($y);

// $a = array(1, 2, array("a", "b", "c"));
// var_dump($a);

// $z = null;
// var_dump( $z);


// define("ABC", "abcdefghi");
// define("abc", "eeeeeeeeeeeeeeeeee",true);
// echo abc;
// echo ABC;
// echo aBc;

// echo strlen(abc);
// echo "</br>";
// echo strlen(ABC);
// echo strpos(abc, "e");
// echo "</br>";
// $aa = 11;
// $aa += 1;
// $bb = 3;
// echo intdiv($aa, $bb);

// if($aa==11 xor $bb==3){
// 	echo "true";
// }else{
// 	echo "false";
// }
// echo "<br>";

// $test01 = isset($bb)?$bb:"nobody";
// echo $test01;

// echo PHP_EOL;

// echo "1235";
// echo "</br>";
// $username = $aa ?? 'nobody';
// $dd = true;
// $cc = $dd?:"666666666666";
// echo $username."==============".$cc;

// echo "</br>";

// //太空船运算符：

// // 整型
// echo 1 <=> 1; // 0
// echo 1 <=> 2; // -1	
// echo 2 <=> 1; // 1

// print_r(PHP_EOL); // PHP_EOL 为换行符

// // 浮点型
// echo 1.5 <=> 1.5; // 0
// echo 1.5 <=> 2.5; // -1
// echo 2.5 <=> 1.5; // 1
 
// // 字符串
// echo "a" <=> "a"; // 0
// echo "a" <=> "b"; // -1
// echo "b" <=> "a"; // 1



// echo "</br>";

// $test02 = "B";

// switch ($test02) {
// 	case 'A':
// 		# code...
// 		echo "this is A!";
// 		break;
// 	case 'B':
// 		# code...
// 		echo "this is B";
		
// 	default:
// 		# code...
// 		echo "there don`t have A and B";
// 		break;
// }

// $res = 0;
// echo "<br>";
// switch ($res) {
// 	case $res >=0:
// 		# code...
// 		echo "111111111111";
// 		break;
// 	case $res = 1:
// 		# code...
// 		echo " 2222222222222222";
// 		break;
// 	default:
// 		# code...
// 		echo "333333333333333";
// 		break;
// }

// echo "<br>"."++++++++++++++++++++++++++++++++++++++++"."<br>";
// $a= 101;
// $b = "success";
// $arr_a = array("a","b","c","d");
// $arr_b = [1,2,3,4];
// $arr_c = array('a' => 1,'b'=>2,'c'=>3,'d'=>4);
// $arr_d = ['a' => 1,'b'=>2,'c'=>3,'d'=>4];
// $arr_e = array('code' =>0 ,'data'=>['a' => 1,'b'=>2,'c'=>3,'d'=>4],'res'=>[]);
// $arr_f = ['test01'=> 0,'test02'=>$arr_c,'res'=>$arr_b,'test'=>[""]];
// $arr_g = ['code' => $a,'message' => $arr_d,'data' => $arr_f];
// $json01 = json_encode($arr_c);
// $arr_d_to_json = json_encode($arr_d);
// $arr_h = ['code' => $a,'message' => $arr_d_to_json,'data' => $json01];


// echo $arr_a[0];
// echo "<br>";
// echo $arr_b[0];
// echo "<br>";
// echo $arr_c['b'];
// echo "<br>";
// echo $arr_d['b'];
// echo "<br>";
// echo $arr_e['data']['b'];
// echo "<br>";
// echo $arr_e['code'];
// echo "<br>";
// print_r($arr_e['data']);
// echo "<br>";
// var_dump($arr_e['data']);
// echo "<br>";
// echo json_encode($arr_e['data']);
// echo "<br>"."666666666666666"."<br>";
// echo json_encode($arr_d);

// echo "<br>";

// echo json_encode($arr_e);
// echo "<br>";
// echo json_encode($arr_f);
// echo "<br>";
// echo json_encode($arr_f,JSON_FORCE_OBJECT);
// echo "<br>";
// echo json_encode($arr_g);
// echo "<br>";
// echo json_encode($arr_h);
// echo "<br>";
// json_encode($arr_g);
echo "<br>";
$img = array('01' =>"https://res.handtoutiao.com/handtoutiao_test/article/95d42a6be30b03.png",'02'=>'https://res.handtoutiao.com/handtoutiao_test/article/75d42a2d591fd3.jpg','03'=>'https://res.handtoutiao.com/handtoutiao_test/article/15d42a27db30c6.jpg','04'=>'https://res.handtoutiao.com/handtoutiao_test/article/35d4299e0d6173.jpg','05'=>'https://res.handtoutiao.com/handtoutiao_test/article/55d328f00cc868.png','06'=>'https://res.handtoutiao.com/handtoutiao_test/article/25d42a2af820dc.jpg','07'=>'https://res.handtoutiao.com/handtoutiao_test/article/35d42a36fefca1.jpg','08'=>'https://res.handtoutiao.com/handtoutiao_test/article/95d429a814432c.jpg');
img_list($img);
function img_list($arr) {
	if (is_array($arr)) {
		foreach ($arr as $key => $value) {
			echo "<a href='$value'>";
			echo "<img src = '$value' width='200' height='200' />";
			echo "</a>";
			echo "&nbsp";
		}
	}else{
		echo "<img src = 'https://res.handtoutiao.com/handtoutiao_test/article/95d42a6be30b03.png' />";
	}
}
echo "<br>";

$game_host = "http://test-game.handtoutiao.com/";
$game_img = array("icons/RegalHeroSingle.png","icons/JumpBoxSingle.png","icons/FlappyBirdSingle.png","icons/YouCanYouJumpSingle.png","icons/MagicBrickSingle.png","icons/MagicGesturesSingle.png","icons/SnakeBlockSingle.png","icons/AloofMissileSingle.png","icons/GodDodgeSingle.png");

$game_url = array("http://test-game.handtoutiao.com/games/RegalHeroSingle/index.html?v=0.5329531857011505","http://test-game.handtoutiao.com/games/JumpBoxSingle/index.html?v=0.09245000130972691","http://test-game.handtoutiao.com/games/FlappyBirdSingle/index.html?v=0.23243470688939083","http://test-game.handtoutiao.com/games/YouCanYouJumpSingle/index.html?v=0.9648033207474018","http://test-game.handtoutiao.com/games/MagicBrickSingle/index.html?v=0.8564111097951632","http://test-game.handtoutiao.com/games/MagicGesturesSingle/index.html?v=0.8290001125894031","http://test-game.handtoutiao.com/games/SnakeBlockSingle/index.html?v=0.8322269739734327","http://test-game.handtoutiao.com/games/AloofMissileSingle/index.html?v=0.948535079090526","http://test-game.handtoutiao.com/games/GodDodgeSingle/index.html?v=0.5080987987115775");

game_list($game_url,$game_img,$game_host);

function game_list($url,$img,$host){
	if (is_array($url)&&is_array($img)) {
		$i = 0 ;
		foreach ($img as $v1) {
			$img_url = $host.$v1;
			echo "<a href='$url[$i]'>";
			echo "<img src= '$img_url' width='200' height='200' />";
			echo "</br>$img_url"."</br>$url[$i]"."</br>";
			echo "</a>";
			echo "&nbsp";
			$i++;
		}
	}
}
?>

