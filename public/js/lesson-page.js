/* TEXT EDITOR INITIALIZERS check codemirror for documentation*/
var htmlEditor = CodeMirror(document.getElementById("htmlEditor"),{
    value: "<!DOCTYPE html>\n<html>\n\t<body>\n\t\t<h1></h1>\n\t</body>\n</html>",
    mode: "htmlmixed",
    // htmlMode: true,
    theme: "shadowfox",
    tabSize: 4,
	lineNumbers: true,
	lineWrapping: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});
var cssEditor = CodeMirror(document.getElementById("cssEditor"),{
    value: "body {\n\tbackground-color: #eee;\n}",
    mode: "css",
    theme: "shadowfox",
    tabSize: 4,
	lineNumbers: true,
	lineWrapping: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});
var jsEditor = CodeMirror(document.getElementById("jsEditor"),{
    value: "function testFunction() { \n\talert('hello world');\n\treturn true; \n}",
    mode: "javascript",
    theme: "shadowfox",
    tabSize: 4,
	lineNumbers: true,
	lineWrapping: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});

// HTML Output
/* var output = htmlEditor.getValue();
function executeCodeHTML(){
    var text = htmlEditor.getValue();
    var ifr = document.createElement("iframe");
    ifr.setAttribute("frameborder", "0");
    ifr.setAttribute("id", "iframeOutput");  
    document.getElementById("iframewrapper").innerHTML = "";
    document.getElementById("iframewrapper").appendChild(ifr);
    var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
    ifrw.document.open();
    ifrw.document.write(text);
    ifrw.document.close();
};
executeCodeHTML(); */
var intialCSSInput = cssEditor.getValue();
var initStyleTag = "<style id='cmCss'>\n" + intialCSSInput + "\n</style>";
$('head').append(initStyleTag);
// CSS Output
function executeCodeCSS() {
	var cssInput = "<style id='cmCss'>\n" + cssEditor.getValue() + "\n</style>";
	$('#cmCss').replaceWith(cssInput);
}
/*Close the pop up message after checking answer*/
function closeCheck(){
    var y = document.getElementById("res-msg");
    if(window.getComputedStyle(y).display !== "hidden")  y.classList.add("is-hidden");
}
htmlEditor.refresh();
cssEditor.refresh();
/* ANSWER KEY STARTS HERE */
var html1_1_ans = "<!DOCTYPE html>\n<html>\n\t<body>\n\t\t<h1>Hello World</h1>\n\t</body>\n</html>";
//jQuery time
$(document).ready(function(){

	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;
	
	setProgressBar(current);
	
	$(".next").click(function(){
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//Add Class Active
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
	step: function(now) {
	// for making fielset appear animation
	opacity = 1 - now;
	
	current_fs.css({
	'display': 'none',
	'position': 'relative'
	});
	next_fs.css({'opacity': opacity});
	},
	duration: 500
	});
	setProgressBar(++current);
	});
	
	$(".previous").click(function(){
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//Remove class active
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show();
	
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
	step: function(now) {
	// for making fielset appear animation
	opacity = 1 - now;
	
	current_fs.css({
	'display': 'none',
	'position': 'relative'
	});
	previous_fs.css({'opacity': opacity});
	},
	duration: 500
	});
	setProgressBar(--current);
	});
	
	function setProgressBar(curStep){
	var percent = parseFloat(100 / steps) * curStep;
	percent = percent.toFixed();
	$(".progress-bar")
	.css("width",percent+"%")
	}
	
	$(".submit").click(function(){
	return false;
	})
	
});