<li>
<a class='link' href='<?php echo the_permalink(); ?>'</a>
	<p><?php echo the_permalink(); ?></p>
	<h4><?php echo the_title(); ?></h4>
	<p><?php echo get_the_excerpt(get_the_id()); ?></p>
</a>
</li>