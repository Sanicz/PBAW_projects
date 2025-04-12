<?php
/* Smarty version 5.4.2, created on 2025-04-12 12:49:45
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fa4549c122e3_35302934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa20395b22263a78aad10d8bfafe779a1a458a1e' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1744454984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fa4549c122e3_35302934 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_05\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_136193058667fa4549bfd0c0_18627678', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "app/views/templates/main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_136193058667fa4549bfd0c0_18627678 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_05\\app\\views';
?>
 
            <header>
                <h2></h2>
                <p></p>
            </header>
            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" id="myForm"  >
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
