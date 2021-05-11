@extends('layouts.course_js')

@section('content')
	<div class="columns">
    <div class="card column is-10 is-offset-1">
      <h2 id="heading">JavaScript LESSON 1</h2>
      <p>Variables, Strings, and Booleans!</p>
      <div id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active" id="intro"><strong>Start</strong></li>
          <li id="warm-up"><strong>Warmup</strong></li>
          <li id="lesson-video"><strong>Video A</strong></li>
          <li id="lesson-exercise"><strong>Excercise A</strong></li>
          <li id="lesson-quiz"><strong>Quiz A</strong></li>
        </ul>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div> 
        <br> 
        <!-- fieldsets -->
        <intro-html-one></intro-html-one>
        <fieldset>
            <strong>For this lesson we will introduce all types of data. To practice, lets think all about you! What's your name? How old are you? Hair color? Eye color? Do you like watching Sunday cartoons? Anything! Let's list all that you think of on a sheet of paper. To start you off, I'll answer the questions myself! Be sure to answer in the same format as me!</strong>
			<div class="box" style="background-color:light-grey; width=250px!important;">
				<ul style="list-style-type:none;">
  					<li>myName = "Elizabeth"</li>
  					<li>myAge = 22</li>
  					<li>hairColor = "brown"</li>
					<li>likeSundayCartoons = true</li>
					<li>haveADog = true</li>
					<li>haveACat = false</li>
					<li>numberOfSiblings = 6</li>
				</ul>  
			</div>
			<strong>See? It's easy! Be sure to start every with an indicating name like "myName". Then follow that with an equal sign and the value for your trait! Notice that for my yes/no wuestions I answered with "true" or "false". Be sure to do the same!</strong>	
            <hr>
            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" /> 
        </fieldset>
        <lesson-video></lesson-video>
        <js-exercise-1a></js-exercise-1a>
        <fieldset>
			<quiz></quiz>
			<hr>
			<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
			<a id="exitQuiz" class="button action-button is-hidden" href="/js-lesson2">Next Lesson</a>
		</fieldset>
		<lesson-slides></lesson-slides>
      </div>
    </div>
  </div>
@endsection
<script src="/js/jquery.min.js"></script> 
<!-- ajax request for quiz-->
<script>
	var jsonData = (function() {
	var json = null;
	$.ajax({
			'async': false,
			'global': false,
			'url': "/js/quiz/js-q1.json",
			'dataType': "json",
			'success': function(data) {
				json = data;
			}
		});
		return json;
	})();
</script>
<script>
	var jsPrompt = 'function helloTo(){\n\tvar myName = "test"; \n\tdocument.querySelector(".display-name").innerHTML = "Hello " + myName;\n}'
	var lesson = "<h1 class='display-name' onclick='helloTo()'>Click me</h1>"

	function checkAnswer(){
		if(jsEditor.getValue().includes("var myName")){
			document.getElementById("lesson-next").classList.remove("is-hidden");
			document.getElementById("res-msg").classList.remove("is-hidden");
			document.getElementById("res-msg").classList.add("is-active");
			document.getElementById("mod-head").classList.remove("fail-header");
			document.getElementById("msg-body").classList.remove("fail-body");
			document.getElementById("mod-head").classList.add("success-header");
			document.getElementById("msg-body").classList.add("success-body");
			document.getElementById("head-msg").innerHTML = "Correct Answer!";
			document.getElementById("msg-body").innerHTML = "Good job!";
			confetti.start(1500, 175, 300);
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
