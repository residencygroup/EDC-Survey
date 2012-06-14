<?php if (isset($_POST['options']) && isset($_POST['questionID'])) :
	$answer = trim($_POST['options']);
	$questionID = trim($_POST['questionID']);

	echo $answer . ' for ' . $questionID;

	$survey = new Survey();
	$addVoteResult = $survey->addVote($questionID, $answer);
	if ($addVoteResult) : ?>
		<div class="thankyou">Thank you for your vote</div>
	<?php else: ?>
		<div class="error">There was an error submitting your vote.</div>
	<?php endif; ?>
<?php endif; ?>

