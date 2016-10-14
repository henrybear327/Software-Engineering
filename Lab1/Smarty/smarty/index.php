<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

<?php
require("main.php");
$hello = "Hello World!";
$smarty->assign("hello",$hello);
$smarty->display('index.tpl');
?>

</body>
</html>
