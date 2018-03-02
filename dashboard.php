<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="images/logo-pcu.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/dashboard-styles.css" rel="stylesheet">
        <!-- Morris Chart CSS -->
    <link href="css/morris.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="images/logo-pcu.png" name="logo" height="50" width="50" style="float: left; margin: 5px 0px;">
      <a class="navbar-brand" href="#">&nbsp Faculty Attendance Ledger</a>
    </div>
  </div>
</nav>
<div class="navbar-default sidebar">
    <div class="sidebar-nav navbar-collapse" id="sidebar">
    <ul class="nav in">
        <br>

        <li class="divider"></li>
        <li><a href="#"><span class="fa fa-user"></span> &nbspProfile</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-list"></i>&nbsp Registration Form</a></li>
        <li class="divider"></li>
        <li class="dropdown"><a href="attendance.php"><i class="fa fa-wpforms"></i>&nbsp Attendance Log Sheet</a></li>
        <li class="divider"></li>
        <li class="dropdown"><a href="#"><i class="fa fa-sitemap"></i>&nbsp Room Slots</a></li>
    </ul>
    </div>
</div>

<div class="dash_page">
  <div class="col-lg-10">
    <h2 style="padding: 20px 0 9px 0;">Welcome Admin!</h2>
    <hr style="margin-left: -25px;">

<div class="row">
  <div class="container">

    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-bar-chart-o fa-fw"></i> Bar Graph
          <div class="pull-right">
        </div>
      </div>
      <div class="panel-body" style="display: none;">
          <div id="morris-area-chart"></div>
      </div>
      <div class="panel-body">
          <div class="col-lg-4">
              <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Amount</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>3326</td>
                              <td>10/21/2013</td>
                              <td>3:29 PM</td>
                              <td>$321.33</td>
                          </tr>
                          <tr>
                              <td>3325</td>
                              <td>10/21/2013</td>
                              <td>3:20 PM</td>
                              <td>$234.34</td>
                          </tr>
                          <tr>
                              <td>3324</td>
                              <td>10/21/2013</td>
                              <td>3:03 PM</td>
                              <td>$724.17</td>
                          </tr>
                          <tr>
                              <td>3323</td>
                              <td>10/21/2013</td>
                              <td>3:00 PM</td>
                              <td>$23.71</td>
                          </tr>
                          <tr>
                              <td>3322</td>
                              <td>10/21/2013</td>
                              <td>2:49 PM</td>
                              <td>$8345.23</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="col-lg-8">
              <div id="morris-bar-chart"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="panel panel-default">
          <div class="panel-heading">
              <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
          </div>
          <div class="panel-body">
              <center>
                <div id="morris-donut-chart"></div>
                <a href="#" class="btn btn-default btn-block">View Details</a>
            </center>
          </div>
      </div>
    </div>

  </div>
</div>

</div>

</div>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/raphael.min.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

</body>
</html>