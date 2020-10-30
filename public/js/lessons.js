/* TEXT EDITOR INITIALIZERS check codemirror for documentation*/
var htmlEditor = CodeMirror(document.getElementById("htmlEditor"),{
    value: "<!DOCTYPE html>\n<html>\n\t<body>\n\t\t<h1></h1>\n\t</body>\n</html>",
    mode: "htmlmixed",
    // htmlMode: true,
    theme: "shadowfox",
    tabSize: 4,
    lineNumbers: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});
var cssEditor = CodeMirror(document.getElementById("cssEditor"),{
    value: "body {\n\tbackground-color: #eee;\n}",
    mode: "css",
    theme: "shadowfox",
    tabSize: 4,
    lineNumbers: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});
var jsEditor = CodeMirror(document.getElementById("jsEditor"),{
    value: "function testFunction() { \n\talert('hello world');\n\treturn true; \n}",
    mode: "javascript",
    theme: "shadowfox",
    tabSize: 4,
    lineNumbers: true,
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

/* Lesson Carousel - check glider.js for documentation */
new Glider(document.querySelector('.glider'), {
    slidesToShow: 1,
    dots: '#dots',
    draggable: true,
    arrows: {
      prev: '.glider-prev',
      next: '.glider-next'
    }
});

/* ANSWER KEY STARTS HERE */
var html1_1_ans = "<!DOCTYPE html>\n<html>\n\t<body>\n\t\t<h1>Hello World</h1>\n\t</body>\n</html>";