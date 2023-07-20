<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="../assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Travele | Travel & Tour HTML5 template </title>
    </head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
           
            <div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li class="active-menu"><a href="dashboard.php?user_id=<?php echo $_GET['user_id']; ?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a><i class="fas fa-user"></i>Blog</a>
                            <ul>
                                <li>
                                    <a href="blog-archive.php?user_id=<?php echo $_GET['user_id']; ?>">Blog List</a>
                                </li>
                                <li>
                                    <a href="create_blog.php?user_id=<?php echo $_GET['user_id']; ?>"> Write a blog</a>
                                </li>
                                <li>
                                    <a href="blog-personal-list.html?user_id=<?php echo $_GET['user_id']; ?>">See review</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a><i class="fas fa-hotel"></i></i>Gallery</a>
                            <ul>
                                <li><a href="db-package-active.html">View Gallery</a></li>
                                <li><a href="db-package-pending.html">Add images</a></li>
                                <li><a href="db-package-expired.html">Expired</a></li>
                            </ul>   
                        </li>
                        <li><a href="db-add-package.html"><i class="fas fa-umbrella-beach"></i>Add destination</a></li>
                        <li><a href="db-booking.html"><i class="fas fa-ticket-alt"></i> Booking History</a></li>
                        <li><a href="user-edit.html"><i class="fas fa-sign-out-alt"></i> Change Profile</a></li>
                        <li><a href="db-wishlist.html"><i class="far fa-heart"></i>Enquiry</a></li>
                        <li><a href="db-comment.html"><i class="fas fa-comments"></i>Badges</a></li>        
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap">
                <div class="row">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="far fa-chart-bar"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Today Views</h4>
                                <h5>22,520</h5> 
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Earnings</h4>
                                <h5>16,520</h5> 
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Users</h4>
                                <h5>18,520</h5> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Enquiry</h4>
                                <h5>19,520</h5> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Recent Booking</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>User</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>City</th>
                                            <th>Enquiry</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox" checked="checked">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox" checked="checked">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment2.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox" checked="checked">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment3.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox" checked="checked">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment4.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox" checked="checked">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment5.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-6">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Package Enquiry</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>User</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>City</th>
                                            <th>Enquiry</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment2.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment3.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment4.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="custom-input"><input type="checkbox">
                                                <span class="custom-input-field"></span></label>
                                            </td>
                                            <td><span class="list-img"><img src="assets/images/comment5.jpg" alt=""></span>
                                            </td>
                                            <td><span class="list-enq-name">John Doe</span>
                                            </td>
                                            <td>12 may</td>
                                            <td>Japan</td>
                                            <td>
                                                <span class="badge badge-success">15</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>User Details</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Listings</th>
                                            <th>Enquiry</th>
                                            <th>Bookings</th>
                                            <th>Reviews</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">12</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">24</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark">36</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment2.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">12</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">24</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark">36</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment3.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">12</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">24</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark">36</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="list-img"><img src="assets/images/comment4.jpg" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-name">Kathy Brown</span><span class="list-enq-city">United States</span></a>
                                            </td>
                                            <td>+01 3214 6522</td>
                                            <td>chadengle@dummy.com</td>
                                            <td>Australia</td>
                                            <td>
                                                <span class="badge badge-primary">02</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">12</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">24</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark">36</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">      
                    <!-- Recent Activity -->
                    <div class="col-lg-7 col-12">
                        <div class="dashboard-box activities-box">
                            <h4>Recent Activities</h4>
                            <ul>
                                <li>
                                    <i class="far fa-calendar-alt"></i> 
                                    <small>5 mins ago</small>
                                    <h5>Jane has sent a request for access</h5>
                                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                                </li>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <small>5 mins ago</small>
                                    <h5>Williams has just joined Project X</h5>
                                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                                </li>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <small>5 mins ago</small>
                                    <h5>Williams has just joined Project X</h5>
                                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                                </li>
                                <li>
                                    <i class="far fa-calendar-alt"></i> 
                                    <small>25 mins ago</small>
                                    <h5>Kathy Brown left a review on Hotel</h5>
                                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                                </li>
                                <li>
                                   <i class="far fa-calendar-alt"></i> 
                                    <small>25 mins ago</small>
                                    <h5>Kathy Brown left a review on Hotel</h5>
                                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                                </li>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <small>5 mins ago</small>
                                    <h5>Williams has just joined Project X</h5>
                                    <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-xs-12">
                        <div class="dashboard-box report-list">
                            <h4>Reports</h4>
                            <div class="report-list-content">
                                <div class="date">
                                   <h5>Auguest 12</h5>
                                </div>
                                <div class="total-amt">
                                    <strong>$1250000</strong>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2356</td>
                                            <td>dummy text </td>
                                            <td>6,200.00</td>
                                        </tr>
                                        <tr>
                                            <td>4589</td>
                                            <td>Lorem Ipsum</td>
                                            <td>6,500.00</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>3269</td>
                                            <td>specimen book</td>
                                            <td>6,800.00</td>
                                        </tr>                                                    
                                        <tr>
                                            <td>5126</td>
                                            <td>Letraset sheets</td>
                                            <td>7,200.00</td>
                                        </tr>
                                        <tr>
                                            <td>7425</td>
                                            <td>PageMaker</td>
                                            <td>5,900.00</td>
                                        </tr>
                                        <tr>
                                            <td>7425</td>
                                            <td>PageMaker</td>
                                            <td>5,900.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- site traffic -->
                    <div class="col-lg-4">
                        <div class="dashboard-box chart-box">
                           <h4>Site Traffic</h4>
                           <div id="chartContainer" style="height: 250px; width: 100%;"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="dashboard-box chart-box">
                           <h4>Bar Chart</h4>
                           <div id="barchart" style="height: 250px; width: 100%;"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 chart-box">
                        <div class="dashboard-box">
                           <h4>Search Engine</h4>
                           <div id="piechart" style="height: 250px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
               Copyright © 2021 Travele. All rights reserveds.
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>