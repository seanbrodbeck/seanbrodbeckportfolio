<?php global $p; ?>
<div class="project small <?php echo $p; ?>" id="project-<?php echo $post->post_name;?>">
	<a href="<?php the_permalink(); ?>" rel="bookmark" >	
		<div class="description">
			<span class="title"><?php the_title(); ?></span>			
			<?php if(!empty($post->post_excerpt)) { ?>	
				<span class="divider"></span>		     
				<?php the_excerpt(); ?>
			<?php } ?>
		</div>
		<div class="overlay"></div>
		<?php the_post_thumbnail("ttrust_portfolio", array('class' => 'thumb', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?>
	</a>																																
</div>