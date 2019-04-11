<?php
/* Smarty version 3.1.30, created on 2019-03-18 18:21:59
  from "D:\openserver\OpenServer\domains\liza\admin\templates\addPost.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c8fb79725ebc1_22213388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c0dbe2debbf476a2091d6a5196f8623e969d4aa' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\admin\\templates\\addPost.tpl',
      1 => 1552922518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8fb79725ebc1_22213388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addPost.php" method="post" enctype="multipart/form-data">
    Название поста<br>
    <input type="text" name="name"><br>
    Тема поста<br>
    <input type="text" name="theme"><br>
    <textarea name="text" placeholder="Текст поста"></textarea><br>
    <?php echo '<script'; ?>
>
        CKEDITOR.replace('text');
    <?php echo '</script'; ?>
>
    <input type="file" name="photo" value="Загрузить"><br>
    <input type="submit" name="send" value="Отправить">
</form><?php }
}
