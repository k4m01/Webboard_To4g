<?php
    session_start();
    
    $title = $_POST['topic'];
    $comment =$_POST['comment'];
    $category = $_POST['category'];
    $user_id = $_SESSION['user_id'];

    $conn = new PDO("mysql:host=localhost;dbname=webborad;charset=utf8","root","");
    
        $sql = "INSERT INTO post (title,content,post_date,cat_id,user_id) 
                 VALUES ('$title','$comment',NOW(),'$category','$user_id')";
        $conn->exec($sql);
        
    
    $conn=null;

    header("location:index.php");
    die();
?>