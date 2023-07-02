<<<<<<< HEAD

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
<html lang="en-US">
    <?php include 'parts/head.php'; ?>
<!-- head -->
    <body>
        <!-- Top Bar Start -->
    <?php include 'parts/topbar.php'; ?>
        <!-- Top Bar End -->

<!-- Nav Bar Start -->
<?php include 'parts/navbar.php'; ?>

        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                            </p>
                            <a class="btn btn-custom" href="about.php">Explore More</a>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Quality service for you</h1>
                            <p>
                            </p>
                            <a class="btn btn-custom" href="about.php">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->

        <!-- Blog End -->
       <?php include 'team.php'; ?>

        <!-- Footer Start -->
        <?php include 'parts/footer.php'; ?>
        <!-- Footer End -->



        <!-- Back to top button -->

          <?php include 'parts/script.php'; ?>
    </body>

</html>
=======
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
<html lang="en-US">
    <?php include 'parts/head.php'; ?>
<!-- head -->
    <body>
        <!-- Top Bar Start -->
    <?php include 'parts/topbar.php'; ?>
        <!-- Top Bar End -->

<!-- Nav Bar Start -->
<?php include 'parts/navbar.php'; ?>

        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                            <p>
                            </p>
                            <a class="btn btn-custom" href="about.php">Explore More</a>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Quality service for you</h1>
                            <p>
                            </p>
                            <a class="btn btn-custom" href="about.php">Explore More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                            <p>
                            </p>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->

        <!-- Blog End -->
       <?php include 'team.php'; ?>

        <!-- Footer Start -->
        <?php include 'parts/footer.php'; ?>
        <!-- Footer End -->



        <!-- Back to top button -->

          <?php include 'parts/script.php'; ?>
    </body>

</html>
>>>>>>> 63d0d90d5a8d2110eaa8d6a19d436081d3b4cfaa
