(function() {
var _UDS_CONST_LOCALE = 'en';
var _UDS_CONST_SHORT_DATE_PATTERN = 'MDY';
var _UDS_MSG_SEARCHER_IMAGE = ('Image');
var _UDS_MSG_SEARCHER_WEB = ('Web');
var _UDS_MSG_SEARCHER_BLOG = ('Blog');
var _UDS_MSG_SEARCHER_VIDEO = ('Video');
var _UDS_MSG_SEARCHER_LOCAL = ('Local');
var _UDS_MSG_SEARCHCONTROL_SAVE = ('save');
var _UDS_MSG_SEARCHCONTROL_KEEP = ('keep');
var _UDS_MSG_SEARCHCONTROL_INCLUDE = ('include');
var _UDS_MSG_SEARCHCONTROL_COPY = ('copy');
var _UDS_MSG_SEARCHCONTROL_CLOSE = ('close');
var _UDS_MSG_SEARCHCONTROL_SPONSORED_LINKS = ('Sponsored Links');
var _UDS_MSG_SEARCHCONTROL_SEE_MORE = ('see more...');
var _UDS_MSG_SEARCHCONTROL_WATERMARK = ('clipped from Google');
var _UDS_MSG_SEARCHER_CONFIG_SET_LOCATION = ('Search location');
var _UDS_MSG_SEARCHER_CONFIG_DISABLE_ADDRESS_LOOKUP = ('Disable address lookup');
var _UDS_MSG_SEARCHER_NEWS = ('News');
function _UDS_MSG_MINUTES_AGO(AGE_MINUTES_AGO) {return ('' + AGE_MINUTES_AGO + ' minutes ago');}
var _UDS_MSG_ONE_HOUR_AGO = ('1 hour ago');
function _UDS_MSG_HOURS_AGO(AGE_HOURS_AGO) {return ('' + AGE_HOURS_AGO + ' hours ago');}
function _UDS_MSG_NEWS_ALL_N_RELATED(NUMBER) {return ('all ' + NUMBER + ' related');}
var _UDS_MSG_NEWS_RELATED = ('Related Articles');
var _UDS_MSG_BRANDING_STRING = ('powered by Google');
var _UDS_MSG_SORT_BY_DATE = ('Sort by date');
var _UDS_MSG_MONTH_ABBR_JAN = ('Jan');
var _UDS_MSG_MONTH_ABBR_FEB = ('Feb');
var _UDS_MSG_MONTH_ABBR_MAR = ('Mar');
var _UDS_MSG_MONTH_ABBR_APR = ('Apr');
var _UDS_MSG_MONTH_ABBR_MAY = ('May');
var _UDS_MSG_MONTH_ABBR_JUN = ('Jun');
var _UDS_MSG_MONTH_ABBR_JUL = ('Jul');
var _UDS_MSG_MONTH_ABBR_AUG = ('Aug');
var _UDS_MSG_MONTH_ABBR_SEP = ('Sep');
var _UDS_MSG_MONTH_ABBR_OCT = ('Oct');
var _UDS_MSG_MONTH_ABBR_NOV = ('Nov');
var _UDS_MSG_MONTH_ABBR_DEC = ('Dec');
var _UDS_MSG_DIRECTIONS = ('directions');
var _UDS_MSG_CLEAR_RESULTS = ('clear results');
var _UDS_MSG_SHOW_ONE_RESULT = ('show one result');
var _UDS_MSG_SHOW_MORE_RESULTS = ('show more results');
var _UDS_MSG_SHOW_ALL_RESULTS = ('show all results');
var _UDS_MSG_SETTINGS = ('settings');
var _UDS_MSG_SEARCH = ('search');
var _UDS_MSG_SEARCH_UC = ('Search');
var _UDS_MSG_POWERED_BY = ('powered by');
function _UDS_MSG_LOCAL_ATTRIBUTION(LOCAL_RESULTS_PROVIDER) {return ('Business listings provided by ' + LOCAL_RESULTS_PROVIDER + '');}
var _UDS_MSG_SEARCHER_BOOK = ('Book');
function _UDS_MSG_FOUND_ON_PAGE(FOUND_ON_PAGE) {return ('Page ' + FOUND_ON_PAGE + '');}
function _UDS_MSG_TOTAL_PAGE_COUNT(PAGE_COUNT) {return ('' + PAGE_COUNT + ' pages');}
var _UDS_MSG_SEARCHER_BY = ('by');
var _UDS_MSG_SEARCHER_CODE = ('Code');
var _UDS_MSG_UNKNOWN_LICENSE = ('Unknown License');
var _UDS_MSG_SEARCHER_GSA = ('Search Appliance');
var _UDS_MSG_SEARCHCONTROL_MORERESULTS = ('More results');
var _UDS_MSG_SEARCHCONTROL_PREVIOUS = ('Previous');
var _UDS_MSG_SEARCHCONTROL_NEXT = ('Next');
var _UDS_MSG_GET_DIRECTIONS = ('Get directions');
var _UDS_MSG_GET_DIRECTIONS_TO_HERE = ('To here');
var _UDS_MSG_GET_DIRECTIONS_FROM_HERE = ('From here');
var _UDS_MSG_CLEAR_RESULTS_UC = ('Clear results');
var _UDS_MSG_SEARCH_THE_MAP = ('search the map');
var _UDS_MSG_SCROLL_THROUGH_RESULTS = ('scroll through results');
var _UDS_MSG_EDIT_TAGS = ('edit tags');
var _UDS_MSG_TAG_THIS_SEARCH = ('tag this search');
var _UDS_MSG_SEARCH_STRING = ('search string');
var _UDS_MSG_OPTIONAL_LABEL = ('optional label');
var _UDS_MSG_DELETE = ('delete');
var _UDS_MSG_DELETED = ('deleted');
var _UDS_MSG_CANCEL = ('cancel');
var _UDS_MSG_UPLOAD_YOUR_VIDEOS = ('upload your own video');
var _UDS_MSG_IM_DONE_WATCHING = ('i\047m done watching this');
var _UDS_MSG_CLOSE_VIDEO_PLAYER = ('close video player');
var _UDS_MSG_NO_RESULTS = ('No Results');
var _UDS_MSG_LINKEDCSE_ERROR_RESULTS = ('This Custom Search Engine is loading. Try again in a few seconds.');
var _UDS_MSG_COUPONS = ('Coupons');
var _UDS_MSG_BACK = ('back');
var _UDS_MSG_SUBSCRIBE = ('Subscribe');
var _UDS_MSG_SEARCHER_PATENT = ('Patent');
var _UDS_MSG_USPAT = ('US Pat.');
var _UDS_MSG_USPAT_APP = ('US Pat. App');
var _UDS_MSG_PATENT_FILED = ('Filed');
var _UDS_MSG_ADS_BY_GOOGLE = ('Ads by Google');
var _UDS_MSG_SET_DEFAULT_LOCATION = ('Set default location');
var _UDS_MSG_NEWSCAT_TOPSTORIES = ('Top Stories');
var _UDS_MSG_NEWSCAT_WORLD = ('World');
var _UDS_MSG_NEWSCAT_NATION = ('Nation');
var _UDS_MSG_NEWSCAT_BUSINESS = ('Business');
var _UDS_MSG_NEWSCAT_SCITECH = ('Sci/Tech');
var _UDS_MSG_NEWSCAT_ENTERTAINMENT = ('Entertainment');
var _UDS_MSG_NEWSCAT_HEALTH = ('Health');
var _UDS_MSG_NEWSCAT_SPORTS = ('Sports');
var _UDS_MSG_NEWSCAT_POLITICS = ('Politics');
var _UDS_MSG_SEARCH_RESULTS = ('Search results');
var _UDS_MSG_DID_YOU_MEAN = ('Did you mean:');
var _UDS_MSG_CUSTOM_SEARCH = ('Custom Search');
var _UDS_MSG_LABELED = ('Labeled');
var _UDS_MSG_LOADING = ('Loading...');
var _UDS_MSG_ALL_RESULTS_SHORT = ('All');
var _UDS_MSG_ALL_RESULTS_LONG = ('All results');
var _UDS_MSG_REFINE_RESULTS = ('Refine results:');
function _UDS_MSG_REVIEWS(REVIEW_COUNT) {return ('' + REVIEW_COUNT + ' reviews');}
function _UDS_MSG_CALORIES(CALORIES) {return ('' + CALORIES + ' cal');}
function _UDS_MSG_PRICE_RANGE(RANGE) {return ('Price range: ' + RANGE + '.');}
function _UDS_MSG_PRICE(PRICE) {return ('Price: ' + PRICE + '.');}
function _UDS_MSG_AVAILABILITY(AVAILABILITY) {return ('Availability: ' + AVAILABILITY + '.');}
function _UDS_MSG_TELEPHONE(TELEPHONE) {return ('Tel: ' + TELEPHONE + '');}
function _UDS_MSG_RESULT_INFO(NUMBER_OF_RESULTS, SEARCH_TIME) {return ('About ' + NUMBER_OF_RESULTS + ' results (' + SEARCH_TIME + ' seconds)');}
var _UDS_MSG_FILE_FORMAT = ('File Format:');
var _UDS_MSG_SHOWING_RESULTS_FOR = ('Showing results for');
var _UDS_MSG_SEARCH_INSTEAD_FOR = ('Search instead for');
function _UDS_MSG_FILTERED_RESULTS(NUM) {return ('In order to show you the most relevant results, we have omitted some entries very similar to the ' + NUM + ' already displayed. If you like, you can ' + '<a>repeat the search with the omitted results included' + '</a>.');}
var _UDS_MSG_ORDER_BY = ('Sort by:');
var _UDS_MSG_ORDER_BY_RELEVANCE = ('Relevance');
var _UDS_MSG_ORDER_BY_DATE = ('Date');
var _UDS_MSG_ORDER_BY_GET_LINK = ('Share this page:');
var _UDS_MSG_ADD_LABEL = ('Add Label');
var _UDS_MSG_NO_REFINEMENT =
    ('Refinements should be present before adding label');
var _UDS_MSG_LABEL_PAGE = ('This particular page');
var _UDS_MSG_LABEL_SITE = ('Entire site');
var _UDS_MSG_LABEL_PREFIX = ('Specific page prefix');
var _UDS_MSG_INVALID_URL_PREFIX = ('Invalid url prefix');
var _UDS_MSG_ERROR_ADDING_LABEL = ('Error adding label.');
var _UDS_MSG_SAVING = ('Saving...');
var _UDS_MSG_ADD_LABEL_SAVE = ('Save');
var _UDS_MSG_ADD_LABEL_CANCEL = ('Cancel');

var b=encodeURIComponent,g=google_exportSymbol,k=window,l=document,m=navigator,n="appendChild",p="push",q="status",r="createElement",s="ServiceBase",t="length",u="language",v="style",w="loader",x={blank:"&nbsp;"};x.image=_UDS_MSG_SEARCHER_IMAGE;x.web=_UDS_MSG_SEARCHER_WEB;x.blog=_UDS_MSG_SEARCHER_BLOG;x.video=_UDS_MSG_SEARCHER_VIDEO;x.local=_UDS_MSG_SEARCHER_LOCAL;x.news=_UDS_MSG_SEARCHER_NEWS;x.book=_UDS_MSG_SEARCHER_BOOK;x.patent=_UDS_MSG_SEARCHER_PATENT;x["ads-by-google"]=_UDS_MSG_ADS_BY_GOOGLE;
x.save=_UDS_MSG_SEARCHCONTROL_SAVE;x.keep=_UDS_MSG_SEARCHCONTROL_KEEP;x.include=_UDS_MSG_SEARCHCONTROL_INCLUDE;x.copy=_UDS_MSG_SEARCHCONTROL_COPY;x.close=_UDS_MSG_SEARCHCONTROL_CLOSE;x["sponsored-links"]=_UDS_MSG_SEARCHCONTROL_SPONSORED_LINKS;x["see-more"]=_UDS_MSG_SEARCHCONTROL_SEE_MORE;x.watermark=_UDS_MSG_SEARCHCONTROL_WATERMARK;x["search-location"]=_UDS_MSG_SEARCHER_CONFIG_SET_LOCATION;x["disable-address-lookup"]=_UDS_MSG_SEARCHER_CONFIG_DISABLE_ADDRESS_LOOKUP;x["sort-by-date"]=_UDS_MSG_SORT_BY_DATE;
x.pbg=_UDS_MSG_BRANDING_STRING;x["n-minutes-ago"]=_UDS_MSG_MINUTES_AGO;x["n-hours-ago"]=_UDS_MSG_HOURS_AGO;x["one-hour-ago"]=_UDS_MSG_ONE_HOUR_AGO;x["all-n-related"]=_UDS_MSG_NEWS_ALL_N_RELATED;x["related-articles"]=_UDS_MSG_NEWS_RELATED;x["page-count"]=_UDS_MSG_TOTAL_PAGE_COUNT;var y=[];y[0]=_UDS_MSG_MONTH_ABBR_JAN;y[1]=_UDS_MSG_MONTH_ABBR_FEB;y[2]=_UDS_MSG_MONTH_ABBR_MAR;y[3]=_UDS_MSG_MONTH_ABBR_APR;y[4]=_UDS_MSG_MONTH_ABBR_MAY;y[5]=_UDS_MSG_MONTH_ABBR_JUN;y[6]=_UDS_MSG_MONTH_ABBR_JUL;y[7]=_UDS_MSG_MONTH_ABBR_AUG;
y[8]=_UDS_MSG_MONTH_ABBR_SEP;y[9]=_UDS_MSG_MONTH_ABBR_OCT;y[10]=_UDS_MSG_MONTH_ABBR_NOV;y[11]=_UDS_MSG_MONTH_ABBR_DEC;x["month-abbr"]=y;x.directions=_UDS_MSG_DIRECTIONS;x["clear-results"]=_UDS_MSG_CLEAR_RESULTS;x["show-one-result"]=_UDS_MSG_SHOW_ONE_RESULT;x["show-more-results"]=_UDS_MSG_SHOW_MORE_RESULTS;x["show-all-results"]=_UDS_MSG_SHOW_ALL_RESULTS;x.settings=_UDS_MSG_SETTINGS;x.search=_UDS_MSG_SEARCH;x["search-uc"]=_UDS_MSG_SEARCH_UC;x["powered-by"]=_UDS_MSG_POWERED_BY;x.sa=_UDS_MSG_SEARCHER_GSA;
x.by=_UDS_MSG_SEARCHER_BY;x.code=_UDS_MSG_SEARCHER_CODE;x["unknown-license"]=_UDS_MSG_UNKNOWN_LICENSE;x["more-results"]=_UDS_MSG_SEARCHCONTROL_MORERESULTS;x.previous=_UDS_MSG_SEARCHCONTROL_PREVIOUS;x.next=_UDS_MSG_SEARCHCONTROL_NEXT;x["get-directions"]=_UDS_MSG_GET_DIRECTIONS;x["to-here"]=_UDS_MSG_GET_DIRECTIONS_TO_HERE;x["from-here"]=_UDS_MSG_GET_DIRECTIONS_FROM_HERE;x["clear-results-uc"]=_UDS_MSG_CLEAR_RESULTS_UC;x["search-the-map"]=_UDS_MSG_SEARCH_THE_MAP;x["scroll-results"]=_UDS_MSG_SCROLL_THROUGH_RESULTS;
x["edit-tags"]=_UDS_MSG_EDIT_TAGS;x["tag-search"]=_UDS_MSG_TAG_THIS_SEARCH;x["search-string"]=_UDS_MSG_SEARCH_STRING;x["optional-label"]=_UDS_MSG_OPTIONAL_LABEL;x["delete"]=_UDS_MSG_DELETE;x.deleted=_UDS_MSG_DELETED;x.cancel=_UDS_MSG_CANCEL;x["upload-video"]=_UDS_MSG_UPLOAD_YOUR_VIDEOS;x["im-done"]=_UDS_MSG_IM_DONE_WATCHING;x["close-player"]=_UDS_MSG_CLOSE_VIDEO_PLAYER;x["no-results"]=_UDS_MSG_NO_RESULTS;x["linked-cse-error-results"]=_UDS_MSG_LINKEDCSE_ERROR_RESULTS;x.back=_UDS_MSG_BACK;
x.subscribe=_UDS_MSG_SUBSCRIBE;x["us-pat"]=_UDS_MSG_USPAT;x["us-pat-app"]=_UDS_MSG_USPAT_APP;x["us-pat-filed"]=_UDS_MSG_PATENT_FILED;x.dym=_UDS_MSG_DID_YOU_MEAN;x["showing-results-for"]=_UDS_MSG_SHOWING_RESULTS_FOR;x["search-instead-for"]=_UDS_MSG_SEARCH_INSTEAD_FOR;x["custom-search"]=_UDS_MSG_CUSTOM_SEARCH;x.labeled=_UDS_MSG_LABELED;x.loading=_UDS_MSG_LOADING;x["all-results-short"]=_UDS_MSG_ALL_RESULTS_SHORT;x["all-results-long"]=_UDS_MSG_ALL_RESULTS_LONG;x["refine-results"]=_UDS_MSG_REFINE_RESULTS;
x["result-info"]=_UDS_MSG_RESULT_INFO;x["file-format"]=_UDS_MSG_FILE_FORMAT;x["order-results-by"]=_UDS_MSG_ORDER_BY;x["order-by-relevance"]=_UDS_MSG_ORDER_BY_RELEVANCE;x["order-by-date"]=_UDS_MSG_ORDER_BY_DATE;x["get-link"]=_UDS_MSG_ORDER_BY_GET_LINK;x["add-label"]="Add Label";x["no-refinement"]="Refinements should be present before adding label";x["label-page"]="This particular page";x["label-site"]="Entire site";x["label-prefix"]="Specific page prefix";x["invalid-url-prefix"]="Invalid url prefix";
x["error-adding-label"]="Error adding label.";x.saving="Saving...";x.Save="Save";x.Cancel="Cancel";var _json_cache_defeater_=(new Date).getTime(),_json_request_require_prep=!0;function z(a,d){var c;if(c=A("msie"))c="msie 6.0"in B?B["msie 6.0"]:B["msie 6.0"]=-1!=m.appVersion.toLowerCase().indexOf("msie 6.0");c?k.setTimeout(C(this,D,[a,d]),0):D(a,d)}
function D(a,d){var c=l.getElementsByTagName("head")[0];c||(c=l.body.parentNode[n](l[r]("head")));var e=l[r]("script");e.type="text/javascript";e.charset="utf-8";var f=_json_request_require_prep?a+"&key="+google[w].ApiKey+"&v="+d:a;if(A("msie")||A("safari")||A("konqueror"))f=f+"&nocache="+_json_cache_defeater_++;e.src=f;var h=function(){e.onload=null;e.parentNode.removeChild(e)},f=function(a){a=a?a:k.event;a=a.target?a.target:a.srcElement;if("loaded"==a.readyState||"complete"==a.readyState)a.onreadystatechange=
null,h()};"Gecko"==m.product?e.onload=h:e.onreadystatechange=f;c[n](e)}function C(a,d,c){return function(){return d.apply(a,c||[])}}function A(a){return a in E?E[a]:E[a]=-1!=m.userAgent.toLowerCase().indexOf(a)}var E={},B={},F,G;k.ActiveXObject&&(F=!0,k.XMLHttpRequest&&(G=!0));if(!H)var H=g;if(!I)var I=google_exportProperty;
google[u].d={AFRIKAANS:"af",ALBANIAN:"sq",AMHARIC:"am",ARABIC:"ar",ARMENIAN:"hy",AZERBAIJANI:"az",BASQUE:"eu",BELARUSIAN:"be",BENGALI:"bn",BIHARI:"bh",BULGARIAN:"bg",BURMESE:"my",BRETON:"br",CATALAN:"ca",CHEROKEE:"chr",CHINESE:"zh",CHINESE_SIMPLIFIED:"zh-CN",CHINESE_TRADITIONAL:"zh-TW",CORSICAN:"co",CROATIAN:"hr",CZECH:"cs",DANISH:"da",DHIVEHI:"dv",DUTCH:"nl",ENGLISH:"en",ESPERANTO:"eo",ESTONIAN:"et",FAROESE:"fo",FILIPINO:"tl",FINNISH:"fi",FRENCH:"fr",FRISIAN:"fy",GALICIAN:"gl",GEORGIAN:"ka",GERMAN:"de",
GREEK:"el",GUJARATI:"gu",HAITIAN_CREOLE:"ht",HEBREW:"iw",HINDI:"hi",HUNGARIAN:"hu",ICELANDIC:"is",INDONESIAN:"id",INUKTITUT:"iu",IRISH:"ga",ITALIAN:"it",JAPANESE:"ja",JAVANESE:"jw",KANNADA:"kn",KAZAKH:"kk",KHMER:"km",KOREAN:"ko",KURDISH:"ku",KYRGYZ:"ky",LAO:"lo",LAOTHIAN:"lo",LATIN:"la",LATVIAN:"lv",LITHUANIAN:"lt",LUXEMBOURGISH:"lb",MACEDONIAN:"mk",MALAY:"ms",MALAYALAM:"ml",MALTESE:"mt",MAORI:"mi",MARATHI:"mr",MONGOLIAN:"mn",NEPALI:"ne",NORWEGIAN:"no",OCCITAN:"oc",ORIYA:"or",PASHTO:"ps",PERSIAN:"fa",
POLISH:"pl",PORTUGUESE:"pt",PORTUGUESE_PORTUGAL:"pt-PT",PUNJABI:"pa",QUECHUA:"qu",ROMANIAN:"ro",RUSSIAN:"ru",SANSKRIT:"sa",SCOTS_GAELIC:"gd",SERBIAN:"sr",SINDHI:"sd",SINHALESE:"si",SLOVAK:"sk",SLOVENIAN:"sl",SPANISH:"es",SUNDANESE:"su",SWAHILI:"sw",SWEDISH:"sv",SYRIAC:"syr",TAJIK:"tg",TAMIL:"ta",TAGALOG:"tl",TATAR:"tt",TELUGU:"te",THAI:"th",TIBETAN:"bo",TONGA:"to",TURKISH:"tr",UKRAINIAN:"uk",URDU:"ur",UZBEK:"uz",UIGHUR:"ug",VIETNAMESE:"vi",WELSH:"cy",YIDDISH:"yi",YORUBA:"yo",UNKNOWN:""};
H("google.language.Languages",google[u].d);
var J={AMHARIC:"am",ARMENIAN:"hy",AZERBAIJANI:"az",BASQUE:"eu",BENGALI:"bn",BIHARI:"bh",BRETON:"br",BURMESE:"my",CHEROKEE:"chr",CORSICAN:"co",DHIVEHI:"dv",ESPERANTO:"eo",FAROESE:"fo",FRISIAN:"fy",GEORGIAN:"ka",GUJARATI:"gu",INUKTITUT:"iu",JAVANESE:"jw",KANNADA:"kn",KAZAKH:"kk",KHMER:"km",KURDISH:"ku",KYRGYZ:"ky",LAO:"lo",LAOTHIAN:"lo",LATIN:"la",LUXEMBOURGISH:"lb",MALAYALAM:"ml",MAORI:"mi",MARATHI:"mr",MONGOLIAN:"mn",NEPALI:"ne",OCCITAN:"oc",ORIYA:"or",PASHTO:"ps",PUNJABI:"pa",QUECHUA:"qu",SANSKRIT:"sa",
SCOTS_GAELIC:"gd",SINDHI:"sd",SINHALESE:"si",SUNDANESE:"su",SYRIAC:"syr",TAJIK:"tg",TAMIL:"ta",TATAR:"tt",TELUGU:"te",TIBETAN:"bo",TONGA:"to",UIGHUR:"ug",URDU:"ur",UZBEK:"uz",YORUBA:"yo"},K={},L={},M=100;function N(a,d){var c="id"+M++;L[c]=function(e){e=d(e);a(e);delete L[c]};return"google.language.callbacks."+c}function O(a,d){var c="id"+M++;L[c]=function(e,f,h,S,V){e=d(e,f,h,S,V);a(e);delete L[c]};return"google.language.callbacks."+c}google[u].k=function(a){return K[a]};
H("google.language.isTranslatable",google[u].k);for(var P in google[u].d)K[google[u].d[P]]=!0;for(P in J)K[J[P]]=!1;g("google.language.callbacks",L);
g("google.language.getBranding",function(a,d){var c="horizontal";d&&d.type&&(c=d.orientation);var e=x["powered-by"],f=google[w][s]+"/css/small-logo"+(F&&!G?".gif":".png"),h=['<div style="font-family:arial,sans-serif;','font-size:11px;margin-bottom:1px" class="gBrandingText">',e,'</div><div><img src="',f,'"/></div>'],e=['<span style="vertical-align:middle;font-family:arial,sans-serif;','font-size:11px;" class="gBrandingText">',e,'<img style="padding-left:1px;vertical-align:',F?'bottom;" ':'middle;" ',
'src="',f,'"/></span>'],e="horizontal"==c?e:h,f=e.join(""),c=l[r]("div");c.className="gBranding";c[v].color="#676767";e==h&&(c[v].textAlign="center");c.innerHTML=f;a&&(h=null,(h="string"==typeof a?l.getElementById(a):a)&&h[n]&&h[n](c));return c});g("google.language.HORIZONTAL_BRANDING","horizontal");g("google.language.VERTICAL_BRANDING","vertical");g("google.language.CurrentLocale",_UDS_CONST_LOCALE);g("google.language.ShortDatePattern",_UDS_CONST_SHORT_DATE_PATTERN);google[u].l=function(a,d,c){d=N(d,Q);d="http://www.google.com/complete/search"+("?json=t&jsonp="+d+"&client=uds");c&&(d+="&hl="+b(c));d+="&q="+b(a);_json_request_require_prep=!1;z(d,null);_json_request_require_prep=!0};H("google.language.suggest",google[u].l);function Q(a){var d={};d.query=a[0];d.suggestions=[];var c=a[1];a=a[2];for(var e=0;e<c[t];e++){var f={};f.name=c[e];f.count=parseInt(a[e].replace(",",""),10);f.results=a[e];d.suggestions[p](f)}return d};google[u].f={TEXT:"text",HTML:"html"};H("google.language.ContentType",google[u].f);google[u].translate=function(a,d,c,e){var f,h=null;if("string"==typeof a)f=a;else if(a.text&&a.type)f=a.text,h=a.type;else throw"Invalid first argument";5120>=f[t]?a=!1:(a=R(null,null,400,"the string to be translated exceeds the maximum length allowed",null),e(a),a=!0);a||(e=O(e,R),e=google[w][s]+"/Gtranslate?callback="+e,e=e+"&context=22"+("&q="+b(f)),e+="&langpair="+b(d+"|"+c),h&&(e+="&format="+b(h)),z(e,google[u].Version))};
H("google.language.translate",google[u].translate);function R(a,d,c,e){a={};a.status={code:c};e&&(a[q].message=e);200!=c?(a.error=a[q],a.translation=""):(a.translation=d.translatedText,d.detectedSourceLanguage&&(a.detectedSourceLanguage=d.detectedSourceLanguage));return a}google[u].i=function(a,d){var c=O(d,T),c=google[w][s]+"/GlangDetect?callback="+c,c=c+"&context=22"+("&q="+b(a));z(c,google[u].Version)};H("google.language.detect",google[u].i);
function T(a,d,c,e){a={};a.status={code:c};e&&(a[q].message=e);200!=c?(a.error=a[q],a.language=""):(a.language=d[u],a.isReliable=d.isReliable,a.confidence=d.confidence);return a};var U={"en|am":!0,"en|ar":!0,"en|bn":!0,"en|el":!0,"en|fa":!0,"en|gu":!0,"en|hi":!0,"en|kn":!0,"en|ml":!0,"en|mr":!0,"en|ne":!0,"en|or":!0,"en|pa":!0,"en|ru":!0,"en|sa":!0,"en|si":!0,"en|sr":!0,"en|ta":!0,"en|te":!0,"en|ti":!0,"en|ur":!0,"en|zh":!0};google[u].m=function(a,d,c,e){if("function"!=typeof e)throw"Invalid callback";if(W(a,d,c,e)){e=O(e,X);d=[google[w][s],"/Gtransliterate?callback=",e,"&context=22","&langpair=",b(d+"|"+c)];for(c=0;c<a[t];c++)d[p]("&q="),d[p](b(a[c]));z(d.join(""),google[u].Version)}};
H("google.language.transliterate",google[u].m);
function W(a,d,c,e){var f="";"object"==typeof a&&a[t]?1>a[t]?f="No words to transliterate.":5<a[t]?f="Number of words to transliterate exceeds the limit of 5":d?c?d&&c&&U[d+"|"+c]||(f="Transliteration not supported for the language pair. Source Language - "+d+" Destination Language - "+c+"."):f="Destination language not specified.":f="Source language not specified.":f="Words needs to be an array.";if(0<f[t]){var h=X(null,null,400,f,null);k.setTimeout(function(){e(h)},0);return!1}return!0}
function X(a,d,c,e){a={status:{code:c,message:e}};200!=c?(a.error=a[q],a.transliterations=[]):a.transliterations=d.transliterations;return a};var Y={hi:!0,kn:!0,ml:!0,ta:!0,te:!0};google[u].c={h:0,g:1,e:2};google[u].j=function(a){a=a.toLowerCase();return a in Y?aa(a):google[u].c.e};H("google.language.FontRenderingStatus.SUPPORTED",google[u].c.g);H("google.language.FontRenderingStatus.UNSUPPORTED",google[u].c.h);H("google.language.FontRenderingStatus.UNKNOWN",google[u].c.e);H("google.language.isFontRenderingSupported",google[u].j);
function aa(a){switch(a){case "ml":return a=[],a[p]({a:"\u0d23\u0d28\u0d4d\u200d",b:"\u0d23\u0d4d\u0d23\u0d28\u0d4d\u0d31"}),a[p]({a:"\u0d23\u0d28\u0d4d\u200d",b:"\u0d23\u0d4d\u0d23\u0d28\u0d4d\u200d\u0d31"}),Z(a);case "hi":return Z([{a:"\u0915\u094d\u0930\u0930\u094d\u0925",b:"\u0915\u0925"}]);case "kn":return Z([{a:"\u0c95\u0ccd\u0cb2",b:"\u0c95"}]);case "te":return Z([{a:"\u0c15\u0c4d\u0c32",b:"\u0c15"}]);case "ta":return Z([{a:"\u0b95\u0bcd",b:"\u0b95"}])}}
function Z(a){for(var d=0;d<a[t];d++){var c=a[d],e=c.a,f=c.b,c=l[r]("span");c[v].fontSize="10px";var h=c[v];"opacity"in h?h.opacity=.1:"MozOpacity"in h?h.MozOpacity=.1:"filter"in h&&(h.filter="alpha(opacity=10)");l.body[n](c);c.innerHTML=e;e=$(c).width;c.innerHTML=f;f=$(c).width;l.body.removeChild(c);if(e==f)return!0}return!1}
function $(a){if("none"!=a[v].display)return{width:a.offsetWidth,height:a.offsetHeight};var d=a[v],c=d.display,e=d.visibility,f=d.position;d.visibility="hidden";d.position="absolute";d.display="";var h=a.offsetWidth;a=a.offsetHeight;d.display=c;d.position=f;d.visibility=e;return{width:h,height:a}};
google.loader.loaded({"module":"language","version":"1.0","components":["default"]});
google.loader.eval.language = function() {eval(arguments[0]);};if (google.loader.eval.scripts && google.loader.eval.scripts['language']) {(function() {var scripts = google.loader.eval.scripts['language'];for (var i = 0; i < scripts.length; i++) {google.loader.eval.language(scripts[i]);}})();google.loader.eval.scripts['language'] = null;}})();