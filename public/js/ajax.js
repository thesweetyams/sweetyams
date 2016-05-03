$(function (){
	var orders = $('#orders');
	$.ajax({
		type: 'get',
		url:  'orders/create',
		success: function(orders) {
			$.each(orders, function(i, order) {
				$orders.append('<li>Order Item: '+ order.name + '</li>');
			});
		}
	});
});