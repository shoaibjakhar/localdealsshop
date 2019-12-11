$(document).ready(function(){
   $('ul.tabs_market li').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('ul.tabs_market li').removeClass('current_market');
      $('.tab-content_market').removeClass('current_market');

      $(this).addClass('current_market');
      $("#"+tab_id).addClass('current_market');
   });

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

