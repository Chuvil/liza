<?php
/* Smarty version 3.1.30, created on 2019-04-06 18:35:04
  from "D:\openserver\OpenServer\domains\liza\admin\templates\indexPages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca8c728c22e63_42584077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f8abcba9115e902ccd8e876b4506c136aa3fe75' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\admin\\templates\\indexPages.tpl',
      1 => 1554564678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca8c728c22e63_42584077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border="1">
        <tr>
            <th>№</th>
            <th>Название страницы</th>
            <th>Заглавное изображение</th>
            <th>Редактировать</th>
        </tr>
    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['title'];?>
</td>
            <td><img src="../img/<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" width="300px"></td>
            <td><a href="editPage.php?id=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редактировать</a></td>
        </tr>
    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
</table><?php }
}
