Vue.component('alert', {
	template: '#alert-template',
	props: ['type'],
	data: function() {
		return { show: true };
	},
	computed: {
		alertClasses: function() {
			var type = this.type;
			return {
				'Alert': true,
				'Alert--OrderNow': type = 'orderNow',
				'Alert--Success': type == 'success',
				'Alert--Error': type == 'error'
			}
		}
	}
});

new Vue ({
	el: 'body'
});

$(document).ready(function () {
	var $window = $(window);
	var $component = $('.Alert.Alert--OrderNow');
	$component.hide();

});

