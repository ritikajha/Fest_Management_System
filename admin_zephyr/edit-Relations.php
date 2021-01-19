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
    <title>Edit Relations | Zephyr Admin </title>
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
                                            <li><span class="bread-blod"> Edit Relation or Table </span>
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
		<!--  php code to insert data into mysql here -->
		<?php
			
      $t = $_POST["relation"] ;
      switch($t)
      {
        case 1:
          $table="sponsor";
          break;
        case 2:
          $table="managers";
          break;
        case 3:
          $table="volunteers";
          break;
        case 4:
          $table="cguest";
          break;
      }
			$id = $_POST["id"] ;
			$pname = $_POST["firstname"] ;
			$phone =$_POST["mobileno"] ;
			$email =$_POST["emailid"] ;
			
			if(isset($_POST["sub-but"]))
			{
				if(($table and $id and $pname and $phone and $email))
				{
					// $host = "localhost"  ; //can be changed according to host
					// $user_name = "DK" ; //username according to that used in database
					// $passwd = "DK@ZEPHYR" ; //password according to useraccount created in database
          // $schema = "ZEPHYR" ; // to store database/schema wheree all relations are present
          include "linc.php";
					
				}
			}
			
			else 
			{
				die(" ERROR!!! ENTER CORRECT DATA <BR> DON'T LEAVE BLANKS IF EARLIER DATA EXISTED THAT YOU DON'T WANT TO CHANGE . </body></html> ") ;
				//exit immediately, no further computations 
			}
		
			 
			
			
				if($table== "managers" or $table =="volunteers" )
				{
							
					$g = $_POST["gender"] ;
					$branch = $_POST["br"] ;
					$year = $_POST["yr"] ;
					switch($g)
					{
						case 0:
								$gen = "N" ;
								break ;				
						case 1:
								$gen = "M" ;
								break ;
						case 2 :
								$gen = "F" ;
								break ;
						case 3 :
								$gen = "T" ;
								break ;	
					} 
					
				}
			
			
		


			$query1 = "DESC ".$table." ;" ;
			$select = "SELECT * FROM ".$table." ;" ;
			
			if( $table=="managers" ) 
				{
					$event_id = $_POST["eventid"] ; 
					echo("<H4 align='center'>Updated given ".$table." details where Id = '".$id."'</h4> ");
					$query2 = "UPDATE managers SET name= '".$pname."' ,gender= '".$gen."', branch= '".$branch."', year = '".$year. "' ,p_number= '".$phone. "' ,email_id= '".$email. "' ,e_id= '".$event_id."'  WHERE m_id = '".$id. "' ; "  ; 
					$new = "SELECT * FROM ".$table." WHERE m_id = '".$id."' ;" ;
				
				}
			else if($table== "volunteers" )
				{
					echo("<H4 align= 'center'> Updated given ".$table." details where Id = '".$id."'</h4> ");
					$query2 = "UPDATE VOLUNTEERS SET name= '".$pname."' ,gender= '".$gen."', branch= '".$branch."', year = '".$year. "' ,phone_no= '".$phone. "' ,email= '".$email. "' WHERE v_id = '".$id. "' ; "  ; 
					$new = "SELECT * FROM ".$table." WHERE v_id = '".$id."' ;" ;
				}
				
			else if( $table == "sponsor")
				{
					//$year = $_POST["yr"] ;
					$g = $_POST["gr"] ;
					$acc_num = $_POST["acc"] ; 
					$amount = $_POST["amt"] ;
					$representative = $_POST["rep"] ; 
					switch($g)
					{
						case 0:
								$grade = "D" ;
								break ;				
						case 1:
								$grade = "P" ;
								break ;
						case 2 :
								$grade = "G" ;
								break ;
						case 3 :
								$grade = "O" ;
								break ;	
					} 
					
					echo("<H4 align= 'center' > Updated given ".$table." details where Id = '".$id."'</h4> ");
					$query2 = "UPDATE SPONSOR SET name= '".$pname."' ,grade= '".$grade."', p_number= '".$phone. "' ,mail= '".$email. "' ,r_name = '".$representative."', Amount='".$amount."' ,acc_n= '".$acc_num."' WHERE s_id = '".$id. "' ; "  ; 
					$new = "SELECT * FROM ".$table." WHERE s_id = '".$id."' ;" ;
				}
				
			else if( $table== "cguest")
				{
					$g = $_POST["gender"] ;
					$link = $_POST["sm-link"] ;
					switch($g)
					{
						case 0:
								$gen = "N" ;
								break ;				
						case 1:
								$gen = "M" ;
								break ;
						case 2 :
								$gen = "F" ;
								break ;
						case 3 :
								$gen = "T" ;
								break ;	
					} 
					echo("<H4 align= 'center' > Updated given ".$table." details where Id = '".$id."'</h4> ");
					$query2 = "UPDATE cguest SET name= '".$pname."' ,gender= '".$gen. "' ,p_number= '".$phone. "' ,mail= '".$email. "' ,link= '".$link."'    WHERE c_id = '".$id. "' ; "  ; 
					$new = "SELECT * FROM ".$table." WHERE c_id = '".$id."' ;" ;
					
				}
			else if($table== "events" )
				{
					echo("<H2 align= 'center' > Updating given ".$table." details where Id = '".$id."'</H2> ");
					//$query2 = "DELETE FROM ".$table." WHERE EID= '".$id."' AND EV_NAME= '" .$pname. "' ;"   ;
				}
			else 
				{
					die("<h2 align='center'> ERROR !!!. Fill the form correctly.</h2></body></html> ") ;
				}
			
			
		//CONNECT TO MySQL
		// 	if(!($database = mysqli_connect($host ,$user_name, $passwd )))     //returns database handle - representation of connectn. of php to database
		// 	{	
		// 		die("Could not connect to database </body></html> ") ;
		// 	}
			
		//  //open Products database
		// 	if(!mysqli_select_db($database , $schema ) )
		// 	{
		// 		die("Could not open dk_testn_mysql database</body></html> ") ;
		// 	}
		 
			$result1 = mysqli_query($mysqli , $query1) ;
			$result2 = mysqli_query($mysqli , $query2) ;
			$result3 = mysqli_query($mysqli , $select) ;
			$result4 = mysqli_query($mysqli, $new) ;
			
		 //query Products database
			
			if(!$result1 and !$result3 )           //To check whether relation exists or not, in database
				{  print("<p>Didnt got result 1 and result 3!</p> ") ;
				   die(mysqli_error($database)."</body></html> " ) ;

				} //end if


			mysqli_close($mysqli) ;
		?>   <!--end PHP script-->

		<div class="single-pro-review-area mt-t-30 mg-b-15" id = "work-area">
            <div class="container-fluid"> 
            <div class="row">
									<p> 
										<caption><h4> Updated row on executing following query :-  &nbsp; <br> <?php  print($new." .   : "); ?></h4><br></caption>
											<table>
											
												<?php  
													//fetch each record in result set
													while($row = mysqli_fetch_row($result4) )
														{  //build table to display results 
															print("<tr>") ;
																	
															foreach($row as $key => $value )
																print("<td>".$value."</td>") ;
															print("</tr>") ;
														}	  //end while
												?>
											</table>
									</p>
                            </div>	
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st"> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section"> 
                                        <div class="row">
											
                                            <div class="col-lg-6 col-md-10 col-sm-10 col-xs-12">
												<caption><h4> Results of query - <?php  print($query1); ?>  &nbsp;are :</h4></caption><br>
												<p>
													<table> 
															<?php 
															    while($row = mysqli_fetch_row($result1) )
																	{  //build table to display results 
																		print("<tr>") ;
																	
																		foreach($row as $key => $value )
																				print("<td>".$value. "</td>  ") ;
																		print("</tr>") ;
																	}  
															?>
														</table>
													</p>
                                                </div><br></div></div></div></div></div></div></div>
															
                                                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st"> 
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section"> 
                                        <div class="row">
											
                                          
												<caption><h4> Results of query - <?php  print($select); ?> &nbsp;are:</h4></caption><br>
												<p> 
													<table>
															<?php  
															//fetch each record in result set

																while($row = mysqli_fetch_row($result3) )
																	{  //build table to display results 
																		print("<tr>") ;
																	
																		foreach($row as $key => $value )
																				print("<td>".$value."</td>  ") ;
																		print("</tr>") ;
																	}	  //end while
															?>
													</table>
												</p>
                                            
                                        </div><br><br><br>    				
                                    </div>
                                </div>
							</div><br><br>
								
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
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
</body>

</html>