<?php
include '../../db/query.php';


$table= $_GET['table'];

$get_data = select($table,[
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
$update_data=update($table,$data,$_GET['id']);
    

$sample_address= "Godrej Genesis
Unit No. 1604 (16th Floor) & Unit Nos. 1701, 1702 (17th Floor)
Plot No X1, Block EP & GP, Sector-V, Salt Lake City
Kolkata – 700 091, West Bengal";

function generate_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0C2f ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
    );

}



$order_data=array(
        "data"=>array(
                "order_id"=>$_GET['order_id'],
                "db_name"=>$table,
                "product_id"=>$_GET['id'],
                "qty"=>1,
                "address"=>$sample_address,
                "status"=>0
            )
        );
    $insert_data = insert('meta_shop_orders',$order_data);
    
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