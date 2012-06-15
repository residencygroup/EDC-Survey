<img src="<?php echo site_url() ?>/wp-content/uploads/<?php echo $banner; ?>" alt="" id="header" />
<div class="survey">
<?php if (isset($_POST['options']) && isset($_POST['questionID'])) :
	$answer = trim($_POST['options']);
	$questionID = trim($_POST['questionID']);
	$selectedImage = trim($_POST['selectedImage']);

	$survey = new Survey();
	$addVoteResult = $survey->addVote($questionID, $answer);
	if ($addVoteResult) : ?>
		<div class="thankyou" id="thankyou">Thank you for your vote</div>
		<div>
			<div class="answer" id="answer"><?php echo $answer; ?></div>
			<img src="<?php echo $selectedImage; ?>" id="selectedImage" />
		</div>
	<?php else: ?>
		<div class="error">There was an error submitting your vote.</div>
	<?php endif; ?>
<?php endif; ?>
</div>