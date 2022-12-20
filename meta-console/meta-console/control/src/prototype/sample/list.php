<?php
 include("../../src/config/includes.php"); echo Layout::APILayout();
 $get_data = select($table_name);
?>

<?php include "../../header.php"; ?>
<style>
.back-g {
  background-image: url('../../../assets/gifs/metaverse-shopping-1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  height: 400px;
}
.Rectangle-242 {
    /*position: absolute;*/
    top: 300px;
    /*left: 80px;*/
     /*bottom:180px;*/
    padding: 50px;
    border-radius: 30px;
    box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
    background-color: #fff;
}
</style>

<div class="main-content">
   <div class="container-fluid content-top-gap back-g">
       
      
      <br/>
      <a href="add.php">
      <button type="button" class="btn btn-primary btn-lg mb-3" >Add Product</button>
      </a>
      <section class="people Rectangle-242 mb-5">
         <section class="w3l-team-block">
            <!-- //people cards style 1 -->
            <div class="card card_border">
               <div class="cards__heading" style="margin-bottom: 0px;">
                  <h3>Products</h3>
               </div>
            
                  <table class="table table-striped">
                     <thead style="background: #d85604;color: white;">
                        <tr>
                           <th>Name</th>
                           <th>Price</th>
                           <th>Description</th>
                           <th>Inventory</th>
                           <!--<th>Scale</th>-->
                           <!--<th>Rotation</th>-->
                           <th>Position</th>
                           
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?
                           foreach($get_data as $key=> $value){ 
                           ?>
                        <tr>
                           <td style="width:200px;">
                               <center>
                                    <div style="border:0px solid black">
                                        <model-viewer camera-controls alt="Model" src="<?= $value['glb_model']; ?>" style="height:100px;"></model-viewer>
                                    </div>
                                    <b> <?= $value['name']; ?></b> 
                               </center>
                            </td>
                           <td style="width:100px;"><?= $value['price']; ?> <small>INR</small></td>
                           <td><?= $value['description']; ?></td>
                           <td><b><?= $value['qty']; ?></b></td>
                           <!--<td><?= $value['scale']; ?></td>-->
                           <!--<td><?= $value['rotation']; ?></td>-->
                           <td>Rack <?= $value['location_id']; ?></td>
                           
                           <td style="width:50px;">
                              <a href="edit.php?id=<?= $value['id']; ?>">
                              <button type="button" class="btn btn-info" style="margin:10px;"><i class="fa fa-edit"></i></button>
                              </a>
                              <a href="delete.php?id=<?= $value['id']; ?>">
                              <button type="button" class="btn btn-danger" style="margin:10px;"><i class="fa fa-trash"></i></button>
                              </a>
                           </td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
              
            </div>
         </section>
      </section>
   </div>
</div>
</body>
</html>
