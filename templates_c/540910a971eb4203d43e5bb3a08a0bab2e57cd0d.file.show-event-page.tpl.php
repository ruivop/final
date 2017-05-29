<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 18:28:03
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\event\show-event-page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11321592b6ac23226d1-08341998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '540910a971eb4203d43e5bb3a08a0bab2e57cd0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\event\\show-event-page.tpl',
      1 => 1496075262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11321592b6ac23226d1-08341998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592b6ac2590d25_18733416',
  'variables' => 
  array (
    'USERNAME' => 0,
    'au_user_id' => 0,
    'event_id' => 0,
    'BASE_URL' => 0,
    'isGuest' => 0,
    'going' => 0,
    'month' => 0,
    'day' => 0,
    'event' => 0,
    'date' => 0,
    'comments' => 0,
    'cmt' => 0,
    'USERID' => 0,
    'hosts' => 0,
    'host' => 0,
    'i' => 0,
    'guests' => 0,
    'guest' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592b6ac2590d25_18733416')) {function content_592b6ac2590d25_18733416($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<p hidden id="au_user_id"><?php echo $_smarty_tpl->tpl_vars['au_user_id']->value;?>
</p>
<p hidden id="this_event_id"><?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
</p>

<div class="container-fluid event-main-page">

    <div class="col-lg-offset-3 col-lg-6 col-md-8 col-sm-9 col-md-offset-1 col-sm-offset-0">

        <div class="manage">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/sunset.jpg" alt="Event"/>
            <!--<a href="#">Manage</a>-->
        </div>

        <nav class="navbar navbar-slide">

            <div class="row">

                <div class="col-xs-offset-1 col-xs-7 col-sm-offset-0 col-sm-9">
                    <ul class="nav navbar-nav">
                        <li><a class="active" href="#">Overview</a></li>
                        <li><a href="#location">Location</a></li>
                        <li><a href="#comments">Comments</a></li>
                        <li><a href="#hosts">Hosts</a></li>
                        <li><a href="#guests">Guests</a></li>
                    </ul>
                </div>
                <div class="col-xs-3 col-sm-3">
					<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value&&$_smarty_tpl->tpl_vars['isGuest']->value) {?>
                    <select class="going-select" data-show-icon="true">
                        <option data-icon="glyphicon-heart" value="one" <?php if (!$_smarty_tpl->tpl_vars['going']->value) {?>selected<?php }?>>Not Going</option>
                        <option value="two" <?php if ($_smarty_tpl->tpl_vars['going']->value) {?>selected<?php }?>>Going</option>
                    </select>
					<?php }?>
                </div>
            </div>
        </nav>

        <div class="event-information">

            <div class="row eve-info">
                <content class="col-xs-1">
                    <span class="event-month"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</span>
                    <span class="event-day"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</span>
                </content>

                <content class="col-xs-9 col-md-10">

                    <div class="row">

                        <div class="col-xs-4 event-name">
                        <?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>

                    </div>
                        <div class="col-xs-1">
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
                        </div>

                        <div class="event-rate">


                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="10"/><label class="full"
                                                                                            for="star5"></label>
                            <input type="radio" id="star4half" name="rating" value="9"/><label class="half"
                                                                                               for="star4half"></label>
                            <input type="radio" id="star4" name="rating" value="8"/><label class="full"
                                                                                           for="star4"></label>
                            <input type="radio" id="star3half" name="rating" value="7"/><label class="half"
                                                                                               for="star3half"></label>
                            <input type="radio" id="star3" name="rating" value="6"/><label class="full"
                                                                                           for="star3"></label>
                            <input type="radio" id="star2half" name="rating" value="5"/><label class="half"
                                                                                               for="star2half"></label>
                            <input type="radio" id="star2" name="rating" value="4"/><label class="full"
                                                                                           for="star2"></label>
                            <input type="radio" id="star1half" name="rating" value="3"/><label class="half"
                                                                                               for="star1half"></label>
                            <input type="radio" id="star1" name="rating" value="2"/><label class="full"
                                                                                           for="star1"></label>
                            <input type="radio" id="starhalf" name="rating" value="1"/><label class="half"
                                                                                              for="starhalf"></label>
                        </div>
                    </div>

                <content class="col-xm-3 col-md-2 text-center user-photo">

                    <button><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.jpeg"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</button>

                </content>

            </div>

                        <div class="row">
                            <content class="col-xs-4">
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['public']) {?>
									Public
								<?php } else { ?>
									Private
								<?php }?>	                                <span class="glyphicon glyphicon-one-fine-dot"></span>
                                <?php if ($_smarty_tpl->tpl_vars['event']->value['free']) {?>
                                    Free
                                <?php } else { ?>
                                    Paid
                                <?php }?>
                            </content>
                            <?php if (!$_smarty_tpl->tpl_vars['event']->value['free']&&($_smarty_tpl->tpl_vars['isGuest']->value||$_smarty_tpl->tpl_vars['event']->value['public'])) {?>
                                <div class="buy-btn col-xs-offset-1 col-xs-4">
                                    <a href="../ticket/checkout-payment.php?id=<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" class="btn btn-default">Buy Ticket</a>
                                </div>
                            <?php }?>



                        </div>
                </content>



            </div>
        </div>

        <div class="event-info-date" align="left">
            <span class="glyphicon glyphicon-map-marker"></span> <?php echo $_smarty_tpl->tpl_vars['event']->value['street'];?>

            <p></p>
            <span class="glyphicon glyphicon-time"></span><?php echo $_smarty_tpl->tpl_vars['date']->value;?>

        </div>

        <!--<div>
                <form id="comment-form" action="../../actions/event/save_event.php" method="POST" class="form-inline">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" />
                    <input type="submit" value="Save" class="btn btn-default form-control"/>
                </form>

                <a href="edit-event.php?id=<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" class="btn btn-default">Edit</a>
                <form class="form-inline">
                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&mobile_iframe=true&width=73&height=28&appId" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </form>
            </div>-->

        <div class="page-header">
            <h3>Description</h3>
        </div>

        <div class="event-description">
            <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>

        </div>

        <div class="page-header">
            <h3>Location</h3>
        </div>
        <div id="location" class="map-section">

            <div id="map" style="width: 100%; height: 300px;">
                <input type="text" id="lat" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['latitude'];?>
