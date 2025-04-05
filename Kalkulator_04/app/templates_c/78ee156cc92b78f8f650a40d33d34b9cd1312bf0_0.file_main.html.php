<?php
/* Smarty version 5.4.2, created on 2025-04-05 20:40:46
  from 'file:C:\xampp\htdocs\Kalkulator_04\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f1792e525f25_57271982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78ee156cc92b78f8f650a40d33d34b9cd1312bf0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_04\\app\\../templates/main.html',
      1 => 1742924119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f1792e525f25_57271982 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_04\\templates';
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6023962967f1792e5255f2_09955286', 'main');
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
 src="../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'main'} */
class Block_6023962967f1792e5255f2_09955286 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_04\\templates';
?>
 Domyślna treść .... <?php
}
}
/* {/block 'main'} */
}
