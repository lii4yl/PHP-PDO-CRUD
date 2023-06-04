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
    if (isset($_GET['id'])) {
        //รับค่าจากฟอร์ม index.php
        $id = $_GET['id'];

        // ลบออกจากฐานข้อมุล
        $id = $_GET['id'];
        $stmt = $conn->prepare('DELETE FROM tbl_product WHERE id=:id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    ?>
        <?php if ($stmt->rowCount() == 1) { ?>
            <script>
                setTimeout(function() {
                    swal({
                        title: "ลบหนังสือสำเร็จ",
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
                        title: "ลบหนังสือไม่สำเร็จ",
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