" hidden/>
                <input type="text" id="lon" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['longitude'];?>
" hidden/>
            </div>
            <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['event']->value['street'];?>
 </h4>
        </div>

        <div class="page-header">
            <h3>Comments</h3>
        </div>

        <div class="event-comments" id="comments">

            <?php if (count($_smarty_tpl->tpl_vars['comments']->value)==0) {?>
                <h4>No comments yet.</h4>
            <?php }?>

            <?php  $_smarty_tpl->tpl_vars['cmt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->key => $_smarty_tpl->tpl_vars['cmt']->value) {
$_smarty_tpl->tpl_vars['cmt']->_loop = true;
?>
                <div class="comment">

                    <div class="row">
                        <div class="col-xs-2 user-photo">
                            <img class="center-block" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.png">
                        </div>

                        <div class="col-xs-4 user-photo">
                            <strong><?php echo $_smarty_tpl->tpl_vars['cmt']->value['username'];?>
</strong>
                            <p></p>
                            <?php echo $_smarty_tpl->tpl_vars['cmt']->value['comment_date'];?>

                        </div>

                        <?php if (!isset($_smarty_tpl->tpl_vars['cmt']) || !is_array($_smarty_tpl->tpl_vars['cmt']->value)) $_smarty_tpl->createLocalArrayVariable('cmt');
if ($_smarty_tpl->tpl_vars['cmt']->value['username'] = $_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                            <div class="col-xs-offset-4 col-xs-2">
                                <button class="remove" value="<?php echo $_smarty_tpl->tpl_vars['cmt']->value['comment_id'];?>
"><span
                                            class="glyphicon glyphicon-remove"></span>Delete
                                </button>
                            </div>
                        <?php } else { ?>
                            <div class="col-xs-2 col-xs-offset-2">
                                <button><span class="glyphicon glyphicon-share-alt"></span>Reply</button>
                            </div>
                            <div class="col-xs-2">
                                <button><span class="glyphicon glyphicon-flag"></span>Report</button>
                            </div>
                        <?php }?>
                    </div>
                    <content class="col-xs-12">
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['cmt']->value['content'];?>

                        </div>
                    </content>
                </div>
            <?php } ?>


            <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                <div class="page-header">
                    <h3>Your Answer</h3>
                </div>
                <form id="comment-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/event/new_comment.php">
                    <input type="text" name="user_id" id="user_id" hidden="true" value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
">
                    <input type="text" name="event_id" id="event_id" hidden="true" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
