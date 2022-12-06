<?php
session_start();
include "./db/query.php";

$user_data = $_SESSION["user"];

pr($user_data);


$get_shop_data = select('meta_shop_lists',[
            "conditions"=>[
                "user_id"=>$user_data[0]['id']
                ]
        ]);
        // pr($get_shop_data);
?>

<?php include "./header.php"; ?>

<center>
    </br>
  <a href="https://sosal.in/meta-console/control/console.php">
    
    <button type="button" class="btn btn-primary btn-lg">Create shop</button>
    
</a> 


</center>
<br/>
<div class="container">
  <div class="row">
      <h3>Shop List</h3>
      <?php foreach($get_shop_data as $val){?>
    <div class="col-md-4">
        <div class="card">
            <iframe src="<?= $val['link']?>" height="200" width="300" title="Iframe Example"></iframe>
            <!--<img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">-->
            <div class="card-body">
              <h4 class="card-title"><?= $val['name']?></h4>
             <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="<?= $val['link']?>" target="_blank" class="btn btn-warning stretched-link">View</a>
            </div>
          </div>
        
    </div>
    <?php } ?>
    
  </div>
  
</div>


