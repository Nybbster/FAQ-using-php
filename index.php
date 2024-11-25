<?php

include_once './database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <style>

    </style>
</head>
<body>
  <H1>FAQ</H1>
  <div>
    <form action="./FAQ.php" method ="POST">
        <input type="text" name="questions" id="questions">
        <input type="text" name="answers" id="answers">
        <button type="submit">submit</button>

     
    </form>
    
  </div>
  <a href="http://faq.test/delete.php" ><Button>Delete</Button></a>
    
     

    
  <div>
    <!--Make it so it creates a new faq for every input -->
    <?php
      error_reporting(0);
      include  './FAQ.php';
     
      for ($i=0; $i < count($questionArray) ; $i++) { 
        ?>
        <details>
        <summary id='question'>
          <?=$questionArray[$i]?>
        </summary>
          <div id='answer'>
            <?=$answerArray[$i]?>
          </div>  
        </details>
        <?php
        
      }
    ?>
  </div>
</body>
</html>