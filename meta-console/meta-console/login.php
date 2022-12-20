<?php
session_start();
include './db/query.php';
if ($_POST) {
    $data = [
        'data' => [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ],
    ];
    $get_data = select('business', [
        'conditions' => [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ],
    ]);
    if ($get_data) {
        $_SESSION['user'] = $get_data;
        header('Location: dashboard.php');
        die();
    } else {
        pr('Wrong username/passsword');
    }
}
?>

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
body {
  background-image: url('assets/gifs/header_Metaverse_in_a_Nutshell.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  height: 100vh;
}
.Rectangle-242 {
    position: absolute;
    top: 100px;
    left: 80px;
    padding: 28px 62px 35px 55.4px;
    border-radius: 30px;
    box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
    background-color: #fff;
}
.form-control{
    
    padding: 12px !important;
    height: 53px;
    border-radius: 13px !important;
}
</style>
</head>

<div class="container-fluid" >
    <div class="row">
        <div class="col-md-6">
            <section class="people ml-5 Rectangle-242" style="width: 30rem;">
                <section class="w3l-team-block">
                    <!-- //people cards style 1 -->
                    <div >
                        <div class="text-primary mb-4">
                            <h3>Login</h3>
                        </div>
                        <div class="">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                  <!--<label for="pwd">Username</label>-->
                                  <input type="text" name="username"  class="form-control"  placeholder="Enter username" >
                                </div>
                                <div class="form-group">
                                  <!--<label for="pwd">Password</label>-->
                                  <input type="password" class="form-control"  placeholder="Enter password" name="password" value="5 5 5">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Log in</button>
                             </form>
                          <br/>
                          Do not have account? <a href="index.php"> Register from here</a>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <div class="col-md-6"></div>
    </div>



</div>
<?php include './footer.php'; ?>
