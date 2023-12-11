<?php 
require_once "../models/usermodel.php";
    session_start();
    if(isset($_REQUEST['submit'])){

     
        $name = $_REQUEST['name']; 
        $price = $_REQUEST['price']; 
        $details = $_REQUEST['details'];
        $status = 'False';

       

        if($name == "" || $price == "" ||$details == "") {
            echo "Null value ..";
            
        }
        else{


        $product = ['name'=> $name, 'price'=> $price, 'details' => $details, 'status' => $status];
        $status = addproduct($product);
        if($status){
            header('location: ../views/home.php');
        }else{
            echo "DB error, try again";
        }
    }
}
    else{
        echo "invalid request...";
    }
?>