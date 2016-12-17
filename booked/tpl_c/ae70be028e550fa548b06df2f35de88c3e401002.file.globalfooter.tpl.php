<?php /* Smarty version Smarty-3.1.16, created on 2016-12-15 22:35:44
         compiled from "C:\xampp\htdocs\booked\tpl\globalfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:655458530cb0bbf0f6-84067789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae70be028e550fa548b06df2f35de88c3e401002' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\tpl\\globalfooter.tpl',
      1 => 1479140420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '655458530cb0bbf0f6-84067789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Version' => 0,
    'GoogleAnalyticsTrackingId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58530cb0c0d787_56762365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58530cb0c0d787_56762365')) {function content_58530cb0c0d787_56762365($_smarty_tpl) {?>

	</div><!-- close main-->

	<footer class="footer navbar">
		&copy; 2016 <a href="http://www.twinkletoessoftware.com">Twinkle Toes Software</a> <br/><a href="http://www.bookedscheduler.com">Booked Scheduler v<?php echo $_smarty_tpl->tpl_vars['Version']->value;?>
</a>
	</footer>

	<script type="text/javascript">
		init();
		$.blockUI.defaults.css.border = 'none';
		$.blockUI.defaults.css.top = '25%';
	</script>

	<?php if (!empty($_smarty_tpl->tpl_vars['GoogleAnalyticsTrackingId']->value)) {?>
		
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  
			  ga('create', '<?php echo $_smarty_tpl->tpl_vars['GoogleAnalyticsTrackingId']->value;?>
', 'auto');
			  ga('send', 'pageview');
			</script>
	<?php }?>
	</body>
</html><?php }} ?>
