var T,baidu=T=baidu||{version:"1.5.2"};baidu.guid="$BAIDU$";baidu.$$=window[baidu.guid]=window[baidu.guid]||{global:{}};baidu.url=baidu.url||{};baidu.url.escapeSymbol=function(a){return String(a).replace(/[#%&+=\/\\\ \　\f\r\n\t]/g,function(b){return"%"+(256+b.charCodeAt()).toString(16).substring(1).toUpperCase()})};baidu.string=baidu.string||{};baidu.string.escapeReg=function(a){return String(a).replace(new RegExp("([.*+?^=!:\x24{}()|[\\]/\\\\])","g"),"\\\x241")};baidu.url.getQueryValue=function(b,c){var d=new RegExp("(^|&|\\?|#)"+baidu.string.escapeReg(c)+"=([^&#]*)(&|\x24|#)","");var a=b.match(d);if(a){return a[2]}return null};baidu.object=baidu.object||{};baidu.object.each=function(e,c){var b,a,d;if("function"==typeof c){for(a in e){if(e.hasOwnProperty(a)){d=e[a];b=c.call(e,d,a);if(b===false){break}}}}return e};baidu.lang=baidu.lang||{};baidu.lang.isArray=function(a){return"[object Array]"==Object.prototype.toString.call(a)};baidu.url.jsonToQuery=function(c,e){var a=[],d,b=e||function(f){return baidu.url.escapeSymbol(f)};baidu.object.each(c,function(g,f){if(baidu.lang.isArray(g)){d=g.length;while(d--){a.push(f+"="+b(g[d],f))}}else{a.push(f+"="+b(g,f))}});return a.join("&")};baidu.url.queryToJson=function(a){var f=a.substr(a.lastIndexOf("?")+1),c=f.split("&"),e=c.length,k={},d=0,h,g,j,b;for(;d<e;d++){if(!c[d]){continue}b=c[d].split("=");h=b[0];g=b[1];j=k[h];if("undefined"==typeof j){k[h]=g}else{if(baidu.lang.isArray(j)){j.push(g)}else{k[h]=[j,g]}}}return k};T.undope=true;