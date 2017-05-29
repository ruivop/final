<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 08:22:26
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\authentication\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6211592a6ca25edba5-94962736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55fa571cf4a37295a5614097cf5ac39172c42732' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\authentication\\login.tpl',
      1 => 1495951244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6211592a6ca25edba5-94962736',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6ca2600923_78288380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6ca2600923_78288380')) {function content_592a6ca2600923_78288380($_smarty_tpl) {?><!-- Modal Login -->
<div id="modalLogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <p>

                <form action="../../actions/authentication/login.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address / Username</label>
                        <input type="text" name="email-login" class="form-control" id="email-login"
                               placeholder="Insert email or username" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password-login" class="form-control" id="password-login"
                               placeholder="Insert password"
                               required>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Login</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </form>

                </p>
                <span>Don't have an account?<a href="#" data-toggle="modal" data-dismiss="modal"
                                               data-target="#modalRegister"> Register</a> here.</span>
            </div>

        </div>
    </div>
</div><?php }} ?>
