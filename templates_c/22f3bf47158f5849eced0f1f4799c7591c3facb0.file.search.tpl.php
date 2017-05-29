<?php /* Smarty version Smarty-3.1.15, created on 2017-05-29 02:27:38
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5725592a6cac5576e5-52222344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f3bf47158f5849eced0f1f4799c7591c3facb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\search.tpl',
      1 => 1496016912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5725592a6cac5576e5-52222344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6cac630805_19479383',
  'variables' => 
  array (
    'USERNAME' => 0,
    'serch' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6cac630805_19479383')) {function content_592a6cac630805_19479383($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('common/aside-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="container-fluid text-left">
    <div class="row">
        <content class="col-lg-offset-3 col-lg-6 col-sm-8 col-sm-offset-1 col-xs-12 page">
            <div class="container-fluid text-left page">
                <div class="page-header">
                    <h1>Search Results for "<?php echo $_smarty_tpl->tpl_vars['serch']->value;?>
" </h1>
                </div>
                <p hidden id="searched-words"><?php echo $_smarty_tpl->tpl_vars['serch']->value;?>
</p>
                <p hidden id="serch-num-page-user">0</p>
                <p hidden id="serch-num-page-event">0</p>

                <ul id="tabs">
                    <li>
                        <a class="button-events" href="#eventosPesq">Events (0)</a>
                    </li>
                    <li>
                        <a class="button-users" href="#usersPesq">Users (0)</a>
                    </li>
                </ul>

                <div class="tabContentGroup">

                    <div id="eventosPesq" class="tabContent">
						<div class="tabOptions tabOptionsEvets">
						  <input type="checkbox" name="free-order-event" value="free" checked=""> Free
						  <input type="checkbox" name="paid-order-event" value="paid" checked=""> Paid

							<div class='alfabetic-ordering'>
								Order:
								<input type="radio" name="alfa-order-event" value="ASC" checked>Ascending
								<input type="radio" name="alfa-order-event" value="DESC">Descending
							</div>
							
							<div class='alfabetic-ordering'>
								By:
								<input type="radio" name="type-order-event" value="1" checked>Relevance
								<input type="radio" name="type-order-event" value="2" checked>Name
							</div>
						</div>
                        <div class="eventcadssech">


                        </div>
                    </div>
                    <div id="usersPesq" class="tabContent">

                        <div class="tabOptions tabOptionsUsers">
                            <div class='alfabetic-ordering'>
                                Alfabetic order:
                                <input type="radio" name="alfa-order-users" value="ASC" checked>Ascending
                                <input type="radio" name="alfa-order-users" value="DESC">Descending
                            </div>
                        </div>

                        <div class="usercadssech">
                        </div>
                    </div>

					</div>
            </div>
        </content>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
scripts/search/search.js"></script><?php }} ?>
