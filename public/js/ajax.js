$(function (){

	$('.addItemButton').on('click', function(e) {
		e.preventDefault();
		var $orders = $('#orders');
		var $item_id = $(this).parent().find('.item_id').val();
		console.log($item_id);
		$.ajax({
			type: 'POST',
			url:  '/orders',
			data: {
				'item_id': $item_id
			},
			success: function(orderItem) {
				console.log(orderItem);
				$orders.append('<li>' + orderItem.name + ': ' + '$' + (orderItem.price / 100) + '</li>');
			},
			error: function() {
				alert('something is wrong');
			}
		});
	})
});

// $('.className:checked').each(function() {
//		selected_value.push($(this).val());
//		console.log(select_value);
// });