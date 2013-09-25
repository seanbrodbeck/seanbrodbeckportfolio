<?php get_header(); ?>
					 
	<div id="content">
		<div id="pageHead">
			<h1><?php _e('Search Results', 'themetrust'); ?></h1>
		</div>
		<?php $c=0; ?>				
		<?php while (have_posts()) : the_post(); ?>
			<?php $p_class = ($c==0) ? "box first" : "box"; ?>			    
			<div <?php post_class($p_class); ?>>		
				<div class="inside">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>	
					<?php the_excerpt('',TRUE); ?>
								
					<?php $project_notes = get_post_meta($post->ID, "_ttrust_notes_value", true); ?>
					<?php echo wpautop($project_notes); ?>
				</div>																									
			</div>				
			
		<?php endwhile; ?>
		<?php get_template_part( 'part-pagination'); ?>		    	
	</div>	
	
<?php get_footer(); ?>