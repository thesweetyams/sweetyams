$(function (){
	$('.addItemButton').on('click', function(e) {
		e.preventDefault();
		var $orders = $('#orders');
		var $item_id = $(this).parent().find('.item_id').val();
		var $addOnVals = [];

		$('.checkbox:checked').each(function() {
			$addOnVals.push($(this).val());			
		});

		$.ajax({
			type: 'POST',
			url:  '/orders',
			data: {
				'item_id': $item_id,
				'add_on_id': $addOnVals
			},
			success: function(order) {
				var addons = '<ul>';
				order.item_addons.forEach(function(addon) {
					addons += '<li>' + addon.description + addon.price + '</li>';
				});
				addons += '</ul>';
				$orders.append('<li>' + order.order_item.name + ': ' + '$' + (order.order_item.price / 100) + addons + '</li>');
			},
			error: function(a) {
				console.log(a);
				alert('something is wrong');
			}
		});
	})
});

