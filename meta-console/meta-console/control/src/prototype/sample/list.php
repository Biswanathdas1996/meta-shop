<?php
 include("../../src/config/includes.php"); echo Layout::APILayout();
 $get_data = select($table_name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
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
    <br/>
    <a href="add.php">
        <button type="button" class="btn btn-primary btn-lg" style="float: right;">Add Product</button>
    </a>
  <h2>Product List</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Qty</th>
        <th>Scale</th>
        <th>Rotation</th>
        <th>Position</th>
        <th>Model</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
         <?
            foreach($get_data as $key=> $value){ 
            ?>
      <tr>
        <td><?= $value['name']; ?></td>
        <td><?= $value['price']; ?></td>
        <td><?= $value['description']; ?></td>
        <td><?= $value['qty']; ?></td>
        <td><?= $value['scale']; ?></td>
        <td><?= $value['rotation']; ?></td>
        <td>Rack <?= $value['location_id']; ?></td>
        <td>
        <div style="border:1px solid black">
                <model-viewer camera-controls alt="Model" src="<?= $value['glb_model']; ?>">
                </model-viewer>
            </div>
        </td>
        <td>
            <a href="edit.php?id=<?= $value['id']; ?>">
                <button type="button" class="btn btn-warning" style="width:100px; margin:10px;">Edit</button>
            </a>
            <a href="delete.php?id=<?= $value['id']; ?>">
                <button type="button" class="btn btn-danger" style="width:100px; margin:10px;">Dlete</button>
            </a>
        </td>
        
      </tr>
      
      <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
