@extends('layouts.course_text_editor')

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
            <i class="fab fa-css3"></i>
            </span>
            <span>CSS</span>
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
        <h1>CSS LESSON 1</h1>
        <div class="columns">
            <div class="column is-half">
                <div class="box has-background-primary">
                  <p>Create an &lt;h1&gt; that will display "Hello World"</p>
                </div>       
                <section class="section box has-background-dark">
                  <div class="glider-contain">
                      <div class="glider">
                        <div><figure><img src="\images\lesson-slides\html\body.png" alt=""/></figure></div>
                        <div><figure><img src="\images\lesson-slides\html\h1.png" alt=""/></figure></div>
                        <div><figure><img src="\images\lesson-slides\html\h2.png" alt=""/></figure></div>
                        <div><figure><img src="\images\lesson-slides\html\h3.png" alt=""/></figure></div>
                        <div><figure><img src="\images\lesson-slides\html\hTags.png" alt=""/></figure></div>
                        <div><figure><img src="\images\lesson-slides\html\p1.png" alt=""/></figure></div>
                        <div><figure><img src="\images\lesson-slides\html\p2.png" alt=""/></figure></div>
                      </div>
                      <button aria-label="Previous" class="glider-prev">
                        <i class="fa fa-chevron-left"></i>
                      </button>
                      <button aria-label="Next" class="glider-next">
                        <i class="fa fa-chevron-right"></i>
                      </button>
                      <div role="tablist" id="dots"></div>
                  </div>
                </section>
            </div>
            <div class="column is-half">
                <div class='is-full box has-background-black'>
                    <div id="htmlEditor" onkeyup="executeCode()"></div>
                </div>
                <div class='is-full box'> 
                    <h2>Output</h2>
                    <div id="iframewrapper" class="has-background-light"></div>
                </div>
                <div class="columns">
                    <div class="column is-4 is-offset-8">
                            <a id="lesson-next" href="/courses/html/level1/lesson2" class="button is-pulled-right is-link is-hidden ml-3">Next</a>
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
        if(html1_1_ans === htmlEditor.getValue()){
            document.getElementById("lesson-next").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.add("is-active");
            document.getElementById("mod-head").classList.remove("fail-header");
            document.getElementById("msg-body").classList.remove("fail-body");
            document.getElementById("mod-head").classList.add("success-header");
            document.getElementById("msg-body").classList.add("success-body");
            document.getElementById("head-msg").innerHTML = "Correct Answer!";
            document.getElementById("msg-body").innerHTML = "Good job!";
            confetti.start(2500, 175, 300);
        }
        else{
            document.getElementById("res-msg").classList.remove("is-hidden");
            document.getElementById("res-msg").classList.add("is-active");
            document.getElementById("mod-head").classList.remove("success-header");
            document.getElementById("msg-body").classList.remove("success-body");
            document.getElementById("mod-head").classList.add("fail-header");
            document.getElementById("msg-body").classList.add("fail-body");
            document.getElementById("head-msg").innerHTML = "Wrong Answer!";
            document.getElementById("msg-body").innerHTML = "Try Again!<br />&bull; Check your spelling and your spacing.<br />&bull; Make sure it is in the &lt;h1&gt; tag!";
        }
    }
</script>