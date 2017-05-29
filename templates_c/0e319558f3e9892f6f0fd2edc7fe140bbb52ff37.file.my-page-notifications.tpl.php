<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 17:54:11
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\user\my-page-notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9611592af591331f21-04771087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e319558f3e9892f6f0fd2edc7fe140bbb52ff37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\user\\my-page-notifications.tpl',
      1 => 1496072408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9611592af591331f21-04771087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592af591450ad5_68906628',
  'variables' => 
  array (
    'NOTIFICATIONS' => 0,
    'notification' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592af591450ad5_68906628')) {function content_592af591450ad5_68906628($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="container-fluid text-left">
        <div class="row">
            <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
                <div class="page-header">
                    <h1>Notifications</h1>
                </div>
				
				<?php  $_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notification']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->key => $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['notification']->value['notification_type']=='eventCommented') {?>
				<div class="notification-card-medium">
                    <div class="row">
                        <div class="col-sm-11">
                            <a class="notification-content">
                                Someone commented on the event
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/show-event-page.php?id=<?php echo $_smarty_tpl->tpl_vars['notification']->value['event_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['notification']->value['name'];?>
</a>.
                            </a>
                        </div>
                        <div class="notification-btn col-sm-1">
                            <!--TODO fazer desaparecer a notificaçao-->
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11">
                            <p class="notification-date"><span class="glyphicon glyphicon-time"></span><?php echo $_smarty_tpl->tpl_vars['notification']->value['notification_date'];?>
</p>
                        </div>
                        <div class="notification-btn col-sm-1">
                            <!--TODO mostrar coisa que gerou notificaçao-->
                            <a href="#"><span class="glyphicon glyphicon-eye-open"></span></a>
                        </div>
                    </div>
                </div>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['notification']->value['notification_type']=='eventInvitation') {?>
				<div class="notification-card-medium">
                    <div class="row">
                        <div class="col-sm-11">
                            <a class="notification-content">
                                You Were invited for 
								<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/show-event-page.php?id=<?php echo $_smarty_tpl->tpl_vars['notification']->value['event_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['notification']->value['name'];?>
</a>.
                            </a>
                        </div>
                        <div class="notification-btn col-sm-1">
                            <!--TODO fazer desaparecer a notificaçao-->
                            <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11">
                            <p class="notification-date"><span class="glyphicon glyphicon-time"></span><?php echo $_smarty_tpl->tpl_vars['notification']->value['notification_date'];?>
</p>
                        </div>
                        <div class="notification-btn col-sm-1">
                            <!--TODO mostrar coisa que gerou notificaçao-->
                            <a href="#"><span class="glyphicon glyphicon-eye-open"></span></a>
                        </div>
                    </div>
                </div>
				<?php }?>
				
				
				<?php } ?>

            </content>
        </div>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
