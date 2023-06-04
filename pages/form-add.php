<!DOCTYPE html>
<html lang="en">
<!-- เชื่อมต่อฐานข้อมูล -->
<?php require_once('../service/connect.php') ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- sweet alert js & css -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
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
                                เพิ่มหนังสือ
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    รายละเอียดหนังสือ
                                </h5>

                                <form action="../service/add/add_db.php" method="post">
                                    <div class="mb-1">
                                        <label for="title" class="col-sm-3 col-form-label"> ชื่อหนังสือ : </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="title" name="title" class="form-control" placeholder="ชื่อหนังสือ" required>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label for="author" class="col-sm-3 col-form-label"> ผู้เขียน : </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="author" name="author" class="form-control" placeholder="ผู้เขียน" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="col-sm-3 col-form-label"> ราคา : </label>
                                        <div class="col-sm-10">
                                            <input type="number" step="any" id="price" name="price" class="form-control" placeholder="ราคา" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">คลิกเพื่อบันทึก</button>
                                    <a href="../" class="btn btn-warning">กลับหน้าแรก</a>
                                </form>
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