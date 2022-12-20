<?php $table_name='shop1_meta_product_table';?><?php
 include("../../src/config/includes.php"); echo Layout::APILayout();
 $get_data = select($table_name);
?>

<?php include "../../header.php"; ?>


<div class="main-content">


<div class="container-fluid content-top-gap">
    <br/>
    <a href="add.php">
        <button type="button" class="btn btn-primary btn-lg mb-3" >Add Product</button>
    </a>
    
    <section class="people">
            <section class="w3l-team-block">
                <!-- //people cards style 1 -->
                <div class="card card_border mb-5">
                    <div class="cards__heading">
                        <h3>Products</h3>
                    </div>
                    <div class="card-body">
                        
                        

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
        <div style="border:0px solid black">
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
</div>
</section>
</section>


</div>
</div>
</body>
</html>
