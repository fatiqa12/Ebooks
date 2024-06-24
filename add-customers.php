<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php
        include("sidebar.php");
        ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php
            include("header.php");
            ?>
            <!-- HEADER DESKTOP-->
            <?php
            /////insert-work/////
            include("connection.php");

            if (isset($_POST["submit"])) {
                $_custname = $_POST["c_name"];
                $_custphone = $_POST["c_phone"];
                $_custaddress = $_POST["c_address"];
                $_custemail = $_POST["c_mail"];
                $_custpass = $_POST["c_pass"];

                $imgPath = "uploads/imgs/customers/" . uniqid() . ".png";
                if (move_uploaded_file($_FILES["imgFile"]["tmp_name"], $imgPath)) {
                    echo  "Image uploaded successfully";
                } else {
                    echo "Image not uploaded successfully";
                }


                $insertQuery = "INSERT INTO customers(CustomerName,CustomerPhone,CustomerAddress,CustomerEmail,CustomerPassword,CustomerImg) VALUES ('$_custname','$_custphone','$_custaddress','$_custemail','$_custpass','$imgPath')";

                $isInsert = mysqli_query($conn, $insertQuery);

                if ($isInsert) {
                    echo "<script>alert('Data Inserted Successfully');
                    window.location.href ='view-customers.php';
                    </script>";
                } else {
                    echo "<script>alert('something went wrong here');</script>";
                }
            }
            /////insert-work/////

            ////Delete-work////
            if (isset($_GET['DeletedId'])) {
                $delId = $_GET['DeletedId'];
                $delQuery = "DELETE FROM customers WHERE CustomerId = $delId";
                $isDelete = mysqli_query($conn, $delQuery);
                if ($isDelete) {
                    echo "<script>alert('Record deleted successfully');
                    window.location.href = 'view-customers.php';
                    </script>";
                } else {
                    echo "<script>alert('something went wrong here');</script>";
                }
            }
            ////Delete-work////

            ////Edit-work////
            if (isset($_GET['EditedId'])) {
                $editId = $_GET['EditedId'];
                $editQuery = "SELECT * FROM customers WHERE CustomerId = $editId";
                $res = mysqli_query($conn, $editQuery);
                $row = mysqli_fetch_array($res);
            }
            ////Edit-work////
            ////Update-work/////
            if(isset($_POST['update'])) {
                $uid = $_POST['id'];
                $u_customername = $_POST['c_name'];
                $u_customerphone = $_POST['c_phone'];
                $u_customeraddress = $_POST['c_address'];
                $u_customeremail = $_POST['c_mail'];
                $u_customerpass = $_POST['c_pass'];

                $u_imgPath = "uploads/imgs/customers/" . uniqid() . ".png";
                if (move_uploaded_file($_FILES["imgFile"]["tmp_name"], $u_imgPath)) {
                    echo "Image uploaded successfully";
                } else {
                    echo "Image not uploaded successfully";
                }

                $updateQuery = "UPDATE customers SET CustomerName = '$u_customername',CustomerPhone = '$u_customerphone',CustomerAddress = '$u_customeraddress',CustomerEmail = '$u_customeremail',CustomerPassword = '$u_customerpass',CustomerImg ='$u_imgPath' WHERE CustomerId = '$uid'";
                echo $updateQuery;


                $isUpdate = mysqli_query($conn, $updateQuery);
                if($isUpdate) {
                    echo "<script>alert('Data Updated Successfully');
                    window.location.href = 'view-customers.php';
                    </script>";
                } else {
                    echo "<script>alert('Something went wrong here');</script>";
                }
            }

            ?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h1>Create Customers </h1>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card p-5 shadow">
                                    <form action="add-customers.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo @$row['CustomerId'] ?>" id="">
                                        <label for="">Customer Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" value="<?php echo @$row['CustomerName'] ?>" name="c_name">
                                        <br>
                                        <label for="">Customer Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter Number" value="<?php echo @$row['CustomerPhone'] ?>" name="c_phone">
                                        <br>
                                        <label for="">Customer Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Address" value="<?php echo @$row['CustomerAddress'] ?>" name="c_address">
                                        <br>
                                        <label for="">Customer Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Email" value="<?php echo @$row['CustomerEmail'] ?>" name="c_mail">
                                        <br>
                                        <label for="">Customer Password</label>
                                        <input type="text" class="form-control" placeholder="Enter Password" value="<?php echo @$row['CustomerPassword'] ?>" name="c_pass">
                                        <br>
                                        <label for="">Customer Img</label>



                                        <!---img-work---->
                                        <img src="" id="imgId" width="100" alt="">
                                        <input type="file" name="imgFile" id="imgFile" class="form-control">
                                        <!---img work --->
                                </div>
                                <div class="card-footer">
                                    <?php
                                    if (isset($_GET['EditedId'])) {
                                    ?>
                                        <button type="submit" name="update" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update Data
                                        </button>

                                    <?php
                                    } else {
                                    ?>
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit Data
                                        </button>
                                    <?php
                                    }
                                    ?>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
<script type="text/javascript">
    document.getElementById('imgFile').onchange = function(evt) {
        var tgt = evt.target || window.event.srcElement,
            files = tgt.files;

        // FileReader support
        if (FileReader && files && files.length) {
            var fr = new FileReader();
            fr.onload = function() {
                document.getElementById('imgId').src = fr.result;
            }
            fr.readAsDataURL(files[0]);
        }

        // Not supported
        else {
            // fallback -- perhaps submit the input to an iframe and temporarily store
            // them on the server until the user's session ends.
        }
    }
</script>

</html>
<!-- end document-->