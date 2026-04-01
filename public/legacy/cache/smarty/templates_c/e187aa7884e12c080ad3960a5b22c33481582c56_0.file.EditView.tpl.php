<?php
/* Smarty version 4.5.3, created on 2026-03-17 23:29:37
  from '/var/www/html/public/legacy/modules/Configurator/tpls/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69ba3841badcc6_56336746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e187aa7884e12c080ad3960a5b22c33481582c56' => 
    array (
      0 => '/var/www/html/public/legacy/modules/Configurator/tpls/EditView.tpl',
      1 => 1773705442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ba3841badcc6_56336746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),1=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>

<form class="system-settings" name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php" onSubmit="return (add_checks(document.ConfigureSettings) && check_form('ConfigureSettings'));">
<input type='hidden' name='action' value='SaveConfig'/>
<input type='hidden' name='module' value='Configurator'/>
<span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value['main'];?>
</span>

<table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
<tr>
	<td class="action-button-top">
		<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" id="ConfigureSettings_save_button" type="submit"  name="save" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " >
		&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_BUTTON_TITLE'];?>
"  id="ConfigureSettings_restore_button"  class="button"  type="submit" name="restore" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESTORE_BUTTON_LABEL'];?>
  " >
		&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" id="ConfigureSettings_cancel_button"   onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " > </td>
	</tr>
</table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view table-system-settings">
	<tr>
		<th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['DEFAULT_SYSTEM_SETTINGS'];?>
</h4></th>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LIST_ENTRIES_PER_LISTVIEW'];?>
:</td>
		<td>
			<input type='text' size='4' id='ConfigureSettings_list_max_entries_per_page'
				   name='list_max_entries_per_page' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['list_max_entries_per_page'];?>
'>
		</td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SET_LISTVIEW_PAGINATION_TYPE'];?>
:</td>
		<td><select name="listview_pagination_type"><?php echo $_smarty_tpl->tpl_vars['listview_pagination_type']->value;?>
</select></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LIST_ENTRIES_PER_SUBPANEL'];?>
:</td>
		<td>
			<input type='text' size='4' id='ConfigureSettings_list_max_entries_per_subpanel'
				   name='list_max_entries_per_subpanel' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['list_max_entries_per_subpanel'];?>
'>
		</td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SET_SUBPANEL_PAGINATION_TYPE'];?>
:</td>
		<td><select name="subpanel_pagination_type"><?php echo $_smarty_tpl->tpl_vars['subpanel_pagination_type']->value;?>
</select></td>
	</tr>
	<tr>
		<td scope="row"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_ENTRIES_PER_MODAL'];?>
:</td>
		<td>
			<input type='text' size='4' id='ConfigureSettings_list_max_entries_per_modal' name='list_max_entries_per_modal' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['list_max_entries_per_modal'];?>
'></td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SET_RECORD_MODAL_PAGINATION_TYPE'];?>
:</td>
		<td><select name="record_modal_pagination_type"><?php echo $_smarty_tpl->tpl_vars['record_modal_pagination_type']->value;?>
</select></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LOCK_HOMEPAGE'];?>
: </td>
		<td>
			<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['lock_homepage'])) {?>
				<?php $_smarty_tpl->_assignInScope('lock_homepage_checked', 'CHECKED');?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('lock_homepage_checked', '');?>
			<?php }?>
			<input type='hidden' name='lock_homepage' value='false'>
			<input type='checkbox' name='lock_homepage' value='true' <?php echo $_smarty_tpl->tpl_vars['lock_homepage_checked']->value;?>
>
		</td>
		<td  scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LOCK_SUBPANELS'];?>
: </td>
		<td>
			<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['lock_subpanels'])) {?>
				<?php $_smarty_tpl->_assignInScope('lock_subpanels_checked', 'CHECKED');?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('lock_subpanels_checked', '');?>
			<?php }?>
			<input type='hidden' name='lock_subpanels' value='false'>
			<input type='checkbox' name='lock_subpanels' value='true' <?php echo $_smarty_tpl->tpl_vars['lock_subpanels_checked']->value;?>
>
		</td>
	</tr>
	<tr>
		<td scope="row" nowrap style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['MAX_DASHLETS'];?>
: </td>
		<td>
			<input type='text' size='4' name='max_dashlets_homepage' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['max_dashlets_homepage'];?>
'>
		</td>
		<td  scope="row" nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES'];?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES_DESC']),$_smarty_tpl);?>
</td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['use_real_names'])) {?>
			<?php $_smarty_tpl->_assignInScope('use_real_names', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('use_real_names', '');?>
		<?php }?>
		<td>
			<input type='hidden' name='use_real_names' value='false'>
			<input name='use_real_names'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['use_real_names']->value;?>
>
		</td>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['DISPLAY_RESPONSE_TIME'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['calculate_response_time'])) {?>
			<?php $_smarty_tpl->_assignInScope('calculate_response_time_checked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('calculate_response_time_checked', '');?>
		<?php }?>
		<td ><input type='hidden' name='calculate_response_time' value='false'><input name='calculate_response_time'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['calculate_response_time_checked']->value;?>
></td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MODULE_FAVICON'];?>
 &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_MODULE_FAVICON_HELP']),$_smarty_tpl);?>
 </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['default_module_favicon'])) {?>
			<?php $_smarty_tpl->_assignInScope('default_module_favicon', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('default_module_favicon', '');?>
		<?php }?>
		<td>
			<input type='hidden' name='default_module_favicon' value='false'>
			<input name='default_module_favicon'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['default_module_favicon']->value;?>
>
		</td>
	</tr>
	<tr>
		<td scope="row" width='15%' nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['SYSTEM_NAME'];?>
 </td>
		<td width='35%'>
			<input type='text' name='system_name' value='<?php echo $_smarty_tpl->tpl_vars['settings']->value['system_name'];?>
'>
		</td>
		<td scope="row" width='15%' nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MIN_AUTO_REFRESH_INTERVAL'];?>
 &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_MIN_AUTO_REFRESH_INTERVAL_HELP']),$_smarty_tpl);?>
 </td>
		<td width='35%'>
		    <select name='dashlet_auto_refresh_min' id='dashlet_auto_refresh_min'><?php echo $_smarty_tpl->tpl_vars['AUTO_REFRESH_INTERVAL_OPTIONS']->value;?>
</select>
		</td>
    </tr>
    <tr>
        <td scope="row" width='12%' nowrap>
        <?php echo $_smarty_tpl->tpl_vars['MOD']->value['CURRENT_LOGO'];?>
&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['CURRENT_LOGO_HELP']),$_smarty_tpl);?>

        </td>
        <td width='35%' >
            <img id="company_logo_image" src='<?php echo $_smarty_tpl->tpl_vars['company_logo']->value;?>
' alt=$mod_strings.LBL_LOGO>
        </td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SNOOZE_TIMER'];?>
:</td>
		<td><select name="snooze_alert_timer"><?php echo $_smarty_tpl->tpl_vars['SNOOZE_ALERT_TIMER']->value;?>
</select></td>
    </tr>
    <tr>
        <td scope="row" width='12%' nowrap>
            <?php echo $_smarty_tpl->tpl_vars['MOD']->value['NEW_LOGO'];?>
&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['NEW_LOGO_HELP_NO_SPACE']),$_smarty_tpl);?>

        </td>
        <td width='35%'>
            <div id="container_upload"></div>
            <input type='text' id='company_logo' name='company_logo' style="display:none">
        </td>
    </tr>
    <tr>
        <td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LEAD_CONV_OPTION'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LEAD_CONV_OPT_HELP']),$_smarty_tpl);?>
</td>
        <td><select name="lead_conv_activity_opt"><?php echo $_smarty_tpl->tpl_vars['lead_conv_activities']->value;?>
</select></td>
        <td><a href="./index.php?module=Administration&action=ConfigureAjaxUI" id="configure_ajax"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIG_AJAX'];?>
</a>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIG_AJAX_DESC']),$_smarty_tpl);?>
</td>
    </tr>

    <tr>
        <td scope="row" nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DISALBE_CONVERT_LEAD'];?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DISALBE_CONVERT_LEAD_DESC']),$_smarty_tpl);?>
</td>
        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['disable_convert_lead'])) {?>
            <?php $_smarty_tpl->_assignInScope('disable_convert_lead', 'CHECKED');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('disable_convert_lead', '');?>
        <?php }?>
        <td>
            <input type='hidden' name='disable_convert_lead' value='false'>
            <input name='disable_convert_lead'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['disable_convert_lead']->value;?>
>
        </td>
        <td colspan="2" class="mobile-hide">&nbsp;</td>
    </tr>

    <tr>
        <td  scope="row" nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ENABLE_ACTION_MENU'];?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_ENABLE_ACTION_MENU_DESC']),$_smarty_tpl);?>
</td>
    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'])) && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != "true") {?>
        <?php $_smarty_tpl->_assignInScope('enable_action_menu', '');?>
        <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('enable_action_menu', 'CHECKED');?>
    <?php }?>
        <td>
            <input type='hidden' name='enable_action_menu' value='false'>
            <input name='enable_action_menu'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['enable_action_menu']->value;?>
>
        </td>
        <td colspan="2" class="mobile-hide">&nbsp;</td>
    </tr>

    <tr>
        <td  scope="row" nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ENABLE_INLINE_EDITING_LIST'];?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_ENABLE_INLINE_EDITING_LIST_DESC']),$_smarty_tpl);?>
</td>
        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['enable_line_editing_list'])) && $_smarty_tpl->tpl_vars['config']->value['enable_line_editing_list'] != "true") {?>
            <?php $_smarty_tpl->_assignInScope('enable_line_editing_list', '');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('enable_line_editing_list', 'CHECKED');?>
        <?php }?>
        <td>
            <input type='hidden' name='enable_line_editing_list' value='false'>
            <input name='enable_line_editing_list'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['enable_line_editing_list']->value;?>
>
        </td>
        <td  scope="row" nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ENABLE_INLINE_EDITING_DETAIL'];?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_ENABLE_INLINE_EDITING_DETAIL_DESC']),$_smarty_tpl);?>
</td>
        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['enable_line_editing_detail'])) && $_smarty_tpl->tpl_vars['config']->value['enable_line_editing_detail'] != "true") {?>
            <?php $_smarty_tpl->_assignInScope('enable_line_editing_detail', '');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('enable_line_editing_detail', 'CHECKED');?>
        <?php }?>
        <td>
            <input type='hidden' name='enable_line_editing_detail' value='false'>
            <input name='enable_line_editing_detail' type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['enable_line_editing_detail']->value;?>
>
        </td>
    </tr>

	<tr>
		<td scope="row" nowrap><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HIDE_SUBPANELS'];?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_HIDE_SUBPANELS']),$_smarty_tpl);?>
</td>
		<?php if (((isset($_smarty_tpl->tpl_vars['config']->value['hide_subpanels'])) && $_smarty_tpl->tpl_vars['config']->value['hide_subpanels'] != "true") || !(isset($_smarty_tpl->tpl_vars['config']->value['hide_subpanels']))) {?>
			<?php $_smarty_tpl->_assignInScope('hide_subpanels', '');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('hide_subpanels', 'CHECKED');?>
		<?php }?>
		<td>
			<input type='hidden' name='hide_subpanels' value='false'>
			<input name='hide_subpanels' type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['hide_subpanels']->value;?>
>
		</td>
	</tr>

</table>

	<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view table-system-settings">

		<tr>
			<th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_TITLE'];?>
</h4></th>
		</tr>
		<tr>
			<td width="25%" scope="row" valign='middle'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_ON'];?>

				&nbsp<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_ON_DESC']),$_smarty_tpl);?>
</td>
		<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['proxy_on'])) {?>
		<?php $_smarty_tpl->_assignInScope('proxy_on_checked', 'CHECKED');?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('proxy_on_checked', '');?>
	<?php }?>
	<td width="75%" align="left"  valign='middle' colspan='3'><input type='hidden' name='proxy_on' value='0'><input name="proxy_on" id="proxy_on" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $_smarty_tpl->tpl_vars['proxy_on_checked']->value;?>
 onclick='toggleDisplay_2("proxy_config_display")'></td>
	</tr><tr>
	<td colspan="4">
	<div id="proxy_config_display" style='display:<?php echo $_smarty_tpl->tpl_vars['PROXY_CONFIG_DISPLAY']->value;?>
'>
		<table width="100%" cellpadding="0" cellspacing="1"><tr>
		<td width="15%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_HOST'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
		<td width="35%" ><input type="text" id="proxy_host" name="proxy_host" size="25"  value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['proxy_host'];?>
" tabindex='1' ></td>
		<td width="15%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_PORT'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
		<td width="35%" ><input type="text" id="proxy_port" name="proxy_port" size="6"  value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['proxy_port'];?>
" tabindex='1' ></td>
		</tr><tr>
		<td width="15%" scope="row" valign='middle'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_AUTH'];?>
</td>
	<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['proxy_auth'])) {?>
		<?php $_smarty_tpl->_assignInScope('proxy_auth_checked', 'CHECKED');?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('proxy_auth_checked', '');?>
	<?php }?>
		<td width="35%" align="left"  valign='middle' ><input type='hidden' name='proxy_auth' value='0'><input id="proxy_auth" name="proxy_auth" value="1" class="checkbox" tabindex='1' type="checkbox" <?php echo $_smarty_tpl->tpl_vars['proxy_auth_checked']->value;?>
 onclick='toggleDisplay_2("proxy_auth_display")'> </td>
		</tr>
		</table>

		<div id="proxy_auth_display" style='display:<?php echo $_smarty_tpl->tpl_vars['PROXY_AUTH_DISPLAY']->value;?>
'>

		<table width="100%" cellpadding="0" cellspacing="1"><tr>
		<td width="15%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_USERNAME'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>

		<td width="35%" ><input type="text" id="proxy_username" name="proxy_username" size="25"  value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['proxy_username'];?>
" tabindex='1' ></td>
		<td width="15%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROXY_PASSWORD'];?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
		<td width="35%" ><input type="password" id="proxy_password" name="proxy_password" size="25"  value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['proxy_password'];?>
" tabindex='1' ></td>
		</tr></table>
		</div>
	</div>
  </td>
  </tr>
 </table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view table-system-settings">
	<tr>
		<th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['ADVANCED'];?>
</h4></th>
	</tr>
	<tr>
		<td  scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['VERIFY_CLIENT_IP'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['verify_client_ip'])) {?>
			<?php $_smarty_tpl->_assignInScope('verify_client_ip_checked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('verify_client_ip_checked', '');?>
		<?php }?>
		<td><input type='hidden' name='verify_client_ip' value='false'><input name='verify_client_ip'  type="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['verify_client_ip_checked']->value;?>
></td>

		<td  scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LOG_MEMORY_USAGE'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['log_memory_usage'])) {?>
			<?php $_smarty_tpl->_assignInScope('log_memory_usage_checked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('log_memory_usage_checked', '');?>
		<?php }?>
		<td><input type='hidden' name='log_memory_usage' value='false'><input name='log_memory_usage'  type="checkbox" value='true' <?php echo $_smarty_tpl->tpl_vars['log_memory_usage_checked']->value;?>
></td>

	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LOG_SLOW_QUERIES'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['dump_slow_queries'])) {?>
			<?php $_smarty_tpl->_assignInScope('dump_slow_queries_checked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('dump_slow_queries_checked', '');?>
		<?php }?>
		<td ><input type='hidden' name='dump_slow_queries' value='false'><input name='dump_slow_queries'  type="checkbox" value='true' <?php echo $_smarty_tpl->tpl_vars['dump_slow_queries_checked']->value;?>
></td>

		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['SLOW_QUERY_TIME_MSEC'];?>
: </td>
		<td>
			<input type='text' size='5' name='slow_query_time_msec' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['slow_query_time_msec'];?>
'>
		</td>

	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['UPLOAD_MAX_SIZE'];?>
: </td>
		<td>
			<input type='text' size='8' name='upload_maxsize' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['upload_maxsize'];?>
'>
		</td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['STACK_TRACE_ERRORS'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['stack_trace_errors'])) {?>
			<?php $_smarty_tpl->_assignInScope('stack_trace_errors_checked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('stack_trace_errors_checked', '');?>
		<?php }?>
		<td ><input type='hidden' name='stack_trace_errors' value='false'><input name='stack_trace_errors'  type="checkbox" value='true' <?php echo $_smarty_tpl->tpl_vars['stack_trace_errors_checked']->value;?>
></td>
	</tr>

	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['DEVELOPER_MODE'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['developerMode'])) {?>
			<?php $_smarty_tpl->_assignInScope('developerModeChecked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('developerModeChecked', '');?>
		<?php }?>
		<td><input type='hidden' name='developerMode' value='false'><input name='developerMode'  type="checkbox" value='true' <?php echo $_smarty_tpl->tpl_vars['developerModeChecked']->value;?>
></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_VCAL_PERIOD'];?>
 <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['vCAL_HELP']),$_smarty_tpl);?>
</td>
		<td>
			<input type='text' size='4' name='vcal_time' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['vcal_time'];?>
'>
		</td>
        <td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_IMPORT_MAX_RECORDS'];?>
 <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_IMPORT_MAX_RECORDS_HELP']),$_smarty_tpl);?>
</td>
		<td>
			<input type='text' size='4' name='import_max_records_total_limit' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['import_max_records_total_limit'];?>
'>
		</td>
	</tr>

</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view logger">
<?php if ($_smarty_tpl->tpl_vars['logger_visible']->value) {?>
<tr>
<th align="left" scope="row" colspan="6"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER'];?>
</h4></th>
</tr>
	<tr>
		<td  scope="row" valign='middle'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER_FILENAME'];?>
</td>
		<td   valign='middle' >
			<input type='text' name = 'logger_file_name'  value="<?php echo $_smarty_tpl->tpl_vars['config']->value['logger']['file']['name'];?>
">
			<div><span class="small"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LOGGER_VALID_FILENAME_CHARACTERS'];?>
</span></div>
		</td>
		<td  scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER_FILE_EXTENSION'];?>
</td>
		<td><input name ="logger_file_ext" type="text" size="5" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['logger']['file']['ext'];?>
"></td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER_FILENAME_SUFFIX'];?>
</td>
		<td><select name = "logger_file_suffix" selected='<?php echo $_smarty_tpl->tpl_vars['config']->value['logger']['file']['suffix'];?>
'><?php echo $_smarty_tpl->tpl_vars['filename_suffix']->value;?>
</select></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER_MAX_LOG_SIZE'];?>
 </td>
		<td> <input name="logger_file_maxSize" size="4" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['logger']['file']['maxSize'];?>
"></td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER_DEFAULT_DATE_FORMAT'];?>
</td>
		<td><input name ="logger_file_dateFormat" type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['logger']['file']['dateFormat'];?>
"></td>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER_LOG_LEVEL'];?>
 </td>
		<td> <select name="logger_level"><?php echo $_smarty_tpl->tpl_vars['log_levels']->value;?>
</select></td>
		<td  scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_STACK_TRACE'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['stackTrace'])) {?>
			<?php $_smarty_tpl->_assignInScope('stackTraceChecked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('stackTraceChecked', '');?>
		<?php }?>
		<td><input type='hidden' name='stackTrace' value='false'><input name='stackTrace'  type="checkbox" value='true' <?php echo $_smarty_tpl->tpl_vars['stackTraceChecked']->value;?>
></td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGGER_MAX_LOGS'];?>
 </td>
		<td> <input name="logger_file_maxLogs" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['logger']['file']['maxLogs'];?>
"></td>
	</tr>
<?php }?>
	<tr>
	    <td><a href="index.php?module=Configurator&action=LogView" target="_blank"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGVIEW'];?>
</a></td>
	</tr>
</table>


<div style="padding-top: 2px;" class="btn-hide">
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" class="button primary"  type="submit" name="save" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " class="button primary"/>
		&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_BUTTON_TITLE'];?>
"  class="button"  type="submit" name="restore" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESTORE_BUTTON_LABEL'];?>
 " />
		&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " />
</div>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>


</form>

<div id='upload_panel' style="display:none">
    <form id="upload_form" name="upload_form" method="POST" action='index.php' enctype="multipart/form-data">
        <input type="file" id="my_file_company" name="file_1" size="20" onchange="uploadCheck(false)"/>
        <?php echo smarty_function_sugar_getimage(array('name'=>"sqsWait",'ext'=>".gif",'alt'=>(($tmp = $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LOADING'] ?? null)===null||$tmp==='' ? 'Loading' ?? null : $tmp),'other_attributes'=>'id="loading_img_company" style="display:none" '),$_smarty_tpl);?>

    </form>
</div>

<?php if ($_smarty_tpl->tpl_vars['error']->value['company_logo']) {
echo '<script'; ?>
 type='text/javascript'>
$(function(){alert('<?php echo $_smarty_tpl->tpl_vars['error']->value['company_logo'];?>
');});
<?php echo '</script'; ?>
>
<?php }?>


<?php echo '<script'; ?>
 type='text/javascript'>
function init_logo(){
    document.getElementById('upload_panel').style.display="inline";
    document.getElementById('upload_panel').style.position="absolute";
    YAHOO.util.Dom.setX('upload_panel', YAHOO.util.Dom.getX('container_upload'));
    YAHOO.util.Dom.setY('upload_panel', YAHOO.util.Dom.getY('container_upload')-5);
}
YAHOO.util.Event.onDOMReady(function(){
    init_logo();
});
function toggleDisplay_2(div_string){
    toggleDisplay(div_string);
    init_logo();
}
 function uploadCheck(quotes){
    //AJAX call for checking the file size and comparing with php.ini settings.
    var callback = {
        upload:function(r) {
            eval("var file_type = " + r.responseText);
            var forQuotes = file_type['forQuotes'];
            document.getElementById('loading_img_'+forQuotes).style.display="none";
            bad_image = SUGAR.language.get('Configurator',(forQuotes == 'quotes')?'LBL_ALERT_TYPE_JPEG':'LBL_ALERT_TYPE_IMAGE');
            switch(file_type['data']){
                case 'other':
                    alert(bad_image);
                    document.getElementById('my_file_' + forQuotes).value='';
                    break;
                case 'size':
                    alert(SUGAR.language.get('Configurator','LBL_ALERT_SIZE_RATIO'));
                    document.getElementById(forQuotes + "_logo").value=file_type['path'];
                    document.getElementById(forQuotes + "_logo_image").src=file_type['url'];
                    break;
                case 'file_error':
                    alert(SUGAR.language.get('Configurator','ERR_ALERT_FILE_UPLOAD'));
                    document.getElementById('my_file_' + forQuotes).value='';
                    break;
                //File good
                case 'ok':
                    document.getElementById(forQuotes + "_logo").value=file_type['path'];
                    document.getElementById(forQuotes + "_logo_image").src=file_type['url'];
                    break;
                //error in getimagesize because unsupported type
                default:
                   alert(bad_image);
                   document.getElementById('my_file_' + forQuotes).value='';
            }
        },
        failure:function(r){
            alert(SUGAR.language.get('app_strings','LBL_AJAX_FAILURE'));
        }
    }
    document.getElementById("company_logo").value='';
    document.getElementById('loading_img_company').style.display="inline";
    var file_name = document.getElementById('my_file_company').value;
    postData = '&entryPoint=UploadFileCheck&forQuotes=false';
    YAHOO.util.Connect.setForm(document.getElementById('upload_form'), true,true);
    if(file_name){
        if(postData.substring(0,1) == '&'){
            postData=postData.substring(1);
        }
        YAHOO.util.Connect.asyncRequest('POST', 'index.php', callback, postData);
    }
}

<?php echo '</script'; ?>
>

<?php }
}
