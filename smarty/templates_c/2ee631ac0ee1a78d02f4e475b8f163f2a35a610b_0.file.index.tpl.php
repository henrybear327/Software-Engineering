<?php
/* Smarty version 3.1.30, created on 2016-10-24 07:04:53
  from "/.amd_mnt/cs1/host/csdata/home/under/u103/tch103u/WWW/Software-Engineering/smarty/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580db295794ef1_93240320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ee631ac0ee1a78d02f4e475b8f163f2a35a610b' => 
    array (
      0 => '/.amd_mnt/cs1/host/csdata/home/under/u103/tch103u/WWW/Software-Engineering/smarty/templates/index.tpl',
      1 => 1477292425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580db295794ef1_93240320 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/.amd_mnt/cs1/host/csdata/home/under/u103/tch103u/WWW/Software-Engineering/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/.amd_mnt/cs1/host/csdata/home/under/u103/tch103u/WWW/Software-Engineering/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once '/.amd_mnt/cs1/host/csdata/home/under/u103/tch103u/WWW/Software-Engineering/smarty/libs/plugins/modifier.replace.php';
?>
<html>
<body>
<?php echo (smarty_modifier_capitalize($_smarty_tpl->tpl_vars['hello']->value)).(" World<br>");?>

<?php echo (smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str1']->value)).("<br>");?>

<?php echo ($_smarty_tpl->tpl_vars['str2']->value).(" Information Engineering<br>");?>

<?php echo (smarty_modifier_date_format($_smarty_tpl->tpl_vars['str3']->value,"%Yyear%mmonth%dday")).("<br>");?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['str4']->value)===null||$tmp==='' ? "NA<br>" : $tmp);?>

<?php echo (preg_replace('!^!m',str_repeat("*",8),$_smarty_tpl->tpl_vars['str5']->value)).("<br>");?>

<?php echo (mb_strtolower($_smarty_tpl->tpl_vars['str6']->value, 'UTF-8')).("<br>");?>

<?php echo (smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['str7']->value,"No","Have"),"no","have")).("<br>");?>

</body>
</html>
<?php }
}
