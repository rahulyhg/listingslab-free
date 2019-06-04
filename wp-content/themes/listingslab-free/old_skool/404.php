<?php

get_header(); ?>
	<main id="primary" class="site-main">
		<div class="page-content" style="text-align: center;">
			<a href="<?php echo get_home_url() ?>" target="_self">
				<img 
					src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" 
					alt="npm 404 page"
				/>
			</a>
		</div>
	</main>
<?php
get_footer();
