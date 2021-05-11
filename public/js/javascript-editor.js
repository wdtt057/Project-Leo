var jsEditor = CodeMirror(document.getElementById("jsEditor"),{
    // value: "function{\n}",
    value: jsPrompt,
    mode: "javascript",
    theme: "shadowfox",
    tabSize: 4,
	lineNumbers: true,
	lineWrapping: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});

// var lesson = '<h1 style="color:#BDBCB2">Show the hidden message!</h1>\n<button onclick=openMessage()>Click Me!</button>\n<p id="hidden-message" style="display:none">Good job! You wrote your first javascript function! :)</p>';
var output = jsEditor.getValue();
function executeCodeJS(){
    var text = jsEditor.getValue();
    var ifr = document.createElement("iframe");
    ifr.setAttribute("frameborder", "0");
    ifr.setAttribute("id", "iframeOutput");  
    document.getElementById("iframewrapper").innerHTML = "";
    document.getElementById("iframewrapper").appendChild(ifr);
    var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
    ifrw.document.open();
	ifrw.document.write("<script>\n" + text + "\n</script>");
	ifrw.document.write(lesson);
	ifrw.document.close();
};
jsEditor.refresh();

// JavaScript Answer Key starts here
//  var js1A_ans = 'function openMessage(){\n\tdocument.getElementById("hidden-message").style.display = "block";\n}';