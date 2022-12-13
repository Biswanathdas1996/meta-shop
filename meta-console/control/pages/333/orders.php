<?php $table_name='333_meta_product_table';?><?php
 include("../../src/config/includes.php"); echo Layout::APILayout();
 $get_data = select('meta_shop_orders',[
        "conditions"=>[
                "db_name"=>$table_name
            ],
            'join' =>array(
                    $table_name=>'product_id',
                ), 
     ]);
    //  pr($get_data);
    //  return;
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
      <li><a href="orders.php">Orders</a></li>
    </ul>
  </div>
</nav>
<div class="container">
    <br/>
    
  <h2>Orders</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product</th>
         <th>Product name</th>
        <th>Price</th>
        
        <th>Qty</th>
        
        <th>Address</th>
       
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
         <?
            foreach($get_data as $key=> $value){ 
            ?>
      <tr>
        
        <td>
        <div style="border:1px solid black">
                <model-viewer camera-controls alt="Model" src="<?=  $value['111_meta_product_table']['glb_model']; ?>">
                </model-viewer>
            </div>
        </td>
        <td><?= $value['111_meta_product_table']['name']; ?></td>
        <td><?= $value['111_meta_product_table']['price']; ?></td>
        <td><?= $value['qty']; ?></td>
        
        
        <td>Rack <?= $value['address']; ?></td>
        
        <td>
            Order placed
        </td>
        
      </tr>
      
      <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>