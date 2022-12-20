<?php
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
     
     function extract_order_id($data){
         $order_id_array = array();
         foreach($data as $val) {
             $order_id_array[]=$val['order_id'];
         }
         return array_unique($order_id_array);
     }
     
    function group_by($key, $data) {
        $result = array();
    
        foreach($data as $val) {
            if(array_key_exists($key, $val)){
                $result[$val[$key]][] = $val;
            }else{
                $result[""][] = $val;
            }
        }

        return $result;
    }

$order_data = group_by('order_id',$get_data);
$order_id_array= extract_order_id($get_data);

//  pr($order_data['order_KrIZvnLpblr6fn']);
//  pr($order_id_array);
    //  return;
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
   
    padding: 50px;
    border-radius: 30px;
    box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
    background-color: #fff;
}
</style>

<div class="main-content">
   <div class="container-fluid content-top-gap back-g mb-5">
      <section class="people">
         <section class="w3l-team-block ">
            <!-- //people cards style 1 -->
            <!--<div class="card card_border mb-5">-->
            <!--   <div class="cards__heading">-->
            <!--      <h3>Orders</h3>-->
            <!--   </div>-->
            <!--</div>-->
            <?
               foreach($order_id_array as $key=> $value){ ?>
            <div class="card Rectangle-242 mb-5">
               <div class="card-body">
                  <h4 class="card-title text-primary">#<?= $value; ?></h4>
                  <a  href="https://dashboard.razorpay.com/app/orders/<?= $value; ?>" style="float: right;" target="_blank"><b class="mt-4 mb-4 text-info">Go to payment page</b></a>
                  <p class="card-text mb-3" style="width:300px; font-size:14px; "><b>Delivery Address:</b> <?=  $order_data[$value][0]['address']?></p>
                    <table class="table table-striped">
                     <thead style="background: #d85604;color: white;">
                        <tr>
                           <th>Item</th>
                           <th>Details</th>
                           <th>Price</th>
                           <th>Qty</th>
                        </tr>
                     </thead>
                     <tbody style="border: 1px solid #e3e2e2;">
                        <?php 
                           $total=0;
                           foreach($order_data[$value] as $key=> $items){ 
                               $total += $items[$table_name]['price'];
                           //  pr($items);
                           ?>
                        <tr>
                            <td style="width:200px;">
                               <center>
                                    
                                     <div style="border:0px solid black; ">
                                         <model-viewer camera-controls alt="Model" src="<?=  $items[$table_name]['glb_model']; ?>" style="height:100px;">
                                         </model-viewer>
                                      </div>
                                    <b> <?= $items[$table_name]['name']; ?></b> 
                               </center>
                            </td>
                         
                        
                           <td><?= $items[$table_name]['description']; ?></td>
                           <td><?= $items[$table_name]['price']; ?> <small>INR</small></td>
                           <td><?= $items['qty']; ?></td>
                        </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <div class="text-info mt-2">
                     <p style="text-align: end;margin: 15px;" class="text-info" >Item Total: <b id="totalAmount" style="color:black;"><?= $total ?> INR</b></p>
                     <p style="text-align: end;margin: 15px;" class="text-info">Tax: <b style="color:black;">0 INR</b></p>
                     <p style="text-align: end;margin: 15px;" class="text-primary">Total amount: <b id="totalAmount2" style="color:black;"><?= $total ?> INR</b></p>
                  </div>
               </div>
            </div>
            <?php } ?>
           
         </section>
      </section>
   </div>
</div>

</body>
</html>