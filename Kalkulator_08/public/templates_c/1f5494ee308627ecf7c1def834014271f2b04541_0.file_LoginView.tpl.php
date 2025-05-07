<?php
/* Smarty version 5.4.5, created on 2025-05-08 00:15:23
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_681bdb7b30b6c3_12609234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5494ee308627ecf7c1def834014271f2b04541' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1746655807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_681bdb7b30b6c3_12609234 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_413534982681bdb7b3049d0_24671230', 'main');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_413534982681bdb7b3049d0_24671230 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
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
