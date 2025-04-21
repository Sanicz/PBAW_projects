<?php
/* Smarty version 5.4.2, created on 2025-04-12 12:49:45
  from 'file:app/views/templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fa4549dde251_52573194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02be8bc91b12234eb7bb94a9417f3a44401b1f17' => 
    array (
      0 => 'app/views/templates/main.tpl',
      1 => 1744230972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fa4549dde251_52573194 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_05\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../../../assets/css/noscript.css" /></noscript>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12338868767fa4549ddd4c1_97172810', 'main');
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
class Block_12338868767fa4549ddd4c1_97172810 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_05\\app\\views\\templates';
?>
 Domyślna treść .... <?php
}
}
/* {/block 'main'} */
}
