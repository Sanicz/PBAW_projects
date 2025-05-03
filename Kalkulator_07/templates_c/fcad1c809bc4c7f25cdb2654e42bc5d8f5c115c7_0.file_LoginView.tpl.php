<?php
/* Smarty version 5.4.2, created on 2025-04-21 16:43:29
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_680659912a7181_72664846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcad1c809bc4c7f25cdb2654e42bc5d8f5c115c7' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1745246607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_680659912a7181_72664846 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_06\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_802916484680659912a0f59_25026653', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "app/views/templates/main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_802916484680659912a0f59_25026653 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_06\\app\\views';
?>

    <form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login">
        <div class="row gtr-uniform gtr-50">
            <div class="col-9 col-8-xsmall">

                <input type="text" name="login" id="id_login" placeholder="Login"/></div>
            <div class="col-9 col-8-xsmall">
                <input type="password" name="pass" id="id_pass" placeholder="Password" /></div>
            <div class="col-4 col-8-xsmall"><input type="submit" value="Zaloguj"  class="fit primary" /></div>
        </div>
    </form>
    <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
/* {/block 'main'} */
}
