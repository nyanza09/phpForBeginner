<?php
    $first_name = $_POST['fname'];
    $first_name = str_replace(" ","",$first_name);
    $last_name = $_POST['lname'];
    $last_name = str_replace(" ","",$last_name);

    if( isset($_POST['submit']) ){
        if( empty($first_name) ){
            header("location: ../welcome/index.php?error=first&fmessage=first name is empty");
            exit();
        }elseif(empty($last_name)){
            header("location: ../welcome/index.php?error=second&smessage=second name is empty");
            exit();
        }
        else{
            echo "kajaza";
        }
    }else{
        header("location: ../welcome/index.php");
        exit();
    }
?>