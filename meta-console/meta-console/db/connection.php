<?php
     
     

    $host =   'localhost';  
    $user =   'sosalin_word';   
    $pass =   'vTzk1do3Qn!g';  
    $dbname = 'sosalin_word';
     
    // $host =   'localhost';  
    // $user =   'scanncat_user';  
    // $pass =   'MERZrWrNpCA!';  
    // $dbname = 'scanncat_papun'; 


    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    
    
    
    ?>