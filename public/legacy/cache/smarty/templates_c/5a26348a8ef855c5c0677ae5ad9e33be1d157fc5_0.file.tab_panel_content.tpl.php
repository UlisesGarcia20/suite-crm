<?php
/* Smarty version 4.5.3, created on 2026-03-17 14:38:43
  from '/var/www/html/public/legacy/themes/suite8/include/EditView/tab_panel_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69b9bbd3115d36_10368364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a26348a8ef855c5c0677ae5ad9e33be1d157fc5' => 
    array (
      0 => '/var/www/html/public/legacy/themes/suite8/include/EditView/tab_panel_content.tpl',
      1 => 1773705456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b9bbd3115d36_10368364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_field.php','function'=>'smarty_function_sugar_field',),2=>array('file'=>'/var/www/html/public/legacy/include/Smarty/plugins/function.sugar_evalcolumn.php','function'=>'smarty_function_sugar_evalcolumn',),));
?>
    <!-- tab_panel_content.tpl -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value, 'rowData', false, 'row', 'rowIteration', array (
));
$_smarty_tpl->tpl_vars['rowData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value => $_smarty_tpl->tpl_vars['rowData']->value) {
$_smarty_tpl->tpl_vars['rowData']->do_else = false;
?>
        <div class="row edit-view-row">
            {*row*}
            <?php echo smarty_function_counter(array('name'=>"columnCount",'start'=>0,'print'=>false,'assign'=>"columnCount"),$_smarty_tpl);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rowData']->value, 'colData', false, 'col', 'colIteration', array (
  'total' => true,
));
$_smarty_tpl->tpl_vars['colData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['colData']->value) {
$_smarty_tpl->tpl_vars['colData']->do_else = false;
?>
                {*column*}
                {*<!-- COLUMN -->*}
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['total'] : null) > 1 && $_smarty_tpl->tpl_vars['colData']->value['colspan'] != 3) {?>
                    <div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
">
                <?php } else { ?>
                    <div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
">
                <?php }?>

                <?php echo smarty_function_counter(array('name'=>"fieldCount",'start'=>0,'print'=>false,'assign'=>"fieldCount"),$_smarty_tpl);?>

                <?php echo smarty_function_counter(array('name'=>"addressCount",'start'=>0,'print'=>false,'assign'=>"addressCount"),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colData']->value, 'subField', false, 'field', 'fieldIteration', array (
));
$_smarty_tpl->tpl_vars['subField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['subField']->value) {
$_smarty_tpl->tpl_vars['subField']->do_else = false;
?>

                    <?php if (!(!(isset($_smarty_tpl->tpl_vars['subField']->value['name'])) || !$_smarty_tpl->tpl_vars['subField']->value['name'])) {?>
                        {*<!-- [hide!!] -->*}

                    <?php if ($_smarty_tpl->tpl_vars['fieldCount']->value < (isset($_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['total'] : null) && $_smarty_tpl->tpl_vars['addressCount']->value < 1 && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['name']) && empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideIf'])) {?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideLabel']) && $_smarty_tpl->tpl_vars['colData']->value['field']['hideLabel'] == true) {?>
                        {*hide label*}
                        <?php } else { ?>

                        {*<!-- LABEL -->*}
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_colIteration']->value['total'] : null) > 1 && $_smarty_tpl->tpl_vars['colData']->value['colspan'] != 3) {?>
                            <div class="col-xs-12 col-sm-4 label" data-label="<?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                        <?php } else { ?>
                             <div class="col-xs-12 col-sm-2 label" data-label="<?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                        <?php }?>

                                {*label*}
                                {minify}
                                <?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['customLabel']))) {?>
                                <label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['customLabel'];?>
</label>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']))) {?>
                                    {capture name="label" assign="label"}{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
                                    {$label|strip_semicolon}:
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname']))) {?>
                                    {capture name="label" assign="label"}{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}{/capture}
                                    {$label|strip_semicolon}:
                                <?php } else { ?>
                                    &nbsp;
                                <?php }?>
                                {* Show the required symbol if field is required, but override not set.  Or show if override is set *}
                                <?php if ((!empty((($tmp = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['required'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) && (!(isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) && $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) {?>
                                    <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp'])) || (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']])) && (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp']))) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['popupHelp']))) {?>
                                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupText", "popupText", null);?>
                                            {sugar_translate label="{$colData.field.popupHelp}" module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}
                                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp']))) {?>
                                        {capture name="popupText" assign="popupText"}
                                            {sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['popupHelp'];?>
" module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}
                                        {/capture}
                                    <?php }?>
                                    {sugar_help text=$popupText WIDTH=-1}
                                <?php }?>
                                {/minify}
                            </div>
                        <?php }?>

                        {*<!-- VALUE -->*}
                        <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['hideLabel']) && $_smarty_tpl->tpl_vars['colData']->value['field']['hideLabel'] == true && $_smarty_tpl->tpl_vars['colData']->value['colspan'] != 3) {?>
                            <?php $_smarty_tpl->_assignInScope('fieldClasses', "col-xs-12 col-sm-12");?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('fieldClasses', "col-xs-12 col-sm-8");?>
                        <?php }?>

                        <div class="<?php echo $_smarty_tpl->tpl_vars['fieldClasses']->value;?>
 edit-view-field <?php if ((isset($_smarty_tpl->tpl_vars['inline_edit']->value)) && !empty((($tmp = $_smarty_tpl->tpl_vars['colData']->value['field']['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) && ((($tmp = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['inline_edit'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) == 1 || !(((($tmp = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['inline_edit'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) !== null )))) {?>inlineEdit<?php }?>" type="<?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['type'] ?? null)===null||$tmp==='' ? 'varchar' ?? null : $tmp);?>
" field="<?php echo (($tmp = $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colData']->value['field']['name'] ?? null : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['colData']->value['colspan']) {?>colspan='<?php echo $_smarty_tpl->tpl_vars['colData']->value['colspan'];?>
'<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['type'])) && $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['type'] == 'phone') {?>class="phone"<?php }?>>
                            <?php if (!empty($_smarty_tpl->tpl_vars['def']->value['templateMeta']['labelsOnTop'])) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['label']))) {?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) {?>
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
">{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['label'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}:</label>
                                    <?php }?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname']))) {?>
                                    <label for="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['name'];?>
">{sugar_translate label='<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['vname'];?>
' module='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'}:</label>
                                <?php }?>

                                {* Show the required symbol if field is required, but override not set.  Or show if override is set *}
                                <?php if (($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['required'] && (!(isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) || ((isset($_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) && $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams']['required'])) {?>
                                    <span class="required" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
                                <?php }?>

                                <?php if (!(isset($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) || !empty($_smarty_tpl->tpl_vars['colData']->value['field']['label'])) {?>
                                    <br>
                                <?php }?>
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['colData']->value['field']['prefix'];?>


                            <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']] && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['fields'])) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colData']->value['field']['fields'], 'subField');
$_smarty_tpl->tpl_vars['subField']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subField']->value) {
$_smarty_tpl->tpl_vars['subField']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value['name']]) {?>
                                        {counter name="panelFieldCount" print=false}
                                        <?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'tabindex'=>(($tmp = $_smarty_tpl->tpl_vars['subfields']->value['tabindex'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['subField']->value['name']],'displayType'=>'EditView','displayParams'=>(($tmp = $_smarty_tpl->tpl_vars['subField']->value['displayParams'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'formName'=>$_smarty_tpl->tpl_vars['form_name']->value,'module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>
&nbsp;
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } elseif (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode']) && empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField'])) {?>
                                {counter name="panelFieldCount"  print=false}
                                <?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field']['customCode'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value,'accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'tabindex'=>$_smarty_tpl->tpl_vars['colData']->value['field']['tabindex']),$_smarty_tpl);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]) {?>
                                {counter name="panelFieldCount" print=false}
                                <?php echo (($tmp = $_smarty_tpl->tpl_vars['colData']->value['displayParams'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

                                <?php echo smarty_function_sugar_field(array('parentFieldArray'=>'fields','accesskey'=>$_smarty_tpl->tpl_vars['ACCKEY']->value,'tabindex'=>(($tmp = $_smarty_tpl->tpl_vars['colData']->value['field']['tabindex'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'vardef'=>$_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']],'displayType'=>'EditView','displayParams'=>(($tmp = $_smarty_tpl->tpl_vars['colData']->value['field']['displayParams'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp),'typeOverride'=>$_smarty_tpl->tpl_vars['colData']->value['field']['type'],'formName'=>$_smarty_tpl->tpl_vars['form_name']->value,'module'=>$_smarty_tpl->tpl_vars['module']->value),$_smarty_tpl);?>

                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCode']) && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['customCodeRenderField'])) {?>
                                {counter name="panelFieldCount"}
                                <?php echo smarty_function_sugar_evalcolumn(array('var'=>$_smarty_tpl->tpl_vars['colData']->value['field']['customCode'],'colData'=>$_smarty_tpl->tpl_vars['colData']->value,'tabindex'=>$_smarty_tpl->tpl_vars['colData']->value['field']['tabindex']),$_smarty_tpl);?>

                            <?php }?>
                            </div>
                            <div class="edit-dotted-border"></div>
                    <?php } else { ?>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['inline_edit']->value && !empty($_smarty_tpl->tpl_vars['colData']->value['field']['name']) && ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['inline_edit'] == 1 || !(isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['colData']->value['field']['name']]['inline_edit'])))) {?><div class="inlineEditIcon col-xs-1">
                        {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
                        </div>
                    <?php }?>

                    {*Field Exceptions*}
                    <?php if (!empty($_smarty_tpl->tpl_vars['colData']->value['field']['type'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['colData']->value['field']['type'] == 'address') {?>
                             <?php echo smarty_function_counter(array('name'=>"addressCount",'print'=>false),$_smarty_tpl);?>

                        <?php }?>
                    <?php }?>

                        <!-- [/hide] -->
                    <?php }?>

                    <?php echo smarty_function_counter(array('name'=>"fieldCount",'print'=>false),$_smarty_tpl);?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php if (intval($_smarty_tpl->tpl_vars['col']->value)%2 == 1) {?>
                <div class="clear"></div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['columnCount']->value == 0) {?>
            <div class="clear"></div>
            <?php }?>
            <?php echo smarty_function_counter(array('name'=>"columnCount",'print'=>false),$_smarty_tpl);?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
