<?php
/* Smarty version 3.1.30, created on 2019-03-18 17:31:07
  from "D:\openserver\OpenServer\domains\liza\templates\post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c8fababcf5326_91706525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '965f7d8a09ed481e27e75867ea8de2a4498c97bb' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\templates\\post.tpl',
      1 => 1552919465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8fababcf5326_91706525 (Smarty_Internal_Template $_smarty_tpl) {
?>
<article>
    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <img src="img/posts/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['date']->value;?>

    </div>
</article><?php }
}
