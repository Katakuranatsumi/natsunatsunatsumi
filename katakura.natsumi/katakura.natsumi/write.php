<?php
$name = $_POST["name"];
$mail = $_POST["mail"];

$str = date("Y-m-d H:i:s")."文字列";

$str = $name.",".$mail.",".$str;

//$num = rand(1,2);
//
// if($num==1){
//     echo "あたり";
// }
// if($num==2){
//     echo "はずれ";
//}
//
//if($num==3){
//     echo "はずれのはずれ";
//}

//$ar = array("A","B","C");
//    
// var_dump($ar);
//    


//$str = "PHP5_PHP6_PHP7";
//$sr = str_replace ("PHP6","PHPX",$str_base);
//echo $sr;


//$str = "PHP5_PHP6_PHP7";
//$exp = explode(",", $str);
//var_dump($exp


?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
;
書き込みを行います。<br>
This is a Pen. とdata.txt に書き込みます。
<?php
$str = date("Y-m-d H:i:s")."文字列";
$file = fopen("data/data.txt","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fwrite($file, $str."\n");
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>

</body>
</html>