<?php
session_start();
include './db/query.php';

if ($_POST) {
    $data = [
        'data' => [
            'industry' => $_POST['industry'],
            'name' => $_POST['name'],
            'address' => $_POST['address'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ],
    ];
    $insert_data = insert('business', $data);
    $get_data = select('business', [
        'conditions' => [
            'id' => $insert_data,
        ],
    ]);

    $_SESSION['user'] = $get_data;
    header('Location: dashboard.php');
    die();
}
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MetsShop</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<style>
.back-g {
  background-image: url('assets/gifs/Work-in-the-metaverse-min.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  min-height: 100vh;
  background-color: 'black';
}

.Rectangle-242 {
    position: absolute;
    top: 20px;
    left: 80px;
    padding: 28px 62px 20px 55.4px;
    border-radius: 30px;
    box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
    background-color: #fff;
}/
body{
    background-color: black;
}

.form-control{
    
    padding: 12px !important;
    height: 53px;
    border-radius: 13px !important;
}
</style>
</head>

<div class="container-fluid back-g" >
   <div class="row">
      <div class="col-md-4 col-sm-4">
         <section class="people ml-5 Rectangle-242" style="width: 30rem;">
            <section class="w3l-team-block">
               <!-- //people cards style 1 -->
               
                  <div class="text-primary mb-2">
                     <h5>Register your business</h5>
                  </div>
                 
                    
                        <form action="" method="POST" enctype="multipart/form-data" class="mb-1">
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
                              <!--<label for="pwd">Business Name</label>-->
                              <input type="text" class="form-control"  placeholder="Business Name" name="name">
                           </div>
                           <div class="form-group">
                              <!--<label for="pwd">Address</label>-->
                              <input type="text" class="form-control"  placeholder="Address" name="address">
                           </div>
                           <div class="form-group">
                              <!--<label for="pwd">Username</label>-->
                              <input type="text" name="username"  class="form-control"  placeholder="Username" >
                           </div>
                           <div class="form-group">
                              <!--<label for="pwd">Password</label>-->
                              <input type="password" class="form-control"  placeholder="Password" name="password" value="5 5 5">
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Register</button>
                        </form>
                       
                        Already registered? <a href="login.php"> Log in from here</a>
                 
                
             
            </section>
         </section>
      </div>
      <div class="col-md-6"></div>
   </div>
</div>

<?php include './footer.php'; ?>
