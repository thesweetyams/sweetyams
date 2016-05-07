setTimeout(function() {
	$('.alert').slideUp(900);
}, 500);

$(function() {
  	var $p = $('p');
  	$p.hide().each(function(index) {
    	$(this).delay(700 * index).fadeIn(700);
	});
});

