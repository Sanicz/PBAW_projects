<?php
/* Smarty version 5.4.5, created on 2025-05-08 00:03:07
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_681bd89b7e9520_49031593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06047f52c7e398f559731c7b133ed8cf7f984b4e' => 
    array (
      0 => 'messages.tpl',
      1 => 1746655386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_681bd89b7e9520_49031593 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates';
if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>

    <h4>Informacje: </h4>
    <ul class="inf">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
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
if ($_smarty_tpl->getValue('msgs')->isError()) {?>
    <h4>Wystąpiły błędy: </h4>
    <ul class="err">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getMessages(), 'msg');
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
<?php }
}
}
