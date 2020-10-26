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
                <a id="lesson-submit" class="button is-pulled-right" onclick="checkAnswer()">Submit</a>
                <a id="lesson-next" class="button is-pulled-right is-hidden">Next</a>
            </div>
        </div>
    </section>
@endsection

<script>
    function checkAnswer(){
        document.getElementById("lesson-next").classList.remove("is-hidden");
        var x = document.getElementById("iframeOutput");
        console.log(x);
    }
</script>