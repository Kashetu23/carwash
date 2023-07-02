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
                        <h2>Service</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Our Washing Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                            <p>Exterior will be washed with microfiber mitts and dried with microfiber towels to ensure a scratch-free surface. It includes removal of tar/bug-/road grime, detailing of tires, tire rims/wheel wells, cleaning of windows, mirrors, gas cap, and door jambs.
</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                            <p>Full interior entail deep cleaning every portion of your vehicle's inside components. Not only do we wash and vacuum, but we also use professional methods that remove stains and ingrained grime, whether on seats, carpeting or leather upholstery.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <p>Clean the carpet with a vacuum cleaner to remove any dirt.Use the vacuum cleaner to suck up crumbs from the carpet and seats.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Engine Washing</h3>
                            <p>Dirty oil can cause car engine components to wear down quickly and reduce your vehicle's fuel economy. If you discover that your engine oil appears thick, you're likely dealing with dirty oil</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                            <p>It visibly reduces spots and streaks for a stunning shine. The concentrated, wet shine formula will not strip or dull waxed surfaces, but safely lifts dirt, grime and residue to leave your vehicle with a high gloss finish.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                            <p>   We use chemicals in the engine oil to break down sludge or carbon deposits from old oil. ... A small amount of oil is removed from the engine and then the non-solvent flush additive chemical is added, then the vehicle is idled for 5-10 minutes without being driven.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Brake Reparing</h3>
                            <p>Brake parts that are worn out (typically, brake pads and rotors) need to be replaced with new parts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpeg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Jedidiah Sokpoli</h3>
                            <h4>TV Presenter</h4>
                            <p>
                              BEST CAR WASH IN TOWN!!!

                              EXCELLENT SERVICE AT AN AWESOME PRICE....TRY IT AND YOU WILL BE BACK...GUARANTEED.....                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpeg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Joshua Ngmertey</h3>
                            <h4>Software Engineer</h4>
                            <p>
                              I love this car wash! The service is awesome....they always do a great job cleaning my wheels (which I am kind of picky about)....TRY IT YOU WILL NOT REGRET IT...

                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpeg" alt="Image">
                        <div class="testimonial-text">
                            <h3>Obeng Nana  Addo</h3>
                            <h4>Software Developer And Graphic Designer</h4>
                            <p>
                              I have been washing my car at Streets car wash for a few months now and I’ve never had any problems. Every time I go, all the employees are very nice and car comes out even nice. I highly recommend this carwash :)

                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-4.jpeg" alt="Image">
                        <div class="testimonial-text">
                            <h3>William Oppong</h3>
                            <h4>Body Builder</h4>
                            <p>
                                Love their service; They do an Excellent all the time. Best Car wash in Greater Accra!!! I recommend

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
<?php include 'parts/footer.php'; ?>
        <!-- Footer End -->

        <!-- Back to top button -->
        <?php include 'parts/script.php'; ?>

    </body>
</html>
