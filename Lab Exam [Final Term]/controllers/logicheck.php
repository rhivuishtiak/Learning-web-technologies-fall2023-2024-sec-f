<?php 
require_once '../models/usermodel.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $rememberme = isset($_REQUEST['rememberme']);

        if($username == "" && $password == "") {
            
            header('location: ../views/login.php');
        }
        else{

                 $status = auth($username, $password);
                if($status)
                {
        

                    if ($rememberme) {
                        
                        setcookie('flag', 'Rhivu', time()+86400*30, '/');
                    }
                    else{
                       
                        setcookie('flag', 'Rhivu', time()+300, '/');
                    }
    
                  
                    if (trim($_SESSION['role'])=="admin")
                    {
                        header('location: ../views/admindashboard.php');
                    }
                    else if (trim($_SESSION['role'])=="vendor")
                    {
                        
                        header('location: ../views/vendordashboard.php');
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        header('location: ../views/customerdashboard.php');
                    }
                    else if (trim($_SESSION['role'])=="deliveryman")
                    {
                        header('location: ../views/deliverymandashboard.php');
                    }
                }
                else{
                    header('location: ../views/login.php?msg=error');
                }
    }
}
    else{
        echo "invalid request...";
    }
?>