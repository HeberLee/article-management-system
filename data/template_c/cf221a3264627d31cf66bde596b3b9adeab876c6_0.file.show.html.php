<?php
/* Smarty version 3.1.30, created on 2017-09-17 14:23:01
  from "D:\Software\phpstudy\WWW\mvc\tpl\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59be14c5640cd1_08732585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf221a3264627d31cf66bde596b3b9adeab876c6' => 
    array (
      0 => 'D:\\Software\\phpstudy\\WWW\\mvc\\tpl\\index\\show.html',
      1 => 1505629376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59be14c5640cd1_08732585 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>有一新闻</title>
</head>
<style type="text/css">
	*{
		padding: 0px;
		margin: 0px;
	}
	.nav{
		background: lightgreen;
		width: 100%;
		height: 200px;
	}
	.nav ul{
		background: black;
		color: white;
		overflow: hidden;
	}
	.nav li{
		float: left;
		list-style: none;
		line-height: 45px;
		margin-left: 10%;
	}
	.nav .spe{
		margin-left:5%;
	}
	a{
		text-decoration: none;
		color: inherit;
		font-weight: bolder;
		text-shadow: 0 0 4px #fc6;
	}
	.content{
		width: 80%;
		margin: 0 auto;
		box-shadow: 0 0 10px lightgreen;
		padding-bottom: 40px;
		z-index: 3;
		position: absolute;
		background: white;
		top:150px;
		left:50%;
		margin-left: -40%;
		overflow: hidden;
	}
	.newslist{
		width: 70%;
		float: left;
	}
	.aboutus{
		width: 30%;
		box-sizing: border-box;
		border-left: 4px solid lightgray;
		height: 300px;
		float: left;
		margin-top: 40px;
		padding: 10px;
	}
	.list{
		width: 80%;
		margin: 40px auto;
		border: 1px dotted #ccc;
		padding: 10px;
	}
	.list h3{
		line-height: 30px;
		font-size: 18px;
	}
	.list span{
		border-left:1px solid #ccc;
		padding: 0 5px;
		font-size: 14px;
		color: #ccc;
	}
	.list p{
		text-indent: 2em;
		padding: 20px;
		font-size: 14px;
	}
</style>
<body>
	<div class="nav">
		<ul>
			<li><a href='index.php?method=index'>首页</a></li>
			<li class='spe'><a href='#'>关于我们</a></li>
		</ul>
		<p style='color:white;font-size: 30px;margin-top:30px;margin-left:10%;'><b>有一新闻 第一个php mvc实例</b></p>
	</div>
	<div class="content">
		<div class='newslist'>
			<div class="list">
				<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h3>
				<span>作者:<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</span><span>时间:<?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['data']->value['dateline']);?>
</span>
				<p><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</p>
				
			</div>
		</div>
		<div class='aboutus'>
			<h3>关于我们</h3>
			<p><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</p>
		</div>
	</div>
</body>
</html><?php }
}
