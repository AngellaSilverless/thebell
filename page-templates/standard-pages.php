<?php
/**
 * ============== Template Name: Standard Pages
 *
 * @package thebell
 */
get_header();?>

<?php get_template_part("template-parts/hero"); ?>

<div class="content-page standard pr5 pl5 pb8">

	<?php get_template_part("template-parts/bell-logo"); ?>
	
	<h1 class="heading heading__lg heading__light slow-fade mt2 page-title"><?php the_field("hero_heading"); ?></h1>
	
	<div class="wrapper-content">
		
		<?php $copy = get_field("copy"); if($copy): ?>
		
		<div class="copy"><?php echo $copy; ?></div>
		
		<?php endif; ?>
		
		<?php $images = get_field("gallery"); if($images): ?>
		
		<div class="gallery-carousel gallery owl-carousel mt5">
			
			<?php foreach($images as $image): ?>
			
			<div class="wrapper-image">
				
				<a href="<?php echo $image['url']; ?>" class="lightbox-gallery"  alt="<?php echo $image['alt']; ?>" style="background-image: url(<?php echo $image['url']; ?>);"></a>
				
			</div>
			
			<?php endforeach; ?>
		
		</div>
			
		<?php endif; ?>
		
		<div class="wrapper-buttons mt2 mb2">
			
			<a class="button button__dark">Book a table</a>
			
			<a class="button button__dark">Book a room</a>
			
		</div>
		
	</div>

</div>

<?php get_footer();?>