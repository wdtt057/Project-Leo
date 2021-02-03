var cssEditor = CodeMirror(document.getElementById("cssEditor"),{
    value: "body {\n\tbackground-color: #eee;\n}",
    mode: "css",
    theme: "shadowfox",
    tabSize: 4,
	lineNumbers: true,
	lineWrapping: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});

var lesson = "<h1 class='title-class'>test</h1>\n\t<p>Hello test</p>\n<p id='beth'>testing 12</p>";
var output = cssEditor.getValue();
function executeCodeCSS(){
    var text = cssEditor.getValue();
    var ifr = document.createElement("iframe");
    ifr.setAttribute("frameborder", "0");
    ifr.setAttribute("id", "iframeOutput");  
    document.getElementById("iframewrapper").innerHTML = "";
    document.getElementById("iframewrapper").appendChild(ifr);
    var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
    ifrw.document.open();
	ifrw.document.write("<style>\n" + text + "\n</style>");
	ifrw.document.write(lesson);
	ifrw.document.close();
};
cssEditor.refresh();