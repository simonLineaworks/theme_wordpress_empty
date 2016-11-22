// Slick slider
$('.head-slider').slick({
	dots: true,
	});


// TITLE.js is like column in Bootstrap 				

$(window).on('load', function(){
	$('.post-box').tile(4);
})


// Days with events on Calendar are not clickable.

$('.has-posts a').click(function(event){
  event.preventDefault();
});


// Page loader icon.

$(window).load(function() {
	$(".loader").fadeOut("1000");
})




	
 

