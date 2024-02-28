<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
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

    <div class="container">
        <h1 style="text-align: center;">Webboard KakKak</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card border-info">
                    <div class="card-header bg-primary text-white">ตั้งกระทู้ใหม่</div>
                </div>
            </div>
        </div>
    </div>


    <?php
        echo "ผู้ใช้ : " .  $_SESSION['username'] . "<br>" ;
        echo "<form>
                 <table>
                    <tr><td>เข้าสู่ระบบ: </td>
                    <td>
                    <select>
                        <option value=all>--ทั้งหมด--</option>
                        <option value=general>เรื่องทั่วไป</option>
                        <option value=study>ร้องเรียน</option>
                    </select>
                    </td>
                </tr>
                <tr><td>หัวข้อ: </td><td><input type=text></td></tr>
                <tr><td>เนื้อหา: </td><td><textarea name = text rows= 2 cols= 30></textarea></td></tr>
                <tr><td></td><td><input type = submit value = บันทึกข้อความ></td></tr>
        </table>
        </form>";
        
    ?>
</body>
</html>