<?php
include '../../config/query.php';




$get_data = select('shop_meta_products',[
            'conditions'=>array(
                            "id"=>$_GET['id'],
                        )
                        ]);
                        
    $item_remain = $get_data[0]['qty'];
    
    $data=array(
        "data"=>array(
            "qty"=>$item_remain-1,
        ),
    );
$update_data=update('shop_meta_products',$data,$_GET['id']);
    
// ret