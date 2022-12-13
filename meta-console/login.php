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
</head>
<div class="container" style="margin:20;">
<section class="people">
            <section class="w3l-team-block">
                <!-- //people cards style 1 -->
                <div class="card card_border mb-5">
                    <div class="cards__heading">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">

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
  Do not have account? <a href="index.php"> Register from here</a>
</div>
</div>
</section>
</section>
</div>
<?php include './footer.php'; ?>
