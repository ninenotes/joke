<?php
session_start();
// require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body class="sb-nav-fixed">
    <?php include 'index.php'; ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_content" style="background-color:#ececec;">

            <div class="container-fluid px-4" style="background-color:#dfdfdf;">
                <h1 class="mt-4">สมัครสมาชิก</h1>
                <!-- login -->

                <div style="margin-top:80px;"></div>
                <div class="container marketing" style="width:70%;">

                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"  >
                            <h3 class="text-center font-weight-light my-4" border-radius:15px;>สมัครสมาชิก</h3>
                        </div>
                        <div class="card-body">
                            <form action="signup_db.php" method="post">
                                <?php if (isset($_SESSION['error'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        ?>
                                    </div>
                                <?php  } ?>
                                <?php if (isset($_SESSION['success'])) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                        ?>
                                    </div>
                                <?php  } ?>
                                <?php if (isset($_SESSION['warning'])) { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?php
                                        echo $_SESSION['warning'];
                                        unset($_SESSION['warning']);
                                        ?>
                                    </div>
                                <?php  } ?>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="firstname" aria-describedby="firstname" type="text" placeholder="Enter your first name" />
                                            <label for="firstname">ชื่อผู้ใช้</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" name="lastname" aria-describedby="lastname" type="text" placeholder="Enter your last name" />
                                            <label for="lastname">นามสกุล</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="email" aria-describedby="email" type="email" placeholder="name@example.com" />
                                    <label for="email">อีเมล์</label>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="password" type="password" placeholder="Create a password" />
                                            <label for="password">รหัสผ่าน</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="c_password" type="password" placeholder="Confirm password" />
                                            <label for="c_password">ยืนยันรหัสผ่าน</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit" name="signup" class="btn btn-primary btn-block">sign up</button></div>
                                </div>
                            </form>
                            <br>
                            <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ <a href="signin.php">เข้าสู่ระบบ</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div style="margin-bottom:200px;"> </div>

</body>

</html>