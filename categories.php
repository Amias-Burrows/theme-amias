<?php
get_header('archive');
?>
<main>
	<p>Categories Page</p>
	<?php get_search_form(); ?>
	<ul class='archive-list'>
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content', 'archive');
			}
		}
		?>
	</ul>
</main>
<?php
get_footer();
?>
