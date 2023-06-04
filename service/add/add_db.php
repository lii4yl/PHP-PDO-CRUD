<!DOCTYPE html>
<html lang="en">
<!-- เชื่อมต่อฐานข้อมูล -->
<?php require_once('../connect.php') ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <!-- sweet alert js & css -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>
    <?php
    //ถ้ามีค่าส่งมาจากฟอร์ม
    if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['price'])) {
        //รับค่าจากฟอร์ม form-add.php
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $image = 'https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png';
        // This file is licensed under the Creative Commons Attribution-Share Alike 4.0 International license.
        // https://commons.wikimedia.org/wiki/File:Image_not_available.png

        // บันทึกลงฐานข้อมุล
        $stmt = $conn->prepare("INSERT INTO tbl_product (title, author, price, image)
    VALUES (:title, :author, :price, :image)");
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':author', $author, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);

        $result = $stmt->execute();
    ?>
        <?php if ($result) { ?>
            <script>
                setTimeout(function() {
                    swal({
                        title: "เพิ่มหนังสือสำเร็จ",
                        text: "ระบบกำลังพาไปหน้าแรก",
                        type: "success",
                        timer: 3000,
                        showConfirmButton: false
                    }, function() {
                        window.location.href = "../../";
                    });
                });
            </script>
        <?php  } else { ?>
            <script>
                setTimeout(function() {
                    swal({
                        title: "เพิ่มหนังสือไม่สำเร็จ",
                        text: "ระบบกำลังพาไปหน้าแรก",
                        type: "danger",
                        timer: 3000,
                        showConfirmButton: false
                    }, function() {
                        window.location.href = "../../";
                    });
                });
            </script>
    <?php
        }
        $conn = null;
    }
    ?>
</body>

</html>