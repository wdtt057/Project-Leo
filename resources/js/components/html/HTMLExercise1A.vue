<template>
	<fieldset>
		<section class="section">
			<h1>HTML LESSON 1</h1>
			<div class="columns">
				<div class="column is-half">
					<div class="box has-background-primary">
						<p>Create an &lt;h1&gt; that will display "Hello World"</p>
					</div>       
				</div>
				<div class="column is-half">
					<div class='is-full box has-background-black'>
						<div id="htmlEditor" onkeyup="executeCodeHTML()"></div>
					</div>
					<div class='is-full box'> 
						<h2>Output</h2>
						<div id="iframewrapper" class="has-background-light">
							<h1>Test</h1>
							<p> p test </p>
						</div>
					</div>
					<div class="columns">
						<div class="column is-4 is-offset-8">
							<a href="/courses/html/level1/lesson2" class="button is-pulled-right is-link is-hidden ml-3">Next</a>
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
		<hr>
		<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
		<input type="button" name="next" id="lesson-next" class="next action-button" value="Next" />
	</fieldset>
</template>