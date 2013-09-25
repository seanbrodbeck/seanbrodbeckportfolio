<?php $num_pages = $wp_query->max_num_pages; if($num_pages > 1) : ?> 	
<?php kriesi_pagination(); ?>
<?php endif; // endif num_pages ?>