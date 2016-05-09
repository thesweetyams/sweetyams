setTimeout(function() {
	$('.alert').slideUp(900);
}, 1000);

$(function() {
  	var $h5 = $('h5');
  	$h5.hide().each(function(index) {
    	$(this).delay(150 * index).fadeIn(400);
	});
});

