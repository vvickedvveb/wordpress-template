<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="wp-content/themes/thali/assets/images/logo.png">

    <?php
        wp_head()
    ?>

</head>

<body>

<div class="container-fluid bg-light">
	<div class="container">
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4">
			<?php
				if (function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
			?>
			<a href="<?php echo site_url(); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<img class="img-fluid logo spin" src="<?php echo $logo[0]; ?>" alt="VW" >
				<span class="fs-4">&nbsp; Das Auto</span>
			</a>

			<?php
				wp_nav_menu (
					array(
						'menu' => 'primary',
						'container' => '',
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="" class="nav nav-pills">%3$s</ul>'
					)
				);
			?>
		</header>
	</div>
</div>

<div class="container">
	<div class="px-4 text-center border-bottom mb-5 h1-fade-in fadeIn">
		<h1 class="display-4 fw-bold"><?php the_title(); ?></h1>
	</div>
</div>
