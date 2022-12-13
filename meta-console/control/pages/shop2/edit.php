<?php $table_name='shop2_meta_product_table';?><?php
include "../../src/config/includes.php";
echo Layout::APILayout();

$product_id = $_GET["id"];
$new_folder_name = str_replace("_meta_product_table", "", $table_name);
//   if(isset($_FILES['image'])){
//       $errors= array();
//       $file_name = $_FILES['image']['name'];
//       $file_size =$_FILES['image']['size'];
//       $file_tmp =$_FILES['image']['tmp_name'];
//       $file_type=$_FILES['image']['type'];

//       if(empty($errors)==true){
//          copy($file_tmp,"models/".$file_name);
//          echo "Success";
//       }else{
//          print_r($errors);
//       }
//   }

if ($_POST) {
    // pr($_POST);
    $data = [
        "data" => [
            "name" => $_POST["name"],
            "price" => $_POST["price"],
            "description" => $_POST["desc"],
            "qty" => $_POST["qty"],
            // "glb_model"=>"https://sosal.in/meta-console/control/pages/$new_folder_name/models/$file_name",
            // "tag"=>$file_name,
            "scale" => $_POST["scale"],
            "rotation" => $_POST["rotation"],
            "location_id" => $_POST["location_id"],
            "status" => 0,
        ],
    ];
    $insert_data = update($table_name, $data, $product_id);

    header("Location: list.php");
    die();
}

$datas = [
    "conditions" => [
        "id" => $product_id,
    ],
];
$get_data = select($table_name, $datas);

//   pr($get_data);
?>


<?php include "../../header.php"; ?>
    

<div class="main-content">
 
        
<div class="container-fluid content-top-gap">
  
   <section class="people">
            <section class="w3l-team-block">
                <!-- //people cards style 1 -->
                <div class="card card_border mb-5">
                    <div class="cards__heading">
                        <h3>Update <?= $get_data[0]["name"] ?></h3>
                    </div>
                    <div class="card-body">
  
  
  
        <div class="row">
            <div class="col-md-6">
                
                    <form action="" method="POST" enctype="multipart/form-data">
      
   
        
        
    <div class="form-group">
      <label for="email">Title</label>
      <input type="text" class="form-control"  placeholder="Enter title" name="name" value="<?= $get_data[0][
          "name"
      ] ?>">
    </div>
    
    <div class="form-group">
      <label for="pwd">Price</label>
      <input type="text" class="form-control"  placeholder="Enter price" name="price" value="<?= $get_data[0][
          "price"
      ] ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Description</label>
      <input type="text" class="form-control"  placeholder="Description" name="desc" value="<?= $get_data[0][
          "description"
      ] ?>">
    </div>
    
    <div class="form-group">
      <label for="pwd">Inventory qty</label>
      <input type="number" class="form-control"  placeholder="Inventory" name="qty" value="<?= $get_data[0][
          "qty"
      ] ?>">
    </div>
    
    <div class="form-group">
      <label for="pwd">Scale</label>
      <input type="text" class="form-control"  placeholder="Scale" name="scale" value="5 5 5" value="<?= $get_data[0][
          "scale"
      ] ?>">
    </div>
    
    <div class="form-group">
      <label for="pwd">Rotation</label>
      <input type="text" class="form-control"  placeholder="Rotation" name="rotation" value="0 0 0" value="<?= $get_data[0][
          "rotation"
      ] ?>">
    </div>
    
    <div class="form-group">
      <label for="sel1" class="form-label">Select Rack</label>
        <select class="form-control" id="sel1" name="location_id" >
          <option >---select Rack ---</option>
          <option value="1" <?php if ($get_data[0]["location_id"] == "1") {
              echo "selected";
          } ?>>Rack 1</option>
          <option value="2" <?php if ($get_data[0]["location_id"] == "2") {
              echo "selected";
          } ?>>Rack 2</option>
          <option value="3" <?php if ($get_data[0]["location_id"] == "3") {
              echo "selected";
          } ?>>Rack 3</option>
          <option value="4" <?php if ($get_data[0]["location_id"] == "4") {
              echo "selected";
          } ?>>Rack 4</option>
          <option value="5" <?php if ($get_data[0]["location_id"] == "5") {
              echo "selected";
          } ?>>Rack 5</option>
          <option value="6" <?php if ($get_data[0]["location_id"] == "6") {
              echo "selected";
          } ?>>Rack 6</option>
          <option value="7" <?php if ($get_data[0]["location_id"] == "7") {
              echo "selected";
          } ?>>Rack 7</option>
          <option value="8" <?php if ($get_data[0]["location_id"] == "8") {
              echo "selected";
          } ?>>Rack 8</option>
          <option value="9" <?php if ($get_data[0]["location_id"] == "9") {
              echo "selected";
          } ?>>Rack 9</option>
          <option value="10" <?php if ($get_data[0]["location_id"] == "10") {
              echo "selected";
          } ?>>Rack 10</option>
          <option value="11" <?php if ($get_data[0]["location_id"] == "11") {
              echo "selected";
          } ?>>Rack 11</option>
          <option value="12" <?php if ($get_data[0]["location_id"] == "12") {
              echo "selected";
          } ?>>Rack 12</option>
         
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg">Update</button>
  </form>
                
            </div>
            <div class="col-md-6">
                
                       
    <!--  <div class="form-group">-->
    <!--  <label for="pwd">3D Model</label>-->
    <!--  <input type="file" name="image"  class="form-control"  value="<?= $get_data[0][
        "glb_model"
    ] ?>">-->
    <!--</div>-->
    
    <div class="form-group">
            <center>
          
                <model-viewer camera-controls alt="Model" src="<?= $get_data[0][
                    "glb_model"
                ] ?>" shadow-intensity="1" camera-controls touch-action="pan-y" style="height:549px">
                </model-viewer>
          
            </center>
        </div>
                
            </div>
           
            
        </div>
    
    
    
  
</div>
</div>
</section>
</section>
</div>
</div>
</body>
</html>