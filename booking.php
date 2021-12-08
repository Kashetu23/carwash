<?php
    // Import DB class from db.php
    require_once('includes/DB.php');
    // import authetication.php to check if user is logged in
    require_once('includes/authentication.php');

    // Create a new instance of the DB class
    $db = new DB();

    // Get the user id from the session
    $user_id = $_SESSION['user_id'];

    // Get the user's data from the database
    $user = $db->getUser($user_id);

    // If form is submitted add booking to database
    if (isset($_POST['submit'])) {
        // Get the form data
        $phone = $_POST['phone'];
        $car = $_POST['car'];
        $cleaning = $_POST['cleaning'];
        $date_booked = $_POST['date'];

        // Add booking to database
        $booking = $db->addBooking($user_id, $phone, $car, $cleaning, $date_booked);
        $booking_id = $db->getLastBookingId();
        // if booking is added send sms to user
        if ($booking) {
            // Show success message in the view
            $details = "You can bring your ".$car." to any of the washing point on the ".$date_booked." for a ".$cleaning." wash.";
            $success = "Booking added successfully with booking id: B000" . $booking_id ." ". $details;
            // Send sms to user
            $message = "Hello ".$user['name'].", Your booking has been added to the system. Your booking id is: B000" . $booking_id ." ". $details;
            $sms = $db->sendSMS($phone, $message);
            // If sms is sent append to success message
            if ($sms) {
                $success .= " and sms sent to ". $phone;
            } else {
                $success .= " but sms could not be sent to ". $phone;
            }

        } else {
            // Show error message in the view
            $error = "Booking could not be added";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'parts/head.php'; ?>

    <body>
        <!-- Top Bar Start -->
      <?php include 'parts/tobar1.php'; ?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <?php include 'parts/navbar1.php'; ?>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Booking <?php if($_SESSION['user_id']){echo '- '. $user['name']; }?></h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="location-wrap">
                            <div class="location-wrap-inner">
                                <h2>Booking</h2>
                                <p>Book your car today</p>

<!--                                //show success message-->
                                <?php if (isset($success)) { ?>
                                    <div class="alert alert-success">
                                        <?php echo $success; ?>
                                    </div>
                                <?php } ?>

<!--                                //show error message-->
                                <?php if (isset($error)) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo $error; ?>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-header text-left">
                            <p>Washing Points</p>
                            <h2>Car Washing & Care Points</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>Bexhill Street,TEMA, Ghana</p>
                                        <p><strong>Call:</strong>054 156 5266</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>Airport Residential Street,Accra, Ghana</p>
                                        <p><strong>Call:</strong>054 156 5266</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>Junction Mall Street, TEMA, Ghana</p>
                                        <p><strong>Call:</strong>054 156 5266</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>Awoshie Street, Accra, Ghana</p>
                                        <p><strong>Call:</strong>054 156 5266</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Request for a car wash</h3>
                            <form action="booking.php" method="post">
                                <div class="control-group">
                                  <input type="text" name="owner" autocomplete="off" placeholder="Enter Full Name ... " class="form-control" required="required" value="<?=$user['name']?>" disabled/>
                                </div>

                                <div class="control-group">
                                    <input type="tel" name="phone"  autocomplete="off" placeholder="Enter your Phone number ..." class="form-control" required="required"  value="<?=$user['phone']?>"/>
                                </div>
                                <div class="control-group">
                                  <select class="form-control" required="required" name="car">
                                    <option class="text-primary" default>Choose Car Type</option>
                                      <option class="text-danger" value="Saloon">saloon</option>
                                      <option class="text-danger" value="4X4">4X4</option>
                                      <option class="text-danger" value="Heavy Duty">heavy duty</option>
                                      <option class="text-danger" value="Pick Up">pick up</option>
                                  </select>
                                </div>
                                <div class="control-group">
                                  <select class="form-control" required="required" name="cleaning">
                                    <option class="text-primary" default>Type of cleaning </option>
                                      <option class="text-danger" value="Basic cleaning">basic cleaning</option>
                                      <option class="text-danger" value="Premium cleaning">premium cleaning</option>
                                      <option class="text-danger" value="Standard cleaning">standard cleaning</option>
                                  </select>
                              </div>
                                <div class="control-group">
                                    <input type="date" name="date" autocomplete="off" class="form-control" required="required" />
                                </div>
                                <div class="control-group">
                                    <input class="btn btn-custom" type="submit" value="Send Request" name="submit"/>
                                </div>
                                <hr class="text-center text-white"> OR <hr>
                                <div class="control-group">
                                    <button type="reset" class="btn btn-warning" onclick="window.location.reload()">Reset Button</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Location End -->


        <!-- Footer Start -->
        <?php include 'parts/footer.php'; ?>

        <!-- Footer End -->

        <!-- Back to top button -->
        <?php include 'parts/script.php'; ?>

    </body>
</html>
