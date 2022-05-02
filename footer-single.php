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
		wp_footer();
		?>
	</body>
</html>
