<?php
comment_form();
if (have_comments()) {
?>
	<ul class='comments'>
		<?php
		wp_list_comments(array(
			'style' => 'ul',
			'short_ping' => 'true'
		));
		?>
	</ul>
<?php
}
?>
