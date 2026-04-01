<?php
/* Smarty version 4.5.3, created on 2026-03-17 14:38:43
  from '/var/www/html/public/legacy/modules/Emails/templates/_baseConfigData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_69b9bbd30a81f6_51782808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '580f1ed949387a791bbb7b0d9df2977d1e4f94e5' => 
    array (
      0 => '/var/www/html/public/legacy/modules/Emails/templates/_baseConfigData.tpl',
      1 => 1773705442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69b9bbd30a81f6_51782808 (Smarty_Internal_Template $_smarty_tpl) {
?>
SUGAR.email2.composeLayout.charsets = <?php echo $_smarty_tpl->tpl_vars['emailCharsets']->value;?>
;
SUGAR.default_inbound_accnt_id = '<?php echo $_smarty_tpl->tpl_vars['defaultOutID']->value;?>
';
if(!SUGAR.email2.userPrefs) {
    var userPrefs = SUGAR.email2.userPrefs = <?php echo $_smarty_tpl->tpl_vars['userPrefs']->value;?>
;
}
SUGAR.email2.signatures = <?php echo $_smarty_tpl->tpl_vars['defaultSignature']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['tinyMCE']->value;?>

linkBeans = <?php echo $_smarty_tpl->tpl_vars['linkBeans']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>

<?php }
}
