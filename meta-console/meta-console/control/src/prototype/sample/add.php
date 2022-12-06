<?php
include "../../src/config/includes.php";
echo Layout::APILayout();
$new_folder_name = str_replace("_meta_product_table", "", $table_name);

function folder_exist($folder)
{
    // Get canonicalized absolute pathname
    $path = realpath($folder);

    // If it exist, check if it's a directory
    return ($path !== false and is_dir($path)) ? $path : false;
}

if (isset($_FILES["image"])) {
    $errors = [];
    $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];

    if (empty($errors) == true) {
        if (folder_exist("models")) {
            copy($file_tmp, "models/" . $file_name);
            echo "Success";
        } else {
            if (mkdir("models/" . $newpage)) {
                copy($file_tmp, "models/" . $file_name);
                echo "Success";
            }
        }
    } else {
        print_r($errors);
    }
}

if ($_POST) {
    pr($_POST);
    $data = [
        "data" => [
            "name" => $_POST["name"],
            "price" => $_POST["price"],
            "description" => $_POST["desc"],
            "qty" => $_POST["qty"],
            "glb_model" => "https://sosal.in/meta-console/control/pages/$new_folder_name/models/$file_name",
            "tag" => $file_name,
            "scale" => $_POST["scale"],
            "rotation" => $_POST["rotation"],
            "location_id" => $_POST["location_id"],
            "status" => 0,
        ],
    ];
    $insert_data = insert($table_name, $data);
    header("Location: list.php");
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
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Shop</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="active"><a href="list.php">List</a></li>
      <li><a href="add.php">Add new Product</a></li>
     
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Add new product</h2>
    <div class="well bg bg-danger">
        <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Title</label>
      <input type="text" class="form-control"  placeholder="Enter title" name="name">
    </div>
    
    <div class="form-group">
      <label for="pwd">Price</label>
      <input type="text" class="form-control"  placeholder="Enter price" name="price">
    </div>
    <div class="form-group">
      <label for="pwd">Description</label>
      <input type="text" class="form-control"  placeholder="Description" name="desc">
    </div>
    
    <div class="form-group">
      <label for="pwd">Inventory qty</label>
      <input type="number" class="form-control"  placeholder="Inventory" name="qty">
    </div>
    
    <div class="form-group">
      <label for="pwd">3D Model</label>
      <input type="file" name="image"  class="form-control"  placeholder="Enter password" >
    </div>
    
    <div class="form-group">
      <label for="pwd">Scale</label>
      <input type="text" class="form-control"  placeholder="Scale" name="scale" value="5 5 5">
    </div>
    
    <div class="form-group">
      <label for="pwd">Rotation</label>
      <input type="text" class="form-control"  placeholder="Rotation" name="rotation" value="0 0 0">
    </div>
    
    <div class="form-group">
      <label for="sel1" class="form-label">Select Rack</label>
        <select class="form-control" id="sel1" name="location_id">
          <option >---select Rack ---</option>
          <option value="1">Rack 1</option>
          <option value="2">Rack 2</option>
          <option value="3">Rack 3</option>
          <option value="4">Rack 4</option>
          <option value="5">Rack 5</option>
          <option value="6">Rack 6</option>
          <option value="7">Rack 7</option>
          <option value="8">Rack 8</option>
          <option value="9">Rack 9</option>
          <option value="10">Rack 10</option>
          <option value="11">Rack 11</option>
          <option value="12">Rack 12</option>
         
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
  </form>
    </div>
</div>

</body>
</html>
