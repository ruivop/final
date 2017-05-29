<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 08:22:26
         compiled from "C:\xampp\htdocs\lbaw\proto\templates\common\homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10493592a6ca23a6ca5-75254326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc95117c0d10790e97b9019c0637241bfda760e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lbaw\\proto\\templates\\common\\homepage.tpl',
      1 => 1495951245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10493592a6ca23a6ca5-75254326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592a6ca24f3eb7_13113419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592a6ca24f3eb7_13113419')) {function content_592a6ca24f3eb7_13113419($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-8 col-lg-offset-2 homepage">


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../../resources/images/1.jpg" alt="Chania"> <!--por foto do evento-->
        <div class="carousel-caption">
          <h3>NOME DO EVENTO</h3>
          <h6>DATA DO EVENTO</h6>
          <p>POR AQUI DESCRIÇAO DOS EVENTOS</p>
        </div>
      </div>

      <div class="item">
        <img src="../../resources/images/2.jpg" alt="Chania"> <!--por foto do evento-->
        <div class="carousel-caption">
          <h3>NOME DO EVENTO</h3>
          <h6>DATA DO EVENTO</h6>
          <p>POR AQUI DESCRIÇAO DOS EVENTOS</p>
        </div>
      </div>

      <div class="item">
        <img src="../../resources/images/3.jpg" alt="Flower"> <!--por foto do evento-->
        <div class="carousel-caption">
          <h3>NOME DO EVENTO</h3>
          <h6>DATA DO EVENTO</h6>
          <p>POR AQUI DESCRIÇAO DOS EVENTOS</p>
        </div>
      </div>

      <div class="item">
        <img src="../../resources/images/4.png" alt="Flower"> <!--por foto do evento-->
        <div class="carousel-caption">
          <h3>NOME DO EVENTO</h3>
          <h6>DATA DO EVENTO</h6>
          <p>POR AQUI DESCRIÇAO DOS EVENTOS</p>
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>








  <!--<div class="container-fluid text-left">
    <div class="page-title text-center">
      <h1>Popular Events: </h1>
      <br>
        <br>
          <br>
            <br>
    
    </div>
    <div class="row">
      <content class="col-sm-12">
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/1.jpg" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                    <button onclick="window.location.href='../../pages/event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/2.jpg" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/1.jpg" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/1.jpg" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/4.png" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/5.png" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/6.png" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/2.jpg" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-fluid event-card-medium">
            <p class="titulo-card">Sessão de Demonstração para o Desenvolvimento em Comunicação</p>
            <div class="row">
              <div class="col-sm-3">
                <img src="../../resources/images/1.jpg" />
              </div>
              <div class="col-sm-9">
                <p class="text-card"> Quinta, 9 de Março às 19:45</p>
                <p class="text-card">ISG</p>
                <p class="text-card">Gratuito</p>
                <div class="container-fluid">
                  <div class="row">
                     <button onclick="window.location.href='../event/show-event-page.php'" type="button" class="btn btn-default col-sm-5">See More...</button>
                    <div class="classifica-card col-sm-7">
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                      <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix visible-md-block"></div>
      </content>
    </div>
  </div>-->
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
