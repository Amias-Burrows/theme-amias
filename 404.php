<?php
get_header('search');
?>
<main>
	<img class='background' src='https://picsum.photos/1024/600'/>
	<div class='content'>
		<div class='message'>
			<h1>Oh No! 404 Error</h1>
			<p>I must have mistyped.  If you think this page should exist let me know via the contact page linked below.</p>
			<a class='button' href='<?php get_theme_mod('amias_contact_page'); ?>'>Contact Me</a>
		</div>
	</div>
</main>
<?php
get_footer();
?>
