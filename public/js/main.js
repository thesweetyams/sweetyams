setTimeout(function() {
	$('.alert').slideUp(900);
}, 500);

$(function() {
  	var $h5 = $('h5');
  	$h5.hide().each(function(index) {
    	$(this).delay(150 * index).fadeIn(400);
	});
});

