<?php
session_start();
include "./db/query.php";

if ($_POST) {
    
    $data = [
        "data" => [
            "industry" => $_POST["industry"],
            "name" => $_POST["name"],
            "address" => $_POST["address"],
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        ],
    ];
    $insert_data = insert('business', $data);
    $get_data = select('business',[
        "conditions"=>[
                'id'=>$insert_data
            ]
        ]);
   
    $_SESSION["user"] = $get_data;
    header("Location: dashboard.php");
    die();
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
  <h2>Register your business</h2>
    <div class="well bg bg-danger">
        <form action="" method="POST" enctype="multipart/form-data">
            
        <div class="form-group">
          <label for="sel1" class="form-label">Industry</label>
            <select class="form-control" id="sel1" name="industry">
              <option >---select Industry ---</option>
              <option value="Retail">Retail</option>
              <option value="Pharma">Pharma</option>
              <option value="FMCG">FMCG</option>
              <option value="Clothing">Clothing</option>
            </select>
        </div>
    
    <div class="form-group">
      <label for="pwd">Business Name</label>
      <input type="text" class="form-control"  placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Address</label>
      <input type="text" class="form-control"  placeholder="Enter Address" name="address">
    </div>
    

    <div class="form-group">
      <label for="pwd">Username</label>
      <input type="text" name="username"  class="form-control"  placeholder="Enter username" >
    </div>
    
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password" value="5 5 5">
    </div>
    
  
    
    
    <button type="submit" class="btn btn-primary btn-lg">Register</button>
  </form>
  
  
  <br/>
  
  Already registered? <a href="login.php"> Log in from here</a>
    </div>
</div>

</body>
</html>