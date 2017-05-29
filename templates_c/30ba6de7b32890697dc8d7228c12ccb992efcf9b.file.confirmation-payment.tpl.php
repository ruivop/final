<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 11:17:03
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\ticket\confirmation-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12251592a766b69be92-94617766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ba6de7b32890697dc8d7228c12ccb992efcf9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\ticket\\confirmation-payment.tpl',
      1 => 1496047833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12251592a766b69be92-94617766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a766b75a188_47802586',
  'variables' => 
  array (
    'USERNAME' => 0,
    'BASE_URL' => 0,
    'ID' => 0,
    'IDEVENT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a766b75a188_47802586')) {function content_592a766b75a188_47802586($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>


<div class="container-fluid text-left">
  <div class="row">
    <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-8 col-sm-offset-1 col-xs-12 page">
      <div class="payed-card">
        <div class="row">
          <h1><span class="glyphicon glyphicon-check"></span>Payment Confirmed</h1>
        </div>
        <div class="row">
          <div class="col-sm-12 tags-personal-card">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
api/ticket/getPdf.php?id=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" target="_blank">
              <button class="btn btn-default btn-primary form-control" id="download-ticket">Download ticket</button>
            </a>
          </div>
          <div class="row">
            <a href="../event/show-event-page.php?id=<?php echo $_smarty_tpl->tpl_vars['IDEVENT']->value;?>
">
              <button class="btn btn-default btn-primary form-control">Go back to event</button>
            </a>
          </div>
        </div>
      </div>
    </content>
  </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>
  document.getElementById("download-ticket").click(); // Click on the checkbox
</script>
<?php }} ?>
