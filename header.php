<!DOCTYPE html>

<html lang="en">
	<head>
		<meta property="og:site_name" content="<?php the_title(); ?>"/>
		<meta property='og:type' content='website'/>
		<meta property='og:locale' content='en_GB'/>
		<meta property="og:url" content="<?php echo site_url(); ?>"/>
		<meta property='og:image' content='<?php echo get_theme_mod('amias_open_graph_image'); ?>'/>
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<?php
		if (get_the_excerpt() != null) {
			$excerpt = get_the_excerpt();
		} else {
			$excerpt = get_theme_mod('amias_open_graph_excerpt');
		}
		?>
		<meta property="og:description" content="<?php echo $excerpt; ?>"/>

		<?php
		wp_head();
		?>

			<!-- Google Tag Manager
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZPE0E8RNM4"></script><script src="/res/js/analytics.js"></script>
			-->
	</head>
	<body>
		<header>
			<div id='content'>
				<?php
				if (function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
				?>
				<img id='logo' src='<?php echo $logo[0]; ?>' alt='AR Burrows Web Development Logo'/>
					<section id='background' class='primary'>
						<h1><?php echo get_bloginfo('name'); ?></h1>
						<h2><?php echo get_bloginfo('description'); ?></h2>
					</section>
					<div id='contact'>
						<div id='handle'>
							<?php
							include get_template_directory() . '/inc/svg/ellipsis.php';
							?>
						</div>
						<a id='phone' href='tel:<?php echo get_theme_mod('amias_contact_phone'); ?>'>
							<?php
							include get_template_directory() . '/inc/svg/phone.php';
							?>
						</a>
						<a id='email' href='mailto:<?php echo get_theme_mod('amias_contact_email'); ?>'>
							<?php
							include get_template_directory() . '/inc/svg/email.php';
							?>
						</a>
						<a id='download' href='<?php echo get_theme_mod('amias_contact_contact'); ?>'>
							<?php
							include get_template_directory() . '/inc/svg/contact.php';
							?>
						</a>
					</div>
					<?php
					include get_template_directory() . '/inc/svg/hamburger.php';
					?>
					<nav class='secondary'>
						<?php
						wp_nav_menu(
							array(
								'menu' => 'main',
								'menu_id' => 'main',
								'container' => 'ul',
								'theme_location' => 'main'
							)
						);
						?>
						<?php
						wp_nav_menu(
							array(
								'menu' => 'social',
								'menu_id' => 'socials',
								'container' => 'ul',
								'theme_location' => 'socials'
							)
						);
						?>
					</nav>
				</div>
			</div>
		</header>
