<?php
// include '../db/connection.php';

// echo PHP_VERSION;
// return;
$actual_link =
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
        ? 'https'
        : 'http') .
    '://' .
    $_SERVER['HTTP_HOST'] .
    dirname($_SERVER['PHP_SELF']);
// $sql = "SHOW TABLES FROM $dbname";
// $result = mysqli_query($conn, $sql);
// if (!$result) {
//     echo "DB Error, could not list tables\n";
//     echo 'MySQL Error: ' . mysql_error();
//     exit();
// }
// $data = [];
// while ($row = mysqli_fetch_row($result)) {
//     $data[] = $row[0];
// }
// mysqli_close($conn);
?>
<?php include './header.php'; ?>
<style>
.back-g {
  background-image: url('assets/gifs/metaverse.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  min-height: 100vh;
  background-color: 'black';
}

.Rectangle-242 {
    position: absolute;
    top: 50px;
    left: 80px;
    padding: 28px 62px 20px 55.4px;
    border-radius: 30px;
    box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
    background-color: #fff;
}/
body{
    background-color: black;
}
</style>
<!------ Include the above in your HEAD tag ---------->
<div class="main-content">
    
  <!-- content -->
  <div class="container-fluid content-top-gap">
      
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create Shop</li>
      </ol>
    </nav>
    
    <img src="assets/gifs/The-Metaverse-and-the-Future-of-Marketing.png" width="100%" height="400"/>
    
       <div class="row">
      <div class="col-md-11 ">
          
    <section class="people Rectangle-242">
      <section class="w3l-team-block">
        <!-- //people cards style 1 -->
        <div class="mb-5">
          <div class="cards__heading">
            <h3>Create Shop</h3>
          </div>
          <div class="card-body">
            <div class="container login-container">
              <form autocomplete="off" class="idForm">
                  
                   <div class="form-group mb-5">
                       <label for="exampleInputEmail1" class="input__label "><b>Shop name *</b></label>
                      <input type="text" class="form-control" name="blank_name" placeholder="Enter shop name *"
                        value="" />
                    </div>
                    
       
                   
                    
               <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label"><b>Choose shop environment *</b></label>
                <div class="row">
                  <div class="col-md-6 " style="height:400px;">
                      
                    <div>
                      <center>
                        <model-viewer camera-controls alt="Model" src="control/common_models/shop_1.glb"
                          shadow-intensity="1" camera-controls touch-action="pan-y"
                          style="height:400px; width:100%; border:1px solid #80808038; border-radius: 30px;">
                        </model-viewer>
                      </center>
                    </div>
                    <div class="form-check mt-3">
                      <input type="radio" class="form-check-input" id="radio1" name="shop_env_model"
                        value="shop_1.glb" checked>Environment 1
                      <label class="form-check-label" for="radio1"></label>
                    </div>
                  </div>
                  <div class="col-md-6 " style="height:400px;">
                    <div>
                      <center>
                        <model-viewer camera-controls alt="Model" src="control/common_models/shop_2.glb"
                          shadow-intensity="1" camera-controls touch-action="pan-y"
                          style="height:400px; width:100%; border:1px solid #80808038; border-radius: 30px;">
                        </model-viewer>
                      </center>
                    </div>
                    <div class="form-check mt-3">
                      <input type="radio" class="form-check-input" id="radio2" name="shop_env_model"
                        value="shop_2.glb">Environment 2
                      <label class="form-check-label" for="radio2"></label>
                    </div>
                  </div>
                  
                  <!--// select rack-->
                
                  <div class="col-md-12 mt-5">
                   
                      <label for="exampleInputEmail1" class="input__label mt-5"><b>Choose Type of Stand *</b></label>
                  </div>
                  <div class="col-md-4 mt-1" style="height:400px;">
                      
                    <div>
                      <center>
                        <model-viewer camera-controls alt="Model" src="control/common_models/Stand.glb"
                          shadow-intensity="1" camera-controls touch-action="pan-y"
                          style="height:300px; width:100%; border:1px solid #80808038; border-radius: 30px;">
                        </model-viewer>
                      </center>
                    </div>
                    <div class="form-check mt-3">
                      <input type="radio" class="form-check-input" id="rack" name="rack"
                        value="common_models/Stand.glb" checked>Stand 1
                      <label class="form-check-label" for="rack"></label>
                    </div>
                  </div>
                  <div class="col-md-4 mt-1" style="height:400px;">
                    <div>
                      <center>
                        <model-viewer camera-controls alt="Model" src="control/common_models/Stand2.glb"
                          shadow-intensity="1" camera-controls touch-action="pan-y"
                          style="height:300px; width:100%; border:1px solid #80808038; border-radius: 30px;">
                        </model-viewer>
                      </center>
                    </div>
                    <div class="form-check mt-3">
                      <input type="radio" class="form-check-input" id="rack" name="rack"
                        value="common_models/Stand2.glb">Stand 2
                      <label class="form-check-label" for="rack"></label>
                    </div>
                  </div>
                  <div class="col-md-4 mt-1" style="height:400px;">
                    <div>
                      <center>
                        <model-viewer camera-controls alt="Model" src="control/common_models/Stand3.glb"
                          shadow-intensity="1" camera-controls touch-action="pan-y"
                          style="height:300px; width:100%; border:1px solid #80808038; border-radius: 30px;">
                        </model-viewer>
                      </center>
                    </div>
                    <div class="form-check mt-3">
                      <input type="radio" class="form-check-input" id="rack" name="rack"
                        value="common_models/Stand3.glb">Stand 3
                      <label class="form-check-label" for="rack"></label>
                    </div>
                  </div>
              
            <!----------------------------rack end      -->
                <div class="col-md-12 mt-3" >
                    
                       
                        
                    <div class="form-group">
                       <label for="exampleInputEmail1" class="input__label"><b>No of Stands <small class="text-danger">(Max calibrated value is 2)</small></b></label>
                        <input type="number" class="form-control" name="stand_qty" placeholder="Enter no of stand(s) *"
                        value="" />
                    </div>
                </div>
                <!--<div class="col-md-12 mt-5" >-->
                <!--    <div>-->
                <!--      <center>-->
                <!--        <model-viewer camera-controls alt="Model" src="control/common_models/icrCream.glb"-->
                <!--          shadow-intensity="1" camera-controls touch-action="pan-y"-->
                <!--          style="height:400px; width:100%; border:0px solid;">-->
                <!--        </model-viewer>-->
                <!--      </center>-->
                <!--    </div>-->
                <!--    <div class="form-group">-->
                <!--        <label for="exampleInputEmail1" class="input__label">Need Ice-cream stall ?</label>-->
                <!--       <div class="form-check">-->
                <!--          <input type="radio" class="form-check-input"  name="is_ice_cream_stall"-->
                <!--            value="1" checked>Yes-->
                <!--          <label class="form-check-label" for="radio1"></label>-->
                <!--        </div>-->
                <!--       <div class="form-check">-->
                <!--          <input type="radio" class="form-check-input"  name="is_ice_cream_stall"-->
                <!--            value="0" checked>No-->
                <!--          <label class="form-check-label" for="radio1"></label>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                    
               
                  
                  
                  
                  <div class="col-md-4 login-form-2" style="margin-top:50px">
                   
                    <div class="form-group">
                      
                      <button type="submit" class="btn btn-primary btn-lg btnSubmit">Create</button>
                    </div>
                    <div class="form-group">
                    </div>
                  </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </section>
    
    </div>
    <div class="col-md-4 "></div>
</div>


  </div>
</div>


<script>
  $(document).ready(function () {
    //Chosen
    $("#dbtable").chosen();
  });

  $(".idForm").submit(function (e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var link = "<?= $actual_link ?>"
    $.ajax({
      type: "POST",
      url: "control/console_ajax.php",
      data: form.serialize(), // serializes the form's elements.
      success: function (data) {

        swal("Page created successfully!  What do you want to do?", {
          icon: "success",
          buttons: {
            cancel: "Stay here!",
            catch: {
              text: "Go to the page",
              value: "catch",
            },
          },
        })
          .then((value) => {
            switch (value) {

              case "catch":
                window.location.replace(link + "/" + data);
                break;

              default:

            }
          });
      }
    });
  });



</script>
<?php include './footer.php'; ?>
