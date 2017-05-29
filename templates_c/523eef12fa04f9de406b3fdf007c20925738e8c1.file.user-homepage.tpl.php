<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 08:36:15
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\user\user-homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18612592a6fdf96b4d6-84173283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523eef12fa04f9de406b3fdf007c20925738e8c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\user\\user-homepage.tpl',
      1 => 1495951245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18612592a6fdf96b4d6-84173283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'events' => 0,
    'event' => 0,
    'rate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6fdfaba273_66378628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6fdfaba273_66378628')) {function content_592a6fdfaba273_66378628($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid text-left">
    <div class="row">
        <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
            <div class="page-header">
                <h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 </h1>
            </div>

            <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(getRating($_smarty_tpl->tpl_vars['event']->value['event_id']), null, 0);?>
    <div class="event-card-medium">
                <p class="titulo-card"><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['event']->value['photo_url'];?>
" />
                    </div>
                    <div class="col-sm-9">
                        <p class="text-card"> <?php echo $_smarty_tpl->tpl_vars['event']->value['beginning_date'];?>
</p>
                        <p class="text-card"><?php echo $_smarty_tpl->tpl_vars['event']->value['local_id'];?>
<p>

                    <?php if ($_smarty_tpl->tpl_vars['event']->value['free']) {?>
                        <p class="text-card">Gratuito</p>
                    <?php } else { ?>
                        <p class="text-card">Pago</p>                        
                    <?php }?>




                        
                        <div class="container-fluid">
                            <div class="row">
                                <a href="../event/show-event-page.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
" class="btn btn-default col-sm-5">See More...</a>
                                <div class="classifica-card col-sm-7">

                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['rate']->value[0]['avg']+1 - (1) : 1-($_smarty_tpl->tpl_vars['rate']->value[0]['avg'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                        <i onclick="rate(1)" class="fa fa-star fa-2x" aria-hidden="true"></i>
                                    <?php }} ?>
                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['rate']->value[0]['avg']+1) : $_smarty_tpl->tpl_vars['rate']->value[0]['avg']+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rate']->value[0]['avg']+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                        <i onclick="rate(1)" class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                                    <?php }} ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>
    /*
    $(document).ready(function () {

        $('.sidebar-nav li a').click(function () {

            $('.sidebar-nav a').removeClass("selected");
            $(this).addClass("selected");
        });
    });*/

</script><?php }} ?>
