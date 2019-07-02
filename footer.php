<?php
/**
 * The template for displaying the footer
 * @package thebell
 */
?>

</main>

<footer class="footer">
	
    <div class="pre-socket">
	    
	    <div class="container pb2">
		    
		    <?php get_template_part('template-parts/ramsbury', 'logo');?>
		    
	    </div>
	    
	    <div class="container footer-columns">
		    
		    <div class="col">
			    
			    <?php if(have_rows("contact_info", "options")): while(have_rows("contact_info", "options")): the_row(); ?>
			    
			    <div class="mb1"><?php the_sub_field("telephone");?></div>
			    
			    <div class="mb1"><?php the_sub_field("email");?></div>
			    
			    <?php endwhile; endif; ?>
			    
			    <div class="socials mt2">
        
					<?php if(have_rows("social_links", "option")): while(have_rows("social_links", "option")): the_row(); ?>
					
					<a href="<?php the_sub_field("page_link"); ?>"><i class="fab fa-<?php the_sub_field("name"); ?>"></i></a>
					
					<?php endwhile; endif; ?>
				
				</div>
			    
		    </div>
		    
		    <div class="col">
			    
			    <div class="title">Opening Times</div>
			    
			    <?php if(have_rows("opening_times", "options")): while(have_rows("opening_times", "options")): the_row(); ?>
			    
			    <div class="mt1"><?php the_sub_field("heading");?></div>
			    
			    <div class="bold"><?php the_sub_field("description");?></div>
			    
			    <?php if(get_sub_field("observation")): ?>
			    
			    <div class="italic"><?php the_sub_field("observation");?></div>
			    
			    <?php endif; endwhile; endif; ?>
			    
		    </div>
		    
		    <div class="col">
			    
			    <div class="title">Food Times</div>
			    
			    <?php if(have_rows("food_times", "options")): while(have_rows("food_times", "options")): the_row(); ?>
			    
			    <div class="mt1"><?php the_sub_field("heading");?></div>
			    
			    <div class="bold"><?php the_sub_field("description");?></div>
			    
			    <?php if(get_sub_field("observation")): ?>
			    
			    <div class="italic"><?php the_sub_field("observation");?></div>
			    
			    <?php endif; endwhile; endif; ?>
			    
		    </div>
			
		    <div class="col links-wrapper">
			    
			    <div class="links">
			    
				    <div class="title mb1">Web Links</div>
				    
				    <?php if(have_rows("web_links", "options")): while(have_rows("web_links", "options")): the_row(); ?>
				    
				    <?php $url = get_sub_field("url");
				    
				    $visible_url = str_replace(array("http://", "https://"), "", $url);
				    
				    $visible_url = rtrim(trim($visible_url), '/'); ?>
				    
				    <div><a href="<?php echo $url; ?>"><?php echo $visible_url;?></a></div>
				    
				    <?php endwhile; endif; ?>
				
			    </div>
			    
		    </div>
		    
		    <div class="col prizes">
			    
			    <?php $award = get_field("award_footer", "options"); if($award): ?>
			    
			    <img src="<?php echo $award["url"]; ?>">
			    
			    <?php endif; ?>
			    
		    </div>
		    
	    </div>

    </div>
    
    <div class="socket">
	    
	    <div class="container cols-6 cols-sm-12">
                
	        <div class="col text-left">&copy; The Bell at Ramsbury <?php echo date ('Y');?></div>
	        
	        <div class="col text-right">
	        
		        <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-conditions">Terms & Conditions</a>
		    
	        </div>
	    
	    </div>

    </div><!--socket-->

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
