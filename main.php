<?php
include "./smarty/libs/Smarty.class.php";
define('__SITE_ROOT',
'/.amd_mnt/cs1/host/csdata/home/under/u103/tch103u/WWW/Software-Engineering/smarty');
$smarty = new Smarty();
$smarty->template_dir = __SITE_ROOT . "/templates/";
$smarty->compile_dir = __SITE_ROOT . "/templates_c/";
$smarty->config_dir = __SITE_ROOT . "/configs/";
$smarty->cache_dir = __SITE_ROOT . "/cache/";
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';
?>
