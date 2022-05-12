<?php
get_header();
?>

<main>

	<?php
		if(have_posts()) {
			while (have_posts()) {
				the_post();
				the_content();
			}
		}
		include get_template_directory() . '/inc/services.php';
	?>

</main>

<?php
get_footer();
?>
