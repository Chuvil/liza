<?php
/* Smarty version 3.1.30, created on 2019-03-22 22:20:01
  from "D:\openserver\OpenServer\domains\liza\admin\templates\addPhoto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c95356188e8a3_55496784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac84b08bc95925990c91436abec4e377006b175' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\admin\\templates\\addPhoto.tpl',
      1 => 1553282401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c95356188e8a3_55496784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addPhoto.php" method="post" enctype="multipart/form-data">
    Введите имя файла<br>
    <input type="text" name="name"><br>
    <input type="file" name="photo" value="Загрузить фото"><br>
    <input type="submit" name="send" value="Добавить">
</form><?php }
}
