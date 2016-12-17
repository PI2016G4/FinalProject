<?php /* Smarty version Smarty-3.1.16, created on 2016-12-17 20:46:15
         compiled from "C:\xampp\htdocs\booked\tpl\SearchAvailability\search-availability-results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2190458559607b8ffb6-00950152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbd470763bd9b3a14afec7a862cfad74718cfb5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\tpl\\SearchAvailability\\search-availability-results.tpl',
      1 => 1479140420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2190458559607b8ffb6-00950152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Openings' => 0,
    'opening' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58559607c30b91_21526157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58559607c30b91_21526157')) {function content_58559607c30b91_21526157($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['opening'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opening']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Openings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opening']->key => $_smarty_tpl->tpl_vars['opening']->value) {
$_smarty_tpl->tpl_vars['opening']->_loop = true;
?>
    <div class="opening"
         data-resourceid="<?php echo $_smarty_tpl->tpl_vars['opening']->value->Resource()->Id;?>
"
         data-startdate="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['opening']->value->Start(),'key'=>'system_datetime'),$_smarty_tpl);?>
"
         data-enddate="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['opening']->value->End(),'key'=>'system_datetime'),$_smarty_tpl);?>
">
        <div class="resourceName" data-resourceId="<?php echo $_smarty_tpl->tpl_vars['opening']->value->Resource()->Id;?>
" <?php if ($_smarty_tpl->tpl_vars['opening']->value->Resource()->HasColor()) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['opening']->value->Resource()->Color;?>
;color:<?php echo $_smarty_tpl->tpl_vars['opening']->value->Resource()->TextColor;?>
;"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['opening']->value->Resource()->Name;?>

        </div>
        <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable('short_reservation_date', null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['opening']->value->SameDate()) {?>
            <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable('period_time', null, 0);?>
        <?php }?>
        <div class="dates">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['opening']->value->Start(),'key'=>'res_popup'),$_smarty_tpl);?>
 -
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['opening']->value->End(),'key'=>$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl);?>

        </div>
    </div>
<?php } ?>

<?php if (count($_smarty_tpl->tpl_vars['Openings']->value)==0) {?>
    <div class="alert alert-warning">
        <i class="fa fa-frown-o"></i> There are no available times that match your search
    </div>
<?php }?><?php }} ?>
