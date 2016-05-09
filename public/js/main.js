setTimeout(function() {
	$('.alert').slideUp(900);
}, 500);

$(function() {
  	var $h5 = $('h5');
  	$h5.hide().each(function(index) {
    	$(this).delay(150 * index).fadeIn(400);
	});
});

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
