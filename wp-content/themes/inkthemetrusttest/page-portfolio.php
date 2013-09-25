<?php /*
Template Name: Portfolio
*/ ?>
<?php get_header(); ?>
			<div id="content" class="fullProjects clearfix full">						
				<?php get_template_part( 'part-projects'); ?>
				<?php while (have_posts()) : the_post(); ?>											
					<?php the_content(); ?>														
				<?php endwhile; ?>				
			</div>	
<?php get_footer(); ?>