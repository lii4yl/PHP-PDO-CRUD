<!DOCTYPE html>
<html lang="en">
<!-- เชื่อมต่อฐานข้อมูล -->
<?php require_once('service/connect.php') ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #F5F8FF;
        }
    </style>
</head>

<body>
    <div class="flex-container">
        <div class="container">
            <div class="shadow rounded p-5 bg-body h-100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="pb-4">Bookstore</h1>
                    </div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                รายการหนังสือพร้อมจำหน่าย
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="pages/form-add.php" class="btn btn-info">+เพิ่มหนังสือ</a>
                                </h5>

                                <table class="table table-striped  table-hover table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="5%">ลำดับ</th>
                                            <th width="auto">ชื่อหนังสือ</th>
                                            <th width="auto">ผู้เขียน</th>
                                            <th width="auto">ราคา</th>
                                            <th width="auto">หน้าปก</th>
                                            <th width="auto">แก้ไข</th>
                                            <th width="auto">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // นำข้อมูลมาแสดงในตาราง
                                        $stmt = $conn->prepare("SELECT * FROM tbl_product");
                                        $stmt->execute();
                                        $result = $stmt->fetchAll();
                                        foreach ($result as $k) {
                                        ?>
                                            <tr>
                                                <td><?= $k['id']; ?></td>
                                                <td><?= $k['title']; ?></td>
                                                <td><?= $k['author']; ?></td>
                                                <td><?= number_format($k['price'], 2); ?></td>
                                                <td><img src="<?= $k['image']; ?>" alt="<?= $k['title']; ?>" class="rounded mx-auto d-block" width=145 hight=186></td>

                                                <td><a href="pages/form-edit.php?id=<?= $k['id']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                                <td><a href="service/delete/delete.php?id=<?= $k['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบหนังสือเล่มนี้');">ลบ</a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="fw-bolder text-secondary text-center">
                <a href="https://github.com/lii4yl/PHP-PDO-CRUD.git">SOURCE CODE : Github</a> <span class="text-danger fs-3" style="vertical-align: sub;">♥️</span></a>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>