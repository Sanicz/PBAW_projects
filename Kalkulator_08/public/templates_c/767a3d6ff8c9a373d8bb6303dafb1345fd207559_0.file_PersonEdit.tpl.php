<?php
/* Smarty version 5.4.5, created on 2025-05-08 00:09:02
  from 'file:PersonEdit.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_681bd9fed59436_63585080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767a3d6ff8c9a373d8bb6303dafb1345fd207559' => 
    array (
      0 => 'PersonEdit.tpl',
      1 => 1746655740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_681bd9fed59436_63585080 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_88740270681bd9fed510b1_21502779', 'dbase');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'dbase'} */
class Block_88740270681bd9fed510b1_21502779 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
?>

    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
personSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane osoby</legend>
                <div class="pure-control-group">
                    <label for="name">imię</label>
                    <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->getValue('form')->name;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="surname">nazwisko</label>
                    <input id="surname" type="text" placeholder="nazwisko" name="surname" value="<?php echo $_smarty_tpl->getValue('form')->surname;?>
">
                </div>
                <div class="pure-control-group">
                    <label for="birthdate">data ur.</label>
                    <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="<?php echo $_smarty_tpl->getValue('form')->birthdate;?>
">
                </div>
                <div style="margin-top: 10px"class="pure-controls">
                    <input type="submit" class="button primary" value="Save"/>
                    <a class="button primary" href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
personList">Back to List</a>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('form')->id;?>
">
        </form>
        <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
<?php
}
}
/* {/block 'dbase'} */
}
