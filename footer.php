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
		include get_template_directory_uri() . '/inc/contact-widget.php';
		include get_template_directory_uri() . '/inc/dark-mode-toggle.php';
		include get_template_directory_uri() . '/inc/scroll-to-content.php';
		wp_footer();
		?>
	</body>
</html>
