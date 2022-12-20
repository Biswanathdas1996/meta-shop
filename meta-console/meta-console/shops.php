<?php
session_start();
include "./db/query.php";

$user_data = $_SESSION["user"];

// pr($user_data);

if(!$_SESSION["user"]){
    header("Location: login.php");
    die();
}

$get_shop_data = select('meta_shop_lists',[
            "conditions"=>[
                "user_id"=>$user_data[0]['id']
                ]
        ]);
        // pr($get_shop_data);
?>

<?php include "./header.php"; ?>



<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shops</li>
      </ol>
    </nav>
   


    




<br/>
<section class="people">
            <section class="w3l-team-block">
                <!-- //people cards style 1 -->
                <div class="card card_border mb-5">
                    <div class="cards__heading">
                        <h3>Shops</h3>
                    </div>
                    <div class="card-body">
      <div class="container">
      <div class="row">
      <?php foreach($get_shop_data as $val){
        $thumb="";
        if($val['shop'] == "shop_1.glb"){
            $thumb="https://sosal.in/meta-console/assets/images/shop1_thumb.png";
        }else{
            $thumb="https://sosal.in/meta-console/assets/images/shop2_thumb.png"; 
        }
      ?>
    <div class="col-md-4" style="margin-bottom:20px;">
        <div class="card" style="background: #292a2d; border: none;">
            <!--<iframe src="<?= $val['link']?>" height="200"  title="Iframe Example"></iframe>-->
            <img class="card-img-top" src="<?php echo $thumb; ?>" alt="Card image" style="width:100%" height="250">
            <div class="card-body" style="margin:10px;">
                
              <h3 class="name-pos mb-0" ><a href="#"><?= $val['name']?></a></h3>
             <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
         
             <a href="<?= $val['link']?>" target="_blank" > <button type="button" class="btn btn-primary btn-md mt-2"><i class="fa fa-eye mr-2"></i>&nbsp;View</button></a>
             <a href="<?= $val['link'].'/list.php'?>" target="_blank" > <button type="button" class="btn btn-info btn-md mt-2"><i class="fa fa-cog mr-2"></i>&nbsp;Settings</button></a>
            </div>
          </div>
        
    </div>
    <?php } ?>
    
  </div>
</div>

</div>
</div>
</section>
</section>


</div>
</div>
<?php include "./footer.php"; ?>
