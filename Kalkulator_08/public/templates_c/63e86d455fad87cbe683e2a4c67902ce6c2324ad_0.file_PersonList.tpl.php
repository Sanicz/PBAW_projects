<?php
/* Smarty version 5.4.5, created on 2025-05-08 00:11:19
  from 'file:PersonList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_681bda87d5a8d2_23694460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63e86d455fad87cbe683e2a4c67902ce6c2324ad' => 
    array (
      0 => 'PersonList.tpl',
      1 => 1746655874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_681bda87d5a8d2_23694460 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1485332733681bda87d4a109_00842637', 'dbase');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1580136406681bda87d4e480_43790090', 'db2');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'dbase'} */
class Block_1485332733681bda87d4a109_00842637 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
?>

    <div class="bottom-margin">
        <form class="pure-form pure-form-stacked" method="get" action="<?php echo $_smarty_tpl->getValue('conf')->app_root;?>
/ctrl.php">
            <input type="hidden" name="action" value="personList">
            <legend>Opcje wyszukiwania</legend>
            <fieldset>
                <input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->getValue('searchForm')->surname;?>
" /><br />
                <button type="submit" class="button">Filtruj</button>
            </fieldset>
        </form>
    </div>

<?php
}
}
/* {/block 'dbase'} */
/* {block 'db2'} */
class Block_1580136406681bda87d4e480_43790090 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\amelia\\app\\views';
?>


    <div class="bottom-margin">
        <a class="pure-button button-success" href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
personNew">+ Nowa osoba</a>
    </div>

    <table id="tab_people" class="pure-table pure-table-bordered">
        <thead>
        <tr>
            <th>imię</th>
            <th>nazwisko</th>
            <th>data ur.</th>
            <th>opcje</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('people'), 'p');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach0DoElse = false;
?>
            <tr><td><?php echo $_smarty_tpl->getValue('p')["name"];?>
</td><td><?php echo $_smarty_tpl->getValue('p')["surname"];?>
</td><td><?php echo $_smarty_tpl->getValue('p')["birthdate"];?>
</td><td><a style="color: #eeeeee;"class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personEdit&id=<?php echo $_smarty_tpl->getValue('p')['idperson'];?>
">Edytuj</a>&nbsp;<a style="color: #eeeeee;"class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personDelete&id=<?php echo $_smarty_tpl->getValue('p')['idperson'];?>
">Usuń</a></td></tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <div class="col-4 col-8-xsmall"><a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
calcShow"   class="button primary " >Back to Calc</a></div>
    <div class="col-4 col-8-xsmall"><a style="margin-top: 10px" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
personEdit"   class="button primary " >Back to Edit</a></div>
    <?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
/* {/block 'db2'} */
}
