<!DOCTYPE html >
<html>
<head>
<title>Javascript 二维码生成库：QRCode</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<script type="text/javascript" src="//cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//static.runoob.com/assets/qrcode/qrcode.min.js"></script>
</head>
<body>
<input id="text" type="text" value="www.baidu.com" style="width:20%" /><br />

<?php 
define("PATH", dirname(__FILE__));

$id = "test";
print <<<EOT
	<div id="$id" style="width:200px; height:200px; margin-top:15px;"></div>
	<script type="text/javascript">
	var qrcode = new QRCode(document.getElementById('$id'), {
		width : 200,
		height : 200,
	});
	var apk_url = "www.qq.com";
	makeCode(apk_url);
EOT;
?>

$("#text").
on("blur", function () {
makeCode();
}).
on("keydown", function (e) {
	if (e.keyCode == 13) {
    makeCode();
	}
});


function makeCode (url='') {     
    var elText = document.getElementById("text"); 
    var el_url = elText.value;
	if (!url) {
		if (!elText) {
			end_url ="www.baidu.com";
		}else{
			end_url = el_url;
		}
	}else{
		end_url = url;
	}
    console.log("el_url:"+el_url);
    console.log("end_url:"+end_url);
    qrcode.makeCode(end_url);
    
}

</script>
</body>
</html>

