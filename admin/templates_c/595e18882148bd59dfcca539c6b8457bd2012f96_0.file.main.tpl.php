<?php
/* Smarty version 3.1.30, created on 2019-04-08 21:45:55
  from "D:\openserver\OpenServer\domains\liza\admin\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cab96e387d0e3_65588475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595e18882148bd59dfcca539c6b8457bd2012f96' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\admin\\templates\\main.tpl',
      1 => 1554749129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab96e387d0e3_65588475 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="../ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
</head>
<body>

<a href="addPost.php">Добавить пост</a>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>
</html><?php }
}
