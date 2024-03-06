<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

<div class="container-lg">
    <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
    <?php 
        include "nav.php"
    ?> 
    <div class="row mt-4">
        
        <div class="col-lg-3 col-md-2 col-sm-1"></div>  
        <div class="col-lg-6 col-md-8 col-sm-10">

                <?php 
                 
                 $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                 $sql = "SELECT post.title,post.content,post.post_date,user.login 
                 FROM post INNER JOIN  user on 
                 (post.user=user.id) where post.id=$_GET[id]";
                 $result=$conn->query($sql);

                 while($row=$result->fetch()){
                    echo "<div class='card border-primary mt-3'>";
                    echo "<div class='card-header bg-primary text-white'>$row[0]</div>";
                    echo "<div class='card-body'>$row[1]<br><br>$row[3] - $row[2]</div>";
                    echo "</div>";
                 }

            
                 ?>

                <?php 
                 
                 $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                 $sql = "SELECT comment.content,comment.post_date,comment.user_id,comment.post_id,user.login  
                 FROM comment INNER JOIN  user on 
                 (comment.user_id=user.id) where comment.post_id=$_GET[id]";
                 $result=$conn->query($sql);
                 $i = 1;
                 while($row=$result->fetch()){
                    echo "<div class='card border-info mt-3'>";
                    echo "<div class='card-header bg-info text-white'>ความคิดเห็นที่ $i </div>";
                    echo "<div class='card-body'>$row[0]<br><br>$row[4] - $row[1]</div>";
                    echo "</div>";
                    $i++;
                 }
                 $conn = null;
            
                 ?>
            <?php if(isset($_SESSION['id'])){ ?>
                
            <div class="card border-success mt-3">
            <div class="card-header bg-success text-white">
                แสดงความคิดเห็น
            </div>
            <div class="card-body">
                <form action="post_save.php" method="post">
                    
                    <input type="hidden" name="post_id" 
                    value="<?= $_GET['id'];?>">
                    
                    <div class="row mb-3 justify-content-center">
                        <div class="col-lg-10">
                            <textarea name="comment" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-sm text-white">
                                <i class="bi bi-box-arrow-up-right"></i> ส่งข้อความ
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm ms-2">
                                <i class="bi bi-x-square"></i> ยกเลิก
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            </div>
            <?php } ?>

            <div class="col-lg-3 col-md-3 col-sm-1"></div>
        </div>
    </div>
</div>


        <!-- <h1 style="text-align: center;">Webboard KakKak</h1>
        <hr>
        <div style="text-align: center;">ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']?><br>
        <?php 
            $i = $_GET['id'];
            if ($i % 2 == 0){
                echo "เป็นกระทู้หมายเลขคู่";
            }else{
                echo "เป็นกระทู้หมายเลขคี่";
            }
            
        ?>
         </div>
        <table style="border: 2px solid black; width: 40%;" align="center">
            <tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
            <tr><td align="center"><textarea name ="text" rows="10" cols=" 60"></textarea></td></tr>
            <tr><td align="center" ><input type="submit" value="ส่งข้อความ" ></td></tr>
        </table>
        <p style="text-align: center;"><a href="index.php"> กลับไปหน้าหลัก </a></p> -->

        
</body>
</html>