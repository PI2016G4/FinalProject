<?php /* Smarty version Smarty-3.1.16, created on 2016-12-17 20:47:04
         compiled from "C:\xampp\htdocs\booked\tpl\Admin\Resources\manage_resources_capacity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31301585596383fd949-40985204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41870bd071cb8bc1102b2f9bd6fa1158e9476ee8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\tpl\\Admin\\Resources\\manage_resources_capacity.tpl',
      1 => 1479140418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31301585596383fd949-40985204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58559638466ef9_55670737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58559638466ef9_55670737')) {function content_58559638466ef9_55670737($_smarty_tpl) {?>
<div class="maxParticipants"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

	<?php }?>
</div><?php }} ?>
