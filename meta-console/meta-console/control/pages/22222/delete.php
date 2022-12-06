<?php $table_name='22222_meta_product_table';?><?php
 include("../../src/config/includes.php"); echo Layout::APILayout();
    
    $product_id = $_GET['id'];
    
    $delete_data=delete( $table_name,array(
        "id"=>$product_id
    ));
    
    
    header("Location: list.php");
    die();
    