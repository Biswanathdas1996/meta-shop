<?php
session_start();
include("../db/connection.php");
include("../db/query.php");
$user_data = $_SESSION["user"];


    

if(!isset($_SERVER["PHP_AUTH_USER"])){
    header("www-Authenticate: Basic realm=\"Provet Area\"");
    header("HTTP/1.0 401 Unauthorized");
    print("Sorry, You need proper details");
    exit;
}else{      
        if(($_SERVER["PHP_AUTH_USER"]=='admin') && ($_SERVER["PHP_AUTH_PW"]== '11111')){
            unset($_SERVER["PHP_AUTH_USER"]);
            unset($_SERVER["PHP_AUTH_PW"]);
            
            
                if(isset($_POST["blank_name"])){
                    
        // ---------------- clone index
                        $file = 'src/prototype/sample/index.php';
                        $newpage = $_POST["blank_name"];
                        
                        
                        $table_name = $newpage."_meta_product_table";
                        $sql = "CREATE TABLE $table_name(
                                    id INT(2) AUTO_INCREMENT PRIMARY KEY,
                                    name VARCHAR(355) NULL,
                                    price INT(11) NULL,
                                    description VARCHAR(355) NULL,
                                    img VARCHAR(355) NULL,
                                    qty INT(11) NULL,
                                    rack INT(11) NULL,
                                    glb_model VARCHAR(355) NULL,
                                    tag VARCHAR(355) NULL,
                                    scale VARCHAR(355) NULL,
                                    rotation VARCHAR(355) NULL,
                                    location_id INT(11) NULL,
                                    status INT
                                        (11) NULL
                                )";
                                    
                            if ($conn->query($sql) === TRUE) {
                                // echo "Table employees created successfully";
                            } else {
                                echo "Error creating table: " . $conn->error;
                            }
                        
                        
                        if(mkdir("pages/".$newpage)){
                            
                            if (!copy($file, "pages/".$newpage."/index.php")) {
                                echo "failed to copy";
                            }
                        }
                        $r="table_name";
                        $s="$";
                        $tablen=$table_name;
                        $data="<?php ".$s.$r."='".$tablen."';?>";
                        
                        $actual_link_put="pages/".$newpage."/index.php";
                        $fp2 = fopen($actual_link_put, 'a+') or die("can't open file");
                            $theOldData2 = fread($fp2, filesize($actual_link_put));
                            fclose($fp2);
                            $fp2 = fopen($actual_link_put, 'w+') or die("can't open file");
                            $toBeWriteToFile2 = $data.$theOldData2;
                            fwrite($fp2, $toBeWriteToFile2);
                            fclose($fp2);
                        $dirs = array_filter(glob('*'), 'is_dir');


                        // ------------------------copy add new product-------------------------------
                        
                        $file = 'src/prototype/sample/add.php';
                        if (!copy($file, "pages/".$newpage."/add.php")) {
                                echo "failed to copy";
                        }
                        
                        $actual_link_put_add_page="pages/".$newpage."/add.php";
                        
                            $fp = fopen($actual_link_put_add_page, 'a+') or die("can't open file");
                            $theOldData = fread($fp, filesize($actual_link_put_add_page));
                            fclose($fp);
                            $fp = fopen($actual_link_put_add_page, 'w+') or die("can't open file");
                            $toBeWriteToFile = $data.$theOldData;
                            fwrite($fp, $toBeWriteToFile);
                            fclose($fp);
                        
                        $dirs = array_filter(glob('*'), 'is_dir');
                        
                        // -----------------------------------------------------------
                        // ------------------------copy List of all products-------------------------------
                        
                        $file_list = 'src/prototype/sample/list.php';
                        if (!copy($file_list, "pages/".$newpage."/list.php")) {
                                echo "failed to copy";
                        }
                        $actual_link_put_list_page="pages/".$newpage."/list.php";
                        
                            $fp3 = fopen($actual_link_put_list_page, 'a+') or die("can't open file");
                            $theOldData3 = fread($fp3, filesize($actual_link_put_list_page));
                            fclose($fp3);
                            $fp3 = fopen($actual_link_put_list_page, "wb") or die("can't open file");
                            $toBeWriteToFile3 = $data.$theOldData3;
                            fwrite($fp3, $toBeWriteToFile3);
                            fclose($fp3);
                        
                        $dirs = array_filter(glob('*'), 'is_dir');
                        
                        // -----------------------------------------------------------
                        // ------------------------copy Edit products-------------------------------
                        
                        $file_edit = 'src/prototype/sample/edit.php';
                        if (!copy($file_edit, "pages/".$newpage."/edit.php")) {
                                echo "failed to copy";
                        }
                        $actual_link_put_edit_page="pages/".$newpage."/edit.php";
                        
                            $fp4 = fopen($actual_link_put_edit_page, 'a+') or die("can't open file");
                            $theOldData4 = fread($fp4, filesize($actual_link_put_edit_page));
                            fclose($fp4);
                            $fp4 = fopen($actual_link_put_edit_page, "wb") or die("can't open file");
                            $toBeWriteToFile4 = $data.$theOldData4;
                            fwrite($fp4, $toBeWriteToFile4);
                            fclose($fp4);
                        
                        $dirs = array_filter(glob('*'), 'is_dir');
                        
                        // -----------------------------------------------------------
                        // ------------------------copy Delete products-------------------------------
                        
                        $file_delete = 'src/prototype/sample/delete.php';
                        if (!copy($file_delete, "pages/".$newpage."/delete.php")) {
                                echo "failed to copy";
                        }
                        $actual_link_put_delete_page="pages/".$newpage."/delete.php";
                        
                            $fp5 = fopen($actual_link_put_delete_page, 'a+') or die("can't open file");
                            $theOldData5 = fread($fp5, filesize($actual_link_put_delete_page));
                            fclose($fp5);
                            $fp5 = fopen($actual_link_put_delete_page, "wb") or die("can't open file");
                            $toBeWriteToFile5 = $data.$theOldData5;
                            fwrite($fp5, $toBeWriteToFile5);
                            fclose($fp5);
                        
                        $dirs = array_filter(glob('*'), 'is_dir');
                        
                        // -----------------------------------------------------------
                        // ------------------------copy Orders flie-------------------------------
                        
                        $file_orders = 'src/prototype/sample/orders.php';
                        if (!copy($file_orders, "pages/".$newpage."/orders.php")) {
                                echo "failed to copy";
                        }
                        $actual_link_put_order_page="pages/".$newpage."/orders.php";
                        
                            $fp6 = fopen($actual_link_put_order_page, 'a+') or die("can't open file");
                            $theOldData6 = fread($fp6, filesize($actual_link_put_order_page));
                            fclose($fp6);
                            $fp6 = fopen($actual_link_put_order_page, "wb") or die("can't open file");
                            $toBeWriteToFile6 = $data.$theOldData6;
                            fwrite($fp6, $toBeWriteToFile6);
                            fclose($fp6);
                        
                        $dirs = array_filter(glob('*'), 'is_dir');
                        
                        // -----------------------------------------------------------
                        
                    
                        
                        /////-----------inser shop data ------
                        $insert_shop_data = insert('meta_shop_lists',[
                            "data"=>[
                                    "name"=>$_POST["blank_name"],
                                    "link"=>'https://'.$_SERVER['HTTP_HOST']."/meta-console/control/pages/".$newpage,
                                    "user_id"=>$user_data[0]['id'] ,
                                    "shop"=> $_POST['shop_env_model'],
                                    "shop_env_model"=> 'https://'.$_SERVER['HTTP_HOST']."/meta-console/control/common_models/".$_POST['shop_env_model'],
                                    "rack"=> 'https://'.$_SERVER['HTTP_HOST']."/meta-console/control/".$_POST['rack'],
                                    "stand_qty"=> $_POST['stand_qty'],
                                    "is_ice_cream_stall"=> $_POST['is_ice_cream_stall'],
                                ]
                            ]);
                        
                        echo "control/pages/".$newpage;
                    
                    
                    
                }
                

        }else{
            header("www-Authenticate: Basic realm=\"Provet Area\"");
            header("HTTP/1.0 401 Unauthorized");
            print("Sorry, You need proper details");
            exit;
        }        
}            

?>