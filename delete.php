<?php
include 'database.php';


$sql ="TRUNCATE inputs";

if($conn->query($sql) === TRUE){
    echo"Record deleted successfully";
}else {
    echo"error deleted record" . $conn->error;
}


$conn->close();
if ($_SERVER['REQUEST_URI'] !== '/index.php') {
    header('Location: http://FAQ.test/index.php', true, 302);
    exit();
}
?>