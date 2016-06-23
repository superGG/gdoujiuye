(function($){

	$.fn.slider = function(options){

		var defaults = {
			nowIndex : 0,
			timeId : 0,
			me : null,
			flag: false
		};


		var options = $.extend(defaults,options);

		var startShow = function(){

			
			defaults.nowIndex++;
			var $this = $(this);
			$this.animate({'margin-left':-defaults.nowIndex*100 + '%'},1500,function(){

				if(defaults.nowIndex === defaults.imgNum){

					$this.css({
						'margin-left': '0'
					});

					defaults.nowIndex = 0;
				}
			});

			$(defaults.slidesNavElem).find('a').eq(defaults.nowIndex).addClass('active').parent('td').siblings().find('a').removeClass('active');
		}
		
		var me = this;

		defaults.timeId = setInterval(function(){
			startShow.call(me);
		},4000);



		$(defaults.slidesNavElem).each(function(i){
			$(this).bind('click',function(){

					defaults.nowIndex = i;
					
					me.stop().animate({'margin-left': -i*100 + '%'},500,function(){


					if(defaults.nowIndex === defaults.imgNum){

						me.css({
							'margin-left': '0'
						});

						defaults.nowIndex = 0;
					}


					// 
				});
				$(this).find('a').addClass('active').parent('td').siblings().find('a').removeClass('active');
			})
		}); 

		$(defaults.slidesNavElem).bind({
			'mouseover':function(){
				clearInterval(defaults.timeId);
			},
			'mouseleave':function(){
				defaults.timeId = setInterval(function(){
					startShow.call(me);
				},4000);
			}
		})
	}

})(jQuery);

