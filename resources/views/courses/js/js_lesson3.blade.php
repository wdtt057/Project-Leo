@extends('layouts.course_js')

@section('content')
	<div class="columns">
    <div class="card column is-10 is-offset-1">
      <h2 id="heading">JavaScript LESSON 3</h2>
      <p>Something Something</p>
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
           	<strong>For today's lesson, let's think of a common pattern that you do every day. It could be brushing your teeth, making your bed, or tying your shoes! For todays warm-up, lets talk about every action required to tie your shoes! First, grab your laces! Next, tie the knot! Then, loop-de-loop! And finally, pull! let's list it out.</strong> 
		   	<ul>tieOurShoes
		   		<li>1. grab laces</li>
		   		<li>2. loop-de-loop</li>
		   		<li>3. pull</li>
		   	</ul>
			<br>
		   	<strong>Easy peasy! Now lets turn it into a function!</strong>
		   	<ul>
			   <li>function tieOurShoes(){</li>
		   		<ul id="indent">
		   			<li>grabLaces();</li>
		   			<li>loopDeLoop();</li>
		   			<li>pull();</li>
		   		</ul>
				<li>}</li>
		   	</ul>
            <hr>
            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" /> 
        </fieldset>
        <lesson-video></lesson-video>
        <js-exercise-1a></js-exercise-1a>
        <html-quiz-1a></html-quiz-1a>
      </div>
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
	function checkAnswer(){
		if(js2_ans === jsEditor.getValue()){
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
<style>
#indent{
	margin-left:20px;
}
</style>
