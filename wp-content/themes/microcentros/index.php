<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>

    <!-- Bootstrap / USAR LINK DE CDN CUANDO ESTÉ OPERATIVO -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <div class="container">
      <div class="row"><!-- Primera fila: Header -->
        <div class="col-md-3"><img src="<?php bloginfo('template_directory'); ?>/img/wf_logo.svg" class="img-responsive"></div>
        <div class="col-md-9">
        	<div class="row">
            	<div class="col-xs-12"><div class="pull-right"><img src="<?php bloginfo('template_directory'); ?>/img/fb.svg" style="width:30px; height:30px; margin:5px;"></div></div>
            </div>
        	<div class="row">
            	<div class="col-xs-12">
                
                <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Mostrar o ocultar navigación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" width="230" height="25" />
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
</nav>


</div>
</div>

        	<div class="row">
            	<div class="col-xs-4 col-xs-offset-4"><?php get_search_form(); ?></div>
            </div>
        </div>
      </div><!-- /.row Primera fila -->
      <div class="row"><!-- Segunda fila: Formulario de ingreso o administración -->
      	<div class="col-md-10 col-md-offset-1" style="min-height:40px;">
        	<?php /* wp_login_form( array ( 'form_id' => 'ingresa', ) ); */ ?>  
            
            <?php
if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => home_url(), 
        'form_id' => 'ingresa',
        'label_username' => __( 'Nombre de usuario' ),
        'label_password' => __( 'Contraseña' ),
        'label_remember' => __( 'Recuérdame' ),
        'label_log_in' => __( 'Ingresar' ),
        'remember' => true
    );
    wp_login_form( $args );
} else { // If logged in:
    wp_loginout( home_url() ); // Display "Log Out" link.
    echo " | ";
    wp_register('', ''); // Display "Site Admin" link.
}
?>
            
                    
        </div>
      </div><!-- /.row Segunda fila -->
      <div class="row"><!-- Tercera fila: Carrusel -->
      	<div class="col-md-12">
        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:auto;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php bloginfo('template_directory'); ?>/img/carrusel-01.svg" alt="001" class="img-responsive">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_directory'); ?>/img/carrusel-02.svg" alt="002" class="img-responsive">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="<?php bloginfo('template_directory'); ?>/img/carrusel-03.svg" alt="003" class="img-responsive">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
      </div><!-- /.row Tercera fila -->
      <div class="row"><!-- Cuarta fila: Info, descargas, noticias -->
      	<div class="col-md-12">
        	<div class="row">
            	<div class="col-md-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/wf_info-y-descargas.svg" class="img-responsive">
                </div>
                <div class="col-md-9">
                <img src="<?php bloginfo('template_directory'); ?>/img/wf_noticias.svg" class="img-responsive">
                </div>
            </div>
        </div>
      </div><!-- /.row Cuarta fila -->
      <div class="row"><!-- Quinta fila: Footer -->
      	<div class="col-md-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/wf_auspicio.svg" width="100">
        </div>
      	<div class="col-md-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/wf_menu.svg" width="150">
        </div>
      	<div class="col-md-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/wf_resena.svg">
        </div>
      	<div class="col-md-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/wf_contacto.svg">
        </div>
      </div><!-- /.row Quinta fila -->
    </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) / CDN al finalizar. -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed / CDN al finalizar. -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    
               	<script> $("form#ingresa").addClass("form-inline"); $(".login-username, .login-password, .login-remember, .login-submit").wrap("<div class='form-group'></div>"); $("#wp-submit").addClass("btn btn-default"); $("input#user_login, input#user_pass").addClass("form-control"); </script>

      
      <?php wp_footer(); ?>

  </body>
</html>