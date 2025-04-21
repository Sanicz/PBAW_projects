<?php
/* Smarty version 5.4.2, created on 2025-04-21 17:43:09
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6806678d41ee94_08157793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d5d6f091b0d3a8d5f9e2e589426e44ed1bf6e56' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1745250172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6806678d41ee94_08157793 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_06\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18732235626806678d40c260_77734041', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "app/views/templates/main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_18732235626806678d40c260_77734041 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_06\\app\\views';
?>

    <span style="float:right;">Użytkownik: <?php echo $_smarty_tpl->getValue('user')->login;?>
, rola: <?php echo $_smarty_tpl->getValue('user')->role;?>
</span>
            <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" id="myForm"  >
                <div class="row gtr-uniform gtr-50">
                    <div class="col-9 col-8-xsmall">
                        <input type="text" name="kwota" id="id_kwota" placeholder="Kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
" /></div>
                    <div class="col-9 col-8-xsmall">
                        <input type="text" name="termin" id="id_termin" placeholder="Termin" value="<?php echo $_smarty_tpl->getValue('form')->termin;?>
"/></div>
                    <div class="col-9 col-8-xsmall">
                        <input type="text" name="procentowanie" id="id_procentowanie" placeholder="Procentowanie" value="<?php echo $_smarty_tpl->getValue('form')->procentowanie;?>
"/></div>
                        <div  class="col-4 col-8-xsmall"><input type="submit" value="Oblicz"  class="button primary fit " /></div>
                        <div class="col-4 col-8-xsmall"><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"   class="button primary " >Wyloguj</a></div>
                </div>
            </form>


    <span style="float:right; margin-top: -270px;" >
                <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                <?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
                    <h4>Wynik</h4>
                    <p class="res">
                    <?php echo $_smarty_tpl->getValue('res')->result;?>

                    </p>
                <?php }?>   
    </span>
<?php
}
}
/* {/block 'main'} */
}
