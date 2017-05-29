<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 08:22:26
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22521592a6ca268bae2-62897853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab41164500c9a693790ea338713540ab2f34accc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\menu.tpl',
      1 => 1495951245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22521592a6ca268bae2-62897853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6ca26c92b7_60344316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6ca26c92b7_60344316')) {function content_592a6ca26c92b7_60344316($_smarty_tpl) {?><div class="header">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#menu" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
index.php">Eventify</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
                <div class="nav navbar-nav test">

                    <div class="col-lg-offset-3 col-md-offset-2 col-xs-11">
                        <form class="navbar-form search" name="form" role="search"
                              action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/common/search.php#eventosPesq" method="get">

                            <div class="search-div">
                                <input id="search" type="search" name="serched" class="form-control search-query"
                                       Placeholder="Search..." autocomplete="true" id="serch-input"/>
                                <span data-icon="&#xe000;" aria-hidden="true" class="search-btn">
                                    <input type="submit" class="searchsubmit" id="search-button" value="">
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="login-div">
                    <ul class="nav navbar-nav navbar-right text-center" id="login">

                        <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/my-page-my-information.php"><span
                                            class="glyphicon glyphicon-pencil"></span><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>

                                </a>
                            </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/authentication/logout.php"><span
                                            class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                        <?php } else { ?>
                            <li><a href="#" data-toggle="modal" data-target="#modalLogin"><span
                                            class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalRegister"><span
                                            class="glyphicon glyphicon-pencil"></span>Register</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div><?php }} ?>
