<?php 
    include_once "model/config.php";
    session_start();
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    if(isset($_POST['act'])){
        $act=$_POST['act'];
    }
    switch ($act){
        case "": 
            if(!isset($_SESSION['user'])){
                $viewname = "login.php";
                require "view/layout.php";
            }else{
                $viewname = "product.php";
                require "view/layout.php";
            }
            
        break;
        case "login": 
            if(isset($_POST['login'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];   
                foreach($dbh->query('SELECT * from user') as $row) {
                    if($user == $row['username'] and $pass == $row['password']){
                        if(isset($_POST['remember'])){
                            $_SESSION['user'] = $row['name'];
                            $message = "Hello ".$_SESSION['user'];
                        }
                        $viewname = "product.php";
                    }else{
                        $loginErr = "Account or password is incorrect";
                        $viewname="login.php";
                    }
                }     
            }
            require "view/layout.php";
        break;
        case "logout": 
            session_destroy();
            $viewname = "login.php";
            require "view/layout.php";
        break;
        case "add-new": 
            $viewname = "new.php";
            require "view/layout.php";
        break;
        case "add": 
            if(isset($_POST['add'])){
                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];

                //upfile
                $file_uploaded = $_FILES['product_image'];
                $product_image = basename($_FILES['product_image']['name']);
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES['product_image']['name']);
                move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);
            }
            $dbh->query("insert into product (product_name,product_price,product_image) values ('$product_name','$product_price','$product_image')");
            $message = "Added !";
            $viewname = "product.php";
            require "view/layout.php";
        break;
        case "delete": 
            $id = $_GET['id'];
            $dbh->query("delete from product where product_id='$id'");
            $message = "Deleted !";
            $viewname = "product.php";
            require "view/layout.php";
        break;
        case "editForm":
            $id = $_GET['id'];
            $viewname = "edit.php";
            require "view/layout.php";
        break;
        case "edit":
            if(isset($_POST['edit'])){
                $product_id = $_POST['product_id'];
                $product_name = $_POST['Eproduct_name'];
                $product_price = $_POST['Eproduct_price'];
                //upload
                
                $file_uploaded = $_FILES['Eproduct_image'];
                $product_image = basename($_FILES['Eproduct_image']['name']);
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES['Eproduct_image']['name']);
                move_uploaded_file($_FILES["Eproduct_image"]["tmp_name"], $target_file);
                
                $dbh->query("UPDATE product set product_name='$product_name', product_price='$product_price', product_image='$product_image' where product_id=$product_id");
                $message = "Edited !";
            }
            $viewname = "product.php";  
            require "view/layout.php";
        break;
    }
    
?>