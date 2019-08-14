<html>
<head>
<meta charset="utf-8">
<title>文件管理</title>
</head>
<body>

<?php 
define("PATH",dirname(__FILE__));
define("ANDROID", PATH."\Android");
define("HOST", "http://192.168.98.11");
$act_path = HOST."/file_input.php";
$arr_type = ['Android','ios','other'];
if (!empty($_GET['type'])) {
	$type = ($_GET['type'] == 'ios' || $_GET['type'] == 'Android') ?$_GET['type']:'other';
}else{
	$type =  "Android";
}
print <<<EOT
<div>   
<form action="{$act_path}" method="post" enctype="multipart/form-data">
<table border = "4">
    <tr>
    <td>文件夹</td>
    <td>
EOT;
foreach ($arr_type as $value) {
   if ($value == $type) {
    	echo "<input type='radio' name='type' value='$value' checked>$value";
    }else{
    	echo "<input type='radio' name='type' value='$value'>$value";
    }	
}
?>
    </td>	
    </tr>
    <trim(str)>
        <td><input type="file" name="file" value=""></td>
        <td><span style="color: red">(*请将文件大小控制在30M以下!)</span>只支持gif, jpeg, jpg, png,txt,apk,xlsx,docx格式的文件</td>
    </tr>
    <tr>
    <td>	
        <input type="submit" value="提交">
    </td>
    </tr>
</table>
</form>
</div>
</body>
</html>
