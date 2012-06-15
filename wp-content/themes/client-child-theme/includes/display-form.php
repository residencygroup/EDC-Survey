<img src="<?php echo site_url() ?>/wp-content/uploads/<?php echo $banner; ?>" alt="" id="header" />
<div class="survey">
<form action="<?php the_permalink(); ?>" method="POST">
	<input type="hidden" name="questionID" value="<?php echo $post_id; ?>" />
	<input type="hidden" name="selectedImage" id="selectedImage" />
	<div class="question"><?php the_title(); ?></div>

<?php foreach ($more_fields as $key => $value) {
	if (strpos($key, 'label') !== FALSE) :
	$keyNumeric = preg_match('/\d{1,2}/', $key, $matches);
	$image_key = 'image' . $matches[0];
	$title = $more_fields[$key][0];
?>

	<div class="question-options">
		<input type="radio" name="options" value="<?php echo $title; ?>" id="<?php echo $title; ?>" />
		<label for="<?php echo $title; ?>">
			<span><?php echo $title; ?></span>
			<img src="<?php echo $more_fields[$image_key][0]; ?>" />
		</label>
	</div>
	
<?php endif; } ?>
	<input type="submit" value="Vote" name="vote" id="submit" />
</form>

</div>