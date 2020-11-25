@extends('layouts.course_html')

@section('content')
	<div class="columns">
    <div class="card column is-10 is-offset-1">
      <h2 id="heading">HTML LESSON 3</h2>
      <p>Introduction to HTML</p>
      <div id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active" id="intro"><strong>Start</strong></li>
          <li id="warm-up"><strong>Warmup</strong></li>
          <li id="lesson-video"><strong>Video</strong></li>
          <li id="lesson-exercise"><strong>Excercise</strong></li>
          <li id="lesson-quiz"><strong>Quiz</strong></li>
        </ul>
		<!-- fieldsets -->
        <intro-html-one></intro-html-one>
        <fieldset>
		<br><br>
		<strong>Let's get started! Once again, get your pen and paper or text editor ready. Have you ever had a pen pal or sent a letter to grandma? Today we want you to write out a proper address! Feel free to look up the location of your favorite restaurant or store if you would like to do that instead. Be sure to write the name of the person or place on the first line. Next add the address line containing the street name and number. Finally, on the next line be sure to write down the city, state, and zipcode! Now add "&lt;br&gt;" after every line. All finished? Yay! You successfully used the break tag!</strong><br><br>
			<hr>
			<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
          <input type="button" name="next" class="next action-button" value="Next" /> 
        </fieldset>
		<lesson-video></lesson-video>
		<html-exercise-3></html-exercise-3>
		<fieldset>
			<quiz></quiz>
			<hr>
			<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
			<a id="exitQuiz" class="button action-button is-hidden" href="/home">Next Lesson</a>
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
			'url': "/js/quiz/html-q3.json",
			'dataType': "json",
			'success': function(data) {
				json = data;
			}
		});
		return json;
	})();
</script>
<script>
	var lessonPromptHTML = '<!DOCTYPE html>\n<head>\n<style>\n.list-title {\n\tcolor:#EB7CFA;\n\tborder-bottom: 1px solid black\n}\n</style>\n<html>\n\t<body>\n\t\t<h1 class="list-title">My First List</h1>\n</body>\n</html>';
	function checkAnswer(){
		if(htmlEditor.getValue().includes("<ul>") && htmlEditor.getValue().includes("</ul>") && htmlEditor.getValue().includes("<li>") 
		    && htmlEditor.getValue().includes("</li>")){
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
