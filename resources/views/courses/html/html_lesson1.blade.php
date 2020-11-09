@extends('layouts.courseV2')

@section('content')
<!-- multistep form -->
<section class="section">
	<div id="multistep">
		<!-- progressbar -->
		<ul id="progressbar" class="step-list">
			<li id="intro" class="active">Intro</li>
			<li>Warm Up</li>
			<li>Video A</li>
			<li>Excercise A</li>
			<li>Quiz A</li>
		</ul>
		<!-- fieldsets -->
		<intro-html-one></intro-html-one>
		<fieldset>
			<h1>some warmup will go here i guess</h1>
			<hr>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" />
		</fieldset>
		<fieldset>
			<figure class="image is-16by9">
				<iframe class="has-ratio" width="640" height="360" src="https://www.youtube.com/embed/QGJuMBdaqIw?showinfo=0" frameborder="0" allowfullscreen></iframe>
			</figure>
			<hr>
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" />
		</fieldset>
		<html-exercise-1a></html-exercise-1a>
		<html-quiz-1a></html-quiz-1a>
	</div>  
</section>
<html-slides></html-slides>
@endsection
<script src="/js/jquery.min.js"></script> 
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
