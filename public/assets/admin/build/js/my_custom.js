function update_deal(field_name, listing_id, field_id){
		
    if($('#'+field_id).is(":checked")){
        var field_val = 1;
    }
    else if($('#'+field_id).is(":not(:checked)")){
        var field_val = 0;
    }


	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	$.ajax({
		/* the route pointing to the post function */
		url: 'update_deals',
		type: 'POST',
		/* send the csrf-token and the input to the controller */
		data: {
			_token: CSRF_TOKEN, 
			field_name:field_name,
			field_val:field_val,
			listing_id:listing_id
		},
		dataType: 'JSON',
		/* remind that 'data' is the response of the AjaxController */
		success: function (data) { 
			// $(".writeinfo").append(data.msg); 
			alert(data.msg);
		}
	}); 
}