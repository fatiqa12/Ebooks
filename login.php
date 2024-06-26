<?php
    session_start();
    if(isset($_SESSION['sessionEmail']))
    {
        header("Location:index.php");
        
    }
    else{
        
    }
    
?>

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
    <title>Login</title>

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


<?php

    include("connection.php");
    if (isset($_POST['login'])) {
        $uemail = $_POST['email'];   
        $upass = $_POST['pass'];
        
        @$loginQueryCustomer = "SELECT * FROM signup WHERE UserEmail = '$uemail' AND UserPass = '$upass' AND account_type = 'customer'";
        @$loginQueryAdmin = "SELECT * FROM signup WHERE UserEmail = '$uemail' AND UserPass = '$upass' AND account_type = 'admin'";
        @$resCustomer = mysqli_query($conn,$loginQueryCustomer);
        @$resAdmin = mysqli_query($conn,$loginQueryAdmin);
        if(mysqli_num_rows($resCustomer) > 0){
                $row = mysqli_fetch_array($resCustomer);
                $_SESSION['sessionEmail'] = $uemail;
                $_SESSION['sessionName'] = $row['UserName'];
                $_SESSION['sessionImg'] = $row['UserImg'];
                header("Location:index.php");
        }
        elseif(mysqli_num_rows($resAdmin) > 0){
            $row = mysqli_fetch_array($resAdmin);
            $_SESSION['sessionEmail'] = $uemail;
            $_SESSION['sessionName'] = $row['UserName'];
            $_SESSION['sessionImg'] = $row['UserImg'];
            header("Location:home.php");
        }
        else{
            echo "Email and password are incorrect";

        }
    }

    ////////cookie work
    if(isset($_COOKIE['cookieEmail']) && isset($_COOKIE['cookiePass'])) {
        // $email = $_COOKIE['cookieEmail'];
        // $pass = $_COOKIE['cookiePass'];

        // $loginQueryCustomer = "SELECT * FROM signup WHERE UserEmail = '$email' AND UserPass = '$pass' AND account_type = 'customer'";
        // $loginQueryAdmin = "SELECT * FROM signup WHERE UserEmail = '$email' AND UserPass = '$pass' AND account_type = 'admin'";
        // $resCusotmer = mysqli_query($conn,$loginQueryCustomer);
        // $resAdmin = mysqli_query($conn,$loginQueryAdmin);
        // var_dump($resCusotmer);
        // if(){
        //     $row = mysqli_fetch_array($res);
        //     if($row) {
        //         $_SESSION['sessionEmail'] = $email;
    
        //         setcookie("cookieEmail",$row['UserEmail'], time() + 120);
        //         setcookie("cookiePass",$row['UserPass'], time() + 120);
                
    
        //         header("Location:index.php");
        //     }
        // }
        // elseif(){
        //     $row = mysqli_fetch_array($res);
        //     if($row) {
        //         $_SESSION['sessionEmail'] = $email;
    
        //         setcookie("cookieEmail",$row['UserEmail'], time() + 120);
        //         setcookie("cookiePass",$row['UserPass'], time() + 120);
                
    
        //         header("Location:home.php");
        //     }
        // }
        // else{
        //     echo "Email or pass is incorrect";
        // }
    }

?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="pass" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">Login</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="./registers.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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