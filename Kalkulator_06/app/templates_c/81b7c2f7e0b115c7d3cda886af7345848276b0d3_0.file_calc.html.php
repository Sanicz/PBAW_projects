<?php
/* Smarty version 5.4.2, created on 2025-03-25 18:35:04
  from 'file:C:\xampp\htdocs\Kalkulator_03/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e2e94860ddd8_93626046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81b7c2f7e0b115c7d3cda886af7345848276b0d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_03/app/calc.html',
      1 => 1742924098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e2e94860ddd8_93626046 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_03\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_150367125667e2e9485f8b14_23315220', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_150367125667e2e9485f8b14_23315220 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_03\\app';
?>
 
            <header>
                <h2></h2>
                <p></p>
            </header>
            <form method="post" action="../app/calc.php" id="myForm"  >
                <div class="row gtr-uniform gtr-50">
                    <div class="col-4 col-12-xsmall">
                       
                        <input type="text" name="kwota" id="id_kwota" placeholder="Kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
" /></div>
                    <div class="col-4 col-12-xsmall">
                        <input type="text" name="termin" id="id_termin" placeholder="Termin" value="<?php echo $_smarty_tpl->getValue('form')['termin'];?>
"/></div>
                    <div class="col-4 col-12-xsmall">
                        <input type="text" name="procentowanie" id="id_procentowanie" placeholder="Procentowanie" value="<?php echo $_smarty_tpl->getValue('form')['procentowanie'];?>
"/></div>
                        <div class="col-12 col-12-xsmall"><input type="submit" value="Oblicz"  class="fit primary" /></div>
                </div>
            </form>
            
            <div class="col-4 col-12-xsmall">
                    <?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
                        <h4>Wystąpiły błędy: </h4>
                        <ul class="err">
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
                    <?php }?>
                <?php }?>
                <?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?> 
                        <h4>Informacje: </h4>
                        <ul class="inf">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
                        <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                <?php }?>

                <?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
                    <h4>Wynik</h4>
                    <p class="res">
                    <?php echo $_smarty_tpl->getValue('result');?>

                    </p>
                <?php }?>   
        </div>         
<?php
}
}
/* {/block 'main'} */
}
