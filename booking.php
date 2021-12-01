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
                        <h2>Booking</h2>
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
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                        <h3>Car Washing Point</h3>
                                        <p>123 Street, New York, USA</p>
                                        <p><strong>Call:</strong>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-form">
                            <h3>Request for a car wash</h3>
                            <form action="price.php" method="post">
                                <div class="control-group">
                                  <input type="text" name="fullname" autocomplete="off" placeholder="Enter Full Name ... " class="form-control" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="tel" name="phone"  autocomplete="off" placeholder="Enter your Phone number ..." class="form-control" required="required" />
                                </div>
                                <div class="control-group">
                                  <select class="form-control" required="required">
                                    <option class="text-primary" default>Choose Car Type</option>
                                      <option class="text-danger" value="Saloon">saloon</option>
                                      <option class="text-danger" value="4X4">4X4</option>
                                      <option class="text-danger" value="Heavy Duty">heavy duty</option>
                                      <option class="text-danger" value="Pick Up">pick up</option>
                                  </select>
                                </div>
                                <div class="control-group">
                                  <input type="text" name="username" placeholder="Enter username ..." autocomplete="off" class="form-control" required="required" />
                                </div>
                                <div class="control-group">
                                  <input type="password" name="password" placeholder="Enter password ..." class="form-control" required="required" />
                                </div>
                                <div class="control-group">
                                    <button class="btn btn-custom" type="submit">Send Request</button>
                                </div>
                                <hr class="text-center"> OR <hr>
                                <div class="control-group">
                                    <button type="reset" class="btn btn-custom">Reset Button</button>
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
