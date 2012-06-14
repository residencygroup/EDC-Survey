<?php
/**
 * Template Name: Question template
 */
?>

<?php
	$query = new WP_Query('category_name=questions');
?>

<?php get_header(); ?>
<form action="" method="POST">
	
	<div class="question">What is your favorite ride?</div>
	
	<label for="">
		<img src="" alt="" />
	</label>
	<input type="radio" name="question1" value="-" id="" />
	
	<label for="">
		<img src="" alt="" />
	</label>
	<input type="radio" name="question1" value="-" id="" />
	
	<label for="">
		<img src="" alt="" />
	</label>
	<input type="radio" name="question1" value="-" id="" />
	
	<label for="">
		<img src="" alt="" />
	</label>
	<input type="radio" name="question1" value="-" id="" />

	<input type="submit" value="Vote" name="vote" />

</form>
<?php get_footer(); ?>