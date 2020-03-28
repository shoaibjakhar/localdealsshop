$(document).ready(function(){
   $('ul.tabs_market li').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('ul.tabs_market li').removeClass('current_market');
      $('.tab-content_market').removeClass('current_market');

      $(this).addClass('current_market');
      $("#"+tab_id).addClass('current_market');
   });

});

$('#imageUpload').click(function(){
  $('#update_image').show();
});

// products tabs

$(document).ready(function($) {
  $('.tab_content').hide();
  $('.tab_content:first').show();
  $('.tabs li:first').addClass('active');
  $('.tabs li').click(function(event) {
    $('.tabs li').removeClass('active');
    $(this).addClass('active');
    $('.tab_content').hide();

    var selectTab = $(this).find('a').attr("href");

    $(selectTab).fadeIn();
  });
});


$(document).ready(function($) {
  $('.tab_content_woman').hide();
  $('.tab_content_woman:first').show();
  $('.tabs_woman li:first').addClass('active');
  $('.tabs_woman li').click(function(event) {
    $('.tabs_woman li').removeClass('active');
    $(this).addClass('active');
    $('.tab_content_woman').hide();

    var selectTab = $(this).find('a').attr("href");

    $(selectTab).fadeIn();
  });
});

//$(window).load(function() {
$(document).ready(function(e) {
	$("#loading").delay(500).fadeOut(500);
	$("#loading-center").click(function() {
		$("#loading").fadeOut(500);
	});
	setTimeout(function(){ load_iamges(); }, 1000);	
	
});

$(document).ready(function() {
    $('#transaction').DataTable();
} );

$('.toggle_btn').click(function(){
  $('.sidebar_menu').slideToggle();

})



$(document).ready(function() {
  $(".dataTables_filter label input, .dataTables_length label select").addClass("form-control");
  $(".dataTables_filter label,  .dataTables_length label").addClass("form-inline");
  $(".dataTable .even td").removeClass("sorting_1");
});

$(".make-deal").click(function() {
    $('html, body').animate({
        scrollTop: $("#adv-det").offset().top
    }, 700);
});

// ajax request to assign coupon to customer
var clipboard = new ClipboardJS('.copy_to_clipboard');

clipboard.on('success', function(e) {
    
    var coupon_code         = e.text;
    var customer_id_used_by = $('#customer_id_used_by').val();
    var CSRF_TOKEN          = $('meta[name="csrf-token"]').attr('content');

    if (coupon_code == '') {

      $('.copied_clipboard').text('No coupon found').show().delay(2500).fadeOut();
      return false;
    
    }
    if (customer_id_used_by == '') {

      $('.copied_clipboard').text('Something went wrong, Please contact support!').show().delay(2500).fadeOut();
      return false;

    }

    $.ajax({

      url: "http://localhost/localdealshop/public/coupon_request", // will make it dynamic in next release [TODO shoaib]
      type: 'POST',
      data: {
        _token:       CSRF_TOKEN,
        customer_id_used_by:      customer_id_used_by,
        coupon_code:  coupon_code
      },
      dataType: 'JSON',
      success: function(result){
        
        if (result.status == 'success') {

          $('.copied_clipboard').text('Copied!').show().delay(2500).fadeOut();
        
        } else{

          $('.copied_clipboard').text('First use previous coupon!').show().delay(3500).fadeOut();

        }
    
    }});

});

clipboard.on('error', function(e) {
    console.log(e);
});

// ajax request to assign coupon to customer
var clipboard1 = new ClipboardJS('.copy_to_clipboard1');

clipboard1.on('success', function(e) {
    

          $('.copied_clipboard1').text('Copied!').show().delay(2500).fadeOut();



});

clipboard1.on('error', function(e) {
    console.log(e);
});