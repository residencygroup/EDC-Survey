<?php get_header(); ?>

<?php
	$post_id = $post->ID;
   	$more_fields = get_post_custom($post_id);
   	$banner = $more_fields['banner'][0];

   	while ( $wp_query->have_posts() ) : $wp_query->the_post();

	if(isset($_POST['vote'])) {
		//store info in db
		require('includes/survey.php');
		require('includes/process-submit.php');
	}
	else {
		//display the form
		require('includes/display-form.php');
	}

	endwhile;
?>
	
<?php get_footer(); ?>