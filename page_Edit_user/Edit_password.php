<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js">
    <link rel="icon" href="../photo/logo.png">
    <title>Hello people</title>
</head>

<body style="background-color: whitesmoke;">
    <?php
    include("../item_header/header_user.php")
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1" style="height: 10px;"></div>
        </div>
        <div class="row">
            <div class="col md-4"></div>
            <div class="col">
                <div align="center">
                    <img src="../photo/logo.png" alt="" style="width: 100px;">
                </div>
                <div class="shadow p-3 mb-5 rounded bg-white">
                    <div class="card-body">
                        <div class="card-body">
                            <!-- Error -->
                        </div>
                        <div class="card-body">
                            <form action="" method="get">
                                <div class="form-group">

                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="รหัสผ่านเก่า" required>

                                </div>
                                <br>
                                <div class="form-group">

                                    <input type="password" class="form-control" name="" id="" aria-describedby="helpId" placeholder="รหัสผ่านใหม่" required>

                                </div>
                                <br>
                                <div align="center">
                                    <input type="submit" class="btn btn-primary shadow" value="ตกลง" onclick="return confirm('คุณแน่ใจที่จะทำการเปลี่ยนรหัสผ่านหรือไม่')">
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>