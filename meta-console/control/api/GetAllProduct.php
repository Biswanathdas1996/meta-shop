<?php
include '../../db/query.php';
        $table= $_GET['table'];
       $get_data = select($table,[
               'conditions'=>array(
                               "status"=>0,
                           ),
                             'join' =>array(
                               'shop_meta_products_loocation'=>'location_id',
                           ),
           ]);



echo json_encode($get_data);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Max-Age: 3600');
header(
    'Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With'
);