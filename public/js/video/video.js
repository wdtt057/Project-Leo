var jsonVideo = (function() {
	var jsonV = null;
	$.ajax({
    'async': false,
    'global': false,
    'url': "/js/video/lesson-videos.json",
    'dataType': "json",
    'success': function(vData) {
      jsonV = vData;
    }
  });
  return jsonV;
})();

var videoID = document.getElementById("heading").innerHTML;

var v = 0;
generateVideo(0);
function generateVideo(){
  for(var i = 0; i < jsonVideo.length; i++){
    var obj = jsonVideo[i];
    if(videoID == obj.lessonID){
        document.getElementById("video-title").innerHTML = obj.title;
        document.getElementById("jVideo").innerHTML = '<iframe class="has-ratio" width="640" height="360" src="'
                                                      +obj.videoURL+'?showinfo=0" frameborder="0" allowfullscreen></iframe>';
    }
  } 
}
generateVideo(v);