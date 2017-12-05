<!DOCTYPE html>
<html>
<head>

	<title>Singolo</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />

    <meta name="robots" content="index, follow" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="copyright" content="" />

    <!-- CSS -->
    <?php wp_head(); ?>
</head>

<body>

	<!-- Header
		============================= -->
	<div id="header">
        <div class="inner">
        
            <!-- Logo -->
            <h1 class="logo left"><a href="home.html">Singolo</a></h1><!-- .logo-->
            
            <!-- Nav Menu -->
            <!-- Menú Dinámico -->

            <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav-menu right', 'container' => '' ) ); ?>
			<?php } ?>

           <!--  <ul class="nav-menu right">
                <li class="current"><a href="#home">home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#contact">contact</a></li>
            </ul><!-- .nav-menu--> -->
        
        </div><!-- .inner -->
	</div><!-- #header -->
	<!-- End Header -->