var myImgSwiper = new Swiper('.swiper-container ',{
  	pagination : '.swiper-pagination',
 });

$(document).on('click','.nav-toggle',function(){
	//alert(12);
	var jsnav = $('.js-vnav');
	if (jsnav.is(':visible'))
	{
		$(this).addClass('up');
		jsnav.slideUp();
	}else {
		$(this).removeClass('up');
		jsnav.slideDown();
	}

	//$('.js-vnav').slideToggle(1000);
})


var myimg = $('.myimgs');
imgSet(myimg);


function imgSet(img){
	var dWidth = $('.wrapper-content').outerWidth() - 30;
	var imgW = img.attr('data-width');
	var imgH = img.attr('data-height');
	img.css({
		'height': dWidth/imgW*imgH+'px',
		'width': dWidth+'px',
		'broder': 'none'
	});
}




$(function() {
	$("img").lazyload({ 
	   effect: "fadeIn",
	   threshold : 100
	});  
});


