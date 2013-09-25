<?php get_header(); ?>		
				 
		<div id="content" class="clearfix">			
			<div id="pageHead">
				<h1><?php the_title(); ?></h1>
				<div class="projectNav clearfix">
					<div class="previous <?php if(!get_previous_post()){ echo 'inactive'; }?>">
						<?php next_post_link('%link', '&larr; %title'); ?>	
					</div>				
					<div class="next <?php if(!get_next_post()){ echo 'inactive'; }?>">							
						<?php previous_post_link('%link', '%title  &rarr;'); ?>			
					</div>	
					<div class="backtogrid"><a href="/"><img src="/wp-content/themes/sean/images/backtogrid.png" height="10px"></a></div>		
				</div> <!-- end navigation -->		
			</div>
			<div <?php post_class("box"); ?>>
				<div class="inside">			
				<?php while (have_posts()) : the_post(); ?>								    
					<div class="clearfix">   					
						<?php the_content(); ?>					
						<?php $project_url = get_post_meta($post->ID, "_ttrust_url_value", true); ?>
						<?php $project_url_label = get_post_meta($post->ID, "_ttrust_url_label_value", true); ?>
						<?php $project_url_label = ($project_url_label!="") ? $project_url_label : __('Visit Site', 'themetrust'); ?>
						<ul class="skillList clearfix"><?php ttrust_get_terms_list(); ?></ul>	
						<?php if ($project_url) : ?>
							<p><a class="action link" href="<?php echo $project_url; ?>"><?php echo $project_url_label; ?></a></p>
						<?php endif; ?>								
					</div>
					<?php comments_template('', true); ?>	
				<?php endwhile; ?>	
				</div>	
			</div>								    	
		</div>
	
<?php get_footer(); ?>