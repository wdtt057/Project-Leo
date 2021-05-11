@extends('layouts.course_css')

@section('content')
	<div class="columns">
    <div class="card column is-10 is-offset-1">
      <h2 id="heading">CSS LESSON 3</h2>
      <p>Description Goes Here</p>
      <div id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active" id="intro"><strong>Start</strong></li>
          <li id="warm-up"><strong>Warmup</strong></li>
          <li id="lesson-video"><strong>Video A</strong></li>
          <li id="lesson-exercise"><strong>Excercise A</strong></li>
          <li id="lesson-quiz"><strong>Quiz A</strong></li>
        </ul>
				<!-- fieldsets -->
        <intro-html-one></intro-html-one>
        <fieldset>
					Warmup Shit
					<hr>
					<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" /> 
        </fieldset>
				<lesson-video></lesson-video>
				<css-exercise-1a></css-exercise-1a>
				<fieldset>
						<quiz></quiz>
						<hr>
						<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
						<a id="exitQuiz" class="button action-button is-hidden" href="/html-lesson2">Next Lesson</a>
				</fieldset>      </div>
	<lesson-slides></lesson-slides>
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
			'url': "/js/quiz/html-q1.json",
			'dataType': "json",
			'success': function(data) {
				json = data;
			}
		});
		return json;
	})();
</script>
<script>
	// function checkAnswer(){
	// 	if(html1_1_ans === htmlEditor.getValue()){
	// 		document.getElementById("lesson-next").classList.remove("is-hidden");
	// 		document.getElementById("res-msg").classList.remove("is-hidden");
	// 		document.getElementById("res-msg").classList.add("is-active");
	// 		document.getElementById("mod-head").classList.remove("fail-header");
	// 		document.getElementById("msg-body").classList.remove("fail-body");
	// 		document.getElementById("mod-head").classList.add("success-header");
	// 		document.getElementById("msg-body").classList.add("success-body");
	// 		document.getElementById("head-msg").innerHTML = "Correct Answer!";
	// 		document.getElementById("msg-body").innerHTML = "Good job!";
	// 		confetti.start(1500, 175, 300);
	// 	}
	// 	else{
	// 		document.getElementById("res-msg").classList.remove("is-hidden");
	// 		document.getElementById("res-msg").classList.add("is-active");
	// 		document.getElementById("mod-head").classList.remove("success-header");
	// 		document.getElementById("msg-body").classList.remove("success-body");
	// 		document.getElementById("mod-head").classList.add("fail-header");
	// 		document.getElementById("msg-body").classList.add("fail-body");
	// 		document.getElementById("head-msg").innerHTML = "Wrong Answer!";
	// 		document.getElementById("msg-body").innerHTML = "Try Again!<br />&bull; Check your spelling and your spacing.<br />&bull; Make sure it is in the &lt;h1&gt; tag!";
	// 	}
	// }
</script>
