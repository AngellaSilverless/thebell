<div class="news container pb4 cols-5-7">
	
	<?php $image = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), "medium_large"); ?>
	
	<div class="col post-image" style="background-image: url(<?php echo $image; ?>);"></div>
	
	<div class="col content">
		
		<div class="post-date"><?php the_time( 'l, jS F Y' ); ?></div>
		
		<h2 class="post-title heading heading__md slide-up"><?php the_title(); ?></h2>
		
		<div class="post-description mb2"><?php echo substr(wp_strip_all_tags(get_the_content()), 0, 300) . "..."; ?></div>
		
		<a href="<?php the_permalink(); ?>" class="button button__dark">Read more</a>
		
	</div>
	
</div>