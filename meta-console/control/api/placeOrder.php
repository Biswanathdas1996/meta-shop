<?php

include '../../db/query.php';

 if($_POST){
    $data=array(
        "data"=>array(
                "db_name"=>$_POST['db_name'],
                "product_id"=>$_POST['product_id'],
                "qty"=>$_POST['qty'],
                "address"=>$_POST['address'],
                "status"=>0
            )
        );
    $insert_data = insert('meta_shop_orders',$data);
    
    $getData = select('meta_shop_orders',[
            "conditions"=>[
                "id"=>$insert_data
                ]
        ]);
    echo json_encode($getData[0]);

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=UTF-8');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Max-Age: 3600');
    header(
        'Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With'
    );
 } 