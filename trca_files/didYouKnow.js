function clearAll(){
	$("#didYouKnow .statement").siblings(".summary").slideUp("fast");
	$("#didYouKnow .statement").parent().removeClass("active");
}

$(document).ready(function(){	
	$("#didYouKnow .summary").hide();
	$("#didYouKnow .statement").css("cursor", "pointer");
	$("#didYouKnow .statement").click(function(){
		if(!($(this).parent().hasClass("active"))){
			clearAll();
			$(this).parent().addClass("active");
			$(this).siblings(".summary").slideDown("fast");
		}else{
			clearAll();
		}
	});
		
});
