<<<<<<< HEAD
<<<<<<< HEAD
<?php
    // Import DB class from DB.php
    require_once('includes/DB.php');

    // Import SMS class from SMS.php
    require_once('includes/SMS.php');

    // Create a new instance of the DB class
    $db = new DB();

    // Get the user id from the session
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

    // Get the user's data from the database
        $user = $db->getUser($user_id);
    } else {
        $user_id = 0;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'parts/head.php'; ?>
    <body>
        <!-- Top Bar Start -->
        <?php include 'parts/topbar.php'; ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php include 'parts/navbar.php'; ?>

        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car washing and detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
A car wash or auto wash is a facility used to clean the exterior and, in some cases, the interior of motor vehicles. Car washes can be self-service, full-service, or fully automated and Auto detailing is an activity that keeps the vehicle in its best possible condition, especially cosmetic, as opposed to mechanical. This is achieved by removing both visible and invisible contaminants from the vehicle's interior, and polishing the exterior to its original blemish-free finish.                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Engine washing</li>
                            </ul>
                            <a class="btn btn-custom" href="https://cobblestone.com/everything-know-auto-detailing/"target="
                            ">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Facts Start -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
          <?php include 'parts/footer.php'; ?>
        <!-- Footer End -->

        <!-- Back to top button -->
        <?php include 'parts/script.php'; ?>

    </body>
</html>
=======
=======
>>>>>>> 63d0d90d5a8d2110eaa8d6a19d436081d3b4cfaa
<?php
    // Import DB class from DB.php
    require_once('includes/DB.php');

    // Import SMS class from SMS.php
    require_once('includes/SMS.php');

    // Create a new instance of the DB class
    $db = new DB();

    // Get the user id from the session
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

    // Get the user's data from the database
        $user = $db->getUser($user_id);
    } else {
        $user_id = 0;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'parts/head.php'; ?>
    <body>
        <!-- Top Bar Start -->
        <?php include 'parts/topbar.php'; ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php include 'parts/navbar.php'; ?>

        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Us</p>
                            <h2>car washing and detailing</h2>
                        </div>
                        <div class="about-content">
                            <p>
A car wash or auto wash is a facility used to clean the exterior and, in some cases, the interior of motor vehicles. Car washes can be self-service, full-service, or fully automated and Auto detailing is an activity that keeps the vehicle in its best possible condition, especially cosmetic, as opposed to mechanical. This is achieved by removing both visible and invisible contaminants from the vehicle's interior, and polishing the exterior to its original blemish-free finish.                            </p>
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                                <li><i class="far fa-check-circle"></i>Engine washing</li>
                            </ul>
                            <a class="btn btn-custom" href="https://cobblestone.com/everything-know-auto-detailing/"target="
                            ">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Facts Start -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
          <?php include 'parts/footer.php'; ?>
        <!-- Footer End -->

        <!-- Back to top button -->
        <?php include 'parts/script.php'; ?>

    </body>
</html>
>>>>>>> 63d0d90d5a8d2110eaa8d6a19d436081d3b4cfaa
