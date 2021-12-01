<!DOCTYPE html>
<html lang="en-UK">



<body>

    <div id="wrapper">

        <!-- Navigation -->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Enter your Details in the form
                        </div>
                      </br>
                        <div class="panel-body">
                             <div class="row">
                                 <div class="col-lg-6">
                                   <form>
                                     <label>Full Name :</label>
                                     <input type="text" name="fullname" autocomplete="off" placeholder="Enter Full Name ... " class="form-control">
                                     <p class="help-block"></p>

                                     <label>Phone :</label>
                                     <input type="tel" name="phone"  autocomplete="off" placeholder="Enter your Phone number ..."class="form-control">
                                     <p class="help-block"></p>


                                   <div class="form-group">
                                         <label>Car:</label>
                                         <select class="form-control">
                                             <option value="Saloon">saloon</option>
                                             <option value="4X4">4X4</option>
                                             <option value="Heavy Duty">heavy duty</option>
                                             <option value="Pick Up">pick up</option>


                                         </select>

                                     </div>
                                      <p class="help-block"></p>

                                     <label>Username :</label>
                                     <input type="text" name="username" placeholder="Enter username ..." autocomplete="off" class="form-control">
                                     <p class="help-block"></p>


                                     <label>Password :</label>
                                     <input type="password" name="password" placeholder="Enter password ..." class="form-control">
                                     <p class="help-block"></p>
                                   </br>
                                 </br>
                                     <a button type="submit"class="btn btn-custom" href="price.html"</button>Submit</a>
                                     <button type="reset" class="btn btn-warning">Reset Button</button>
                                   </form>
                                 </div>
                             </div>

                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
