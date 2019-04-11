<?php
/* Smarty version 3.1.30, created on 2019-04-08 21:54:40
  from "D:\openserver\OpenServer\domains\liza\admin\templates\addPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cab98f0279c52_43422601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e996f04fbc5a7d36cc6b6b37580875adec8aac47' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\admin\\templates\\addPage.tpl',
      1 => 1554749678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab98f0279c52_43422601 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addPage.php" method="post" enctype="multipart/form-data">
    Заголовок<br>
    <input type="text" name="title" ><br>
    Контент на странице<br>
    <textarea name="content"></textarea><br>
    Заголовок для SEO<br>
    <textarea name="meta_title"></textarea><br>
    Описание для SEO<br>
    <textarea name="meta_desc"></textarea><br>
    Ключевые слова для SEO<br>
    <textarea name="meta_keywords"></textarea><br>
    Название страницы в БД<br>
    <input type="text" name="page">
    <input type="file" name="newImage" value="Загрузить">
    Приоритет<br>
    <input type="number" name="priority"><br>
    <input type="submit" name="send" value="Подтвердить"><br>
    <?php echo '<script'; ?>
>
        CKEDITOR.replace('content');
        CKEDITOR.replace('meta_title');
        CKEDITOR.replace('meta_desc');
        CKEDITOR.replace('meta_keywords');
    <?php echo '</script'; ?>
>
</form><?php }
}
