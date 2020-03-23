<?php
/**
 * ============== Template Name: Home Page
 *
 * @package thebell
 */
get_header();?>

<?php get_template_part("template-parts/hero"); ?>

<div class="content-page home">

	<?php get_template_part("template-parts/bell-logo"); ?>

</div>
<?php if( get_field('pop_up_active', 'options') == 'active' ) { ?>
<div class="pop-up">
	<div id="popUpClose" class="pop-up__close"><i class="far fa-times-circle"></i></div>
<h2 class="heading heading__xl align-center mb0"><?php the_field('title', 'options');?></h2>
<h2 class="heading heading__md heading__alt align-center mb2"><?php the_field('sub_title', 'options');?></h2>
<p><?php the_field('body_copy', 'options');?></p>
<p class="heading heading__md mb0"><?php the_field('author_name', 'options');?></p>
<p class="mt0"><?php the_field('author_appointment', 'options');?></p>
</div>
<?php };?>
<?php get_footer();?>
