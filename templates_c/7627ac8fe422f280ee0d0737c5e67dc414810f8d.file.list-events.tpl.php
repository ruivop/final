<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 11:20:21
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\event\list-events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31127592b6acf629932-81266442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7627ac8fe422f280ee0d0737c5e67dc414810f8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\event\\list-events.tpl',
      1 => 1496022909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31127592b6acf629932-81266442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b6acf75c683_42411890',
  'variables' => 
  array (
    'USERNAME' => 0,
    'events' => 0,
    'event' => 0,
    'event_id' => 0,
    'rate' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b6acf75c683_42411890')) {function content_592b6acf75c683_42411890($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="container-fluid text-left">
    <div class="row">
        <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
            <div class="page-header">
                <h1>Events that I created</h1>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['events']->value==null) {?>
                <h3>You haven't created any events yet.</h3>
            <?php } else { ?>

                <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                    <div id="event-card" class="event-card-medium">
                        <p class="titulo-card"><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</p>
                        <div class="row">
                            <div id="img" class="col-sm-4">
                                <img src="../../resources/images/2.jpg"/>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-card"> <?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
</p>
                                <p class="text-card"> <?php echo $_smarty_tpl->tpl_vars['event']->value['location'];?>
</p>
                                <div id="btns-row" class="row">
                                    <a class="inactiveLink-text-card"></a>
                                    <?php if ($_smarty_tpl->tpl_vars['event']->value['free']) {?>
                                        <a class="text-card">Free</a>
                                    <?php } else { ?>
                                        <a class="text-card">Paid</a>
                                    <?php }?>

                                    <div class="event-card-btns">
                                        <a href="../event/show-event-page.php" class="btn btn-default col-sm-5">See More</a>
                                        <button type="button" class="btn btn-default col-sm-3">Going</button>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">

                                        <form id="rform" action="../../actions/event/rate_event.php" method="POST">
                                            <input id="rate" type="hidden" name="rating"/>
                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
"/>
                                        </form>

                                        <script type="text/javascript">
                                            function rate(val) {
                                                $("#rate").val(val);
                                                $("#rform").submit();
                                            }
                                        </script>


                                        <div class="event-rate">

                                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['rate']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['rate']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <i onclick="rate(1)" class="fa fa-star fa" aria-hidden="true"></i>
                                            <?php }} ?>
                                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['rate']->value+1) : $_smarty_tpl->tpl_vars['rate']->value+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rate']->value+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <i onclick="rate(1)" class="fa fa-star-o fa" aria-hidden="true"></i>
                                            <?php }} ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <p></p>
                                    <button onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/show-event-page.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
'"
                                            type="button" class="btn btn-default col-sm-5">See Event
                                    </button>
                                    <button onclick="window.location.href='../../pages/event/edit-event.php'"
                                            type="button" class="btn btn-default col-sm-5">Edit Event
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php }?>
        </content>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
