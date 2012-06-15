// remap jQuery to $
(function($) {

	FB.init({
		appId: "404230696296293",
		status: true,
		cookie: true
	});

	function postToFeed(obj) {
		function callback(response) {}
		FB.ui(obj, callback);
	}

	$(document).ready(function() {
		var answer = '';
		var fieldSelectedImage = document.getElementById('selectedImage');

		$('.question-options').on('click', 'label', function(e) {
			var imgSrc = $(this).children('img').attr('src');
			$('#selectedImage').val(imgSrc);
		});

		if(document.getElementById('thankyou')) {
			answer = $('#answer').text();
			postToFeed({
				method: 'feed',
				link: RG.permalink,
				picture: document.getElementById('selectedImage').src,
				name: '', //question,
				caption: answer,
				description: answer + ' was the best ride at EDC.'
			});
		}

		if(fieldSelectedImage) {
			fieldSelectedImage.value = $('.question-options').filter(':first').find('img').attr('src');
		}
	});

})(window.jQuery);


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/