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
   


    
    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-3 mb-4">
      <div class="card-body py-3 p-0">
        <div class="row">
          <div class="col-lg-6 align-self pr-lg-4">
            <h3 class="block__title mb-lg-4">Create a new shop on Metaverse</h3>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusa ntium corrupti
              neque sunt labore veritatis. </p>
            <p class="mb-lg-5 mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusa ntium corrupti
              neque sunt
              praesentium aut, labore veritatis. Eaque, similique aspernatur. Perferendis doloremque ut
              praesentium vel voluptatum quasi dolor explicabo nobis ex?</p>
            <a href="create_shop.php">
                <button type="button" class="btn btn-primary btn-lg">Create shop</button>
            </a> 
    
          </div>
          <div class="col-lg-6 pl-lg-4 mt-lg-0 mt-4">
            <img src="assets/images/safetynow_frame1-drib.gif" alt="" class="img-fluid rounded" height="200"/>
          </div>
        </div>
      </div>
    </div>
    <!-- //content block style 1-->



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
      <?php foreach($get_shop_data as $val){?>
    <div class="col-md-4" style="margin-bottom:20px;">
        <div class="card">
            <iframe src="<?= $val['link']?>" height="200"  title="Iframe Example"></iframe>
            <!--<img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">-->
            <div class="card-body" style="margin:20px;">
                
              <h3 class="name-pos mb-0"><a href="#"><?= $val['name']?></a></h3>
             <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
         
             <a href="<?= $val['link'] ?>" target="_blank" > <button type="button" class="btn btn-primary btn-lg mt-2">View</button></a>
               <a href="<?= $val['link'].'/list.php'?>" target="_blank" > <button type="button" class="btn btn-info btn-lg mt-2">Settings</button></a>
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
