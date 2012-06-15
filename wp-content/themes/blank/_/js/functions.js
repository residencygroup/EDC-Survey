// remap jQuery to $
(function($) {

	FB.init({
		appId: "404230696296293",
		status: true,
		cookie: true
	});

	function postToFeed(obj) {
		function callback(response) {
			document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
		}

		FB.ui(obj, callback);
	}

	$(document).ready(function() {
		var answer = '';

		$('.question-options').on('click', 'label', function(e) {
			var imgSrc = $(this).children('img').attr('src');
			$('#selectedImage').val(imgSrc);
		});

		if(document.getElementById('thankyou')) {
			answer = $('#answer').text();
			postToFeed({
				method: 'feed',
				link: 'https://residencygroup.com/',
				picture: document.getElementById('selectedImage').src,
				name: '', //question,
				caption: answer,
				description: 'I liked ' + answer + ' at EDC Las Vegas 2012. What was your favorite?'
			});
		}

	});

})(window.jQuery);


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/