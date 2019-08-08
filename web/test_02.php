<?php

echo "<h1>可以直接在url后带上id、c_id、url参数:";
$id = !empty($_GET['id'])?$_GET['id']:1906;
$v_id = !empty($_GET['v_id'])?$_GET['v_id']:$id;
$c_id = !empty($_GET['c_id'])?$_GET['c_id']:2;
$url=!empty($GET['url'])?$GET['url']:"http://test-webapp.handtoutiao.com/mission/home?is_task=1&local=1";
echo "</br>id=".$id."</br>c_id=".$c_id."</br>url=".$url;

//$type 1,资讯；2，视频；其他，H5；
function create_path($type=0,$id=1183,$c_id=2){
	if(0 == $type){
		//资讯详情
		$path = "koudaikj://app.launch/newsdetail?id=".$id."&c_id=".$c_id;
	}else if(1 == $type){
		//视频详情
		$path = "koudaikj://app.launch/media_detail?media_key=".$id."&c_id=".$c_id;
	}else{
		//H5页面
		$path = "koudaikj://app.launch/h5?url=".$id;
	}
	echo $path;
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
		<h1>##跳转到资讯主页:
		<a href= "koudaikj://app.launch/main">资讯</a>
		<p>
		##跳转到视频列表页:
		<a href= "koudaikj://app.launch/video">视频</a>
		<p>
		##跳转到小视频列表页:
		<a href= "koudaikj://app.launch/short_video">小视频</a>
		<p>
		##跳转到任务页:
		<a href= "koudaikj://app.launch/task">任务</a>
		<p>
		##跳转到试玩赚钱:
		<a href= "koudaikj://app.launch/jxw">试玩赚钱</a>
		<p>
		##跳转到我的页面:
		<a href= "koudaikj://app.launch/my">我的</a>
		<p>
		##跳转到某一条资讯详情页
		<a href= "<?php create_path(0,$id,$c_id); ?>">资讯详情</a>
		<p>
		##跳转到某一条视频详情页:
		<a href="<?php create_path(1,$id,$c_id); ?>" >视频详情</a>
		<p>
		##跳转到某个H5页面:
		<a href= "<?php create_path(2,$url); ?>">H5页面</a>
		</h1>
    </body>
    </html>