">
                    <textarea name="editor" id="editor">
                        </textarea>
                    <script>
                        CKEDITOR.replace('editor');
                    </script>
                    <div class="submit-btn col-xs-1">
                        <input id="submit_editor" type="submit" value="Submit" class="form-control">
                    </div>
                </form>
            <?php }?>
        </div>

        <div class="page-header">
            <div class="row">
                <content class="col-xs-9">
                    <h3 style="margin: 0px;">Hosts</h3>
                </content>
                <content class="col-xs-3">
                    <?php  $_smarty_tpl->tpl_vars['host'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['host']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['host']->key => $_smarty_tpl->tpl_vars['host']->value) {
$_smarty_tpl->tpl_vars['host']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['host']->value['username']==$_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                            <input id="search-user" type="search" class="form-control" placeholder="Add hosts..."
                                   autocomplete="off"/>
                            <div class="content-list" id="search-list" style="width: 100%;">
                                <ul class="drop-list">

                                </ul>
                            </div>
                        <?php }?>
                    <?php } ?>
                </content>
            </div>
        </div>

        <div id="hosts">

            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['hosts']->value)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['hosts']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>

                <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                    <content class="col-xs-1">
                        <div class="user-photo">
                            <button><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.jpeg"><?php echo $_smarty_tpl->tpl_vars['hosts']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</button>
                        </div>
                    </content>
                <?php } else { ?>
                    <content class="col-xs-1 col-xs-offset-1">
                        <div class="user-photo">
                            <button><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.jpeg"><?php echo $_smarty_tpl->tpl_vars['hosts']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</button>
                        </div>
                    </content>
                <?php }?>
            <?php }} ?>
        </div>



        <div class="page-header">
            <div class="row">
                <content class="col-xs-9">
                    <h3 style="margin: 0px;">Guests</h3>
                </content>
                <content class="col-xs-3">
                    <?php  $_smarty_tpl->tpl_vars['guest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['guests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guest']->key => $_smarty_tpl->tpl_vars['guest']->value) {
$_smarty_tpl->tpl_vars['guest']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['guest']->value['username']==$_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                            <input id="search-user" type="search" class="form-control" placeholder="Add Guests..."
                                   autocomplete="off"/>
                            <div class="content-list" id="search-list" style="width: 100%;">
                                <ul class="drop-list">

                                </ul>
                            </div>
                        <?php }?>
                    <?php } ?>
                </content>
            </div>
        </div>

        <div id="guests">

            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['hosts']->value)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['hosts']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>

                <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                    <content class="col-xs-1">
                        <div class="user-photo">
                            <button><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.jpeg"><?php echo $_smarty_tpl->tpl_vars['guests']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</button>
                        </div>
                    </content>
                <?php } else { ?>
                    <content class="col-xs-1 col-xs-offset-1">
                        <div class="user-photo">
                            <button><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.jpeg"><?php echo $_smarty_tpl->tpl_vars['guests']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</button>
                        </div>
                    </content>
                <?php }?>
            <?php }} ?>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>


        <div></div>

        <div class="page-header">
            <div class="row">
                <content class="col-xs-9">
                    <h3 style="margin: 0px;">Guests</h3>
                </content>
                <content class="col-xs-3">
                    <?php  $_smarty_tpl->tpl_vars['host'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['host']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['host']->key => $_smarty_tpl->tpl_vars['host']->value) {
$_smarty_tpl->tpl_vars['host']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['host']->value['username']==$_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                            <input id="search-guest" type="search" class="form-control" placeholder="Add guests..."
                                   autocomplete="off"/>
                            <div class="content-list" id="search-list-guest" style="width: 100%;">
                                <ul class="drop-list-guest">

                                </ul>
                            </div>
                        <?php }?>
                    <?php } ?>
                </content>
            </div>
        </div>

        <div id="guests">

            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['guests']->value)) { for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<count($_smarty_tpl->tpl_vars['guests']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>

                <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                    <content class="col-xs-1">
                        <div class="user-photo">
                            <button><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.jpeg"><?php echo $_smarty_tpl->tpl_vars['guests']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</button>
                        </div>
                    </content>
                <?php } else { ?>
                    <content class="col-xs-1 col-xs-offset-1">
                        <div class="user-photo">
                            <button><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
resources/images/user.jpeg"><?php echo $_smarty_tpl->tpl_vars['guests']->value[$_smarty_tpl->tpl_vars['i']->value]['username'];?>
</button>
                        </div>
                    </content>
                <?php }?>
            <?php }} ?>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
scripts/search/show-event-script.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
scripts/event/response-event.js"></script>
<script type="text/javascript" src="../../scripts/event/show-map-location.js"></script><?php }} ?>
