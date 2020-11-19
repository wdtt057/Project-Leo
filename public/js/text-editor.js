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
    value: "function{\n}",
    mode: "javascript",
    theme: "shadowfox",
    tabSize: 4,
    lineNumbers: true,
    extraKeys: {"Ctrl-Space": "autocomplete"}
});

/*Close the pop up message after checking answer*/
function closeCheck(){
    var y = document.getElementById("res-msg");
    if(window.getComputedStyle(y).display !== "hidden")  y.classList.add("is-hidden");
}