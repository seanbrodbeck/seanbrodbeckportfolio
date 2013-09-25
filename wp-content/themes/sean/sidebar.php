<div id="sidebar" class="clearfix">
	
    <?php
		if(get_post_type() == 'project' && is_active_sidebar('sidebar_projects')) : dynamic_sidebar('sidebar_projects');
	    elseif((is_archive() || is_search()) && is_active_sidebar('sidebar_posts')) : dynamic_sidebar('sidebar_posts');
		elseif(is_home() && is_active_sidebar('sidebar_posts')) : dynamic_sidebar('sidebar_posts');		
	    elseif(is_single() && is_active_sidebar('sidebar_posts')) : dynamic_sidebar('sidebar_posts');
	    elseif(is_page() && is_active_sidebar('sidebar_pages')) : dynamic_sidebar('sidebar_pages');
		elseif(is_search() && is_active_sidebar('sidebar_posts')) : dynamic_sidebar('sidebar_pages');
		elseif(is_front_page() && is_active_sidebar('sidebar_home')) : dynamic_sidebar('sidebar_home');
	else : ?>

		<?php if (!dynamic_sidebar('sidebar')) ;?>  		
    
	<?php endif; ?>
</div><!-- end sidebar -->