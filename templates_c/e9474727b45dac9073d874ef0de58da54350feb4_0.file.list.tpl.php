<?php
/* Smarty version 3.1.30, created on 2019-04-03 16:38:24
  from "D:\openserver\OpenServer\domains\liza\templates\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ca4b75035bff7_26127710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9474727b45dac9073d874ef0de58da54350feb4' => 
    array (
      0 => 'D:\\openserver\\OpenServer\\domains\\liza\\templates\\list.tpl',
      1 => 1554298702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca4b75035bff7_26127710 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <div class="post-preview">
                <a href="post.php?id=<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                    <h2 class="post-title">
                        <?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

                    </h2>
                    <h3 class="post-subtitle">
                        <?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['theme'];?>

                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <hr>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
            <!-- Pager -->
            <ul class="pager">
                <?php if ($_smarty_tpl->tpl_vars['activePage']->value == 1) {?>
                    <li class="previous">
                        <p>&larr;Older Posts <p>
                    </li>
                <?php } else { ?>
                    <li class="previous">
                        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value-1;?>
">&larr;Older Posts </a>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['activePage']->value == $_smarty_tpl->tpl_vars['countPages']->value) {?>
                    <li class="next">
                        <a href="">Older Posts &rarr;</a>
                    </li>
                <?php } else { ?>
                    <li class="next">
                        <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['activePage']->value+1;?>
">Older Posts &rarr;</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div><?php }
}
