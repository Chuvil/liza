<?php
/* Smarty version 3.1.30, created on 2019-03-29 00:03:57
  from "D:\openserver\OpenServer\domains\liza\admin\templates\delPost.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c9d36bd668319_61053126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73ab8caacb31b07bcb370df0fbcb9431cea97ec8' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\admin\\templates\\delPost.tpl',
      1 => 1553807035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9d36bd668319_61053126 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="delPost.php" method="post">
    Удалить этот пост?
    Да<input type="radio" name="del" value="yes" checked><br>
    Нет<input type="radio" name="del" value="no"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Подтвердить">
</form><?php }
}
