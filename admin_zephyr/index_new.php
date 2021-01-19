<?php
include "linc.php";
if (!isset($_SESSION['a']))
 {
  header('Location: adminlogin.php');
 }
 
									
		$q="select v from view where id=1;";
		$r=mysqli_query($mysqli,$q);
		while($row = mysqli_fetch_assoc($r)) 
		{
			$t=$row['v'];
		}

		$regq = "SELECT * FROM participants;";
		$regr=mysqli_query($mysqli,$regq);
		$treg = mysqli_num_rows($regr);

		$pq="select * from participation;";
		$pr=mysqli_query($mysqli,$pq);
		$pn=mysqli_num_rows($pr);

		$tpq="select distinct(t_id) from t_participation;";
		$tpr=mysqli_query($mysqli,$tpq);
		$tpn=mysqli_num_rows($tpr);

		$teq="select * from events;";
		$ter=mysqli_query($mysqli,$teq);
		$ten=mysqli_num_rows($ter);
		$targetevent=20;
		$perevents=($ten/$targetevent)*100;
		
		$tvq="select * from volunteers;";
		$tvr=mysqli_query($mysqli,$tvq);
		$tvn=mysqli_num_rows($tvr);
		$targetvolunteers=50;
		$pervol=($tvn/$targetvolunteers)*100;

		$tsq="select * from sponsor;";
		$tsr=mysqli_query($mysqli,$tsq);
		$tsn=mysqli_num_rows($tsr);
		$targetsponsor=10;
		$perspo=($tsn/$targetsponsor)*100;

		$taq="select sum(Amount) as s from sponsor;";
		$tar=mysqli_query($mysqli,$taq);
		while($row = mysqli_fetch_assoc($tar)) 
		{
			$tan=$row['s'];
		}
		$targetamount=50000;
		$peramount=($tan/$targetamount)*100;
		
									  
									

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Index Page | Zephyr Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/zephyr-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index_new.php"><img class="main-logo" src="img/zephyr-img.jpg" height = 300 width = 100 alt="Go to index page" /></a>
                <strong><a href="index_new.php"><img  src="img/zephyr-img.jpg" height = 300 width = 100 alt="Go to index page"/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        
						<li>
                         <a href= "query_box.php"  aria-expanded="false"><span class="educate-icon educate-pages icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Query Box</span></a>
						 
                        </li>
						
                        <li>
                         <a class = "has-arrow"  title="Landing Page" href="google-calendar.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>							
							<ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Events" href="all-Events.php"><span class="mini-sub-pro">All Events</span></a></li>
                                <li><a title="Add Event" href="add-Event.php"><span class="mini-sub-pro">Add Event</span></a></li>
                                <li><a title="Edit Event" href="edit-Eventform.php"><span class="mini-sub-pro">Edit Event</span></a></li>
                                <li><a title="Delete Event" href="delete-details.php"><span class="mini-sub-pro">Delete Event</span></a></li>
                            </ul>
                        </li>
					
                        <li>
                            <a class="has-arrow" href="all-Managers.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Managers</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Managers" href="all-Managers.php" ><span class="mini-sub-pro">All Managers</span></a></li>
                                <li><a title="Add Manager" href="take-Manager-info.php"><span class="mini-sub-pro">Add Manager</span></a></li>
                                <li><a title="Edit Managers" href="edit-Managers.php"><span class="mini-sub-pro">Edit Manager</span></a></li>
								<li><a title="Delete Manager" href="delete-details.php" <span class="mini-sub-pro">Delete Manager</span></a></li>
                            </ul>
                            
                        </li>
                        <li>
                            <a class="has-arrow" href="all-Participants.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Participants</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Participants" href="all-Participants.php"><span class="mini-sub-pro">All Participants</span></a></li>
								<li><a title="Participants Required Details" href="Participants-req-details.php"><span class="mini-sub-pro"> Participants <br>Required Details </span></a></li>
                                <li><a title="Delete Participant" href="delete-details.php"> <span class="mini-sub-pro">Delete Participant </span></a></li>
                            </ul>
                        </li>
						
						<li>
                            <a class="has-arrow" href="all-Volunteers.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Volunteers</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Volunteers" href="all-Volunteers.php"><span class="mini-sub-pro">All Volunteers</span></a></li>
                                <li><a title="Add Volunteers" href="take-Volunteer-info.php"><span class="mini-sub-pro">Add Volunteer</span></a></li>
                                <li><a title="Edit Volunteers" href="edit-Volunteersform.php"><span class="mini-sub-pro">Edit Volunteer</span></a></li>
								<li><a title="Delete Volunteer" href="delete-details.php" > <span class="mini-sub-pro">Delete Volunteer</span></a></li>
                            </ul>
                        </li>
                        <li>
						
						
						<li>
                            <a class="has-arrow" href="all-Sponsors.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Sponsors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Sponsors" href="all-Sponsors.php"><span class="mini-sub-pro">All Sponsors</span></a></li>
                                <li><a title="Add Sponsors" href="take-Sponsor-info.php"><span class="mini-sub-pro">Add Sponsor</span></a></li>
                                <li><a title="Edit Sponsors" href="edit-Sponsorsform.php"><span class="mini-sub-pro">Edit Sponsors</span></a></li>
								<li><a title="Delete Sponsor" href="delete-details.php"> <span class="mini-sub-pro">Delete Sponsor</span></a></li>
                            </ul>
                        </li>
                        <li>
						
						
						<li>
                            <a class="has-arrow" href="all-Chief_Guests.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Chief Guests</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Chief-Guests" href="all-Chief_Guests.php"><span class="mini-sub-pro">All Chief-Guests</span></a></li>
                                <li><a title="Add Chief-Guests" href="take-Chief_Guest-info.php"><span class="mini-sub-pro">Add Chief-Guest</span></a></li>
                                <li><a title="Edit Chief-Guests" href="edit-Chief_Guests.php"><span class="mini-sub-pro">Edit Chief-Guests</span></a></li>
								<li><a title="Delete Chief-Guest" href="delete-details.php"><span class="mini-sub-pro">Delete Chief-Guest</span></a></li>
                            </ul>
                        </li>
					
						
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
                            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                                <li><a title="Google Map" href="google-map.php"><span class="mini-sub-pro">Google Map</span></a></li>
                                <li><a title="Pdf Viewer" href="pdf-viewer.php"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                            </ul>
                        </li>
                        
                        <li id="removable">
                            <a href="adminlogout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non"> Logout </span></a>   <!-- Logout Page -->
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
	
	
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index_new.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
											<!-- To collapse left menu -->
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
											</button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<!--Welcome area ends here -->	
		
		<!-- Shows navigation path -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index_new.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">...</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Ends navigation path -->	
		<!-- Middle area  -->	
        <div id="work-area">
			<div class="analytics-sparkle-area" >
				<div  class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="analytics-sparkle-line reso-mg-b-20">
								<div class="analytics-content">
									<h5>Events</h5>
									<h2><span class="counter"><?php echo $ten ?></span> <span class="tuition-fees">Target:20 events</span></h2>
									<span class="text-success"><?php echo $perevents ?>%</span>
									<div class="progress m-b-0">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perevents ?>%;"> <span class="sr-only"></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="analytics-sparkle-line reso-mg-b-30">
								<div class="analytics-content">
									<h5>Volunteers</h5>
									<h2><span class="counter"><?php echo $tvn ?></span> <span class="tuition-fees">Target:50 Volunteers<br></span></h2>
									<span class="text-danger"><?php echo $pervol ?>%</span>
									<div class="progress m-b-0">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pervol ?>%;"> <span class="sr-only"></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
								<div class="analytics-content">
									<h5>Sponsors</h5>
									<h2><span class="counter"><?php echo $tsn;?></span> <span class="tuition-fees">Target:10 Sponsors</span></h2>
									<span class="text-info"><?php echo $perspo;?>%</span>
									<div class="progress m-b-0">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perspo;?>%;"> <span class="sr-only"></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
								<div class="analytics-content">
									<h5>Amount sponsered</h5>
									<h2> ₹<span class="counter"><?php echo $tan;?></span> <span class="tuition-fees">Target amount:₹50000</span></h2>
									<span class="text-inverse"><?php echo $peramount;?>%</span>
									<div class="progress m-b-0">
										<div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $peramount;?>%;"> <span class="sr-only"></span> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="product-sales-area mg-tb-30">
				<div class="container-fluid">
					<div class="row">
						
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
								<h3 class="box-title">Total Registrations</h3>
								<ul class="list-inline two-part-sp">
									<li>
										<div id="sparklinedash"></div>
									</li>
									<li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success"><?php echo $treg;?></span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
								<h3 class="box-title">Zephyr Page Views</h3>

								<ul class="list-inline two-part-sp">
									<li>
										<div id="sparklinedash2"></div>
									</li>
									<li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple"><?php echo $t; ?></span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
								<h3 class="box-title">Total participation</h3>
								<ul class="list-inline two-part-sp">
									<li>
										<div id="sparklinedash3"></div>
									</li>
									<li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info"><?php echo $pn; ?></span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="white-box analytics-info-cs table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
								<h3 class="box-title">Total team particpation</h3>
								<ul class="list-inline two-part-sp">
									<li>
										<div id="sparklinedash4"></div>
									</li>
									<li class="text-right graph-four-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info"><?php echo $tpn; ?></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="traffic-analysis-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="social-media-edu">
								<i class="fa fa-facebook"></i>
								<div class="social-edu-ctn">
									<h3>50k Likes</h3>
									<p>You main list growing</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
								<i class="fa fa-twitter"></i>
								<div class="social-edu-ctn">
									<h3>30k followers</h3>
									<p>You main list growing</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
								<i class="fa fa-linkedin"></i>
								<div class="social-edu-ctn">
									<h3>7k Connections</h3>
									<p>You main list growing</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
								<i class="fa fa-youtube"></i>
								<div class="social-edu-ctn">
									<h3>50k Subscribers</h3>
									<p>You main list growing</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="product-sales-area mg-tb-30">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
							<div class="product-sales-chart">
								<div class="portlet-title">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="caption pro-sl-hd">
												<span class="caption-subject"><b>Adminsion Statistic</b></span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="actions graph-rp actions-graph-rp">
												<a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="Refresh">
														<i class="fa fa-reply" aria-hidden="true"></i>
													</a>
												<a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="Delete">
														<i class="fa fa-trash-o" aria-hidden="true"></i>
													</a>
											</div>
										</div>
									</div>
								</div>
								<ul class="list-inline cus-product-sl-rp">
									<li>
										<h5><i class="fa fa-circle" style="color: #006DF0;"></i>Python</h5>
									</li>
									<li>
										<h5><i class="fa fa-circle" style="color: #933EC5;"></i>PHP</h5>
									</li>
									<li>
										<h5><i class="fa fa-circle" style="color: #65b12d;"></i>Java</h5>
									</li>
								</ul>
								<div id="morris-area-chart"></div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="analysis-progrebar res-mg-t-30 mg-ub-10 res-mg-b-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
								<div class="analysis-progrebar-content">
									<h5>Usage</h5>
									<h2 class="storage-right"><span class="counter">90</span>%</h2>
									<div class="progress progress-mini ug-1">
										<div style="width: 68%;" class="progress-bar"></div>
									</div>
									<div class="m-t-sm small">
										<p>Server down since 1:32 pm.</p>
									</div>
								</div>
							</div>
							<div class="analysis-progrebar reso-mg-b-30 res-mg-b-30 mg-ub-10 tb-sm-res-d-n dk-res-t-d-n">
								<div class="analysis-progrebar-content">
									<h5>Memory</h5>
									<h2 class="storage-right"><span class="counter">70</span>%</h2>
									<div class="progress progress-mini ug-2">
										<div style="width: 78%;" class="progress-bar"></div>
									</div>
									<div class="m-t-sm small">
										<p>Server down since 12:32 pm.</p>
									</div>
								</div>
							</div>
							<div class="analysis-progrebar reso-mg-b-30 res-mg-b-30 res-mg-t-30 mg-ub-10 tb-sm-res-d-n dk-res-t-d-n">
								<div class="analysis-progrebar-content">
									<h5>Data</h5>
									<h2 class="storage-right"><span class="counter">50</span>%</h2>
									<div class="progress progress-mini ug-3">
										<div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
									</div>
									<div class="m-t-sm small">
										<p>Server down since 8:32 pm.</p>
									</div>
								</div>
							</div>
							<div class="analysis-progrebar res-mg-t-30 table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
								<div class="analysis-progrebar-content">
									<h5>Space</h5>
									<h2 class="storage-right"><span class="counter">40</span>%</h2>
									<div class="progress progress-mini ug-4">
										<div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
									</div>
									<div class="m-t-sm small">
										<p>Server down since 5:32 pm.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>	
			
       
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    
</body>

</html>