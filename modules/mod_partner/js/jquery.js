$outer_c=$("#outer_c");
	$b=$("#b");
	$b_c=$("#b .c");
	$b_content=$("#b .content");
	
	$(window).load(function() {
		sliderLeft=$b_c.position().left;
		padding=$outer_c.css("paddingRight").replace("px", "");
		sliderWidth=$(window).width()-padding;
		$b.css("width",sliderWidth);
		var totalContent=0;

		$b_content.each(function () {
			var $this=$(this);
			totalContent+=$this.innerWidth();
			$b_c.css("width",totalContent);
		});

		$b.mousemove(function(e){
			if($b_c.width()>sliderWidth){
				var mouseCoords=(e.pageX - this.offsetLeft);
	  			var mousePercentX=mouseCoords/sliderWidth;
	  			var destX=-(((totalContent-(sliderWidth))-sliderWidth)*(mousePercentX));
	  			var thePosA=mouseCoords-destX;
	  			var thePosB=destX-mouseCoords;
	  			var animSpeed=600; //ease amount
	  			var easeType="easeOutCirc";
	  			if(mouseCoords>destX){
		  			$b_c.css("left",-thePosA); //without easing
		  			//$b_c.stop().animate({left: -thePosA}, animSpeed,easeType); //with easing
	  			} else if(mouseCoords<destX){
		  			$b_c.css("left",thePosB); //without easing
		  			//$b_c.stop().animate({left: thePosB}, animSpeed,easeType); //with easing
	  			} else {
					$b_c.stop();
				}
			}
		});
	});

	$(window).resize(function() {
		$b_c.css("left",sliderLeft); //without easing
		//$b_c.stop().animate({left: sliderLeft}, 400,"easeOutCirc"); //with easing
		var newWidth=$(window).width()-padding;
		$b.css("width",newWidth);
		sliderWidth=newWidth;
	});