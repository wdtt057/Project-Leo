<template>
	<fieldset>
		<section class="section">
			<h1 class="title is-2">HTML Quiz 1</h1>
			<h3 id="qNum" class="subtitle is-6"></h3>
			<div>
				<span id="question" class="title is-4" style="padding-right:5px;"></span>
				<i class="far fa-lightbulb"></i>
				<div style="font-size:12px;" class="hint"> Hint
					<span id="quizHint" class="hint-text">Tooltip text</span>
				</div>
			</div>
			<hr>
			<div><input type="radio" id="opt1" name="options"><span id="optt1" class="quiz-choice"></span></div>
			<div><input type="radio" id="opt2" name="options"><span id="optt2" class="quiz-choice"></span></div>
			<div><input type="radio" id="opt3" name="options"><span id="optt3" class="quiz-choice"></span></div>
			<div><input type="radio" id="opt4" name="options"><span id="optt4" class="quiz-choice"></span></div>
			<br>
			<button class="button is-primary" onclick="quizCheck()">Next Question</button>
			<a id="exitQuiz" class="button is-link is-hidden" href="/home">Exit Quiz</a>
			<button id="retryQuiz" class="button is-danger is-hidden" onclick="window.location.reload();">Retry Quiz</button>
			<div id="quiz-msg" class="modal is-hidden">
				<div class="modal-background"></div>
				<div class="modal-card">
					<header id="quiz-mod-head" class="modal-card-head">
					<p id="quiz-msg-head" class="modal-card-title" style="color:#fff;"></p>
					<button class="delete" aria-label="close" onclick="closeQuizMsg()"></button>
					</header>
					<section id="quiz-msg-body" class="modal-card-body">
					</section>
				</div>
			</div>
		</section>
		<hr>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
</template>