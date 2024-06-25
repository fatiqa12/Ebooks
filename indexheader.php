
<div class="col-md-3">
    <div class="right-element">
        <div class="row mx-0 px-0">
            <div class="col-md-6">
                <li class="nav-item dropdown" style="list-style-type: none;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span> <img src="<?php echo $_SESSION['sessionImg'] ?>" height="25px" width="25px" alt="User Image" /></span>
                    </a>
                    <ul style="width: 300px;" class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo $_SESSION['sessionImg'] ?>" height="100px" width="100px" alt="User Image" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a style="text-decoration: none;" class="js-acc-btn" href="#"><?php echo $_SESSION['sessionName'] ?></a>
                                        </h5>
                                        <span class="email"><?php echo $_SESSION['sessionEmail'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <form action="login.php" method="POST">
                                    <input type="hidden" name="logout" value="logout">
                                    <a class="btn btn-danger btn-block" style="width: 300px; margin-top: 35px; height: 18%;" href="logout.php">Logout</a>
                                    <!-- <button style="width: 300px; margin-top: 35px; height: 18%;" >
															<i class="zmdi zmdi-power"></i> 
														</button> -->
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </div>
            <div class="col-md-6">



                <div class="action-menu">

                    <div class="search-bar">
                        <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                            <i class="icon icon-search"></i>
                        </a>
                        <form role="search" method="get" class="search-box">
                            <input class="search-field text search-input" placeholder="Search" type="search">
                        </form>
                    </div>
                </div>
            </div>
        </div>




    </div><!--top-right-->
</div>