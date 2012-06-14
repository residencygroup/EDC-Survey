// remap jQuery to $
(function($){

	$(document).ready(function() {
		$('.question-options').on('click', 'label', function(e) {
			var imgSrc = $(this).children('img').attr('src');
			$('#selectedImage').val(imgSrc);
		});
	});


})(window.jQuery);


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/


