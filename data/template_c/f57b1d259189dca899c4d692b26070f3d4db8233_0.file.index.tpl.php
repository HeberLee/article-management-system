<?php
/* Smarty version 3.1.30, created on 2017-09-17 12:02:12
  from "D:\Software\phpstudy\WWW\mvc\tpl\index\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bdf3c480e4e8_08758014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f57b1d259189dca899c4d692b26070f3d4db8233' => 
    array (
      0 => 'D:\\Software\\phpstudy\\WWW\\mvc\\tpl\\index\\index.tpl',
      1 => 1505619188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bdf3c480e4e8_08758014 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>关于：<?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</div>
<div><a href="index.php?controller=admin&method=index">管理员登录</a></div>
<hr />
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <div>列表：</div><br/>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
    <div>标题：<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</div>
    <div>作者：<?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
</div>
    <div>内容：<?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</div>
    <div>时间：<?php echo $_smarty_tpl->tpl_vars['news']->value['dateline'];?>
</div>
    <div><a href="index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
">查看详情</a></div>
    <br/>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
    暂无数据
<?php }?>
<hr /><?php }
}
