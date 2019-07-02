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

<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet'/>

<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.0/mapbox-gl-geocoder.css' type='text/css' />

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="page" class="site-wrapper">
	    
	    <div class="info-header">
		    
		    <?php
			    
			$booking_links =  get_field("booking_links", "options"); 
			
			$telephone = get_field("contact_info", "options")["telephone"];
			
		    ?>
		    
		    <a class="button" href="<?php echo $booking_links["book_room_link"]; ?>">Book a room</a>
			
			<a class="button" href="<?php echo $booking_links["book_table_link"]; ?>">Book a table</a>
	    
	    	<div class="telephone"><a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a></div>
	    	
	    </div>
	    
	    <main><!--closes in footer.php-->
	    
	    <nav id="nav">
		    
		    <div class="menu-trigger">
			    
			    <div class="open">
			    
				    <i class="fas fa-bars"></i>
				    
				    <div class="heading title">Menu</div>
				
			    </div>
			    
			    <div class="close">
			    
				    <i class="fas fa-times"></i>
				    
				    <div class="heading title">Close</div>
				
			    </div>
			    
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
	    