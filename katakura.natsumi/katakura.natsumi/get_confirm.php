<?php

 $name = $_GET["name"];
 $mail = $_GET["mail"];



echo '<div id="resolut0"><p id="picture"><img src="img/mig-4.jpeg" class="tomjeri"></p><div class="hukidashi"><div id="balloon1-1"><p clas
s="name0">名前:<?=$name?></p></div><div id="balloon1-2"><p class="mail0">MAIL:<?=$mail?></p></div><div id="balloon1-3"><p class="seibetsu0">性別:<?=$gender?></p></div><div id="balloon1-4"><p class="lover">好きな人:<?=$human?></p></div><div id="balloon1-5"><p class="naze0">理由:<?=$kansou?></p></div></div></div>';

echo '<div id="resolut0"><p id="picture"><img src="img/cn_character_img_pc_1317404606.jpg" width="400" height="300" class="tweetie"></p><div class="hukidashi1"><div id="balloon1-6"><p class="name0">名前:<?=$name?></p></div><div id="balloon1-7"><p class="mail0">MAIL:<?=$mail?></p></div><div id="balloon1-8"><p class="seibetsu0">性別:<?=$gender?></p></div><div id="balloon1-9"><p class="lover">好きな人:<?=$human?></p></div><div id="balloon1-10"><p class="naze0">理由:<?=$kansou?></p></div></div></div>';

        
echo '<div id="resolut0"><div class="hukidashi2"><div id="balloon1-11"><p class="name0">名前:<?=$name?></p></div><div id="balloon1-12"><p class="mail0">MAIL:<?=$mail?></p></div><div id="balloon1-13"><p class="seibetsu0">性別:<?=$gender?></p></div><div id="balloon1-14"><p class="lover">好きな人:<?=$human?></p></div><div id="balloon1-15"><p class="naze0">理由:<?=$kansou?></p></div></div><p id="picture"><img src="img/ny7uz.jpeg" width="180" height="320" class="bucks"></p></div>';
?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
お名前：<?php echo $name; ?>
Mail：<?php echo $name; ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>