<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    
    <!-- Wordpress Theme CSS -->
    <?php wp_head(); ?>
        
    
</head>

<body <?php body_class(); ?>>

    <div class="top-nav clearfix mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="list-group">
                        <i class="fa fa-envelope-o" aria-hidden="true">&nbsp; my@email.com</i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="list-group">
                        <i class="fa fa-phone text-right" aria-hidden="true">&nbsp;01539858585</i>
                    </div>
                </div>
            </div>    
        </div>    
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">        
            <a class="navbar-brand" href="<?php echo home_url(); ?>">Goodly Dale Cottages</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-2 menu-left-border" id="navbarSupportedContent">
                <?php      
                    wp_nav_menu( array( 
                    'theme_location'    => 'top-menu', 
                    'depth'             => 2,
                    'container_class'   => 'collapse navbar-collapse',   
                    'container'         => 'false',
                    'menu_class'        => 'nav navbar-nav',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker() )
                    );
                ?>
            <form role="search" method="get" class="mt-3 ml-auto" action="<?php echo home_url( '/' ); ?>">
                 <?php get_search_form(); ?>
            </form>
        </div><!--/Container-->    
    </nav>
    
    <!-- Header -->
    <header>
        <div>
            <img  class="img-responsive img-container" src="<?php echo get_bloginfo('template_url') ?>/img/houses-1.jpg"/ alt="">
        </div>       
    </header>