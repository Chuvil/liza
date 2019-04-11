<?php
/* Smarty version 3.1.30, created on 2019-03-29 20:40:27
  from "D:\openserver\OpenServer\domains\liza\admin\templates\editPost.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c9e588b4e8f38_29354326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded2a6aa2776731beb2521c5f764257d868dd32c' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\admin\\templates\\editPost.tpl',
      1 => 1553881113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9e588b4e8f38_29354326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="editPost.php" method="post" enctype="multipart/form-data">
    Название поста<br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    Тема поста<br>
    <input type="text" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><br>
    <textarea name="text" placeholder="Текст поста"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</textarea><br>
    <?php echo '<script'; ?>
>
        CKEDITOR.replace('text');
    <?php echo '</script'; ?>
>
    <img src="../img/posts/<?php echo $_smarty_tpl->tpl_vars['oldPhoto']->value;?>
" width="300px"><br>
    <input type="file" name="newPhoto" value="Загрузить"><br>
    <input type="submit" name="send" value="Отправить">
</form><?php }
}
