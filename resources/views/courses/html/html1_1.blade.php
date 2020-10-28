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
                    <div class="column">
                        <article id="res-msg" class="message is-primary is-hidden">
                            <div class="message-header">
                                <p id="head-msg"></p>
                                <button class="delete" aria-label="delete" onclick="closeCheck()"></button>
                            </div>
                            <div class="message-body">
                                Good Job!
                            </div>
                        </article>
                    </div>
                    <div class="column">
                        <a id="lesson-submit" class="button is-pulled-right" onclick="checkAnswer()">Submit</a>
                        <a id="lesson-next" class="button is-pulled-right is-hidden">Next</a>
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
            //document.getElementById("lesson-next").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.remove("is-danger");
            document.getElementById("res-msg").classList.add("is-primary");
            document.getElementById("head-msg").innerHTML = "Correct Answer!";
            console.log("correct answer");
        }
        else{
            document.getElementById("res-msg").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.remove("is-primary");
            document.getElementById("res-msg").classList.add("is-danger");
            document.getElementById("head-msg").innerHTML = "Wrong Answer!";
            console.log("wrong answer");
        }
       
    }

    function closeCheck(){
        var y = document.getElementById("res-msg");
        if(window.getComputedStyle(y).display !== "hidden")  y.classList.add("is-hidden");


</script>