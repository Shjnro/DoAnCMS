<?php

/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ($next_post || $prev_post) {

	$pagination_classes = '';

	if (!$next_post) {
		$pagination_classes = ' only-one only-prev';
	} elseif (!$prev_post) {
		$pagination_classes = ' only-one only-next';
	}

?>
<!-- Start Code (7) Prev - Next Post -->
	<nav class="pagination-single section-inner<?php echo esc_attr($pagination_classes); ?>" aria-label="<?php esc_attr_e('Post', 'twentytwenty'); ?>" role="navigation">

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

		<div class="pagination-single-inner" id="another__post-wrapper">

			<?php
			//lấy thời gian bài post về
			if ($prev_post) {
				$prev_post_new_post_date = $prev_post->post_date;
				$prev_date = explode("/", date('d/m/y', strtotime($prev_post_new_post_date)));
				$day = $prev_date[0];
				$month = $prev_date[1];
				$year = $prev_date[2];
			?>
				<!-- Bài viết trước -->
				<div class="another__post">
					<div class="headlinesdate">
						<div class="headlinesdm">
							<div class="headlinesday"><?php echo $day; ?></div>
							<div class="headlinesmonth"><?php echo $month; ?></div>
						</div>
						<div class="headlinesyear"><?php echo $year; ?></div>
					</div>
					<div class="headlinestitle">
						<a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
							<?php echo wp_kses_post(get_the_title($prev_post->ID)); ?>
						</a>
					</div>
				</div>
				<?php
			}
			?>

			<?php
			//lấy thời gian bài post về
			if ($next_post) {
				$next_post_new_post_date = $next_post->post_date;
				$next_date = explode("/", date('d/m/y', strtotime($next_post_new_post_date)));
				$day = $next_date[0];
				$month = $next_date[1];
				$year = $next_date[2];
			?>
			<!-- Bài viết sau -->
				<div class="another__post">
					<div class="headlinesdate">
						<div class="headlinesdm">
							<div class="headlinesday"><?php echo $day; ?></div>
							<div class="headlinesmonth"><?php echo $month; ?></div>
						</div>
						<div class="headlinesyear"><?php echo $year; ?></div>
					</div>

					<div class="headlinestitle">
						<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
							<?php echo wp_kses_post(get_the_title($next_post->ID)); ?>
						</a>
					</div>
				</div>
			<?php
			}
			?>
		</div><!-- .pagination-single-inner -->

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

	</nav><!-- .pagination-single -->
<!-- End Code (7) Prev - Next Post -->
<?php
}
