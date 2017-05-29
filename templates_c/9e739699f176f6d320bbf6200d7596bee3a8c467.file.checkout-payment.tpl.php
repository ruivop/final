<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 18:11:13
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\ticket\checkout-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16163592a7406ce6da5-64955640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e739699f176f6d320bbf6200d7596bee3a8c467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\ticket\\checkout-payment.tpl',
      1 => 1496074271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16163592a7406ce6da5-64955640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a7406dc8029_57701153',
  'variables' => 
  array (
    'NAME' => 0,
    'EMAIL' => 0,
    'NIF' => 0,
    'EVENT' => 0,
    'TICKETS' => 0,
    'ticket' => 0,
    'event_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a7406dc8029_57701153')) {function content_592a7406dc8029_57701153($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid text-left">
        <div class="row">
            <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
                <div class="page-header">
                  <h1> Checkout Information</h1>
                </div>
                    <div class="row checkout-card">
                        <div class="col-sm-12 tags-personal-card">
						<form method="POST" action="../../actions/event/buy_ticket.php">
                            <div class="row content-ckeckout">
                                <div class="col-sm-2">
                                    <p class="tag-checkout-card" name="name">Nome:</p>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="user" class="form-control user-name" placeholder="Name"  value="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="row content-ckeckout">
                                <div class="col-sm-2">
							        <p class="tag-checkout-card" name="email">Email:</p>
                                </div>
                                <div class="col-sm-3">
                                    <input type="email" name="email" class="form-control email" placeholder="Email"  value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" aria-describedby="basic-addon1" required>

                                </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="row content-checkout">
                                <div class="col-sm-2">
                                    <p class="tag-checkout-card">NIF:</p>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="nif" class="form-control nif" placeholder="NIF"  value="<?php echo $_smarty_tpl->tpl_vars['NIF']->value;?>
" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="row content-checkout">
                                <div class="col-sm-2">
                                    <p class="tag-checkout-card">Event:</p>
                                </div>
                                <div class="col-sm-3">
                                    <p id="evento"><?php echo $_smarty_tpl->tpl_vars['EVENT']->value;?>
</p>
                                </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="row content-checkout">
                                <div class="col-sm-2">
                                    <p class="tag-checkout-card">Type:</p>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" name="ticketType" required>
                                    <?php  $_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ticket']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TICKETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->key => $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['type_of_ticket_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_type'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ticket']->value['price'];?>
€ </option>
                                     <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="content-checkout">
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" />
                            </div>
                            <div class="row content-checkout">
                                <div class="col-sm-2">
                                    <p class="tag-checkout-card">Quantity:</p>
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" name="quantity" class="form-control" value="1" required>
                                </div>
                            </div>
                            <div class="row"><p></p></div>
                            <div class="row content-checkout">
                                <div class="col-sm-3">
                                    <p class="tag-checkout-card">    </p>
                                </div>
                                <div class="col-sm-2">
                                    <input class="btn btn-default btn-primary form-control" type="submit" value="Confirm"/>
                                </div>
                            </div>
                        </form>

                          <!--<a href="confirmation-payment.php">
                            <button class="btn btn-default btn-primary form-control">Pay with paypal</button>
                          </a>-->
                    </div>
                </div>
            </content>
    </div>
      </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
