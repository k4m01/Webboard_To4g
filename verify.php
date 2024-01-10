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
        <div style="text-align: center;">
            <?php

                $login = $_POST['login'];
                $pwd = $_POST['password'];

                    if ( $login == 'admin' && $pwd == 'ad1234'){
                        echo "ยินดีต้อนรับคุณ Admin";
                    }elseif ( $login == 'member' && $pwd == 'mem1234'){
                        echo "ยินดีต้อนรับคุณ Member";
                    }else{
                        echo "ชื่อบัญชีและรหัสผ่านไม่ถูกต้อง" ;
                    }

                    
                ?>
             <br>
             <a href="index.php"> กลับไปหน้าหลัก </a>
                  
            </div>
        <br>

        
</body>
</html>