<?php
/* Smarty version 5.4.2, created on 2025-05-03 13:12:02
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6815fa02a60440_92703241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfa12fcd157bddf379fd3e4442865b0083cab17c' => 
    array (
      0 => 'messages.tpl',
      1 => 1745245678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6815fa02a60440_92703241 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\Kalkulator_07\\app\\views\\templates';
if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>

    <h4>Informacje: </h4>
    <ul class="inf">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'msg');
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
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg');
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
