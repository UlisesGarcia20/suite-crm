<?php
/* Smarty version 4.5.3, created on 2026-03-20 13:23:31
  from '/var/www/html/public/legacy/cache/themes/suite8/modules/OAuth2Clients/DetailPassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69bd9eb36dab29_77405233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2444150e9c2776c4b4ef32d3ab7aba665b74cc' => 
    array (
      0 => '/var/www/html/public/legacy/cache/themes/suite8/modules/OAuth2Clients/DetailPassword.tpl',
      1 => 1774034611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bd9eb36dab29_77405233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),1=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),3=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>

<div class="detail-border-bottom"></div>

<?php echo '<script'; ?>
 language="javascript">
    
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['enable_action_menu']) {?>
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
"
name="Edit"
id="edit_button"
class="button primary"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=OAuth2Clients&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=OAuth2Clients&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"/>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
"
name="Duplicate"
id="duplicate_button"
class="button"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=OAuth2Clients&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=OAuth2Clients&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&isDuplicate=true'"/>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='OAuth2Clients'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> 
</div>
<?php }?>
</form>
</div>
</td>
<td align="right" width="20%" class="buttons"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div class="detail-view">
<div class="mobile-pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>

<ul class="nav nav-tabs">

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'OAuth2Clients'),$_smarty_tpl);?>

</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'OAuth2Clients'),$_smarty_tpl);?>

</a>
</li>

<?php }
if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACTIONS<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
"
name="Edit"
id="edit_button"
class="button primary"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=OAuth2Clients&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=OAuth2Clients&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"/>
<?php }?></li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?>
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
"
accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
"
name="Duplicate"
id="duplicate_button"
class="button"
type="button"
value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
"
onclick="window.location.href='index.php?module=OAuth2Clients&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&return_module=OAuth2Clients&return_action=DetailView&return_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&isDuplicate=true'"/>
<?php }?></li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='OAuth2Clients'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> </li>
</ul>
</li>
<li class="tab-inline-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</li>
<?php }?>
</ul>
<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<div class="tab-content">
<?php } else { ?>

<div class="tab-content" style="padding: 0; border: 0;">
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="varchar" field="name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['name']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="is_confidential">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_IS_CONFIDENTIAL','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="bool" field="is_confidential" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['is_confidential']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['is_confidential']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['is_confidential']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['is_confidential']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_confidential']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_confidential']['name'];?>
" value="$fields.is_confidential.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="id">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ID','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="id" field="id" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['id']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['id']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['id']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="allowed_grant_type">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALLOWED_GRANT_TYPE','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="enum" field="allowed_grant_type" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'][$_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['value']];?>

<?php }
}?>

</div>
<div class="dotted-border"></div>


</div>

</div>

</div>
<?php } else { ?>

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
<?php }?>
</div>

<div class="panel-content">





<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<?php } else { ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'OAuth2Clients'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="varchar" field="name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['name']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="is_confidential">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_IS_CONFIDENTIAL','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="bool" field="is_confidential" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['is_confidential']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['is_confidential']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['is_confidential']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['is_confidential']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_confidential']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_confidential']['name'];?>
" value="$fields.is_confidential.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="id">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ID','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="id" field="id" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['id']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!(isset($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['id']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['id']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="allowed_grant_type">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALLOWED_GRANT_TYPE','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field d-flex" type="enum" field="allowed_grant_type" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['options'][$_smarty_tpl->tpl_vars['fields']->value['allowed_grant_type']['value']];?>

<?php }
}?>

</div>
<div class="dotted-border"></div>


</div>

</div>

</div>
</div>
</div>
<?php }?>





<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PANEL_ASSIGNMENT','module'=>'OAuth2Clients'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0"  data-id="LBL_PANEL_ASSIGNMENT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="datetime" field="date_entered" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_entered" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_entered']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['created_by_name']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="datetime" field="date_modified" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_modified" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['modified_by_name']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>

</div>
</div>
</div>
<?php } else { ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PANEL_ASSIGNMENT','module'=>'OAuth2Clients'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0" data-id="LBL_PANEL_ASSIGNMENT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="date_entered">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="datetime" field="date_entered" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_entered" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_entered']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['created_by_name']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item detail-view-bordered" data-field="date_modified">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'OAuth2Clients'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field d-flex" type="datetime" field="date_modified" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id="date_modified" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['modified_by_name']['value'];?>
</span>
<?php }?>

</div>
<div class="dotted-border"></div>


</div>

</div>

</div>
</div>
</div>
<?php }?>
</div>
</div>

</form>
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>            <?php echo '<script'; ?>
 type="text/javascript" src="include/InlineEditing/inlineEditing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="modules/Favorites/favorites.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                <?php echo '</script'; ?>
>
<?php }
}
