window.addEventListener('load', function(){
	new Glider(document.querySelector('.carousel__lista'), {
		slidesToShow: 1,
  		slidesToScroll: 1,
  		dots: '.carousel__indicadores',
  		arrows: {
    		prev: '.carousel__anterior',
    		next: '.carousel__siguiente'
  		}
	});
	const glider = new Glider(document.getElementById('carousel__lista'));

	function sliderAuto(slider, miliseconds) {
 	const slidesCount = slider.track.childElementCount;
 	let slideTimeout = null;
	 let nextIndex = 1;

 	function slide () {
   		slideTimeout = setTimeout(
     	function () {
       	if (nextIndex >= slidesCount ) {
         	nextIndex = 0;
       	}
       	slider.scrollItem(nextIndex++);
     	},
     	miliseconds
   	);
 	}

 	slider.ele.addEventListener('glider-animated', function() {
   		window.clearInterval(slideTimeout);
   		slide();
 		});

 		slide();
		}

	sliderAuto(glider, 2500)
});