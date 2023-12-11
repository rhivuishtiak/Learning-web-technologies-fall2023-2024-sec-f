<?php 
require_once "../models/usermodel.php";
    session_start();
    if(isset($_REQUEST['submit'])){

     
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $role = $_REQUEST['role'];
        $confirmpassword= $_REQUEST['confirmpassword'];
        $status = 'False';

       

        if($username == "" || $password == "" ||empty($name)|| $email == "" ||empty($role)) {
            echo "Null value ..";
            
        }
        else{


        $user = ['username'=> $username, 'password'=> $password, 'role' => $role, 'email'=> $email, 'name'=> $name, 'status' => $status];
        $status = addUser($user);
        if($status){
            header('location: ../views/login.php');
        }else{
            echo "DB error, try again";
        }
    }
}
    else{
        echo "invalid request...";
    }
?>