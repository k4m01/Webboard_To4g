<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        include "nav.php";
    ?>

    <div class="row mt-4">
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-8 col-10">

            <?php if(isset($_SESSION['error'])){
                echo"<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                unset($_SESSION['error']);
                }
            ?>
            
            

            <div class="card bg-light text-dark">
                <div class="card-header">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="verify.php" method="POST">
                        <div class="form-group">
                            <label for="login" class="form-label">Login:</label> 
                            <input type="login" name="login" id="login" class="form-control">
                        </div>
                        <div class="form-group  mt-2">
                            <label for="password" class="form-label">Password:</label> 
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" >
                                <span class="input-group-text" onclick="password_Show_Hide()">
                                    <i class="bi bi-eye-fill" id="show-pwd"></i>
                                    <i class="bi bi-eye-slash-fill d-none " id="clos_pwd"></i>
                                </span>
                            </div>
                           
                        </div>
                        <div class=" mt-3" align="center">
                            
                            <button type="submit" class="btn btn-secondary btn-sm me-2" >Login</button>
                            <button type="reset" class="btn btn-danger btn-sm"  >Reset</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        <div class="mt-4"><p style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p></div>
    </div>
</div>

<script>
    function password_Show_Hide(){
        let x = document.getElementById("password");
        let show = document.getElementById("show-pwd");
        let close = document.getElementById("clos_pwd");
        close.classList.remove("d-none");

        if(x.type === "password"){
            x.type="text";
            show.style.display="none";
            close.style.display="block";
        }else{
            x.type="password";
            show.style.display="block";
            close.style.display="none";
        }
        
    }
</script>
</body>
</html>