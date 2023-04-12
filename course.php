<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title></title>
</head>
<body>
  <video width="320" height="240" controls id="my-video" autoplay>
    <source id="video-source-1" src="media/Speak2day_Hospitality_eng.mov" type="video/mp4">
    <source id="video-source-2" src="media/Speak2day_Hospitality_esp.mov" type="video/mp4">
    <track id="caption-source-1" kind="subtitles" src="captions/Speak2day_ Hospitality-eng.vtt" label="English" srclang="en" default>
    <track id="caption-source-2" kind="subtitles" src="captions/Speak2day_ Hospitality-esp.vtt" label="Spanish" srclang="es">
    <!-- <source src="movie.ogg" type="video/ogg"> -->
  </video>
  <button onclick="openSubtitle()">Open Subtitle</button>
  <div id="subtitle-container"></div>
  <div id="full-subtitle-container"></div>
  <div class="w3-container" style="width: 150px">
    <select class="w3-select" id="video-source" onchange="switchVideo()">
      <option value="media/Speak2day_Hospitality_eng.mov">English</option>
      <option value="media/Speak2day_Hospitality_esp.mov">Spanish</option>
    </select>
  </div>
  <div class="w3-container" style="width: 150px">
    <select class="w3-select" id="caption-source" onchange="switchCaption()">
      <option value="captions/Speak2day_ Hospitality-eng.vtt">English</option>
      <option value="captions/Speak2day_ Hospitality-esp.vtt">Spanish</option>
    </select>
  </div>

  <script>
    function switchVideo() {
      var selectedSource = document.getElementById("video-source").value;
      var video = document.getElementById("my-video");
      if (selectedSource === "media/Speak2day_Hospitality_eng.mov") {
        video.src = document.getElementById("video-source-1").src;
      } else if (selectedSource === "media/Speak2day_Hospitality_esp.mov") {
        video.src = document.getElementById("video-source-2").src;
      }
    }

    function switchCaption() {
      var selectedSource = document.getElementById("caption-source").value;
      var video = document.getElementById("my-video");
      if (selectedSource === "captions/Speak2day_ Hospitality-eng.vtt") {
        video.textTracks[0].mode = "showing";
        video.textTracks[1].mode = "hidden";
      } else if (selectedSource === "captions/Speak2day_ Hospitality-esp.vtt") {
        video.textTracks[0].mode = "hidden";
        video.textTracks[1].mode = "showing";
      }
      // video.textTracks[0].mode = "showing";
    }

    // function openSubtitle() {
    //   var selectedSource = document.getElementById("caption-source").value;
    //   var subtitleWindow = window.open("", "Subtitle Window", "width=500,height=300");
    //   subtitleWindow.document.write("<h1>Subtitle</h1>");
    //   subtitleWindow.document.write("<p id='subtitle-text'></p>");
      
    //   var video = document.getElementById("my-video");
    //   var cues = video.textTracks[0].cues;
    //   for (var i = 0; i < cues.length; i++) {
    //     var cue = cues[i];
    //     subtitleWindow.document.write("<p>" + cue.text + "</p>");
    //   }
    // }
   </script>
   <script>
  const video = document.getElementById('my-video');
const subtitles = document.getElementById('caption-source-1');
const subtitleContainer = document.getElementById('subtitle-container');

subtitles.addEventListener('cuechange', () => {
  let subtitleHTML = '';
  const cues = subtitles.track.activeCues;
  for (let i = 0; i < cues.length; i++) {
    const cue = cues[i];
    subtitleHTML += new XMLSerializer().serializeToString(cue.getCueAsHTML()) + ' ';
  }
  subtitleContainer.innerHTML = subtitleHTML.trim();
});
</script>
  <!-- <button class="w3-button w3-black w3-round">Button</button>
  <button class="w3-button w3-teal">Button</button>
  <button class="w3-button w3-yellow w3-border">Button</button>
  button -->
</body>
</html>