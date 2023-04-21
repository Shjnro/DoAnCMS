<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<!-- Link is WordPress -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<!-- Start Link is Header Moudel 1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/module2.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/module5.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>./module6.css" type="text/css" media="screen" />
	
	<!-- End Link is Header Moudel 1 -->
</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<!-- Start Header Moudle 1 -->
	<header id="site-header" class="header-footer-group">
		<?php
		// Check whether the header search is activated in the customizer.
		$enable_header_search = get_theme_mod('enable_header_search', true);
		?>
		<nav class="navbar navbar-icon-top navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<?php
					// Site title or logo.
					twentytwenty_site_logo();
					?>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
					</ul>
					<form action="http://wordpress.local/" class="navbar-form navbar-left thing">
						<div class="go_search">
							<div class="cot col1"><i class="fa fa-search"></i></div>
							<div class="cot col2"><input class="form-control formS" name="s" id="s" placeholder="Search topics or keywords" type="search"></div>
							<div class="cot col3"><button class="btn-kiem" type="submit">Search</button></div>
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<?php
						$args = array(
							'type'      => 'post',
							'number'    => 10,
							'parent'    => 0
						);
						$categories = get_categories($args);
						foreach ($categories as $category) { ?>
							<li><a href="#" style="font-size: 1.5rem;">
									<?php echo $category->name; ?>
								</a></li>
						<?php } ?>
						<li>
							<a href="#" class="center-text">
								<div class="toggle-wrapper search-toggle-wrapper">
									<!-- This is btn search -->
									<button class="toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
										<span class="toggle-inner tranY">
											<?php twentytwenty_the_theme_svg('search'); ?>
											<span class="toggle-text">
												<?php _ex('Search', 'toggle text', 'twentytwenty'); ?>
											</span>
										</span>
									</button><!-- .search-toggle -->

								</div>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user-circle-o" aria-hidden="true"></i>
								Account <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="http://wordpress.local/admin/">Login</a></li>
								<li><a href="<?php echo wp_logout_url(); ?>">Loguot</a></li>
							</ul>
						</li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<?php
		// Output the search modal (if it is activated in the customizer).
		get_template_part('template-parts/modal-search');
		?>
	</header><!-- #site-header -->
	<!-- End Header Moudle 1 -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
