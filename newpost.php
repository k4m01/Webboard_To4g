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
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>

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