<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }

    $login = $_POST['login'];
    $pwd = $_POST['password'];
    $conn = new PDO("mysql:host=localhost;dbname=webborad;charset=utf8","root","");
    $sql ="SELECT * FROM user where login='$login' and password=sha1('$pwd')";
    $result = $conn->query($sql);
    if($result->rowCount()==1){
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['username'] = $data['login'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['id'] = session_id();
        header("location:index.php");
        die();
    }else{
        $_SESSION['error'] = "error";
        header("location:login.php");
        die();
    }
    $conn=null;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <div style="text-align: center;">
            <?php

                $login = $_POST['login'];
                $pwd = $_POST['password'];

                    if ( $login == 'admin' && $pwd == 'ad1234'){
                        $_SESSION["username"] = "admin";
                        $_SESSION["role"] = "a";
                        $_SESSION["id"] = "session_id()";
                        header("location:index.php");
                        die();
                        //echo "ยินดีต้อนรับคุณ Admin";
                    }elseif ( $login == 'member' && $pwd == 'mem1234'){
                        $_SESSION["username"] = "member";
                        $_SESSION["role"] = "m";
                        $_SESSION["id"] = "session_id()";
                        header("location:index.php");
                        die();
                        //echo "ยินดีต้อนรับคุณ Member";
                    }else{
                        $_SESSION['error'] = 'error';
                        header("location:login.php");
                        die();
                    }

                    
                ?>
             <!-- <br>
             <a href="index.php"> กลับไปหน้าหลัก </a>
                  
            </div>
        <br> -->

        
</body>
</html>