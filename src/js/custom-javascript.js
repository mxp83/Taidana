// menu overlay script
var $ = jQuery;

$(document).ready(function(){
  $('.nav-button').click(function(){
	$('body').toggleClass('nav-open');
  });
});

// dropdown hover instead of toggle

$(".dropdown-toggle").on("mouseenter", function () {
    // make sure it is not shown:
    if (!$(this).parent().hasClass("show")) {
        $(this).click();
    }
});

$(".btn-group, .dropdown").on("mouseleave", function () {
    // make sure it is shown:
    if ($(this).hasClass("show")){
        $(this).children('.dropdown-toggle').first().click();
    }
});