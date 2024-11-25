<?php

include "./database.php";

error_reporting(0);

$question = $_POST["questions"];
$answer = $_POST["answers"];


$sql = "INSERT INTO inputs(questions, answers) VALUE('$question','$answer')";


if($question != ""){
    if(mysqli_query($conn,$sql)){
        echo"inserted";
    }else{
        echo"error" . mysqli_query($conn);
    }
}


$sql = "SELECT id,questions,answers FROM inputs";
$result = $conn->query($sql);


if ($result->num_rows > 0){
    
    $questionArray = [];
    $answerArray = [];
    while($row = $result->fetch_assoc()){
        array_push($questionArray,$row['questions']);
        array_push($answerArray,$row['answers']);
        
    }
   
}


$conn->close();
if ($_SERVER['REQUEST_URI'] !== '/index.php') {
    header('Location: http://FAQ.test/index.php', true, 302);
    exit();
}

?>