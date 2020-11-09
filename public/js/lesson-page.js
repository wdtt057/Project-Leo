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
var output = htmlEditor.getValue();
function executeCode(){
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
executeCode();

/*Close the pop up message after checking answer*/
function closeCheck(){
    var y = document.getElementById("res-msg");
    if(window.getComputedStyle(y).display !== "hidden")  y.classList.add("is-hidden");
}
htmlEditor.refresh();
/* ANSWER KEY STARTS HERE */
var html1_1_ans = "<!DOCTYPE html>\n<html>\n\t<body>\n\t\t<h1>Hello World</h1>\n\t</body>\n</html>";
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
$(".next").click(function(){

	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})