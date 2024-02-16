<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player with Progress Bar</title>
    <style>
    body{
      background-color: #f3eeff;
    }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .video-container {
            display: grid;
            grid-template-columns: 50% 50%;
            justify-content: space-between;
        }

        .video {
            width: calc(50% - 10px);
            margin-bottom: 20px;
        }

        .progress-bar-container {
            width: 100%;
            height: 20px;
            background-color: #888;
            margin-top: 20px;
        }

        .progress-bar {
            width: 0%;
            height: 100%;
            background-color: #4caf50;
        }

    </style>
</head>
<body>
    <div class="container">
      <h1>Python</h1>
        <div class="video-container">
          <div class="">
            <video class="video" src="assets/vid/CSS.mp4" controls></video>
            <h3>INTRODUCTION TO PYTHON</h3>
          </div>
          <div class="">
            <video class="video" src="assets/vid/CSS.mp4" controls></video>
            <h3>SET</h3>
          </div>
          <div class="">
            <video class="video" src="assets/vid/CSS.mp4" controls></video>
            <h3>LIST</h3>
          </div>
          <div class="">
            <video class="video" src="assets/vid/CSS.mp4" controls></video>
            <h3>TUPLES</h3>
          </div>
          <div class="">
            <video class="video" src="assets/vid/CSS.mp4" controls></video>
            <h3>LOOP</h3>
          </div>
          <div class="">
            <video class="video" src="assets/vid/CSS.mp4" controls></video>
            <h3>DECISION MAKING</h3>
          </div>


        </div>
        <div class="progress-bar-container">
            <div id="progressBar" class="progress-bar"></div>
        </div>
    </div>
   <script>
    document.addEventListener("DOMContentLoaded", function() {
        var videos = document.querySelectorAll('.video');
        var progressBar = document.getElementById('progressBar');

        var totalVideos = videos.length;
        var videosWatched = 0;

        videos.forEach(function(video) {
            video.addEventListener('ended', function() {
                videosWatched++;
                var progress = (videosWatched / totalVideos) * 100;
                progressBar.style.width = progress + '%';

                if (videosWatched === totalVideos) {
                    // All videos watched, progress bar at 100%
                    alert("All videos watched!");
                }
            });
        });
    });

   </script>
</body>
</html>
