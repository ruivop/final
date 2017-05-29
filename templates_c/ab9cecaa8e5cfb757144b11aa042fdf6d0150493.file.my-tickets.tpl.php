<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 19:03:41
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\user\my-tickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12370592a7010761ec1-30861688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9cecaa8e5cfb757144b11aa042fdf6d0150493' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\user\\my-tickets.tpl',
      1 => 1496077417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12370592a7010761ec1-30861688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a70107fead7_69648569',
  'variables' => 
  array (
    'TICKETS' => 0,
    'BASE_URL' => 0,
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a70107fead7_69648569')) {function content_592a70107fead7_69648569($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid text-left">
  <div class="row">
    <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
<div class="purchased-tickets">

  <div class="page-header">
    <h1>Purchased Tickets:</h1>
  </div>

  <ul>
  <?php  $_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ticket']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TICKETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->key => $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->_loop = true;
?>

    <li>
      <div class="ticket-info container-fluid">
        <div class="row">
          <div class="ticket-specification col-sm-6">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/show-event-page.php?id=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['meta_event_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['name'];?>
   -   <?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_type'];?>
</a>
          </div>
          <div class="col-sm-5">
            <p>Purchase date: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_purchase_date'];?>
</p>
          </div>
          <div class="download-ticket-btn col-sm-1">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
database/pdf/<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_id'];?>
.pdf"><span class="glyphicon glyphicon-download-alt"></span></a>
          </div>
        </div>
      </div>
    </li>

	<?php } ?>
  </ul>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
