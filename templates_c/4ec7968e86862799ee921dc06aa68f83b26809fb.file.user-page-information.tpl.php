<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 02:52:08
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\user-page-information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4894592afe8c8825c6-52863268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec7968e86862799ee921dc06aa68f83b26809fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\user-page-information.tpl',
      1 => 1496016912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4894592afe8c8825c6-52863268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592afe8c977773_77442907',
  'variables' => 
  array (
    'USERNAME' => 0,
    'EMAIL' => 0,
    'FIRSTNAME' => 0,
    'LASTNAME' => 0,
    'NIF' => 0,
    'PHOTO_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592afe8c977773_77442907')) {function content_592afe8c977773_77442907($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid text-left">
    <div class="row">
        <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
            <div class="page-header">
                <h1>Profile</h1>
            </div>
            <div class="row personal-card">
                <div class="col-sm-6 tags-personal-card">
                    <div class="content-personal">
                        <p class="tag-personal-card">Username:</p>
                        <p class="info" id="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</p>
                    </div>
                    <div class="content-personal">
                        <p class="tag-personal-card">Email:</p>
                        <p class="info" id="email"><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</p>
                    </div>
                    <div class="content-personal">
                        <p class="tag-personal-card">Name:</p>
                        <p class="info" id="nome-utilizador"><?php echo $_smarty_tpl->tpl_vars['FIRSTNAME']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LASTNAME']->value;?>
</p>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['NIF']->value!=null) {?>
                        <div class="content-personal">
                            <p class="tag-personal-card">NIF:</p>
                            <p class="info" id="nome-utilizador"><?php echo $_smarty_tpl->tpl_vars['NIF']->value;?>
</p>
                        </div>
                    <?php }?>
                    <div class="content-personal">
                        <p class="tag-personal-card">Password:</p>
                        <p class="info" id="password">********</p>
                    </div>
                </div>

                <div class="col-sm-3 inoformation-personal-card">
                </div>
                <div class="col-sm-4 photo-personal-card">
                    <?php if ($_smarty_tpl->tpl_vars['PHOTO_URL']->value==null) {?>
                        <img src="../../resources/images/user.png" class="img-responsive img-thumbnail">
                    <?php } else { ?>
                        <img src="../../resources/images/image.jpeg" class="img-responsive img-thumbnail">
                    <?php }?>
                </div>

                <div class="col-sm-1 inoformation-personal-card">
                </div>
            </div>
        </content>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
