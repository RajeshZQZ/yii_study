<?php
echo "输入字符串：";
echo "<form action='http://localhost/test.php' method='get'>";
echo "<input type='text' name='name'/>";
echo "<input type='submit' value='提交'>";
echo "</form>";

main();

function main(){
	if (!empty($_GET["name"])){
		$str = $_GET["name"];
		$pos = strpos($str , 'action');
		if ($pos === false && is_numeric($str) === true) {
			$inviteId = invite_key($str);
			echo("inviteId=".$inviteId);
		}else if($pos !== false){
			$name = str_replace('action','',$_GET["name"]);
			echo "<h2>";
	    	echo cc_format($name);
		}else{
			echo $str;
		}
	}else{
    	echo "str:".cc_format("ABC");
	}
}


function cc_format($name){
    echo "value:".$name."<br/>";
    $temp_array = array();
    for($i=0;$i<strlen($name);$i++){
        $ascii_code = ord($name[$i]);
        if($ascii_code >= 65 && $ascii_code <= 90){
            if($i == 0){
                $temp_array[] = chr($ascii_code + 32);
            }else{
                $temp_array[] = '-'.chr($ascii_code + 32);
            }
        }else{
            $temp_array[] = $name[$i];
        }
    }
    return implode('',$temp_array);
}


function invite_key($encrypt){
	$chars = '5847362091';
	$chars = str_split($chars);
	$encrypt = str_split($encrypt);
	$str = 'M';
	foreach ($encrypt as $key => $val) {
	    $str .= $chars[$val];
	}
	return $str;  
}
?>