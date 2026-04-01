<?php
/* Smarty version 4.5.3, created on 2026-03-17 14:38:43
  from '/var/www/html/public/legacy/modules/Emails/templates/emailSettingsFolders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69b9bbd30b71b6_88039826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7075daa06b9023f3d75ea6c1fcb53baa714efd99' => 
    array (
      0 => '/var/www/html/public/legacy/modules/Emails/templates/emailSettingsFolders.tpl',
      1 => 1773705443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b9bbd30b71b6_88039826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>

<table cellpadding="4" class="view">
    <tr>
        <th colspan="4">
            <h4><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_FOLDERS_TITLE'];?>
</h4>
        </th>
    </tr>
    <tr>
        <td valign="top" scope="row">
            <div class="div-title">
                <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_SETTINGS_USER_FOLDERS'];?>
:
                <div id="rollover">
                    <a href="#"
                       class="rollover"><?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_HELP'],'name'=>"helpInline",'ext'=>".gif",'other_attributes'=>'border="0" '),$_smarty_tpl);?>

                        <span><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_MULTISELECT'];?>
</span></a>
                </div>
            </div>
            <div>

                <select multiple size="8" name="userFolders[]" id="userFolders"
                        onchange="SUGAR.email2.folders.updateSubscriptions();"></select>

            </div>
        </td>

    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right">
            <input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_DONE_BUTTON_LABEL'];?>
   "
                   onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
        </td>
    </tr>
</table>
<?php }
}
