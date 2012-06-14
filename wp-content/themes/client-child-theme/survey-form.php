<?php
/**
 * Template Name: Favorite Rides template
 */
?>

<?php get_header(); ?>

<?php
	$args = array(
		'post_status' => 'publish',
		'category_name' => 'questions',
		'posts_per_page' => 1
	);
	$the_query = new WP_Query($args);
	$post_id = $the_query->posts[0]->ID;
	//print_r($the_query->posts[0]->ID);
	//print_r($the_query);
	//print_r(get_post_meta($post_id));
	//print_r(get_post_custom($post_id));
	$more_fields = get_post_custom($post_id);

	while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<form action="" method="POST">
	<div class="question"><?php the_title(); ?></div>

<?php foreach ($more_fields as $key => $value) {
	if (strpos($key, 'label') !== FALSE) :
	$keyNumeric = preg_match('/\d{1,2}/', $key, $matches);
	$image_key = 'image' . $matches[0];
	$title = $more_fields[$key][0];
?>
	<div class="question">
		<input type="radio" name="options" value="<?php echo $title; ?>" id="<?php echo $title; ?>" />
		<label for="<?php echo $title; ?>">
			<span><?php echo $title; ?></span>
			<img src="<?php echo $more_fields[$image_key][0]; ?>" />
	</label>
	</div>
	
<?php endif; } ?>

	<input type="submit" value="Vote" name="vote" />
</form>

<?php endwhile;
	// Reset Post Data
	wp_reset_postdata();
	get_footer();
?>