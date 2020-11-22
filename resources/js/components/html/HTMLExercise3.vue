<template>
	<fieldset>
		<section class="section">
			<h1>HTML LESSON 3 - Creating a list!</h1>
			<div class="columns">
				<div class="column is-half">
					<div class="box has-background-royal-blue has-text-white-bis">
						<p>
							Create an unordered grocery list!<br>
							First start with a &lt;ul&gt; tag<br>
							Then add items to your list using the &lt;li&gt; tag.
					</p>
					</div>   
					<div>
						<img src="\images\girl-exercise.png">
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
		<input type="button" name="next" id="lesson-next" class="next action-button is-hidden" value="Next" />
	</fieldset>
</template>