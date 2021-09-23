			</main><!-- #main -->
	</div><!-- #content -->

	<footer class="site-footer" role="contentinfo">

		<div class="site-info">
			<p>copyright © <?php echo date('Y'); ?>
			<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
				<?php if ( is_front_page() && ! is_paged() ) : ?>
					<?php bloginfo( 'name' ); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
			<?php endif; ?>
			by <a href="https://www.fiverr.com/asifkhan855" target="_blank"> Muhammad Asif </a> all rights reserved
		</p>
		</div><!-- .site-info -->
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>