$(function (){
	$('.addItemButton').on('click', function(e) {
		e.preventDefault();
		var $orders = $('#ajaxContainer');
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
				$orders.append('<p>' + order.order_item.name + ': ' + '$' + (order.order_item.price / 100).toFixed(2) + '</p>');
				order.item_addons.forEach(function(addon) {
					$orders.append('<ul><li>' + addon.description + ' ' + addon.price.toFixed(2) + '</li></ul>');
				});
				$('.checkbox').prop('checked', false);
			},
			error: function(a) {
				console.log(a);
				alert('something is wrong');
			}
		});
	})
});

