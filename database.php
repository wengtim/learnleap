<?php

function getConnection()
{
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "quizDB";

   $conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   return $conn;
}

function getQuizData()
{
   $conn = getConnection();

   $sql = "SELECT quiz_id, lecturer_name, quiz_name, quiz_details FROM `quiz-data`";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      $quizzes = [];
      while ($row = $result->fetch_assoc()) {
         $quizzes[] = $row;
      }
   } else {
      $quizzes = [];
   }

   $conn->close();

   return $quizzes;
}

function getQuizById($quizId)
{
    $conn = getConnection();

    $sql = "SELECT quiz_id, lecturer_name, quiz_name, quiz_details FROM `quiz-data` WHERE quiz_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $quizId);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }

    $conn->close();
}
