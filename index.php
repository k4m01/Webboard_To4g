<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <form action="post.php" method="GET">
        หมวดหมู่:
        <select>
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">ร้องเรียน</option>
        </select>
        <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
        <?php 

            $n ;
            
            for ($j = 1; $j <= 10; $j++){
                
                echo  "<a href= post.php?id=$j ><li>กระทู้ที่ $j </li></a>"  ;
                
            }
            ?>
        
        
    </form>
</body>
</html>