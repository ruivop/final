<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 19:01:02
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\authentication\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28352592a6ca26365f7-89298905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b7f7c18834420f1d5be6fed2b084387e9faa6e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\authentication\\register.tpl',
      1 => 1496077259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28352592a6ca26365f7-89298905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6ca264fbd6_08553974',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6ca264fbd6_08553974')) {function content_592a6ca264fbd6_08553974($_smarty_tpl) {?><!-- Modal Register -->
<div id="modalRegister" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
                <p>

                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/authentication/register.php" method="post"
                      enctype="multipart/>form-data">

                    <label>First Name *</label>
                    <input name="first_name" id="first_name" type="text" class="form-control"
                           placeholder="Insert your first name" onkeyup="validateFirstName();" required>

                    <label>Last Name *</label>
                    <input name="last_name" id="last_name" type="text" class="form-control"
                           placeholder="Insert your last name" onkeyup="validateLastName();" required>

                    <label>Username * <span id="username-erro-label" ></span></label>
                    <input name="username" id="username" type="text" class="form-control" onkeyup="validateUsername();" placeholder="Choose an username" required>

                    <label>E-mail *<span id="email-erro-label"></span></label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="Insert your email" onkeyup="validateEmail();"
                           required>

                    <label>NIF<span id="nif-erro-label"></span></label>
                    <input name="nif" id="nif" type="number" class="form-control" placeholder="Insert your nif" onkeyup="validateNif();">
                    <span class="nif_message"></span>

                    <label for="password">Password *<span id="password_message"></span></label>
                    <input name="password" type="password" id="password" class="form-control"
                           placeholder="Choose a password between 8 and 25 characters" onkeyup="validatePassword();"
                           required>

                    <label>Confirm Password *<span id="confirm_password_message"></span></label>
                    <input type="password" id="confirm_password" class="form-control" placeholder="Confirm the password" onkeyup="confirmPassword();" required>
                    <br></br>

                    <label>Profile picture</label>
                    <div>
                        <label for="profile-photo" class="btn btn-default">Upload photo</label>
                        <input id="profile-photo" style="visibility:hidden;" type="file">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" onclick="return validateAll();">Register
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </form>

                </p>
                <span>Already have an account?<a href="#" data-toggle="modal" data-dismiss="modal"
                                                 data-target="#modalLogin"> Log in</a> here.</span>
            </div>
        </div>
    </div>
</div><?php }} ?>
