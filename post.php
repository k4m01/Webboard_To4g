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
        <p style="text-align: center;"><a href="index.php"> กลับไปหน้าหลัก </a></p>

        
</body>
</html>