<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 10:59:33
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31822592a6f933de893-70543052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b58fbc9c6af49988b3a8b3412b2b5424d40af99b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\error.tpl',
      1 => 1496047833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31822592a6f933de893-70543052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6f934731d0_17570213',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6f934731d0_17570213')) {function content_592a6f934731d0_17570213($_smarty_tpl) {?><div class="container-fluid text-left">
    <div class="row">
        <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-8 col-sm-offset-1 col-xs-12 page">
            <div class="error-message">
                <div class="row">
                    <h1><span class="glyphicon glyphicon-flash"></span>ERROR</h1>
                </div>
                <div class="row">
                    <p><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>
Redirecting...</p>
                </div>
            </div>
        </content>
    </div>
</div>
<?php }} ?>
