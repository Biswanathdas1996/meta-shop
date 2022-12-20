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

    <!--<nav aria-label="breadcrumb">-->
    <!--  <ol class="breadcrumb my-breadcrumb">-->
    <!--    <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
    <!--    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>-->
    <!--  </ol>-->
    <!--</nav>-->
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary"><?php echo $user_data[0]['name']; ?> </span>, Welcome back</h1>
      <p><?php echo $user_data[0]['address']; ?></p>
    </div>

 <!-- statistics data -->
    <!--<div class="statistics">-->
    <!--  <div class="row">-->
    <!--    <div class="col-xl-6 pr-xl-2">-->
    <!--      <div class="row">-->
    <!--        <div class="col-sm-6 pr-sm-2 statistics-grid">-->
    <!--          <div class="card card_border border-primary-top p-4">-->
    <!--            <i class="lnr lnr-users"> </i>-->
    <!--            <h3 class="text-primary number">29.75 M</h3>-->
    <!--            <p class="stat-text">Total Users</p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-sm-6 pl-sm-2 statistics-grid">-->
    <!--          <div class="card card_border border-primary-top p-4">-->
    <!--            <i class="lnr lnr-eye"> </i>-->
    <!--            <h3 class="text-secondary number">51.25 K</h3>-->
    <!--            <p class="stat-text">Daily Visitors</p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="col-xl-6 pl-xl-2">-->
    <!--      <div class="row">-->
    <!--        <div class="col-sm-6 pr-sm-2 statistics-grid">-->
    <!--          <div class="card card_border border-primary-top p-4">-->
    <!--            <i class="lnr lnr-cloud-download"> </i>-->
    <!--            <h3 class="text-success number">166.89 M</h3>-->
    <!--            <p class="stat-text">Downloads</p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="col-sm-6 pl-sm-2 statistics-grid">-->
    <!--          <div class="card card_border border-primary-top p-4">-->
    <!--            <i class="lnr lnr-cart"> </i>-->
    <!--            <h3 class="text-danger number">1,250k</h3>-->
    <!--            <p class="stat-text">Purchased</p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <img src="assets/gifs/AdobeStock_468099360-1380x548.jpeg" width="100%"/>
    <!-- //statistics data -->

    <!-- charts -->
    <!--<div class="chart">-->
    <!--  <div class="row">-->
    <!--    <div class="col-lg-6 pr-lg-2 chart-grid">-->
    <!--      <div class="card text-center card_border">-->
    <!--        <div class="card-header chart-grid__header">-->
    <!--          Bar Chart-->
    <!--        </div>-->
    <!--        <div class="card-body">-->
              <!-- bar chart -->
    <!--          <div id="container">-->
    <!--            <canvas id="barchart"></canvas>-->
    <!--          </div>-->
              <!-- //bar chart -->
    <!--        </div>-->
    <!--        <div class="card-footer text-muted chart-grid__footer">-->
    <!--          Updated 2 hours ago-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="col-lg-6 pl-lg-2 chart-grid">-->
    <!--      <div class="card text-center card_border">-->
    <!--        <div class="card-header chart-grid__header">-->
    <!--          Line Chart-->
    <!--        </div>-->
    <!--        <div class="card-body">-->
              <!-- line chart -->
    <!--          <div id="container">-->
    <!--            <canvas id="linechart"></canvas>-->
    <!--          </div>-->
              <!-- //line chart -->
    <!--        </div>-->
    <!--        <div class="card-footer text-muted chart-grid__footer">-->
    <!--          Updated just now-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- //charts -->
    
    <!-- content block style 1-->
    <div class="card card_border p-lg-5 p-2 mb-2">
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
                <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-plus mr-2"></i> Create a new shop</button>
            </a> 
    
          </div>
          <div class="col-lg-6 pl-lg-4 mt-lg-0 mt-4">
            <img src="assets/images/safetynow_frame1-drib.gif" alt="" class="img-fluid rounded" height="100"/>
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
             <p class="card-text text-white">Some example text some example text. John Doe is an architect and engineer</p>
         
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
