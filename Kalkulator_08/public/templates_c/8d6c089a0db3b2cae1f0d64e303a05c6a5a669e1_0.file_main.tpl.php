<?php
/* Smarty version 5.4.5, created on 2025-05-08 00:05:47
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_681bd93b024eb9_68121756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d6c089a0db3b2cae1f0d64e303a05c6a5a669e1' => 
    array (
      0 => 'main.tpl',
      1 => 1746655545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_681bd93b024eb9_68121756 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="https://github.com/Sanicz">Oleksandr Kuzin</a></h1>





				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Kalkulator Kredytowy</h2>
						</header>
						
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				
			
			
			
			<section id="one" class="wrapper style2 special fade">
				<div class="container">
					<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1800081235681bd93b020533_43396195', 'main');
?>

					<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_153324547681bd93b023c28_10567014', 'dbase');
?>

					<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1162370286681bd93b024605_82895290', 'db2');
?>

				</div>
			</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://github.com/Sanicz" class="icon brands alt fa-github" target="_blank" ><span class="label">GitHub</span></a></li>	
					</ul>
					<ul class="copyright">
						<li>&copy;All rights reserved.</li><li>Design: Oleksandr Kuzin.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'main'} */
class Block_1800081235681bd93b020533_43396195 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates';
}
}
/* {/block 'main'} */
/* {block 'dbase'} */
class Block_153324547681bd93b023c28_10567014 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates';
}
}
/* {/block 'dbase'} */
/* {block 'db2'} */
class Block_1162370286681bd93b024605_82895290 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates';
}
}
/* {/block 'db2'} */
}
