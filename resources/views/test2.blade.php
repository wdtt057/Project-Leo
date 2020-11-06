<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="\js\jquery.min.js"></script> 
  </head>
  <body>  
  <div class="box">
    <div id="question"></div>
    <div><input type="radio" id="opt1" name="options"><span id="optt1"></span></div>
    <div><input type="radio" id="opt2" name="options"><span id="optt2"></span></div>
    <div><input type="radio" id="opt3" name="options"><span id="optt3"></span></div>
    <button class="button is-primary" onclick="quizCheck()">Next Question</button>
    <a id="exitQuiz" class="button is-link is-hidden" href="/home">Exit Quiz</a>
    <button id="retryQuiz" class="button is-danger is-hidden" onclick="window.location.reload();">Retry Quiz</button>
  </div>
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
  //json array
  var i = 0;
  var correctCount = 0;
  //generate from json array 
  //init first question
  generate(0);
  function generate(index){
      document.getElementById("question").innerHTML = jsonData[index].q ;
      document.getElementById("optt1").innerHTML = jsonData[index].opt1 ;
      document.getElementById("optt2").innerHTML = jsonData[index].opt2 ;
      document.getElementById("optt3").innerHTML = jsonData[index].opt3 ;
  }

  function quizCheck(){
    var option1 = document.getElementById("opt1");
    var option2 = document.getElementById("opt2");
    var option3 = document.getElementById("opt3");
      if(option1.checked && jsonData[i].opt1 == jsonData[i].answer){
        correctCount++;
        option1.checked = false;
      }
      if(option2.checked && jsonData[i].opt2 == jsonData[i].answer){
        correctCount++;
        option2.checked = false;
      }
      if(option3.checked && jsonData[i].opt3 == jsonData[i].answer){
        correctCount++;
        option3.checked = false;
      }
      if(option1.checked && jsonData[i].opt1 != jsonData[i].answer){
          option1.checked = false;
      }
      if(option2.checked && jsonData[i].opt2 != jsonData[i].answer){
        option2.checked = false;
      }
      if(option3.checked && jsonData[i].opt3 != jsonData[i].answer){
        option3.checked = false;
      }
      //increment for next question
      i++;
      if(jsonData.length-1 < i){
        var score = (correctCount/jsonData.length)*100;
        if(score >= 70){
          document.getElementById("exitQuiz").classList.remove("is-hidden")
          alert("Your score is: " + score +"%, Good Job!!");
        }
        else{
          document.getElementById("retryQuiz").classList.remove("is-hidden")
          alert("Your score is: " + score +"%, try again");
        }
      }
      //callback to generate
      generate(i);
  }
  </script>
  </body>
</html>