var $ = jQuery.noConflict();
(function($){

	$.fn.slider = function(s){

		var p = 0;

		$('#'+s.idS+' .'+s.idLBtn).on('click',function(e){
			e.preventDefault();
			moveSlider('l');
		});
			
		$('#'+s.idS+' .'+s.idRBtn).on('click',function(e){
			e.preventDefault();
			moveSlider('r');
		});

		$('#'+s.idS+' .'+s.classPBtn).on('click',function(e){
			e.preventDefault();
			moveSlider($(this).data('position'));
		});

		defineSizes();

		$(window).on('resize', defineSizes);

		function defineSizes() {
			$('#'+s.idS+' .'+s.classSlide).each(function(i,e){
				$(e).css({
					'width': ($('#'+s.idS).width()) + 'px',
					'height': 'auto',
				});
			});

			$('#'+s.idS+' #'+s.idIS).css({
				'margin-left': -(p * $('#'+s.idS).width())+'px'
			});
		}

		function moveSlider(d) {

			var l = $('#'+s.idS+' .'+s.classSlide).length;

			if (d == 'r') p = p + 1;
			if (d == 'l') p = p - 1;
			if (typeof(d)=='number') p = d;
			p = (p >= l) ? 0 : p;
			p = (p < 0) ? l - 1 : p;

			$('#'+s.idS+' #'+s.idIS).animate({
				'margin-left': -(p * $('#'+s.idS).width())+'px'
			});

			$('#'+s.idS+' .'+s.classPBtn).each(function(){
				$(this).removeClass('pbtn-sltd');
				if (parseInt(p)==parseInt($(this).data('position'))) $(this).addClass('pbtn-sltd');
			});

		}

		if (s.rotate==true){
			if (s.setTime <= 0) s.setTime = 5;
			setTimeout(moveSlider('r'),s.setTime*1000);
		}
	
	};// FIN $.fn.slider
	
})(jQuery);
