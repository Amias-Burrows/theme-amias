<?php
get_header('search');
?>
<main>
	<img class='background' src='https://picsum.photos/1024/600'/>
	<h1>Oh No!</h1>
	<h2>I must have mistyped.  If you think this page should exist let me know via the contact form below.</h2>
	<form>
		<input type='text' value='<?php echo the_permalink(); ?>' placeholder='Type incorrect URL here'/>
		<label for='message'>Type any additional information here</label>
		<p>e.g.</p>
		<ul>
			<li>Where you found the link</li>
			<li>What you were trying to find</li>
		</ul>
		<input type='text' name='message'/>
		<input type='submit' value='Submit Error Report'/>
	</form>
</main>
<?php
get_footer();
?>
