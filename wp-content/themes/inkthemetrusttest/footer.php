	<div id="footer">					
		<?php $footer_text = of_get_option('ttrust_footer_text'); ?>			
		<div class="inside"><p><?php if($footer_text){echo($footer_text);} else{ ?>Theme by <a href="http://themetrust.com" title="Premium WordPress Themes"><strong>Theme Trust</strong></a><?php }; ?></p></div>
	</div><!-- end footer -->
</div><!-- end main -->
</div><!-- end container -->
<?php wp_footer(); ?>
</body>
</html>