<?php
// 允许上传的图片后缀
header("Content-type: text/html; charset=utf-8");
define("PATH", dirname(__FILE__));
$allowedExts = array("gif", "jpeg", "jpg", "png","txt","apk","xlsx","docx","ipa","plist","crt","pfx");
$type = !empty($_POST['type'])?$_POST['type']:"other";

if (!empty($_FILES["file"]["name"])) {
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);     // 获取文件后缀名

    if (($_FILES["file"]["size"] < 31457280) && in_array($extension, $allowedExts)){
        if ($_FILES["file"]["error"] > 0){
            echo "错误：: " . $_FILES["file"]["error"] . "<br>";
        }else{
            unset($_FILES["file"]["error"]);
            var_dump($_FILES["file"]);
            
            $name = iconv('utf-8','gbk',"upload/".$type."/".$_FILES["file"]["name"]);
            $path = "upload/".$type;
            //打印上传文件的相关数据表格
            echo "<table border = '4'>";
            foreach ($_FILES["file"] as $key => $value) {
                if ($key == "size") {
                    $value = round($value/1024);
                    echo "<tr><td>$key</td><td>{$value} kB</td>";
                }else{
                    echo "<tr><td>$key</td><td>$value</td>";
                }                
            }       

            // 如果没有该目录，你需要创建它，upload 目录权限为 777            
            if (!is_dir($path)) {
                echo "<tr><td>Notice</td><td>当前目录不存在，需新建目录:{$path}</td>";
                $res = mkdir($path);
                if (!$res) {
                    exit("<tr><td><span style='color: red'>Error</span></td><td><span style='color: red'>目录新建失败~！</span></td>");
                }
            }else if (file_exists($name)) {
                // 判断当前目录下否存在该文件
                exit ("<tr><td><span style='color: red'>Error</span></td><td><span style='color: red'>文件已存在：{$name}</span></td>");
            }
            // 如果 upload 目录不存在该文件则将文件上传到该目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], $name);
            echo "<tr><td>文件存储位置</td><td>{$name}</td>";
            echo "</table>";

        }
    }else{
        echo "<span style='color: red'>非法的文件格式或文件大小，请上传下列文件类型，且小于30M： </span></br>";
        var_dump($allowedExts);
    }
}else{
    echo "未接收到上传的文件，请重新上传~！";
}
?>
