//----------------------
// slide navigation
//----------------------

//pause before animation
$.fn.pause = function(duration) {
	$(this).stop().animate({ dummy: 1 }, duration);
	return this;
};

function mouseleft() {
	$("#mainMenu").triggerHandler("mouseleave");
}

//slide open navigation on over (add focus someday)
$(document).ready(function(){
	var selectedInput = null;
	
	$("#query").focus(function() {
		selectedInput = this;
	});
	$("#query").blur(function() {
		selectedInput = null;
	});
	$("#mainMenu").mouseenter(
		function () {
			$("#query").unbind("blur", mouseleft);
			$(this).stop().pause(60).animate({ height:"210px" }, 600, "easeOutQuart" );
		}).mouseleave(
		function () {
			$("#query").bind("blur", mouseleft);
			if (selectedInput == null) {
				$(this).stop().pause(60).animate({ height:"35px" }, 600, "easeOutQuart" );
			}
		}
	);
});

