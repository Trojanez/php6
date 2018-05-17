$(document).ready(function(){
	$(#form_id).submit(function(evt) {
		evt.preventDefault();
		var phone = $(#phone).val();
		var name = $(#name).val();

		var data = 'phone=' + phone + '&pass' + pass;

		$.ajax({
			method: 'post',
			url: $(this).attr('action'),
			data: data,
			success: function(data) {
				alert('Отправка...');
			}
		})

	});
});