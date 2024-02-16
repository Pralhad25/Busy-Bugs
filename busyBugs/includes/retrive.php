<?php
  session_start();
  if(isset($_SESSION['validity'])){
    $name = $_SESSION['validity'];
    include_once 'config.php';

    if (isset($_POST['learn'])){

      $course = mysqli_real_escape_string($connect, $_POST['learn']);
      $sql = "SELECT upload_file, sec_name FROM upload_doc WHERE course_name = '$course'";

      $result = $connect->query($sql);
      $row = $result->fetch_assoc();
      // echo $row["upload_file"];

      $targetDir = "uploads/";
      $targetFile = $targetDir.$row["upload_file"];
      // echo "path= ".$targetFile."<br>";

      // Section 1: Displaying File Content
      echo '<div id="file-content">';
      $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif', 'mp4', 'avi', 'mov', 'txt', 'html', 'pdf');

      $fileExtension = pathinfo($row["upload_file"], PATHINFO_EXTENSION);

      if (in_array(strtolower($fileExtension), $allowedExtensions)) {
          if (in_array(strtolower($fileExtension), array('jpg', 'jpeg', 'png', 'gif'))) {
              // Display the image
              echo "<img src=\"{$targetFile}\" alt=\"Uploaded Image\"></img>";
              // echo "image path=".$targetFile;
          } elseif (in_array(strtolower($fileExtension), array('mp4', 'avi', 'mov'))) {
              // Display the video
              echo "<video controls autoplay><source src=\"{$targetFile}\" type=\"video/{$fileExtension}\">Your browser does not support the video tag.</video>";
          } elseif (in_array(strtolower($fileExtension), array('txt'))) {
              // Display the text file
              echo "<pre>" . file_get_contents($targetFile) . "</pre>";
          } elseif (in_array(strtolower($fileExtension), array('html'))) {
              // Display the HTML file
              echo file_get_contents($targetFile);
          } elseif (in_array(strtolower($fileExtension), array('pdf'))) {
              // Display the PDF file using an iframe
              echo "<iframe src=\"{$targetFile}\" style=\"width:100%;height:100%;\"></iframe>";
          } else {
              echo "Unsupported file extension: $fileExtension";
          }
      } else {
          echo "Invalid file extension. Allowed extensions are: " . implode(', ', $allowedExtensions);
      }
      echo '</div>'; // Closing Section 1

    }

    }

  else{
    header('Location: index.php');
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz App</title>
  <style>
    /* body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
    } */
    #quiz-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    #question-container {
      margin-bottom: 20px;
    }
    #options-container {
      display: flex;
      flex-direction: column;
    }
    .option {
      margin: 5px 0;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .option:hover {
      background-color: #f5f5f5;
    }
    #result-container {
      font-weight: bold;
      margin-top: 10px;
    }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .video {
            width: calc(50% - 10px);
            margin-bottom: 20px;
        }

        .progress-bar-container {
            width: 100%;
            height: 20px;
            background-color: #f0f0f0;
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

  <div class="progress-bar-container">
      <div id="progressBar" class="progress-bar"></div>
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

<div id="quiz-container">
  <div id="question-container"></div>
  <div id="options-container"></div>
  <div id="result-container"></div>
</div>

<script>
const quizData = [
  {
    question: "Which of the following tag is used to define options in a drop-down selection list?",
    options: ["option", "list", "select", "dropdown"],
    correctAnswer: "option"
  },
  {
    question: "Which of the following tag is used to add rows in the table?",
    options: ["<tr> and </tr>", "<td> and </td>", "<th> and </th>", "None"],
    correctAnswer: "<tr> and </tr>"
  },
  {
    question: "How to create an ordered list (a list with the list items in numbers) in HTML?",
    options: ["<ol>", "<ul>", "<i>", "<li>"],
    correctAnswer: "<ol>"
  }
];

  let currentQuestion = 0;
  let score = 0;

  const questionContainer = document.getElementById("question-container");
  const optionsContainer = document.getElementById("options-container");
  const resultContainer = document.getElementById("result-container");

  function loadQuestion() {
    const currentQuizData = quizData[currentQuestion];

    questionContainer.textContent = currentQuizData.question;
    optionsContainer.innerHTML = "";

    currentQuizData.options.forEach((option, index) => {
      const optionElement = document.createElement("div");
      optionElement.classList.add("option");
      optionElement.textContent = option;
      optionElement.addEventListener("click", () => checkAnswer(index));
      optionsContainer.appendChild(optionElement);
    });
  }

  function checkAnswer(selectedIndex) {
    const currentQuizData = quizData[currentQuestion];

    if (currentQuizData.options[selectedIndex] === currentQuizData.correctAnswer) {
      score++;
    }

    if (currentQuestion < quizData.length - 1) {
      currentQuestion++;
      loadQuestion();
    } else {
      showResult();
    }
  }

  function showResult() {
    resultContainer.textContent = `Your Score: ${score} out of ${quizData.length}`;
  }

  loadQuestion();
</script>

</body>
</html>
