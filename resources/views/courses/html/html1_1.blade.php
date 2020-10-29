@extends('layouts.course')

@section('content')
    <nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
        <li>
        <a href="/home">
            <span class="icon is-small">
            <i class="fas fa-home" aria-hidden="true"></i>
            </span>
            <span>Home</span>
        </a>
        </li>
        <li>
        <a href="#">
            <span class="icon is-small">
            <i class="fab fa-html5" aria-hidden="true"></i>
            </span>
            <span>HTML</span>
        </a>
        </li>
        <li>
        <a href="#">
            <span class="icon is-small">
            <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
            </span>
            <span>Level 1</span>
        </a>
        </li>
        <li class="is-active">
        <a href="#">
            <span class="icon is-small">
            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
            </span>
            <span>Lesson 1</span>
        </a>
        </li>
    </ul>
    </nav>
    <section class="section">
        <h1>HTML LESSON 1</h1>
        <div class="columns">
            <div class="column">
                <div class="box has-background-primary">Display "Hello World"
                </div>
            </div>
            <div class="column">
                <div class='is-full box has-background-black'>
                    <div id="htmlEditor" onkeyup="executeCode()"></div>
                </div>
                <div class='is-full box'> 
                    <h2>Output</h2>
                    <div id="iframewrapper" class="has-background-light"></div>
                </div>
                <div class="columns">
                    <div class="column is-4 is-offset-8">
                            <a id="lesson-next" class="button is-pulled-right is-link is-hidden ml-3">Next</a>
                            &nbsp;
                            <a id="lesson-submit" class="button is-pulled-right is-primary" onclick="checkAnswer()">Submit</a>
                    </div>
                </div>                
                <div id="res-msg" class="modal is-hidden">
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header id="mod-head" class="modal-card-head">
                        <p id="head-msg" class="modal-card-title" style="color:#fff;"></p>
                        <button class="delete" aria-label="close" onclick="closeCheck()"></button>
                        </header>
                        <section id="msg-body" class="modal-card-body">
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    function checkAnswer(){
        var x = "<!DOCTYPE html>\n<html>\n\t<body>\n\t\t<h1>Hello World</h1>\n\t</body>\n</html>";
        if(x === htmlEditor.getValue()){
            document.getElementById("lesson-next").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.add("is-active");
            document.getElementById("mod-head").classList.remove("fail-header");
            document.getElementById("msg-body").classList.remove("fail-body");
            document.getElementById("mod-head").classList.add("success-header");
            document.getElementById("msg-body").classList.add("success-body");
            document.getElementById("head-msg").innerHTML = "Correct Answer!";
            document.getElementById("msg-body").innerHTML = "Good job!";
            console.log("correct answer");
            confetti.start(3000, 175, 300);
        }
        else{
            document.getElementById("res-msg").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.add("is-active");
            document.getElementById("mod-head").classList.remove("success-header");
            document.getElementById("msg-body").classList.remove("success-body");
            document.getElementById("mod-head").classList.add("fail-header");
            document.getElementById("msg-body").classList.add("fail-body");
            document.getElementById("head-msg").innerHTML = "Wrong Answer!";
            document.getElementById("msg-body").innerHTML = "Almost!<br />&bull;Check your spelling and your spacing.<br />&bull;Make sure it is in the &lt;h1&gt; tag!";
            console.log("wrong answer");
        }
    }
    function closeCheck(){
        var y = document.getElementById("res-msg");
        if(window.getComputedStyle(y).display !== "hidden")  y.classList.add("is-hidden");
    }
</script>
<style>
#iframeOutput {
    width: 100%;
}
.success-header {
  background-color: #00d1b2!important;
  border-color: #00d1b2;

}
.success-body {
  background-color: #ebfffc!important;
  color: #00947e;
}
.fail-header {
  background-color: #f14668!important;
  border-color: #f14668;
}
.fail-body {
  background-color: #feecf0!important;
  color: #cc0f35;
}
</style>