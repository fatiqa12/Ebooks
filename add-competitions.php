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
            ////////////////insert work////////////////
            include("connection.php");

            if(isset($_POST["submit"])) {
                $comp_type = $_POST["ctype"];
                $comp_strttime = $_POST["c-starttime"];
                $comp_endtime = $_POST["c-endtime"];
                $comp_date = $_POST["c-date"];


                $insertQuery = "INSERT INTO competitions (CompetitionType,CompetitonStartTime,CompetitonEndTime,CompetitionDate) VALUES ('$comp_type',  '$comp_strttime','$comp_endtime','$comp_date')";

                $isInsert = mysqli_query($conn, $insertQuery);

                if($isInsert) {
                    echo "<script>
                            alert('Data Inserted Successfully');    
                            window.location.href = 'view-competitions.php';
                            </script>";
                } else {
                    echo "<script>alert('Something went wrong here');</script>";
                }
            }
            ////////////////insert work////////////////
            ////////////////Delete work////////////////
            if (isset($_GET['DeletedId'])) {
                $delId = $_GET['DeletedId'];
                $delQuery = "DELETE FROM competitions WHERE CompetitionId = $delId";
                $isDelete = mysqli_query($conn, $delQuery);
                if ($isDelete) {
                    echo "<script>alert('Record Deleted successfully');
                        window.location.href = 'view-competitions.php';
                        </script>";
                } else {
                    echo "<script>alert('Something went wrong here');</script>";
                }
            }
            ////////////////Delete work////////////////
            ////////////////Edit work////////////////
            if (isset($_GET['EditedId'])) {
                $editId = $_GET['EditedId'];
                $editQuery = "SELECT * FROM competitions WHERE CompetitionId = $editId";
                $res = mysqli_query($conn, $editQuery);
                $row = mysqli_fetch_array($res);
            }
            ////////////////Edit work////////////////
            ////////////////Update work////////////////
            if (isset($_POST['update'])) {
                $uid = $_POST['Id'];
                $c_type = $_POST["ctype"];
                $c_strttime = $_POST["c-starttime"];
                $c_endtime = $_POST["c-endtime"];
                $c_date = $_POST["c-date"];


                $updateQuery = "UPDATE competitions SET CompetitionType = '$c_type', CompetitonStartTime =' $c_strttime' ,CompetitonEndTime = '$c_endtime', 	CompetitionDate ='$c_date' WHERE CompetitionId = '$uid' ";

                $isUpdate = mysqli_query($conn, $updateQuery);
                if ($isUpdate) {
                    echo "<script>
                            alert('Data Updated Successfully');
                            window.location.href = 'view-competitions.php';
                            </script>";
                } else {
                    echo "<script>alert('Something went wrong here');</script>";
                }
            }
            ////////////////Update work////////////////

            ?>



            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Competition Data</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="add-competitions.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                            <input type="hidden" name="Id" value="<?php echo @$row['CompetitionId'] ?>" Id="">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Competition Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="ctype" placeholder=" Competition Type" value="<?php echo @$row['CompetitionType'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Competition Start Time</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" id="text-input" name="c-starttime" placeholder=" Competition  Start Time" value="<?php echo @$row['CompetitionStartTime'] ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Competition End Time</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" id="text-input" name="c-endtime" placeholder=" Competition End Time" value="<?php echo @$row['CompetitionEndTime'] ?>" class="form-control">
                                                </div>
                                                </div>
                                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Competition Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="text-input" name="c-date" placeholder=" Competition Date" value="<?php echo @$row['CompetitionDate'] ?>" class="form-control">
                                                </div>
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

</html>
<!-- end document-->