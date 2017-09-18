<?php
/* Smarty version 3.1.30, created on 2017-09-17 11:55:59
  from "D:\Software\phpstudy\WWW\mvc\tpl\index\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bdf24feb78d7_08581279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efee477b11719c053a1bfd92bf00cbbafc5565ef' => 
    array (
      0 => 'D:\\Software\\phpstudy\\WWW\\mvc\\tpl\\index\\sidebar.html',
      1 => 1505618762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bdf24feb78d7_08581279 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2><b class="text1">Search</b></h2>
				<form method="post" action="index.php?controller=index&method=search">
					<fieldset>
					<input type="text" id="s" name="key" value=""  style="border:1px solid grey"/>
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
<!-- end sidebar --><?php }
}
