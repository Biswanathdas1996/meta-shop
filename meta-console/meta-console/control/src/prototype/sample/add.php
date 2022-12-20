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


<?php include "../../header.php"; ?>

<style>
.back-g {
  background-image: url('../../../assets/gifs/6201b4e82e1ed1bf64e0d9a8_metaverse brands copy.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  height: 100%;
}
.Rectangle-242 {
    /*position: absolute;*/
    top: 400px;
    /*left: 80px;*/
    padding: 50px;
    border-radius: 30px;
    box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
    background-color: #fff;
}
.form-control{
    
    padding: 12px !important;
    height: 53px;
    border-radius: 13px !important;
}
.info_ui{
    
    font-size: 30px !important;
    padding: 10px !important;

}
</style>

<div class="main-content back-g">
   <div class="container-fluid content-top-gap">
      <div class="row">
         <div class="col-md-6">
            <section class="people Rectangle-242 mt-5">
               <section class="w3l-team-block">
                  <!-- //people cards style 1 -->
                  <div class="mb-5">
                     <div class="cards__heading">
                        <h3>Add new product</h3>
                     </div>
                     <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                              <!--<label for="email">Title</label>-->
                              <input type="text" class="form-control"  placeholder="Title" name="name">
                           </div>
                           <div class="form-group">
                              <!--<label for="pwd">Price</label>-->
                              <input type="text" class="form-control"  placeholder="Price" name="price">
                           </div>
                           <div class="form-group">
                              <!--<label for="pwd">Description</label>-->
                              <input type="text" class="form-control"  placeholder="Description" name="desc">
                           </div>
                           <div class="form-group">
                              <!--<label for="pwd">Inventory qty</label>-->
                              <input type="number" class="form-control"  placeholder="Inventory" name="qty">
                           </div>
                           <div class="form-group" style="display:flex;">
                              <!--<label for="pwd">3D Model</label>-->
                              <input type="file" name="image"  class="form-control"  placeholder="Select 3D Model" style="padding: 12px !important;height: 53px; width:90%">
                              <i class="fa fa-info-circle info_ui text-info" data-toggle="tooltip" data-placement="top" title="Select and upload the 3D model of the product"></i>
                           </div>
                           <div class="form-group" style="display:flex;">
                              <!--<label for="pwd">Scale</label>-->
                              <input type="text" class="form-control"  placeholder="Scale" name="scale" value="5 5 5" style="width:90%">
                              <i class="fa fa-info-circle info_ui text-info" data-toggle="tooltip" data-placement="top" title="Product dimentions over X,Y & Z axis"></i>
                           </div>
                           <div class="form-group" style="display:flex;">
                              <!--<label for="pwd">Rotation</label>-->
                              <input type="text" class="form-control"  placeholder="Rotation" name="rotation" value="0 0 0" style="width:90%">
                              <i class="fa fa-info-circle info_ui text-info" data-toggle="tooltip" data-placement="top" title="Product display rotation WRT X,Y & Z axis"></i>
                           </div>
                           <div class="form-group">
                              <!--<label for="sel1" class="form-label">Select Rack</label>-->
                              <select class="form-control" name="location_id" >
                                 <option >---Select Rack ---</option>
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
                           <!--<a href="list.php">-->
                           <!--   <button type="button" class="btn btn-info btn-lg">Back</button> -->
                           <!--</a>-->
                           <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Submit</button>
                        </form>
                     </div>
                  </div>
               </section>
            </section>
         </div>
         <div class="col-md-6"></div>
      </div>
   </div>
</div>

</body>
</html>
