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
    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['author']) && isset($_POST['price'])) {
        //รับค่าจากฟอร์ม form-edit.php
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        // บันทึกลงฐานข้อมุล
        $stmt = $conn->prepare("UPDATE tbl_product SET title=:title, author=:author, price=:price, image=:image WHERE id=:id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':author', $author, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->execute();
    ?>
        <?php if ($stmt->rowCount() >= 0) { ?>
            <script>
                setTimeout(function() {
                    swal({
                        title: "แก้ไขหนังสือสำเร็จ",
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
                        title: "แก้ไขหนังสือไม่สำเร็จ",
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