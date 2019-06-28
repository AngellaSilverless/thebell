<?php
/**
 * Header
 *
 * @package thebell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    
<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>The Bell at Ramsbury</title>

<link rel="stylesheet" href="https://use.typekit.net/dmz2ckm.css"><!--TYPEKIT INJECT-->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"><!-- Font Awesome CDN-->

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="page" class="site-wrapper">
	    
	    <div class="info-header">
		    
		    <a class="button">Book a room</a>
			
			<a class="button">Book a table</a>
	    
	    	<div class="telephone"><?php echo get_field("contact_info", "options")["telephone"]; ?></div>
	    	
	    </div>
	    
	    <main><!--closes in footer.php-->
	    
	    <nav id="nav">
		    
		    <div class="menu-trigger">
			    
			    <i class="fas fa-bars"></i>
			    
			    <span class="heading title">Menu</span>
			    
		    </div>             

			<div class="menu-collapse">
			
				<div class="wrapper-menu">
					<?php
					    wp_nav_menu( array(
					    'theme_location' => 'main-menu',
					    'container_class' => 'mainMenu' ) );
					?>
				</div>
			
			</div>

	    </nav>
	    