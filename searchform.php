<form class='search-form' method='get' action='<?php echo esc_url( home_url( '/' ) ); ?>'>
	<input type='text' placeholder='Search My Site' name='s' value='<?php echo get_search_query(); ?>'/>
	<button>
		<?php
		include get_template_directory() . '/inc/svg/search.php';
		?>
	</button>
</form>
