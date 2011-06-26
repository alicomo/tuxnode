var smartredfox = new Object();

//Where do you want the link to go to
smartredfox.link_url = escape('http://www.tuxnode.com');

//What folder are all of the files in
smartredfox.container = '';

//What images do you want to show
smartredfox.small_image = '../images/small.jpg';
smartredfox.big_image = '../images/large.jpg';

//Leave all the rest alone
smartredfox.small_path = '../images/small.swf';
smartredfox.big_path = '../images/large.swf';

smartredfox.small_params = escape(smartredfox.container) + smartredfox.small_path + '?ico=' + escape(smartredfox.container) + smartredfox.small_image;
smartredfox.big_params = escape(smartredfox.container) + smartredfox.big_path + '?big=' + escape(smartredfox.container) + smartredfox.big_image + '&ad_url=' + smartredfox.link_url;

function sizeup987(){$('#jcornerBig').css('top','0px');$('#jcornerSmall').css('top','-1000px');}
function sizedown987(){$('#jcornerSmall').css('top','0px');$('#jcornerBig').css('top','-1000px');}
$(document).ready(function(){$('body').prepend('<div id="jcornerBig" style="position:absolute;width:650px;height:650px;z-index:9999;right:0px;top:0px;"><object type="application/x-shockwave-flash" data="'+ smartredfox.big_params +'" id="jcornerBigObject" width="650" height="650"><param name="allowScriptAccess" value="always"/><param name="movie" value="'+ smartredfox.big_params +'"/><param name="FlashVars" value="'+ smartredfox.big_params +'"/><param name="wmode" value="transparent"/></object></div>');
$('body').prepend('<div id="jcornerSmall" style="position:absolute;width:100px;height:100px;z-index:9999;right:0px;top:0px;"><object type="application/x-shockwave-flash" data="'+ smartredfox.small_params +'" id="jcornerSmallObject" width="100" height="100"><param name="FlashVars" value="?ico='+ smartredfox.small_params +'"/><param name="allowScriptAccess" value="always"/><param name="movie" value="'+ smartredfox.small_params +'"/><param name="wmode" value="transparent" /></object></div>');
setTimeout("$('#jcornerBig').css('top','-1000px');",1000);});
