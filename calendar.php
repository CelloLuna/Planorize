<?php
include_once "headerLayout.php";
?>

                <!-- Begin Page Content -->

                <div class="container-fluid">
                <?php include('tobbar.php');?>
                    <div class="row">
                        <div class="container">
                            <div class="page-header">
                                <h3></h3>

                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div id="showEventCalendar"></div>
                                </div>
                                <div class="col-md-3">
                                    <h4>All Events List</h4>
                                    <ul id="eventlist" class="nav nav-list"></ul>
                                </div>
                            </div>

                        </div>
                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
                        <script type="text/javascript" src="js/calendar.js"></script>
                        <script type="text/javascript" src="js/calendar.min.js"></script>
                        <script type="text/javascript" src="js/events.js"></script>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>