<?php
/* Smarty version 5.4.5, created on 2025-05-07 23:42:53
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_681bd3ddd71cd5_63089733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6725758b7d420042dc5dbb181834aeff6db8b955' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1746654172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_681bd3ddd71cd5_63089733 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_791695222681bd3ddd665f8_30171627', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_791695222681bd3ddd665f8_30171627 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
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
"/>
                    </div>
                    <div  class="col-4 col-8-xsmall"><input type="submit" value="Oblicz"  class="button primary fit " /></div>

                </div>
            </form>
    <div class="col-4 col-8-xsmall"><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personEdit"   class="button primary " >DataBaseAdd</a></div>
    <div class="col-4 col-8-xsmall"style="margin-top: 20px"><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personList"   class="button primary " >DataBaseList</a></div>
    <div class="col-4 col-8-xsmall"style="margin-top: 100px"><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"   class="button primary " >Logout</a></div>


    <span style="float:right; margin-top: -570px;position: relative" >
                <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('res')->result ?? null)))) {?>
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
