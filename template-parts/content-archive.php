<li>
<a class='link' href='<?php echo the_permalink(); ?>'</a>
	<p><?php echo the_permalink(); ?></p>
	<?php
	$thumbnail = get_the_post_thumbnail_url(null, 'large');
	if ($thumbnail == false) {
		$id = 'https://picsum.photos/500/300?blur=3';
	} else {
		$id = $thumbnail;
	}
	?>
		<img src='<?php echo $id; ?>' alt='Thumbnail Image'/>
	<h4><?php echo the_title(); ?></h4>
	<p><?php echo get_the_excerpt(get_the_id()); ?></p>
</a>
</li>
