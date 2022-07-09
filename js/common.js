$(function() {


	$('.owl-auction').owlCarousel({
		loop: true,
		dots:true,
		responsive:{
			0:{
				items:2,
			},
			768:{
				items:5
			}
		}
	});
	
	
	$('.block-198').equalHeights();
	$('.auction-item').equalHeights();
	$('.item-why').equalHeights();

	
	$('.gal-wrap').fotorama({
		arrowPrev: '<img src="../img/left.png" width="30" height="30" >',
		arrowNext: '<img src="../img/right.png" width="30" height="30" >',
	   });
		

		//$("a.to-id").mPageScroll2id();
// 	$(".fa-times").on('click', function(){
// 		$(".mob").css('top', '-150%');
// });
// $(".moby").on('click', function(){
// 	$(".mob").css('top', '0');
// });
 





	  $('.mnu-but').on('click', function(e){
		$('#mob-list').addClass('active-mnu');
		$('body').css('overflow-y', 'hidden');
		e.preventDefault();
	});

	$('.close').on('click', function(e){
		$('#mob-list').removeClass('active-mnu');
		$('body').css('overflow-y', 'auto');
		e.preventDefault();
	});

	$('.mnu-block a.to-id').on('click', function(){
		$('.mnu-block').removeClass('active-mnu');
		$('body').css('overflow-y', 'auto');
		var id = $(this).attr('href');
		console.log($(this).attr('href'));
		$.mPageScroll2id("scrollTo", id);
	});
	// $(document).on('click', function(e){
	// 	$('.mnu-block').removeClass('active-mnu');
	// });
	$('.open-popup-link').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	  });
	
	//   $('.mnu-block, .mob-mnu').click(function(e){
	// 	  e.stopPropagation();
	// 	});

	$(".part").on( 'mousemove',    
		function (pos) { 
			console.log('jkhgkjhgjhg');
			var floor = $(this).data('floor');
			$("#floatingmes").text(floor);
		$("#floatingmes").show();
	  $("#floatingmes").css('left',(pos.pageX+10)+'px').css('top',(pos.pageY+10)+'px');          
}    
);
$(".part").on( 'mouseleave',    
		function (pos) { 
			$("#floatingmes").hide();         
}    
);
$('.arr-right').on('click', function(){
	var el = $('.flat');
	//el.scrollLeft( 1000 );
	el.animate({scrollLeft: 500});
	$('.arr-left').css('opacity', '1');
	$('.arr-right').css('opacity', '.5');
});
$('.arr-left').on('click', function(){
	var el = $('.flat');
	//el.scrollLeft( 1000 );
	el.animate({scrollLeft: 0});
	$('.arr-left').css('opacity', '.5');
	$('.arr-right').css('opacity', '1');
});
// .mouseleave(function() {
// $("#floatingmes").hide(); 
// }

//);


});
