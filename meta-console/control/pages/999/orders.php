<?php $table_name='999_meta_product_table';?><?php
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

<?php include "../../header.php"; ?>

<div class="main-content">
 
        
<div class="container-fluid content-top-gap">
  
   <section class="people">
            <section class="w3l-team-block">
                <!-- //people cards style 1 -->
                <div class="card card_border mb-5">
                    <div class="cards__heading">
                        <h3>Orders</h3>
                    </div>
                    <div class="card-body">
                        

   
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product</th>
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
        <td><?= $value['111_meta_product_table']['name']; ?></td>
        <td>
        <div style="border:0px solid black">
                <model-viewer camera-controls alt="Model" src="<?=  $value['111_meta_product_table']['glb_model']; ?>">
                </model-viewer>
            </div>
        </td>
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
    </div>
    </section>
    </section>
</div>
</div>
</body>
</html>