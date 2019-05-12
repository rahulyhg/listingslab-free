		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Child Page List") ) : endif; ?>
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'business_theme' ); ?>">
						<?php wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . business_theme_get_icon_svg( 'link' ),
							'depth'          => 1,
						) ); ?>
					</nav>
				<?php endif; ?>
			</div>
		</footer>
	</div>
	<?php wp_footer(); ?>
	</body>
</html>
