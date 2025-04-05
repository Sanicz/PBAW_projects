<?php
/* Smarty version 5.4.2, created on 2025-03-25 11:46:56
  from 'file:C:\xampp\htdocs\Kalkulator_03\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e289a02715b4_15100314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27c6ba43d38f34504478ba0840c9d2e170c890b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_03\\app\\../templates/main.tpl',
      1 => 1742899058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e289a02715b4_15100314 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_03\\templates';
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
						<span class="image"><img src="C:\xampp\htdocs\Kalkulator_03\images\pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				
			<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10959385767e289a02700d2_74110709', 'main');
?>

			
			<!-- Five -->
			<section id="five" class="wrapper style2 special fade">
				<div class="container">
					<header>
						<h2>Magna faucibus lorem diam</h2>
						<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
					</header>
					<form method="post" action="#" class="cta">
						<div class="row gtr-uniform gtr-50">
							<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
							<div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
						</div>
					</form>
				</div>
			</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
class Block_10959385767e289a02700d2_74110709 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_03\\templates';
?>
 Domyślna treść .... <?php
}
}
/* {/block 'main'} */
}
