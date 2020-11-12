var jsonSlides = (function() {
	var jsonS = null;
	$.ajax({
    'async': false,
    'global': false,
    'url': "/js/slides/slides.json",
    'dataType': "json",
    'success': function(sData) {
      jsonS = sData;
    }
  });
  return jsonS;
})();

var slideID = document.getElementById("heading").innerHTML;

var v = 0;
var insert = "";
function generateSlides(){
  for(var i = 0; i < jsonSlides.length; i++){
    var slideObj = jsonSlides[i];
    
    if(slideID == slideObj.lessonID){     
      document.getElementById("slides-title").textContent = slideObj.slidesTitle;

      for(j in slideObj.slidePath)
        insert += '<div><figure><img src="'+slideObj.slidePath[j]+'"/></figure></div>';
        document.getElementById("lesson-slides").innerHTML = insert;
    }
  } 
}
generateSlides(v);