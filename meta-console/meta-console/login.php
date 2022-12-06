<?php
session_start();
include "./db/query.php";

if ($_POST) {
    
    $data = [
        "data" => [
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        ],
    ];
    $get_data = select('business', [
            "conditions"=>[
                "username" => $_POST["username"],
                "password" => $_POST["password"]
                ]
        ]);
    if($get_data){
        $_SESSION["user"] = $get_data;
        header("Location: dashboard.php");
        die();
    }else{
        pr("Wrong username/passsword");
    }
   
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container" style="margin:20;">
  <h2>Login</h2>
    <div class="well bg bg-danger">
        <form action="" method="POST" enctype="multipart/form-data">
            
        
    

    <div class="form-group">
      <label for="pwd">Username</label>
      <input type="text" name="username"  class="form-control"  placeholder="Enter username" >
    </div>
    
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password" value="5 5 5">
    </div>
    
  
    
    
    <button type="submit" class="btn btn-primary btn-lg">Log in</button>
  </form>
  
  <br/>
  
  Do not have account? <a href="login.php"> Register from here</a>
    </div>
</div>

</body>
</html>