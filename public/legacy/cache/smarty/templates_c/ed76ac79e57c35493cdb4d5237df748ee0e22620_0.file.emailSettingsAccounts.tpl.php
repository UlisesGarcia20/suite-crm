<?php
/* Smarty version 4.5.3, created on 2026-03-17 14:38:43
  from '/var/www/html/public/legacy/modules/Emails/templates/emailSettingsAccounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69b9bbd30b8a32_37200274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed76ac79e57c35493cdb4d5237df748ee0e22620' => 
    array (
      0 => '/var/www/html/public/legacy/modules/Emails/templates/emailSettingsAccounts.tpl',
      1 => 1773705443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsAccountDetails.tpl' => 1,
  ),
),false)) {
function content_69b9bbd30b8a32_37200274 (Smarty_Internal_Template $_smarty_tpl) {
?><table cellpadding="4" cellspacing="0" border="0" width="100%" class="view">
	<tr>
		<td NOWRAP>
			<?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccountDetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</td>
	</tr>
    	<tr>
                                	<td align="right">
                                	   <input type="button" class="button" style="margin-left:5px;" value="   <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_DONE_BUTTON_LABEL'];?>
   " onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
                                    </td>
                            	</tr>
	

</table>
<?php }
}
