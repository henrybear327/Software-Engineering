<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

<?php
require("main.php");
$hello = "hello";
$smarty->assign("hello",$hello);

$str1 = "naitonal Chung Cheng University";
$smarty->assign("str1", $str1);

$str2="Computer and ";
$smarty->assign("str2", $str2);

$str3="Time";
$smarty->assign("str3", $str3);

//$str4
$smarty->assign("str4", isset($str4) ? $str4 : null);

$str5="add_8bit";
$smarty->assign("str5", $str5);

$str6="YOU CAN DO YOUR BEST !!!"; 
$smarty->assign("str6", $str6);

$str7="No pain,no gain.";
$smarty->assign("str7", $str7);
    
$memberList = [
"曾俊宏",
"陳煒杰", 
"陳雅暄", 
"陳丕祐",
"盧昱廷",
"黃鈺程",
"簡毅",
"林秉辭",
"郭晏誌",
"游智皓",
"吳宛臻",
"李晨維",
"蔡瑞予",
"歐陽欣妤",
"黃資閔",
];

$smarty->display('index.tpl');
?>

</body>
</html>
