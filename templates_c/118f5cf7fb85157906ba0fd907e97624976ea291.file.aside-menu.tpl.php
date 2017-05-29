<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 08:36:15
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\aside-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31965592a6fdfb27020-95145338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118f5cf7fb85157906ba0fd907e97624976ea291' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\aside-menu.tpl',
      1 => 1495951245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31965592a6fdfb27020-95145338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6fdfba8621_60991890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6fdfba8621_60991890')) {function content_592a6fdfba8621_60991890($_smarty_tpl) {?><!--<div class="container-fluid text-left">
    <div class="row">
        <content class="col-lg-offset-10 col-lg-2 col-md-offset-9 col-md-3   col-sm-3 col-sm-offset-9">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            <!--<div id="sidebar" class="well sidebar-nav">
                <h5><i class="glyphicon glyphicon-home"></i>
                    <small><b>Events</b></small>
                </h5>
            <div class="aside-user-buttons">
                <div class="list-group">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/user-homepage.php" class="list-group-item">Upcoming Events</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-attended.php" class="list-group-item">Past Events</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-my-events.php" class="list-group-item">My Events</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-invitations.php" class="list-group-item">Invitations</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-notifications.php" class="list-group-item">Notifications</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-tickets.php" class="list-group-item">My Tickets</a>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/my-page-new-event.php" class="btn btn-primary btn-lg">Create Event</a>
            </div>
        </content>
    </div>
</div>-->

<!-- TODO POR O MENU A DESAPARECER NA VERSAO MOBILE-->

<div class="container-fluid text-left">
    <div class="row">
        <content class="col-lg-offset-10 col-lg-2 col-md-offset-9 col-md-3 col-sm-3 col-sm-offset-9">
            <div id="sidebar" class="well sidebar-nav">
                <h5><i class="glyphicon glyphicon-home"></i>
                    <small><b>Events</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a class="selected" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/user-homepage.php">Upcoming Events</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-attended.php">Past Events</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-my-events.php">My Events</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-saved-events.php">Saved Events</a></li>
                </ul>
                <br><h5><i class="glyphicon glyphicon-user"></i>
                    <small><b>Activity</b></small>
                </h5>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-invitations.php">Invitations</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-notifications.php">Notifications</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-tickets.php">My Tickets</a></li>
                </ul>
                <div id="createEventBtn">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/my-page-new-event.php"> <span class="glyphicon glyphicon-plus"></span> Create Event</a></li>
                    </ul>
                </div>
            </div>
        </content>
    </div>
</div>

<script>

    $(document).ready(function () {

        $('.sidebar-nav li a').click(function () {

            $('.sidebar-nav a').removeClass("selected");
            $(this).addClass("selected");
        });
    });



</script><?php }} ?>
