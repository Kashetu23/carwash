<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.php">
                    <h1>Streets<span>Wash</span></h1>
                        <!-- <img src="img/logo.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Opening Hour</h3>
                                <p>Mon - Sat,8:00am - 8:00pm</p>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['user_id'])){ ?>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Welcome</h3>
                                    <p> <?= $user['name']; ?> </p>
                                </div>
                            </div>
                        </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="ml-auto">
                                <a class="btn btn-custom" href="logout.php"> Logout</a>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>

                    <div class="col-auto">
                        <div class="top-bar-item">
                          <div class="ml-auto">
                            <a class="btn btn-custom" href="register.php"> Register</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="top-bar-item">
                            <div class="ml-auto">
                                <a class="btn btn-custom" href="login.php">SIGN IN</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
