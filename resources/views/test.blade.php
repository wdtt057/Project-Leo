<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
<link rel="stylesheet" href="/plugin/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="/plugin/codemirror/theme/shadowfox.css">
<link rel="stylesheet" href="/plugin/codemirror/addon/hint/show-hint.css">
<script src="/plugin/codemirror/lib/codemirror.js"></script>
<script src="/plugin/codemirror/mode/xml/xml.js"></script>
<script src="/plugin/codemirror/mode/css/css.js"></script>
<script src="/plugin/codemirror/mode/javascript/javascript.js"></script>
<script src="/plugin/codemirror/addon/hint/show-hint.js"></script>
<script src="/plugin/codemirror/addon/hint/html-hint.js"></script>
<script src="/plugin/codemirror/addon/hint/css-hint.js"></script>
<script src="/plugin/codemirror/addon/hint/javascript-hint.js"></script>
<script src="/js/jquery.min.js"></script>
<style>
    iframe{height:600px;width:400px};
</style>
<section class="section">
<div class="columns">
    <div class="column">
        <div id="htmlEditor" onkeyup="executeCode()"></div>
    </div>
    <div class="column">
        <div id="cssEditor"></div>
    </div>
    <div class="column">
        <div id="jsEditor"></div>
    </div>
</div>
</section>
<section class="section has-background-light">
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div id="iframewrapper"></div>
        </div>
    </div>
</section>


<script>
    var htmlEditor = CodeMirror(document.getElementById("htmlEditor"),{
        value: "<!DOCTYPE html>\n<html>\n\t<body>\n\t\t<h1>Hello World</h1>\n\t</body>\n</html>",
        mode: "xml",
        htmlMode: true,
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
</script>