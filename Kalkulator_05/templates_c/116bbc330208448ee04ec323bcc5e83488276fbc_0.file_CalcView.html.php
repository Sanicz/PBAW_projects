<?php
/* Smarty version 5.4.2, created on 2025-04-09 00:27:27
  from 'file:C:\xampp\htdocs\Kalkulator_05/app/CalcView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f5a2cf4431a6_16289150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '116bbc330208448ee04ec323bcc5e83488276fbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_05/app/CalcView.html',
      1 => 1744151223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f5a2cf4431a6_16289150 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_05\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_151848146467f5a2cf428566_05370194', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_151848146467f5a2cf428566_05370194 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_05\\app';
?>
 
            <header>
                <h2></h2>
                <p></p>
            </header>
            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc.php" id="myForm"  >
                <div class="row gtr-uniform gtr-50">
                    <div class="col-4 col-12-xsmall">
                       
                        <input type="text" name="kwota" id="id_kwota" placeholder="Kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" /></div>
                    <div class="col-4 col-12-xsmall">
                        <input type="text" name="termin" id="id_termin" placeholder="Termin" value="<?php echo $_smarty_tpl->getValue('form')->termin;?>
"/></div>
                    <div class="col-4 col-12-xsmall">
                        <input type="text" name="procentowanie" id="id_procentowanie" placeholder="Procentowanie" value="<?php echo $_smarty_tpl->getValue('form')->procentowanie;?>
"/></div>
                        <div class="col-12 col-12-xsmall"><input type="submit" value="Oblicz"  class="fit primary" /></div>
                </div>
            </form>
            
            <div class="col-4 col-12-xsmall">
                    
                    <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?> 
                        <h4>Wystąpiły błędy: </h4>
                        <ul class="err">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg');
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
               
                <?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
                    
                        <h4>Informacje: </h4>
                        <ul class="inf">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'msg');
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

                <?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
                    <h4>Wynik</h4>
                    <p class="res">
                    <?php echo $_smarty_tpl->getValue('res')->result;?>

                    </p>
                <?php }?>   
        </div>         
<?php
}
}
/* {/block 'main'} */
}
