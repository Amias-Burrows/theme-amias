<div class='contact-widget'>
	<div class='content'>
		<div class='app-handle'>
			<svg
				preserveAspectRatio='xMidYMid meet'
				zoomAndPan='magnify'
				viewbox='0 0 100 100'
			>
				<title>Contact Details</title>
				<g class='closed'>
					<circle cx='20' cy='50' r='8'/>
					<circle cx='50' cy='50' r='8'/>
					<circle cx='80' cy='50' r='8'/>
				</g>
				<g class='open'>
					<line class='top' x1='20' x2='80' y1='20' y2='80'/>
					<line class='btm' x1='20' x2='80' y1='80' y2='20'/>
				</g>
			</svg>
		</div>
		<a class='phone-svg' href='tel:<?php echo get_theme_mod('amias_contact_phone'); ?>'>
			<?php
			include get_template_directory() . '/inc/svg/phone.php';
			?>
		</a>
		<a class='email-svg' href='mailto:<?php echo get_theme_mod('amias_contact_email'); ?>'>
			<?php
			include get_template_directory() . '/inc/svg/email.php';
			?>
		</a>
		<a class='download-svg' href='/res/<?php echo get_theme_mod('amias_contact_contact'); ?>'>
			<?php
			include get_template_directory() . '/inc/svg/contact.php';
			?>
		</a>
	</div>
</div>
