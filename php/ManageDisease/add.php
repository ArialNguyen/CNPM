<?php
    include("../Connection.php");
    session_start();
    if(isset($_SESSION["admin"])){
        
        $path_Folder_Uploads = "../../Uploads/";
        $file_path = $path_Folder_Uploads .  $_FILES["fileUpload"]["name"];
        $imageFileType = pathinfo($file_path, PATHINFO_EXTENSION);
        if($imageFileType != "jpg" && $imageFileType != "png"){
            echo "System only accept img and png file!";
            exit();
        }
        if(file_exists($file_path)){
            echo "Already Exitst file here!";
            exit();
        }
        $id = $_POST["str_id"];
        $name = $_POST["name"];
        $describe = $_POST["describe"];
        if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $file_path)){  
            $file_path_db = "Uploads/" . $_FILES["fileUpload"]["name"];
            if($conn -> query("INSERT INTO benh(tenBenh,moTa,listCayThuoc,image) values('$name','$describe','$id','$file_path_db')") === TRUE){
                echo "Add Items Success";
                exit(); 
            }
            echo "Something Error! Please send us an error let we check that";
        }else{
            echo "Error when upload image";
        }
    }
    else if (isset($_SESSION["userName"])){
        echo "You not allow to access this file! Because you're a user";
    }
    else{
        echo "You not allow to access this file! Because you not login!";
    }
