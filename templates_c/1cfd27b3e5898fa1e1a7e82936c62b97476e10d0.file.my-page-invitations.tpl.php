<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 11:00:04
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\user\my-page-invitations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5352592af58a47ccd8-11142163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cfd27b3e5898fa1e1a7e82936c62b97476e10d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\user\\my-page-invitations.tpl',
      1 => 1496022909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5352592af58a47ccd8-11142163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592af58a609428_58193353',
  'variables' => 
  array (
    'event_id' => 0,
    'rate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592af58a609428_58193353')) {function content_592af58a609428_58193353($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="container-fluid text-left">
        <div class="row">
            <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
                <div class="page-header">
                    <h1>Events that I am invited for</h1>
                </div>
                <div id="event-card" class="event-card-medium">
                    <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
                    <div class="row">
                        <div id="img" class="col-sm-4">
                            <img src="../../resources/images/1.jpg" />
                        </div>
                        <div class="col-sm-8">
                            <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                            <p class="text-card">ISG<p>
                            <div id="btns-row" class="row">
                                <a class="inactiveLink-text-card">Gratuito</a>
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

                        </div>
                    </div>
                </div>
                <div id="event-card" class="event-card-medium">
                    <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
                    <div class="row">
                        <div id="img" class="col-sm-4">
                            <img src="../../resources/images/1.jpg" />
                        </div>
                        <div class="col-sm-8">
                            <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                            <p class="text-card">ISG<p>
                            <div id="btns-row" class="row">
                                <a class="inactiveLink-text-card">Gratuito</a>
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

                        </div>
                    </div>
                </div>
                <div id="event-card" class="event-card-medium">
                    <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
                    <div class="row">
                        <div id="img" class="col-sm-4">
                            <img src="../../resources/images/1.jpg" />
                        </div>
                        <div class="col-sm-8">
                            <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                            <p class="text-card">ISG<p>
                            <div id="btns-row" class="row">
                                <a class="inactiveLink-text-card">Gratuito</a>
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

                        </div>
                    </div>
                </div>
                <div id="event-card" class="event-card-medium">
                    <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
                    <div class="row">
                        <div id="img" class="col-sm-4">
                            <img src="../../resources/images/1.jpg" />
                        </div>
                        <div class="col-sm-8">
                            <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                            <p class="text-card">ISG<p>
                            <div id="btns-row" class="row">
                                <a class="inactiveLink-text-card">Gratuito</a>
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

                        </div>
                    </div>
                </div>
                <div id="event-card" class="event-card-medium">
                    <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
                    <div class="row">
                        <div id="img" class="col-sm-4">
                            <img src="../../resources/images/1.jpg" />
                        </div>
                        <div class="col-sm-8">
                            <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                            <p class="text-card">ISG<p>
                            <div id="btns-row" class="row">
                                <a class="inactiveLink-text-card">Gratuito</a>
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

                        </div>
                    </div>
                </div>
                <div id="event-card" class="event-card-medium">
                    <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
                    <div class="row">
                        <div id="img" class="col-sm-4">
                            <img src="../../resources/images/1.jpg" />
                        </div>
                        <div class="col-sm-8">
                            <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                            <p class="text-card">ISG<p>
                            <div id="btns-row" class="row">
                                <a class="inactiveLink-text-card">Gratuito</a>
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

                        </div>
                    </div>
                </div>
            </content>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
