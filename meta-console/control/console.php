<?php

// include '../db/connection.php';

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



<?php include "../header.php"; ?>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
     <form autocomplete="off" class="idForm">
     <h3 style="font-size: 24px;">Choose shop environment</h3>
            <div class="row">
                 
                
               


                <div class="col-md-6 " style="height:550px;">
                   
                   <div >
                        <center>
                  
                        <model-viewer camera-controls alt="Model" src="./common_models/shop.glb" shadow-intensity="1" camera-controls touch-action="pan-y" style="height:550px; width:100%; border:5px solid;">
                        </model-viewer>
                  
                                    
                        </center>
                    </div> 
                    
                    
                    <div class="form-check">
                                      <input type="radio" class="form-check-input" id="radio1" name="shop_env_model" value="common_models/shop.glb" checked>Option 1
                                      <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    
                                    
                </div>
                <div class="col-md-6 " style="height:550px;">
                   <div >
                        <center>
                  
                        <model-viewer camera-controls alt="Model" src="./common_models/shop_2.glb" shadow-intensity="1" camera-controls touch-action="pan-y" style="height:550px; width:100%; border:5px solid;">
                        </model-viewer>
                                       
                        </center>
                    </div> 
                    
                     <div class="form-check">
                                          <input type="radio" class="form-check-input" id="radio2" name="shop_env_model" value="common_models/shop_2.glb">Option 2
                                          <label class="form-check-label" for="radio2"></label>
                                        </div>
                </div>
                <div class="col-md-4 login-form-2" style="margin-top:50px">
                   
                    <div style="min-height: 100px;">    
                    <h3 style="font-size: 24px;">Create shop</h3>
                    </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="blank_name" placeholder="Enter shop name *" value="" />
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Create shop" />
                        </div>
                        <div class="form-group">

                            
                        </div>
                    
                </div>
                
            </div>
            </form>
        </div>
        
        
        <script>
            $(document).ready(function(){
              //Chosen
              $("#dbtable").chosen();
            });
            
        $(".idForm").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
        var link="<?= $actual_link ?>"
        $.ajax({
               type: "POST",
               url: "console_ajax.php",
               data: form.serialize(), // serializes the form's elements.
               success: function(data)
               {
                                              
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
                                  window.location.replace(link+"/"+data);
                                  break;
                             
                                default:
                                  
                              }
                            });
                            
                            
                
                  
               }
             });
        });
            
            
            
        </script>
    <?php include "../footer.php"; ?>    