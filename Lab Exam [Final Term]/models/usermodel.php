<?php
    require_once "db.php";

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into user values('{$user['username']}','{$user['password']}','{$user['role']}', '{$user['name']}','{$user['email']}',{$user['status']})";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);

        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
    
                       $_SESSION['username']= $row['username'];
                       $_SESSION['password']= $row['password'];
                       $_SESSION['role']= $row['role'];
                       $_SESSION['name']= $row['name'];
                       $_SESSION['email']= $row['email'];
                       $_SESSION['status'] = $row['status'];
            }
            return true;
        }else{
            return false;
        }
    }

    function addproduct ($product){
        $con = getConnection();
        $sql = "insert into product values('{$product['name']}', '{$product['price']}', '{$product['details']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
?>