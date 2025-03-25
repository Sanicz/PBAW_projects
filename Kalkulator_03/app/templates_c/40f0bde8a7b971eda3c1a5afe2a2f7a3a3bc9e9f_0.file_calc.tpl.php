<?php
/* Smarty version 5.4.2, created on 2025-03-25 11:46:56
  from 'file:C:\xampp\htdocs\Kalkulator_03/app/calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e289a0037588_87815827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40f0bde8a7b971eda3c1a5afe2a2f7a3a3bc9e9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_03/app/calc.tpl',
      1 => 1742899416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e289a0037588_87815827 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_03\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_117752291867e2899fd7e370_35458688', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_117752291867e2899fd7e370_35458688 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_03\\app';
?>
 
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
    <h1>Test Smarty</h1>
<p>Kwota: <?php echo $_smarty_tpl->getValue('form')['kwota'];?>
</p>
<p>Wynik: <?php echo $_smarty_tpl->getValue('result');?>
</p>
<?php if ($_smarty_tpl->getValue('messages')) {?>
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
/* {/block 'main'} */
}
