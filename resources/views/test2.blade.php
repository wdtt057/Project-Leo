<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="\js\jquery.min.js"></script> 
    <style>
      .quiz-choice{
        padding-left: 5px;
      }
    </style>
  </head>
  <body>  
  <div class="box">
    <h3 id="qNum" class="subtitle is-6"></h3>
    <h4 id="question" class="title is-4"></h4>
    <div><input type="radio" id="opt1" name="options"><span id="optt1" class="quiz-choice"></span></div>
    <div><input type="radio" id="opt2" name="options"><span id="optt2" class="quiz-choice"></span></div>
    <div><input type="radio" id="opt3" name="options"><span id="optt3" class="quiz-choice"></span></div>
    <div><input type="radio" id="opt4" name="options"><span id="optt4" class="quiz-choice"></span></div>
    <button class="button is-primary" onclick="quizCheck()">Next Question</button>
    <a id="exitQuiz" class="button is-link is-hidden" href="/home">Exit Quiz</a>
    <button id="retryQuiz" class="button is-danger is-hidden" onclick="window.location.reload();">Retry Quiz</button>
  </div>
  <script defer src="\js\quiz\quiz.js"></script>
  <script>
  // get JSON data
  var jsonData = (function() {
  var json = null;
  $.ajax({
      'async': false,
      'global': false,
      'url': "js/quiz/html-q1.json",
      'dataType': "json",
      'success': function(data) {
        json = data;
      }
    });
    return json;
  })();
  </script>
  </body>
</html>