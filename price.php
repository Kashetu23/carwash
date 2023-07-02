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
                        <h2>Washing Plan</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span>GH₵</span><strong>25</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>30 mins for washing</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Engine Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">s
                                <a class="btn btn-custom" href="booking.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span>GH₵</span><strong>35</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>45 mins for washing</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Engine Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="booking.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span>GH₵</span><strong>49</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>1 hour for washing</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Engine Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="booking.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->


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
                        <h2>Washing Plan</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span>GH₵</span><strong>25</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>30 mins for washing</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Engine Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span>GH₵</span><strong>35</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>45 mins for washing</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Engine Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span>GH₵</span><strong>49</strong><span>.00</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>1 hour for washing</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Engine Washing</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->


        <!-- Footer Start -->
        <?php include 'parts/footer.php'; ?>

        <!-- Footer End -->

        <!-- Back to top button -->
        <?php include 'parts/script.php'; ?>

    </body>
</html>
>>>>>>> 63d0d90d5a8d2110eaa8d6a19d436081d3b4cfaa
