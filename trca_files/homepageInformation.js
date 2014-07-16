$(document).ready(function(){	
	
	$("#floodForecasting .message").hide();
	$("#floodForecasting .message a.less").css("display", "block");
	$("#floodForecasting .summary").show();
	
	$("#floodForecasting .message a.less").click(function(){
		$("#floodForecasting .message").slideUp("fast");
		$("#floodForecasting .summary").show();
		return false;
	});
	
	// homepage slideshow 
  $('#homepageSlideshow') 
  .after('<div id="homepageSlideshowNav">') 
  .cycle({ 
      fx:     'fade', 
      timeout: 9000, 
      pager:  '#homepageSlideshowNav' 
  });

});

