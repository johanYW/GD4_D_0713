<?php

    function valid_email($email){
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    if(isset($_POST['register'])){
        include('../db.php');

        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];  
        $membership = $_POST['membership'];
        
        $cek = mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE phonenum='$phonenum' or email='$email'"));
        if($cek>0){
            echo 
            '<script>
            alert("Maaf email atau phone number sudah digunakan"); 
            window.location = "../index.php"
            </script>';


        }else{
            mysqli_query($con,"INSERT INTO users(email, password, name, phonenum, membership)
            VALUES
            ('$email', '$password', '$name', '$phonenum', '$membership')")
                or die(mysqli_error($con));
            echo
            '<script>
            alert("Register Success"); 
            window.location = "../index.php"
            </script>';
        }

    }else{
        echo
        '<script>
        
        window.history.back()
        </script>';
    }

    ?>