<?php
//This is for the merge conflict

$str = "hello world";
echo md5($str) . "<br>";
echo sha1($str) . "<br>";
echo hash("sha256", $str) . "<br>";

hashTime("md5", $str);
hashTime("sha1", $str);
hashTime("sha256", $str);

function hashTime ($hashFun, $str, $reps=100000){
	
	$t0 = microtime();
	
	echo "processing..." . "<br>";;
	if ($hashFun == "md5")
		for($i = 0; $i < $reps; $i++)
			md5($str);
	else if ($hashFun == "sha1")
		for($i = 0; $i < $reps; $i++)
			sha1($str);
	else 
		for($i = 0; $i < $reps; $i++)
			hash("sha256", $str);
	$t1 = microtime();
	echo "done." . "<br>";
	
	echo $t0 . "<br>";
	echo $t1 . "<br>";
	echo ($t1 - $t0) . "<br>";
}
?>
