<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>								 
		<div id="content" >
			<div <?php post_class("clearfix box"); ?>>
				<div id="pageHead">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="inside">
					<h3><?php _e('Archives by Month:', 'themetrust'); ?></h3>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
					<h3><?php _e('Archives by Subject:', 'themetrust'); ?></h3>
					<ul>
						<?php wp_list_categories(); ?>
					</ul>
				</div>			    	
			</div>
		</div>		
<?php get_footer(); ?>
