<?php
      
    // When the submit button is clicked
    if (isset($_POST['send message'])) {
      
        // Creating variables and 
        // storing values in it
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
  
        echo "<h1><i> Good Morning, $f_name $l_name </i></h1>";
        header('Location: teachers.html');
    }
?>