<?php
/**
 * Template Name: Favorite Rides template
 */
?>

<?php get_header(); ?>

<?php
	if(isset($_POST['vote'])) {
		//store info in db
		require('includes/survey.php');
		require('includes/process-submit.php');
	}
	else {
		//display the form
		require('includes/display-form.php');
	}
?>
	
<?php get_footer(); ?>