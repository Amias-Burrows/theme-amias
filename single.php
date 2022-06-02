<?php
get_header('single');
?>

<main>

	<?php
		if(have_posts()) {
			while (have_posts()) {
				the_post();
				the_content();
			}
		}
		if (comments_open()) {
			comments_template();
		}
	?>

</main>

<?php
get_footer('single');
?>
