		<footer>
			<?php
			wp_nav_menu(
				array(
					'menu' => 'footer',
					'container' => '',
					'theme_location' => 'footer'
				)
			);
			?>
			<p>Copyright &copy; AR Burrows Web Development 2020 - Present</p>
		</footer>
		<?php
		include get_template_directory() . '/inc/contact-widget.php';
		include get_template_directory() . '/inc/dark-mode-toggle.php';
		include get_template_directory() . '/inc/scroll-to-content.php';
		wp_footer();
		?>
		<script type="text/javascript">
			window.onload = function() {
				Calendly.initBadgeWidget({
					url: '<?php echo get_theme_mod('amias_calendly_url'); ?>',
					text: '<?php echo get_theme_mod('amias_calendly_text'); ?>',
					color: '<?php echo get_theme_mod('amias_calendly_colour'); ?>',
					textColor: '<?php echo get_theme_mod('amias_calendly_text_colour'); ?>',
					branding: <?php echo get_theme_mod('amias_calendly_branding'); ?>
				});
			}
		</script>
	</body>
</html>
