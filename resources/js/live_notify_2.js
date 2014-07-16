var vis = new Array();
var wr;
var curid;
var cury;

function setCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0)  return c.substring(nameEQ.length,c.length);
    }
    return false;
}

function live_notify()
{

curid = 0;
cury = 10;

$('.notify_trca').append('<div id=\"notif_wrapper\">  </div>');
wr = $('#notif_wrapper');

$('.notify_trca').append('<div id=\"notif_temp\">  </div>');
tm = $('#notif_temp');
tm.hide();

//$('#notif_wrapper').css('position','fixed');
//$('#notif_wrapper').css('bottom',10);
//$('#notif_wrapper').css('right',20);
//$('#notif_wrapper').css('width',310);
		

getannouncement();
		
}

function del( ob,  tm)
{
	setTimeout(function() {
		ob.fadeOut(600);
	},tm);
}
function getannouncement() {

		var timeout = setTimeout(function() {
	
		var http = false; // the http request of the ajax call
		
		function createXMLHttpRequest() {
		return( window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest( ) ); 
		};

		var http = createXMLHttpRequest(); // create that http request

		http.abort();

		http.open("GET", "resources/php/live_notify_loc1.php", true);
		http.onreadystatechange=function(){
		
		if(http.readyState == 4) {

			var str = http.responseText; // get the reply

			if(str!="")
			{

			var ar = new Array();
			ar = str.split('..*..');

			for(var i=0;i<ar.length;i++)
			{
			
		var cr = new Array();
			cr = ar[i].split('.*.');
		
			if(getCookie('live_notify' + cr[1]) != 'true')
			{
				if(!vis[cr[1]] && cr[0] != "")
				{	
				
				wr.append('<div class=\"bs-callout bs-callout-danger\" id=\"live_notify' + i + '\" > <h4>Notice</h4><p> ' + cr[0] + ' </p> <label><input type=\"checkbox\" />Don\'t show again.</label> <img width=\"24px\" height=\"24px\" class=\"img_c\" id=\"live_notify' + i + 'img' + cr[1] + '\" src=\"resources/x.png\"/> </div>');
				
				var m = $('#live_notify' + i);
				
				m.hide();
				m.fadeIn(600);
				
				if(cr[2] != 0)
				{
					del(m,cr[2]*1000);
				
				}
				
				var tp = $('#live_notify' + i + ' .live_notify_top');

				var md = $('#live_notify' + i + ' .live_notify_mid');
				
				var p = $('#live_notify' + i + ' .notif_content');
				
				
				var bt = $('#live_notify' + i + ' .live_notify_bot');

				var sp = $('#live_notify' + i + ' span');

				var c = $('#live_notify' + i + 'img' + cr[1]);
				
				var in1 = $('#live_notify' + i + ' input');

				var foo = $('#live_notify' + i + ' .live_notify_footer');
				
				$('#live_notify' + i + 'img' + cr[1]).bind('click',function(){
					var cd = $(this).attr('id').substr(0,$(this).attr('id').indexOf('img'));
					$('#'+cd).fadeOut(600);
					var cd2 = $(this).attr('id').substr($(this).attr('id').indexOf('img')+3);
					if($('#' + cd + ' input:checked').val() != undefined) {
						setCookie('live_notify' + cd2,'true',9999999);
					}
				});

				vis[cr[1]] = true;
				
				}
				else
				{
				
					var p = $('#live_notify' + i + ' .notif_content');
					var tx = p.html();
				
					tm.html(cr[0]);
				
				
					if(tx != tm.html())
					{
					
						p.html(cr[0]);
					}
				}
			
			
			}
			
			}
			
			}
			
			}
		
		}
		
  		http.send(null);
		  getannouncement();
		
 },1000);

}


 
