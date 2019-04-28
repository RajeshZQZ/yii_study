<?php
// comment out the following two lines when deployed to production
$time = time();
echo $time;
echo "<br>";
echo date('Y-m-d h:i:s', time());
$unSign = "timestamp=".$time;
echo "<br>".$unSign;
$sign_key = "KoQAW@ee@IR!Q@w348lPuh06ik4LDkJl";
$res = $unSign.$sign_key;
echo "<br>".$res;
$sign = md5($res);
echo "<br>".$sign;

echo "
<form name="input" action="test.php" method="get">
Size: <input type="text" name="size">
<input type="submit" value="Submit">
</form> 
";
