<?php
include "linc.php";
if (!isset($_SESSION['a']))
 {
  header('Location: adminlogin.php');
 }

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Participants Required details | Zephyr Admin </title>
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
	
	<style> table { background-color: lightblue;
						border-collapse: collapse;     	
						border: 1px solid gray;  }
						td { padding: 5px;} 
						tr:nth-child(odd) {  background-color: white; }
						
	</style>
	
	<!-- Below functions are used to show query box and form to delete data from relations -->
	<script> 
		function queryFunc()
		{ 
			work = document.getElementById("work-area") ;   // takes div tag's Id and changes it's innerHTML
			work.innerHTML = "<iframe src = 'query_box.html' width = '100%' height ='765' frameborder='0' allowfullscreen sandbox ><p> <a href = 'query_box.html' >Fallback link for browser </a>  </p> </iframe>"  ;
		}
		
	    function del_CG()
		{   
			work = document.getElementById("work-area") ;   // takes div tag's Id and changes it's innerHTML
			work.innerHTML = "<iframe src = 'delete-details.html' width = '100%' height ='765' frameborder='0' allowfullscreen sandbox ><p> <a href = 'delete-details.html' >Fallback link for browser </a>  </p> </iframe>"  ; 
		}
	
	</script>
	
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
                                            <li><span class="bread-blod"> Required Participant Details </span>
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
      <!-- end Showig navigation path -->
		
		
		<!--  MIDDLE SPACE WITH ALL THE RESULTS ETC. -->
		<?php
			
			// $host = "localhost" ;
			// $user_name = "DK" ;
			// $passwd = "DK@ZEPHYR" ;
			// $schema = "ZEPHYR" ;
			include "linc.php";
		//CONNECT TO MySQL
		// 	if(!($database = mysqli_connect($host, $user_name, $passwd )))     //returns database handle - representation of connectn. of php to database
		// 	{
		// 		die("Could not connect to database </body></html> ") ;
		// 	}
		 
		//  //open Products database
		// 	if(!mysqli_select_db($database , $schema) )
		// 	{
		// 		die("Could not open dk_testn_mysql database</body></html> ") ;
		// 	}
			
			//queries 
			
			$query1 = "DESC  PARTICIPANTS ; " ;
			$req = "SELECT p_id, fname,mname,lname,pnumber,emailid FROM PARTICIPANTS ; " ;
			$count = "SELECT COUNT(DISTINCT(p_id)) FROM PARTICIPANTS ; " ;
			
			//result after executing queries
			$result1 = mysqli_query($mysqli , $query1) ;
			$req_result = mysqli_query($mysqli , $req) ;
			$count_result = mysqli_query($mysqli , $count) ;
			
			
		 //query Products database
			if(!$result1)
				{  print("<p>Could not execute query!</p> ") ;
				   die(mysqli_error($mysqli)."</body></html> " ) ;

				} //end if


			mysqli_close($mysqli) ;
		?>   <!--end PHP script-->
			
		<div class="single-pro-review-area mt-t-30 mg-b-15" id="work-area">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st"> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section"> 
                                        <div class="row">
                                        <div  align='center' class="row">
													<caption><h4>Total participants registered till now are: </h4> </caption>
												<p>
													<table>
													<?php  
													//fetch each record in result set
														while($row = mysqli_fetch_row($count_result) )
															{  //build table to display results 
																print("<tr>") ;
															
																foreach($row as $key => $value )
																	print("<td>".$value."</td>  ") ;
																print("</tr>") ;
															}  //end while
													?>
													</table>
												</p>
                                            </div>
                                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-15" align= 'center'>
												<caption><h4> Results of query - <?php  print($query1); ?> &nbsp; are:</h4> </caption> <br>
												<p><br>
													<table>
													<?php 
													   while($row = mysqli_fetch_row($result1) )
															{  //build table to display results 
																print("<tr>") ;
															
																foreach($row as $key => $value )
																	print("<td>".$value."</td>  ") ;
																print("</tr>") ;
															}  
													?>
													</table>
												</p><br><br><br><br><br>
                                            </div><br> 
															
											<div class="col-lg-6 col-md-10 col-sm-10 col-xs-15" align='center' >
												<caption><h4> Results of query - <?php  print($req); ?> &nbsp; are: </h4> </caption><br>
												<p>
													<table>
													<?php  
													//fetch each record in result set
														while($row = mysqli_fetch_row($req_result) )
															{  //build table to display results 
																print("<tr>") ;
															
																foreach($row as $key => $value )
																	print("<td>".$value."</td>  ") ;
																print("</tr>") ;
															}  //end while
													?>
													</table>
												</p>
                                            </div>
                                        </div>  <br><br><br><br><br>
										
											
										
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