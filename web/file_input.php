<?php
// 允许上传的图片后缀
header("Content-type: text/html; charset=utf-8");
define("PATH", dirname(__FILE__));
$allowedExts = array("gif", "jpeg", "jpg", "png","txt","apk","xlsx","docx");
$type = !empty($_POST['type'])?$_POST['type']:"other";
echo PATH;
if (!empty($_FILES["file"]["name"])) {
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);     // 获取文件后缀名

    if (($_FILES["file"]["size"] < 25504637) && in_array($extension, $allowedExts)){
        if ($_FILES["file"]["error"] > 0){
            echo "错误：: " . $_FILES["file"]["error"] . "<br>";
        }else{
            $name = iconv('utf-8','gbk',"upload/".$type."/".$_FILES["file"]["name"]);
            $path = "upload/".$type;
            echo "上传文名: " . $_FILES["file"]["name"] . "<br>";
            echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
            echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";         
            // 判断当期目录下的 upload 目录是否存在该文件
            // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
            if (!is_dir($path)) {
                echo "当前目录不存在，需新建目录:$path<br>";
                $res = mkdir($path);
                if ($res) {
                    echo "目录新建成功~!<br>";
                }else{
                    exit("目录新建失败,脚本终止~!");
                }
            }else{          
                if (file_exists($name)){
                    exit ($name . " 文件已经存在。");
                }
            }
            // 如果 upload 目录不存在该文件则将文件上传到该目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], $name);
            echo "文件存储在:upload/".$type."/".$_FILES["file"]["name"];
        }
    }else{
        echo "非法的文件格式，请上传下列文件类型："."<br>";
        var_dump($allowedExts);
    }
}else{
    echo "未接收到上传的文件，请重新上传~！";
}
?>
