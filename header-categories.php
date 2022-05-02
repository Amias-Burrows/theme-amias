<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta property="og:site_name" content="<?php the_title(); ?>"/>
		<meta property='og:type' content='website'/>
		<meta property='og:locale' content='en_GB'/>
		<meta property="og:url" content="<?php echo site_url(); ?>"/>
		<?php
		$post = get_post();
		$thumbnail = get_the_post_thumbnail_url($post->ID);
		if ($thumbnail == false) {
			$id = 'https://picsum.photos/1024/600?blur=3';
		} else {
			$id = $thumbnail;
		}
		?>
		<meta property='og:image' content='<?php echo $id; ?>'/>
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
			<div class='content'>
				<?php
				if (function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
				?>
				<div class='header-title-section'>
				<a class='header-logo-link' href='<?php get_site_url(); ?>'>
						<img id='logo' src='<?php echo $logo[0]; ?>' alt='AR Burrows Web Development Logo'/>
					</a>
					<h1><?php the_title(); ?></h1>
				</div>
					<?php
					include get_template_directory() . '/inc/svg/header-menu-btn.php';
					?>
					<nav class='header-menu'>
						<?php
						wp_nav_menu(
							array(
								'menu' => 'main',
								'menu_class' => 'main-nav',
								'container' => 'ul',
								'theme_location' => 'main'
							)
						);
						?>
						<?php
						wp_nav_menu(
							array(
								'menu' => 'social',
								'menu_class' => 'social-nav',
								'container' => 'ul',
								'theme_location' => 'socials'
							)
						);
						?>
					</nav>
					<img class='header-background-img' src='https://picsum.photos/960/600' alt='Background-image'/>
				</div>
			</div>
		</header>
