 //json array
 var i = 0;
 var correctCount = 0;
 //generate from json array 
 //init first question
 generate(0);
 function generate(index){
   if(index < jsonData.length){
     document.getElementById("qNum").innerHTML = "Question " + (index+1) + " of " + jsonData.length;
     document.getElementById("question").textContent = jsonData[index].q;
     document.getElementById("optt1").textContent = jsonData[index].opt1;
     document.getElementById("optt2").textContent = jsonData[index].opt2;
     document.getElementById("optt3").textContent = jsonData[index].opt3;
     document.getElementById("optt4").textContent = jsonData[index].opt4;
     document.getElementById("quizHint").innerHTML = jsonData[index].hint;
   }
 }

 function quizCheck(){
   var option1 = document.getElementById("opt1");
   var option2 = document.getElementById("opt2");
   var option3 = document.getElementById("opt3");
   var option4 = document.getElementById("opt4");
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
     if(option4.checked && jsonData[i].opt4 == jsonData[i].answer){
        correctCount++;
        option4.checked = false;
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
     if(option4.checked && jsonData[i].opt4 != jsonData[i].answer){
        option4.checked = false;
      }
     //increment for next question
     i++;
     if(jsonData.length-1 < i){
       var score = (correctCount/jsonData.length)*100;
       if(score >= 70){
          document.getElementById("exitQuiz").classList.remove("is-hidden")
          confetti.start();
          document.getElementById("quiz-msg").classList.remove("is-hidden");
          document.getElementById("quiz-msg").classList.add("is-active");
          document.getElementById("quiz-mod-head").classList.add("success-header");
          document.getElementById("quiz-msg-body").classList.add("success-body");
          document.getElementById("quiz-msg-head").innerHTML = "You passed!";
          document.getElementById("quiz-msg-body").innerHTML = "Good job, you got " + correctCount + " correct out of " + jsonData.length + "!<br>Grade: " + score + "%";
       }
       else{
         document.getElementById("retryQuiz").classList.remove("is-hidden")
         document.getElementById("quiz-msg").classList.remove("is-hidden");
         document.getElementById("quiz-msg").classList.add("is-active");
         document.getElementById("quiz-mod-head").classList.add("fail-header");
         document.getElementById("quiz-msg-body").classList.add("fail-body");
         document.getElementById("quiz-msg-head").innerHTML = "Try Again!";
         document.getElementById("quiz-msg-body").innerHTML = "You need at least 70% to move on!<br>You got " + correctCount + " correct out of " + jsonData.length +".<br>Grade: " + score + "%";
       }
     }
     //callback to generate
     generate(i);
 }

 function closeQuizMsg(){
  var y = document.getElementById("quiz-msg");
  if(window.getComputedStyle(y).display !== "hidden")  y.classList.add("is-hidden");
}

function resetQuiz(){
  generate(0);
  correctCount = 0;
  i = 0;
  document.getElementById("retryQuiz").classList.add("is-hidden");
  document.getElementById("quiz-mod-head").classList.remove("fail-header");
  document.getElementById("quiz-msg-body").classList.remove("fail-body");
}