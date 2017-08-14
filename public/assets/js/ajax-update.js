jQuery(document).ready(function($) {
	var url = "/ajax-update/public/tasks";

	$.get(url + '' + data_id, function(data){
		console.log (data);
		$('#loadme').val(data.id);
		$('#refresh').val("update")
	})
});

//create new task /  update exixting task
$("#refresh").click(function(e){
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name"_token"]').attr('content')
		}
	})

	e.preventDefault();
	var formData = {
		task: $('#loadme').val(),
	}
	var state = $('#refresh').val();

	var type = "GET"
	var data_id = $('#loadme').val();;
	var my_url = url;

	if (state == "update"){
		type = "GET";
		my_url += '' + data_id;
	}
	console.log(formData);

	$.ajax({

		type: type,
		ir;: my_url,
		data: formData,
		dataType: 'json',
		success: function (data) {
			console.log(data);

			var task =
		}
	})
});