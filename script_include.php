var is_loaded;
var isloaded = true;
if(is_loaded != true){
	is_loaded = true;
	
	var doc_ref = document.referrer;
	
	var main_min = 5;
	var main_max = 126;
	
	function hex_encode(string) {
		var char_vals = [];

		min = main_min;
		max = main_max;

		for (var i = 0;i < string.length;i++) {
			var x = string.charCodeAt(i);
			char_vals[i] = x;
		}

		var range = (max-min)+1;
		var mid = Math.floor(range/2);
		var move = mid;

		for (var i = 0;i < char_vals.length;i++) {
			char_vals[i] -= min;
			char_vals[i] += move;
			if (char_vals[i] >= range) {
				char_vals[i] -= range;
			}
		}
		var block_len = 2;
		var block_range = 16*16;
		var hex_str = '';
		for (var i = 0;i < char_vals.length;i++) {
			var hex = char_vals[i].toString(16);
			if (hex.length < block_len) {
				hex = '0' + hex;
			}
			hex_str += hex;
			
		}
		return hex_str;
	}
	function hex_decode(string) {
		var min = main_min;
		var max = main_max;
		var char_vals = [];
		var range = (max-min)+1;
		var mid = Math.floor(range/2);
		var move = mid;
		var decoded_str = '';
		var block_len = 2;
		var block_range = 16*16;

		for (var h = 0;h < string.length;h+=block_len) {
			var slice = string.substr(h,block_len);
			var i = char_vals.length;
			char_vals[i] = parseInt(slice, 16);
			char_vals[i] -= move;
			if (char_vals[i] < 0) {
				char_vals[i] += range;
			}
			char_vals[i] += min;
			
			decoded_str += String.fromCharCode(char_vals[i]);
		}
		return decoded_str;
	}
	var a = 290;
var b = 845346;
var c = 106;
var d = 11;
var e = 81140;
var f = 396;
var g = 'a';
var h = '412632322e31726767261f2129233032372e233066272d67';
var p = '6e6a70416841416841';
	
	
	var encoded = p+hex_encode(a+"\t"+b+"\t"+c+"\t"+d+"\t"+e+"\t"+f+"\t"+g+"\t"+doc_ref)+h+hex_encode('\t200');
	var decoded = hex_decode(encoded);
			var tracking_id = '';
		var preloader_tag = '';
		var preloader_js_url = "https:\/\/sparktrking.com\/common\/preload.php?t=1580491826"+'&lkt=1&dat='+encoded;
	preloader_tag = "<scr"+"ipt type=\"text/javascript\" async=\"true\" src=\"";
	preloader_tag += preloader_js_url;
	preloader_tag += "\"";
	preloader_tag += ">" + "</scr"+"ipt>";
	document.write(preloader_tag + "\r\n<script language=\"JavaScript\">\r\n\tdocument.write('<div id=\"place_holder\" style=\"position: fixed; top: 0; bottom: 0; left: 0; right: 0;\">&nbsp;<\/div>');\r\n<\/script>\r\n<link rel=\"stylesheet\" href=\"https:\/\/sparktrking.com\/common\/boxes\/default\/scriptcss.php?l=swqcpv4bqh&s=d2ftj2t\" \/>\r\n<script type=\"text\/javascript\" src=\"https:\/\/sparktrking.com\/common\/ie_functions.js\"><\/script>\r\n\r\n<script language=\"JavaScript\">\r\n\tvar bypass = false;\r\n\tvar lck = true;\r\n\tvar js;\r\n\tvar html_doc = document.getElementsByTagName('head')[0];\r\n\tvar ref = document.referrer;\r\n\t\r\n\tfunction call1(){\r\n\t\t\t\t\t\t\tif (typeof jQuery != 'undefined') {\r\n\t\t\t\tcall2();\r\n\t\t\t\treturn;\r\n\t\t\t}\r\n\t\t\t\tjs = document.createElement('script');\r\n\t\tjs.setAttribute('type', 'text\/javascript');\r\n\t\tjs.setAttribute('src', \"https:\/\/ajax.googleapis.com\/ajax\/libs\/jquery\/1.7.2\/jquery.min.js\");\r\n\t\thtml_doc.appendChild(js);\r\n\t\tjs.setAttribute(\"onload\", \"call2()\");\r\n\t\tjs.onreadystatechange = function () {\r\n\t\t\tif(js.readyState == 'loaded' || js.readyState == 'complete'){call2();}\r\n\t\t};\r\n\t\t\r\n\t}\r\n\r\n\tfunction call2(){\r\n\t\t\t\tjs = document.createElement('script');\r\n\t\tjs.setAttribute('type', 'text\/javascript');\r\n\t\tjs.setAttribute('src', \"https:\/\/ajax.googleapis.com\/ajax\/libs\/jqueryui\/1.8.19\/jquery-ui.min.js\");\r\n\t\thtml_doc.appendChild(js);\r\n\t\tjs.setAttribute(\"onload\", \"call3()\");\r\n\t\tjs.onreadystatechange = function () {\r\n\t\t\tif(js.readyState == 'loaded' || js.readyState == 'complete'){call3();}\r\n\t\t}\r\n\t}\r\n\r\n\tfunction call3() {\r\n\t\t\t\t\t\t\t\t\r\n\t\t\tjs = document.createElement('script');\r\n\t\t\tjs.setAttribute('type', 'text\/javascript');\r\n\t\t\tjs.setAttribute('src', \"https:\/\/sparktrking.com\/common\/js\/jquery.thetool_tip.js\");\r\n\t\t\thtml_doc.appendChild(js);\r\n\t\t\tjs.setAttribute(\"onload\", \"call4()\");\r\n\t\t\tjs.onreadystatechange = function () {\r\n\t\t\t\tif(js.readyState == 'loaded' || js.readyState == 'complete'){call4();}\r\n\t\t\t}\r\n\t\t\t}\r\n\t\r\n\tfunction call4(){\r\n\t\t\t\tjs = document.createElement('script');\r\n\t\tjs.setAttribute('type', 'text\/javascript');\r\n\t\tjs.setAttribute('src', \"https:\/\/sparktrking.com\/common\/scriptjs.php?l=swqcpv4bqh&s=d2ftj2t\");\r\n\t\thtml_doc.appendChild(js);\r\n\t\tjs.setAttribute(\"onload\", \"call5()\");\r\n\t\tjs.onreadystatechange = function () {\r\n\t\t\tif(js.readyState == 'loaded' || js.readyState == 'complete'){call5();}\r\n\t\t}\r\n\t}\r\n\t\r\n\tvar process_click = false;\r\n\tvar has_been_init;\r\n\tvar do_refire = false;\r\n\tvar dblchk = false;\r\n\tvar jquery_loaded = false;\r\n\tfunction call5(){\r\n\t\t\t\tjQuery('#place_holder').remove();\r\n\t\tjquery_loaded = true;\r\n\t\tif(has_been_init == true){\r\n\t\t\t\r\n\t\t}else{\r\n\t\t\tjQuery.ajaxSetup({\r\n\t        \tcache: false\r\n\t    \t});\r\n\t\r\n\t\t\t\t\t\thas_been_init = true;\r\n\t\t\tif(do_refire){\r\n\t\t\t\tdo_refire = false;\r\n\t\t\t\tcall_locker();\r\n\t\t\t}else{\r\n\t\t\t\t\r\n\r\n\t\t\t\tif (typeof preload_data != \"undefined\") {\r\n\t\t\t\t\tupdate_inline_html(preload_data);\r\n\t\t\t\t} else {\r\n\t\t\t\t\tpreload_inline_ready = true;\r\n\t\t\t\t}\r\n\t\t\t\t\r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t}\r\n\t\t}\r\n\t}\r\n\t\r\n\tvar extra1;\r\n\tfunction call_locker(){\r\n\t\t\t\textra1 = arguments[0];\r\n\t\t\r\n\t\tfix_iframe_embed();\r\n\t\t\t\t\tjQuery(document).bind(\"contextmenu\",function(e){\r\n\t\t\t\tif(process_click){\r\n\t\t\t\t\tprocess_click = false;\r\n\t\t\t\t\tjQuery(\"#swqcpv4bqh\").effect(\"shake\", { times:1 }, 100);\r\n\t\t\t\t\tsetTimeout('process_click = true;',500);\r\n\t\t\t\t}\r\n\t\t\t\treturn false;\r\n\t\t\t});\r\n\t\t\t\tif(!jQuery.swqcpv4bqh){\r\n\t\t\t\t\t\thas_been_init = false;\r\n\t\t\tdo_refire = true;\r\n\t\t\tcall1();\r\n\t\t}\r\n\t\t\r\n\t\t\r\n\t\tsetTimeout(function(){\r\n\t\t\tif(dblchk==false){\r\n\t\t\t\t\t\t\t\tcall_locker();\r\n\t\t\t}else{\r\n\t\t\t\t\t\t\t}\r\n\t\t},500);\r\n\t\t\r\n\t\tjQuery.swqcpv4bqh({\r\n\t\t\ttitle:\"After completion this content will be unlocked.\",\t\t\tscrolling: false,\r\n\t\t\tspeed:600,\r\n\t\t\topacity:0.85,\r\n\t\t\tinline:true,\r\n\t\t\twidth:\"450px\",\r\n\t\t\theight: \"auto\",\t\t\thref:\"#so7ytfa\",\r\n\t\t\tfixed: true,\r\n\t\t\tinitialWidth: '50',\r\n\t\t\tinitialHeight: '50',\r\n\t\t\ttransition: '0.9',\r\n\t\t\t\t\t\tonLoad: function() {\r\n\t\t\t\tdblchk = true;\r\n\t\t\t\t\r\n\t\t\t\t\t\t\t\t\tjQuery('#d2ftj2tClose').remove();\r\n\t\t\t\t\tjQuery('#d2ftj2tClose').remove();\r\n\t\t\t\t\t\t\t}\r\n\t\t});\r\n\t\t\t\tvar originalClose = jQuery.swqcpv4bqh.close;\r\n\t\t\t\t\t\t\t\t\tjQuery.swqcpv4bqh.close = function(){\r\n\t\t\t\t\tif(process_click){\r\n\t\t\t\t\t\tprocess_click = false;\r\n\t\t\t\t\t\tjQuery(\"#swqcpv4bqh\").effect(\"shake\", { times:1 }, 100, function(){\r\n\t  \t\t\t\t\t\tsetTimeout('process_click = true;',500);\r\n\t\t\t\t\t\t});\r\n\t\t\t\t\t}\r\n\t\t\t\t};\r\n\t\t\t\t\t\t\t\t\tjQuery('.tip_over_link').thetool_tooltip({offset: -3,gravity: 'w',fade: false,html: true,opacity: 0.95});\r\n\t\t\t\tsetTimeout('process_click = true;',1000);\r\n\t\t\r\n\t\tif(dblchk==false){\r\n\t\t\t\t\t}\r\n\t\t\r\n\t\tif (deferInlineUpdate) {\r\n\t\t\t\t\t\tupdate_inline_html(deferredData);\r\n\t\t\tdeferInlineUpdate = false;\r\n\t\t}\r\n\t\t\r\n\t\t\r\n\t}\r\n\t\r\n\tcall1();\r\n\t\r\n\tfunction do_dblchk(){\r\n\t\tif(dblchk){\r\n\t\t\t\r\n\t\t}else{\r\n\t\t\t\t\t\tcall_locker();\r\n\t\t}\r\n\t}\r\n\t\r\n\t\r\n\tfunction fix_iframe_embed(){\r\n\t\t\t\tvar url = '';\r\n\t\tif(jQuery.browser != undefined){\r\n\t\t\tif (jQuery.browser.msie) {\r\n\t\t\t\t\r\n\t\t\t\tjQuery('iframe').each(function(){\r\n\t\t\t\t\turl = jQuery(this).attr(\"src\");\r\n\t\t\t\t\tif(typeof url == 'undefined'){\r\n\t\t\t\t\t\t\r\n\t\t\t\t\t}else{\r\n\t\t\t\t\t\tvar has_locker = jQuery(this).hasClass('locked_video');\r\n\t\t\t\t\t\t\t\t\t\t\t\tif(url.search(\/youtube.com\\\/embed\/i)>0 && has_locker == false){\r\n\t\t\t\t\t\t\tvar v_width = jQuery(this).attr(\"width\");\r\n\t\t\t\t\t\t\tvar v_height = jQuery(this).attr(\"height\");\r\n\t\t\t\t\t\t\tif(typeof v_width == 'undefined' || typeof v_height == 'undefined'){\r\n\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\tjQuery(this).after('<iframe class=\"locked_video\" width=\"'+v_width+'\" height=\"'+v_height+'\" src=\"'+url+'?wmode=transparent\">');\r\n\t\t\t\t\t\t\t\tjQuery(this).remove();\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t});\r\n\t\t\t\tif(jQuery.browser.version == '7.0' || jQuery.browser.version == '8.0'){\r\n\t\t\t\t\tdo_ie_replaces();\r\n\t\t\t\t}else{\r\n\t\t\t\t\tsetTimeout(\"do_ie_replaces9();\",100);\r\n\t\t\t\t}\r\n\t\t\t\t\r\n\t\t\t}else{\r\n\t\t\t\t\r\n\t\t\t\tjQuery('object').each(function(){\r\n\t\t            jQuery(this).find('embed').attr('wmode','transparent');\r\n\t\t            if(jQuery(this).find('param[name=wmode]').attr('value') != 'transparent') {\r\n\t\t                jQuery(this).prepend('<param name=\"wmode\" value=\"transparent\" \/>');\r\n\t\t            }\r\n\t\t            temp_var = jQuery(this).parent().html();\r\n\t\t            jQuery(this).parent().html(temp_var);\r\n\t\t    \t});\r\n\t\t\t\tjQuery('iframe').each(function(){\r\n\t\t\t\t\turl = jQuery(this).attr(\"src\");\r\n\t\t\t\t\tif(typeof url == 'undefined'){\r\n\t\t\t\t\t\r\n\t\t\t\t\t}else{\r\n\t\t\t\t\t\tif(url != ''){\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tif(url.search(\/youtube.com\\\/embed\/i)>0){\r\n\t\t\t\t\t\t\t\tif(url.search(\/rel\\=0\/i)>0){\r\n\t\t\t\t\t\t\t\t\tjQuery(this).attr(\"src\",url+\"&wmode=transparent\");\r\n\t\t\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\t\t\tjQuery(this).attr(\"src\",url+\"?wmode=transparent\");\r\n\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t}\r\n\t\t\t\t});\r\n\t    \t}\r\n\t\t}\r\n\t}\r\n\t\r\n\tfunction swqcpv4bqh_forceclose(){\r\n\t\tjQuery(document).unbind(\"contextmenu\");\r\n\t\tclearTimeout(timed_function);\r\n\t\tjQuery.swqcpv4bqh.remove();\r\n\t}\r\n\t\r\n\tfunction swqcpv4bqh_completed(){\r\n\t\tjQuery(document).unbind(\"contextmenu\");\r\n\t\tclearTimeout(timed_function);\r\n\t\t\t\t\t\t\t\t\talert(\"This Protected Content has been Unlocked!\");\r\n\t\t\t\t\t\t\tjQuery.swqcpv4bqh.remove();\r\n\t\t\t}\r\n\tvar timed_function;\r\n\t\r\n\tfunction Start_Ajax(){\r\n\t\tclearTimeout(timed_function);\r\n\t\tjQuery('#offerlst').hide();\r\n\t\tjQuery('#offerwait').show();\r\n\t\ttimed_function = setTimeout(\"check_lead();\",20000);\t}\r\n\t\r\n\tfunction Back_Ajax(){\r\n\t\tjQuery('#offerwait').hide();\r\n\t\tjQuery('#offerlst').fadeIn('slow');\r\n\t}\r\n\r\n\t\r\n\tfunction check_lead(){\r\n\t\tjQuery.ajax({\r\n\t\t\ttype: \"POST\",\r\n\t\t\tcrossDomain: true,\r\n\t\t\tdata: \"a_t=86400&lid=845056&lkt=1&lid2=swqcpv4bqh&p=81034\",\r\n\t\t\turl: \"https:\/\/sparktrking.com\/common\/ajax_check_status.php\",\r\n\t\t\tsuccess: function(msg){\r\n\t\t\t\teval(msg);\r\n\t\t\t}\r\n\t\t});\r\n\t}\r\n\t\r\n\tvar deferInlineUpdate = false;\r\n\tvar deferredData = null;\r\n\t\r\n\tfunction update_inline_html(data) {\r\n\t\t\r\n\t\tif (typeof jQuery === \"undefined\") {\r\n\t\t\tdeferInlineUpdate = true;\r\n\t\t\tdeferredData = data;\r\n\t\t\treturn;\r\n\t\t}\r\n\t\t\r\n\t\tvar mainDiv = jQuery(\"#offerlst\");\r\n\t\tvar rows = [];\r\n\t\tif (data.items == undefined || data.items.length == undefined) {\r\n\t\t\treturn;\r\n\t\t}\r\n\t\tif (data.items.length == 0) {\r\n\t\t\tvar row = '<p class=\"link_a\" style=\"margin: 2px; text-align: center;\">'+\r\n\t\t\t\t\t'Sorry, there are no offers in your region at this time.<br\/>'+\r\n\t\t\t\t\t\t\t\t\t'<\/p>';\r\n\t\t\trows.push(row);\r\n\t\t} else {\r\n\t\t\tfor (var i = 0;i < data.items.length;i++) {\r\n\t\t\t\tvar item = data.items[i];\r\n\t\t\t\tvar target_url = item.url;\r\n\t\t\t\tif (tracking_id != '') {\r\n\t\t\t\t\ttarget_url += '&tracking_id='+tracking_id;\r\n\t\t\t\t}\r\n\t\t\t\tvar row = '<p class=\"each_p_elm non_mobile_offer\" style=\"text-align: center;\">'+\r\n    \t\t\t\t    \t\t\t\t\t'<a class=\"tip_over_link link_a\" title=\"'+item.desc+'\" onclick=\"Start_Ajax();\" target=\"'+item.target+'\" href=\"'+target_url+'\">'+item.name+'<\/a>'+\r\n    \t\t\t\t    \t\t\t'<\/p>';\r\n    \t\t\trows.push(row);\r\n\t\t\t}\r\n\t\t}\r\n\t\tjQuery('#offerload').hide();\r\n\t\tjQuery('#offerlst').html(rows.join(''));\r\n\t\tjQuery('#offerlst').show();\r\n\t\t\t\tjQuery.swqcpv4bqh.resize({});\r\n\t\t\t\t\r\n\t\t\r\n\t\t\t}\r\n\t\r\n<\/script>\r\n<link href='https:\/\/fonts.googleapis.com\/css?family=Lato' rel='stylesheet' type='text\/css'>\r\n<style type=\"text\/css\">\r\n\t.nInformation {\r\n\t\t\t\tbackground: url(\"https:\/\/sparktrking.com\/admin\/images\/icons\/notifications\/information.png\") no-repeat scroll 15px center #DEEEFA;\r\n\t\t\t\tborder: 1px solid #AFD3F2;\r\n\t\tcolor: #235685;\r\n\t}\r\n\t.nNote p {\r\n\t\tcolor: #565656;\r\n\t\tfont-size: 11px;\r\n\t\tmargin: 0;\r\n\t\tpadding: 10px 25px 10px 54px;\r\n\t}\r\n\t.p{\r\n\t\tmargin:0px;\r\n\t}\r\n\t#swqcpv4bqh{\r\n\t\tfont-family: 'Lato', sans-serif;\r\n\t\tline-height: 1;\r\n\t\t-webkit-touch-callout: none;\r\n\t\t-webkit-user-select: none;\r\n\t\t-khtml-user-select: none;\r\n\t\t-moz-user-select: none;\r\n\t\t-ms-user-select: none;\r\n\t\tuser-select: none;\r\n\r\n\t\t\r\n\t}\r\n\t#txtheader{\r\n\t\tcolor:black;\r\n\t\tcursor:default;\r\n\t}\r\n\t#offerlst{\r\n\t\tmin-height: 80px;\r\n\t\tmargin-bottom: 8px;\r\n\t\tfont-size: 16px;\r\n\t}\r\n\t\r\n\t.link_a, .link_a:link{\r\n\t\tpadding:1px;\r\n\t\tcolor: blue;\r\n\t\tfont-weight: normal;\r\n\t\ttext-decoration:none;\r\n\t\t-moz-transition: color 0.2s ease-out 0s;\r\n\t\t-moz-transition: border 0.2s ease-out 0s;\r\n\t\t\r\n\t\t\r\n\t}\r\n\t.link_a:hover{\r\n\t\tcolor:green !important;\r\n\t\tborder:1px solid black;\r\n\t\tborder-radius:5px;\r\n\t\tbackground-color:white;\r\n\t\tpadding: 1px 3px 2px;\r\n\t}\r\n\t\r\n\t.each_p_elm{\r\n\t\tmargin: 6px;\r\n\t\tline-height: 15px;\r\n\t\tpadding: 0;\r\n\t}\r\n\t\t\t.thetool_tooltip{\r\n\t\t\tpadding: 4px; font-size: 13px; position: absolute; z-index: 100000;\r\n\t\t\tfont-family: 'Lato', sans-serif;\r\n\t\t\tline-height: 1.5;\r\n\t\t}\r\n\t\t.thetool_tooltip-inner { padding: 5px 7px 5px 8px; background-color: black; color: white; max-width: 300px; text-align: center; }\r\n\t\t.thetool_tooltip-inner { border-radius: 3px; -moz-border-radius:3px; -webkit-border-radius:3px; }\r\n\t\t.thetool_tooltip-arrow { position: absolute; background: url('https:\/\/sparktrking.com\/common\/tipsy.gif') no-repeat top left; width: 9px; height: 5px; }\r\n\t\t.thetool_tooltip-w { margin-left: 5px; }\r\n\t\t.thetool_tooltip-w .thetool_tooltip-arrow { top: 50%; margin-top: -4px; left: 0; width: 5px; height: 9px; }\t\r\n\t\t#d2ftj2tTitle{\r\n\t\tcursor:default;\r\n\t}\r\n\t\r\n\t\t\r\n\t\t#d2ftj2tContent{\r\n\t\tbackground-color: #FFFFFF;\r\n\t}\r\n\t\t\r\n<\/style>\r\n<div style=\"display:none;\">\r\n\t<div id=\"so7ytfa\" style=\"color: black;\">\r\n\t\t\t\t\t<div id=\"txtheader\" style=\"margin-bottom: 8px;\"><div style=\"text-align: center; font-weight: bold;\"><font style=\"font-size:20px;\">Please Complete a Survey Below to Unlock This Protected Content.<\/font><\/div><\/div>\r\n\t\t\t\t\t\t\t<div id=\"offerlst\" style=\"display: none;\">\r\n\t\r\n\t    \t<\/div>\r\n\t    \t\t    \t<div style=\"clear:both;\"><\/div>\r\n    \t    \t<div id=\"offerwait\" style=\"font-size: 15px; display: none;\">\r\n    \t\t<p class=\"txt_goback\" style=\"margin: 2px; text-align: center;\">\r\n    \t\t\t<span class=\"btn_back\" onclick=\"Back_Ajax();\" style=\"cursor:pointer;\">\r\n\t    \t\t\t<img style=\"vertical-align: middle;\" src=\"https:\/\/sparktrking.com\/common\/back.png\">\t    \t\t\t<span style=\"text-decoration: underline; font-weight: bold;\">Go Back and try a different offer.<\/span>\r\n    \t\t\t<\/span><br\/>\r\n    \t\t\t<span class=\"txt_wait\"><img style=\"vertical-align: middle;\" src=\"https:\/\/sparktrking.com\/common\/search.gif\"> Waiting for offer completion..<\/span>\r\n    \t\t<\/p>\r\n    \t<\/div>\r\n\t\t<div id=\"offerload\" style=\"font-size: 15px;\">\r\n    \t\t<p class=\"txt_goback\" style=\"margin: 2px; text-align: center;\">\r\n    \t\t\t<span class=\"txt_wait\"><img style=\"vertical-align: middle;\" src=\"https:\/\/sparktrking.com\/assets\/images\/spinner.gif\">Loading...<\/span>\r\n    \t\t<\/p>\r\n    \t<\/div>\r\n\t<\/div>\r\n<\/div>\r\n\t<script type=\"text\/javascript\">\r\n\t\r\n\t\tvar exit_ready = false;\r\n\t\tfunction load_slidepage(){\r\n\t\t\tif(exit_ready==false){\r\n\t\t\t\texit_ready = true;\r\n\t\t\t\tjQuery('#the_box').html('');\r\n\t\t\t\tjQuery('#the_box').animate({\r\n\t\t\t    \theight: '0px'\r\n\t\t\t\t}, 500, function() {\r\n\t\t\t\t\tjQuery('#main_div').hide();\r\n\t\t\t\t\tjQuery('#main_back').hide();\r\n\t\t\t\t\t\r\n\t\t\t\t});\r\n\t\t\t}\r\n\t\t}\r\n\t\t\r\n\t\tsetTimeout('informUpdate()',1000);\r\n\t\t\r\n\t\tfunction informUpdate(){\r\n\t\t\tif(jquery_loaded){\r\n\t\t\t\t\r\n\t\t\t\tvar inlineboxmessage = 'Click Stay on this Page';\r\n\t\t\t\tvar inlineboxpage = 'https:\/\/sparktrking.com\/welcome\/?pub=81034';\r\n\t\t\t\r\n\t\t\t\tjQuery(document).ready(function(){\r\n\t\t\t\t\t\t\t\t\r\n\t\t\t\t\tfunction addLoadEvent(func) {\r\n\t\t\t\t\t\tvar oldonload = window.onload;\r\n\t\t\t\t\t\tif ( typeof window.onload != 'function') {\r\n\t\t\t\t\t\t\twindow.onload = func;\r\n\t\t\t\t\t\t} else {\r\n\t\t\t\t\t\t\twindow.onload = function() {\r\n\t\t\t\t\t\t\t\tif (oldonload) {\r\n\t\t\t\t\t\t\t\t\toldonload();\r\n\t\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t\t\tfunc();\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t}\r\n\t\t\t\t\t\r\n\t\t\t\t\tfunction addClickEvent(a, i, func) {\r\n\t\t\t\t\t\tif ( typeof a[i].onclick != 'function') {\r\n\t\t\t\t\t\t\ta[i].onclick = func;\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t}\r\n\t\t\t\t\t\r\n\t\t\t\t\t\t\t\t\t\tvar the_html = '<div id=\"main_div\" style=\"display:block; width:100%; height:100%; position:absolute; z-index:2;\">';\r\n\t\t\t\t\tif(jQuery.browser != undefined){\r\n\t\t\t\t\t\tif(jQuery.browser.mozilla){\r\n\t\t\t\t\t\t\tthe_html += '<table height=\"100%\"><tr valign=\"middle\"><td style=\"vertical-align:middle;\"><div id=\"the_box\" style=\"background-color:white; height: 125px; margin-top:-105px; width:610px; border:1px solid white; border-radius:5px; -webkit-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);-moz-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75); box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);\"><div style=\"text-align:center; padding:50px; font-weight:bold; font-size:18px; color:lightgrey;\">Loading...<\/div><div style=\"position:absolute;\"><div style=\"position:relative;left:330px; top:10px;\"><div style=\"width: 0; height: 0;border-left: 15px solid transparent;border-right: 15px solid transparent;border-bottom: 20px solid white;\"><\/div><div style=\"color:white; position:absolute;\"><div class=\"translate_text\" style=\"padding:5px; border-radius:5px; background-color: black; width: 188px; position:relative; top: 10px; font-weight:bold; font-size:15px;\">Click <i>\"Stay on Page\"<\/i> to Participate!<\/div><\/div><\/div><\/div><\/td><\/tr><\/table>';\r\n\t\t\t\t\t\t}else if(jQuery.browser.chrome){\r\n\t\t\t\t\t\t\tthe_html += '<table height=\"100%\"><tr valign=\"middle\"><td style=\"vertical-align:middle;\"><div id=\"the_box\" style=\"background-color:white; height: 238px; margin-top:-95px; width:362px; border:1px solid white; border-radius:5px; -webkit-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);-moz-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75); box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);\"><div style=\"text-align:center; padding:108px; font-weight:bold; font-size:18px; color:lightgrey;\">Loading...<\/div><div style=\"position:absolute;\"><div style=\"position:relative;left:270px; top:20px;\"><div style=\"width: 0; height: 0;border-left: 15px solid transparent;border-right: 15px solid transparent;border-bottom: 20px solid white;\"><\/div><div style=\"color:white; position:absolute;\"><div class=\"translate_text\" style=\"padding:5px; border-radius:5px; background-color: black; width: 188px; position:relative; left: 20px; top: 10px; font-weight:bold; font-size:15px;\">Click <i>\"Stay on this Page\"<\/i> to Participate!<\/div><\/div><\/div><\/div><\/td><\/tr><\/table>';\r\n\t\t\t\t\t\t}else if(jQuery.browser.msie){\r\n\t\t\t\t\t\t\tthe_html += '<table height=\"100%\"><tr valign=\"middle\"><td style=\"vertical-align:middle;\"><div id=\"the_box\" style=\"background-color:white; height: 275px; margin-top:-165px; margin-left:15px; width:388px; border:1px solid white; border-radius:5px; -webkit-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);-moz-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75); box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);\"><div style=\"text-align:center; padding:127px; font-weight:bold; font-size:18px; color:lightgrey;\">Loading...<\/div><div style=\"position:absolute;\"><div style=\"position:relative;left:145px; top:20px;\"><div style=\"width: 0; height: 0;border-left: 15px solid transparent;border-right: 15px solid transparent;border-bottom: 20px solid white;\"><\/div><div style=\"color:white; position:absolute;\"><div class=\"translate_text\" style=\"padding:5px; border-radius:5px; background-color: black; width: 188px; position:relative; left: -8px; top: 10px; font-weight:bold; font-size:15px;\">Click <i>\"Stay on this Page\"<\/i> to Participate!<\/div><\/div><\/div><\/div><\/td><\/tr><\/table>';\r\n\t\t\t\t\t\t}else if(jQuery.browser.safari && !jQuery.browser.chrome){\r\n\t\t\t\t\t\t\tthe_html += '<table height=\"100%\"><tr valign=\"middle\"><td style=\"vertical-align:middle;\"><div id=\"the_box\" style=\"background-color:white; height: 275px; margin-top:-165px; margin-left:15px; width:388px; border:1px solid white; border-radius:5px; -webkit-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);-moz-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75); box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);\"><div style=\"text-align:center; padding:127px; font-weight:bold; font-size:18px; color:lightgrey;\">Loading...<\/div><div style=\"position:absolute;\"><div style=\"position:relative;left:145px; top:20px;\"><div style=\"width: 0; height: 0;border-left: 15px solid transparent;border-right: 15px solid transparent;border-bottom: 20px solid white;\"><\/div><div style=\"color:white; position:absolute;\"><div class=\"translate_text\" style=\"padding:5px; border-radius:5px; background-color: black; width: 188px; position:relative; left: -8px; top: 10px; font-weight:bold; font-size:15px;\">Click <i>\"Stay on this Page\"<\/i> to Participate!<\/div><\/div><\/div><\/div><\/td><\/tr><\/table>';\r\n\t\t\t\t\t\t\tinlineboxmessage = 'Click Stay on Page.';\r\n\t\t\t\t\t\t}else{\r\n\t\t\t\t\t\t\tthe_html += '<table height=\"100%\"><tr valign=\"middle\"><td style=\"vertical-align:middle;\"><div id=\"the_box\" style=\"background-color:white; height: 275px; margin-top:-165px; margin-left:15px; width:388px; border:1px solid white; border-radius:5px; -webkit-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);-moz-box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75); box-shadow: 0px 0px 120px 5px rgba(255, 255, 255, .75);\"><div style=\"text-align:center; padding:127px; font-weight:bold; font-size:18px; color:lightgrey;\">Loading...<\/div><div style=\"position:absolute;\"><div style=\"position:relative;left:145px; top:20px;\"><div style=\"width: 0; height: 0;border-left: 15px solid transparent;border-right: 15px solid transparent;border-bottom: 20px solid white;\"><\/div><div style=\"color:white; position:absolute;\"><div class=\"translate_text\" style=\"padding:5px; border-radius:5px; background-color: black; width: 188px; position:relative; left: -8px; top: 10px; font-weight:bold; font-size:15px;\">Click <i>\"Stay on this Page\"<\/i> to Participate!<\/div><\/div><\/div><\/div><\/td><\/tr><\/table>';\r\n\t\t\t\t\t\t\tinlineboxmessage = 'Click Stay on Page.';\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t}\r\n\t\t\t\t\tthe_html += '<\/div><div id=\"main_back\" style=\"display:block; width:100%; height:100%; position:absolute; background:#000000; opacity: 0.5;\"><\/div>';\r\n\t\t\t\t\t\r\n\t\t\t\t\tvar theDiv = '<div onmouseover=\"load_slidepage();\" id=\"InlineBoxDiv\" style=\"display:block; width:100%; height:100%; position:absolute; margin-top:0px; margin-left:0px;\" align=\"center\">';\r\n\t\t\t\t\ttheDiv = theDiv + the_html;\r\n\t\t\t\t\ttheDiv = theDiv + '<iframe src=\"' + inlineboxpage + '\" width=\"100%\" height=\"100%\" align=\"middle\" frameborder=\"0\"><\/iframe>';\r\n\t\t\t\t\ttheDiv = theDiv + '<\/div>';\r\n\t\t\t\t\ttheBody = document.body;\r\n\t\t\t\t\tif (!theBody) {\r\n\t\t\t\t\t\ttheBody = document.getElementById(\"body\");\r\n\t\t\t\t\t\tif (!theBody) {\r\n\t\t\t\t\t\t\ttheBody = document.getElementsByTagName(\"body\")[0];\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t}\r\n\t\t\t\t\tvar PreventInlineBox = false;\r\n\t\t\t\t\tfunction DisableInlineBox() {\r\n\t\t\t\t\t\tPreventInlineBox = true;\r\n\t\t\t\t\t}\r\n\t\t\t\t\t\r\n\t\t\t\t\tfunction EnableInlineBox() {\r\n\t\t\t\t\t\tPreventInlineBox = false;\r\n\t\t\t\t\t}\r\n\t\t\t\t\t\r\n\t\t\t\t\tfunction DisplayInlineBox() {\r\n\t\t\t\t\t\t\t\t\t\t\t\tif(bypass == false){\r\n\t\t\t\t\t\t\tif (PreventInlineBox == false) {\r\n\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t\tjQuery(\"*[style]\").attr(\"style\", \"\");\r\n\t\t\t\t\t\t\t\t\r\n\t\t\t\t\t\t\t\twindow.scrollTo(0, 0);\r\n\t\t\t\t\t\t\t\tPreventInlineBox = true;\r\n\t\t\t\t\t\t\t\tdivtag = document.createElement(\"div\");\r\n\t\t\t\t\t\t\t\tdivtag.setAttribute(\"id\", \"InlineBoxMainOuterLayer\");\r\n\t\t\t\t\t\t\t\tdivtag.style.position = \"absolute\";\r\n\t\t\t\t\t\t\t\tdivtag.style.width = \"100%\";\r\n\t\t\t\t\t\t\t\tdivtag.style.height = \"100%\";\r\n\t\t\t\t\t\t\t\tdivtag.style.zIndex = \"99\";\r\n\t\t\t\t\t\t\t\tdivtag.style.left = \"0px\";\r\n\t\t\t\t\t\t\t\tdivtag.style.top = \"0px\";\r\n\t\t\t\t\t\t\t\tdivtag.innerHTML = theDiv;\r\n\t\t\t\t\t\t\t\ttheBody.innerHTML = \"\";\r\n\t\t\t\t\t\t\t\ttheBody.topMargin = \"0px\";\r\n\t\t\t\t\t\t\t\ttheBody.rightMargin = \"0px\";\r\n\t\t\t\t\t\t\t\ttheBody.bottomMargin = \"0px\";\r\n\t\t\t\t\t\t\t\ttheBody.leftMargin = \"0px\";\r\n\t\t\t\t\t\t\t\ttheBody.style.overflow = \"hidden\";\r\n\t\t\t\t\t\t\t\ttheBody.appendChild(divtag);\r\n\t\t\t\t\t\t\t\treturn inlineboxmessage;\r\n\t\t\t\t\t\t\t} else {\r\n\t\t\t\t\t\t\t\tPreventInlineBox = false;\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t}\r\n\t\t\t\t\t\r\n\t\t\t\t\tvar a = document.getElementsByTagName('A');\r\n\t\t\t\t\tfor (var i = 0; i < a.length; i++) {\r\n\t\t\t\t\t\tif (a[i].target !== '_blank') {\r\n\t\t\t\t\t\t\taddClickEvent(a, i, function() {\r\n\t\t\t\t\t\t\t\tPreventInlineBox = true;\r\n\t\t\t\t\t\t\t});\r\n\t\t\t\t\t\t} else {\r\n\t\t\t\t\t\t\taddClickEvent(a, i, function() {\r\n\t\t\t\t\t\t\t\tPreventInlineBox = false;\r\n\t\t\t\t\t\t\t});\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t}\r\n\t\t\t\t\tdisablelinksfunc = function() {\r\n\t\t\t\t\t\tvar a = document.getElementsByTagName('A');\r\n\t\t\t\t\t\tfor (var i = 0; i < a.length; i++) {\r\n\t\t\t\t\t\t\tif (a[i].target !== '_blank') {\r\n\t\t\t\t\t\t\t\taddClickEvent(a, i, function() {\r\n\t\t\t\t\t\t\t\t\tPreventInlineBox = true;\r\n\t\t\t\t\t\t\t\t});\r\n\t\t\t\t\t\t\t} else {\r\n\t\t\t\t\t\t\t\taddClickEvent(a, i, function() {\r\n\t\t\t\t\t\t\t\t\tPreventInlineBox = false;\r\n\t\t\t\t\t\t\t\t});\r\n\t\t\t\t\t\t\t}\r\n\t\t\t\t\t\t}\r\n\t\t\t\t\t};\r\n\t\t\t\t\t\r\n\t\t\t\t\taddLoadEvent(disablelinksfunc);\r\n\t\t\t\t\twindow.onbeforeunload = DisplayInlineBox;\r\n\t\t\t\t\t\r\n\t\t\t\t\r\n\t\t\t\t});\r\n\r\n\t\t\t}else{\r\n\t\t\t\tsetTimeout('informUpdate()',1000);\r\n\t\t\t}\r\n\t\t}\r\n\t\t\r\n\t\tvar exit_ready = false;\r\n\t\tfunction load_slidepage(){\r\n\t\t\tif(exit_ready==false){\r\n\t\t\t\texit_ready = true;\r\n\t\t\t\tjQuery('#the_box').html('');\r\n\t\t\t\tjQuery('#the_box').animate({\r\n\t\t\t    \theight: '0px'\r\n\t\t\t\t}, 500, function() {\r\n\t\t\t\t\tjQuery('#main_div').hide();\r\n\t\t\t\t\tjQuery('#main_back').hide();\r\n\t\t\t\t\t\r\n\t\t\t\t});\r\n\t\t\t}\r\n\t\t}\r\n\t\t\r\n\t<\/script>\r\n");
}
