$(function(){

	var arrImg = [
		'1.jpg',
		'2.jpg',
		'3.jpg',
		'4.jpg',
		'5.jpg',
		'6.jpg',
		'7.jpg',
		'8.jpg',
		'9.jpg',
	];

	Vue.component('menu-ul2', {
	  	template: '#menu-ul2-template',
	});

	Vue.component('container-with-img', {
		props: ['arr'],
	  	template: '#container-with-img-template',
	});

	Vue.component('slider', {
		props: ['arr'],
	  	template: '#slider-template',
	});


	var app = new Vue({
		el: '.wrapper',
		data: {
			arrImg: arrImg,
		},
		mounted: function(){
			var slider = $('.slider').slick({
			 	nextArrow: $('.btnLeft'),
		  		prevArrow: $('.btnRight'),
			});

			var wrapperSlider = $('.wrapperSlider');
			var body = $('body');

			$('.containerWithImg__img').on('click',function(){
				slider.slick("slickGoTo", $(this).parent().index());
				wrapperSlider.removeClass('hidden');
				body.css('overflow', 'hidden');
			});

			wrapperSlider.on('click',function(e){
				var target = $(e.target);
				if(target.is('[data-close]')){
					wrapperSlider.addClass('hidden');
					body.css('overflow', 'auto');
				}
			});

			var hamburger = $('.header__hamburger');
			var wrapperMenu = $('.wrapperMenu');

			hamburger.on('click',function(){
				wrapperMenu.removeClass('hidden');
				hamburger.addClass('hidden');
				body.css('overflow', 'hidden');
			});

			wrapperMenu.on('click',function(e){
				var target = $(e.target);
				if(target.is('[data-close-menu]')){
					wrapperMenu.addClass('hidden');
					hamburger.removeClass('hidden');
					body.css('overflow', 'auto');
				}
			});
		}
	})

});