<?php
include "linc.php";
//checking for session variable
if (!isset($_SESSION['pid']))
 {
  header('Location: plogin.php');
 }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant account</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/zephyr-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

<style>


/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 110px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #667069;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #bedbeb;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1; 
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

        body {
            margin: auto;
            /* background: #eaeaea; */
            background-image:url("images/main-content-background.jpg");
            font-family: 'Open Sans', sans-serif;
        }

        form h1 {
            font-size: 18px;
            background: #F6AA93 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none;
            text-align: left
        }

        form {
            border-radius: 5px;
            width: 100%;
            margin: 5% auto;
            background-color: #FFFFFF;
            overflow: hidden;
        }

        p span {
            color: #F00;
        }

        p {
            margin: 0px;
            font-weight: 500;
            line-height: 2;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            margin: 50px 0px 0px 0px
        }
        h3 {
            /* text-align: center; */
            text-align:left;
            color:  black;
            
            margin: 50px 0px 0px 0px
        }
        h4 {
            text-align: center;
            text-shadow: 1px 1px 0px #FFF;
            margin: 50px 0px 0px 0px
        }
        h5{
            text-align: center;

            margin: 50px 0px 0px 0px
        }
        h2{
            
            text-shadow: 1px 1px 0px #FFF;
            margin: 50px 0px 0px 0px
        }

        input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 75%;
            height: 40px;
            float: left;
            padding: 0px 15px;
        }

        /* .form-group {
            overflow: inherit;
            clear: both;
        } */

        .icon-case {
            width: 15px;
            float: left;
            border-radius: 5px 0px 0px 5px;
            background: #eeeeee;
            height: 22px;
            position: relative;
            text-align: center;
            line-height: 40px;
        }
        

        i {
            color: white;
            padding-top: 11px;
        }

        .contentform {
            padding: 10px 2px;
        }

        .button-contact {
            background-color: #81BDA4;
            color: #FFF;
            text-align: center;
            width: 100%;
            border: 0;
            padding: 17px 25px;
            border-radius: 0px 0px 5px 5px;
            cursor: pointer;
            margin-top: 40px;
            font-size: 18px;
        }

       
        .full {
            width: 100%;
            float: right;
            box-sizing: border-box;
            padding: 0px 0px 0px 15px;
            background-color:#9befe9 ;
            height:auto;
            border:2px solid black;
            text align:center;
        }
        
    </style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
<!-- side nav bar starts -->
<div class="sidenav">

  <a href="mainpage.php"><i class="fa fa-home"></i><h6>Home</h6></a>
  <a href="pedit.php"><i class="fa fa-edit"></i><h6>Edit</h6></a>
  <a href="pcalendar.php"><i class="fas fa-calendar-week"></i><h6>Calendar</h6></a>
  <a href="participantformnew.php"> <i class="fa fa-user icon"></i><h6>Register</h6></a>
  <button class="dropdown-btn"><i class="fas fa-calendar-week"></i><h6>Events</h6><i class="fa fa-caret-down"></i></h6>
    
  </button>
  <div class="dropdown-container">
    <a href="danceindex.php"><i class="fa fa-tags"></i><h6>Dance</h6> </a>
    <a href="musicindex.php"><i class="fa fa-tags"></i><h6>Music</h6></a>
    <a href="dramaindex.php"><i class="fa fa-tags"></i><h6>Drama</h6> </a>
    <a href="literaryindex.php"><i class="fa fa-tags"></i><h6>Literary </h6></a>
  </div>
  <a href="logout.php"><i class="fa fa-power-off"></i><h6>Logout</h6></a>
    
</div>
<!-- side nav bar ends -->
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


<div class="container">
<h1>Welcome!!to your profile in ZEPHYR</h1>
    <div class="row">
        <div class="col-sm-6">

    
<?php
//checking for session

    
    
     $pid=$_SESSION['pid'];
     
                //echo "right credentials";
                //echo "<h1>Welcome!!to your profile in ZEPHYR</h1>";
                //echo "<br>";
               // echo "<h2>Personal Information</h2>";
                $query="select p_id, fname , mname, lname ,gender, emailid, pnumber from participants where p_id='$pid'";
                $result=mysqli_query($mysqli,$query);
               // $query="insert into participants (fname,mname,lname,gender,course,emailid,pnumber,cname,ccity,cstate,password) VALUES ('$fname','$mname','$lname','$gender','$course','$email','$pnumber','$cname','$ccity','$cstate','$password')";
                 
                //getting participant details
                if($result) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<h3>";
                        echo "<div style='float:center'>";
                        echo '<b>Name:</b> ' . $row['fname'] .' '. $row['mname'] .' '.  $row['lname'] . '<br />';
                        echo '<b>Gender:</b> ' . $row['gender'] . '<br>';
                        echo '<b>Emailid: </b>' . $row['emailid'] . '<br>';
                        echo '<b>Phone Number:</b> ' . $row['pnumber'] . '<br>';   
                        echo "</div><br><br><br><br><br>";
                        echo "Details of events you have registered in:-";
                        echo "</h3>";
                        
                    }
                    
                



    }
    else 
    {
        {
            echo "query error:".mysqli_error($mysqli);
            die();
        } 
    }
             

            

      
 
?>    
</div>
<!-- displaying venue map -->
<div class="col-sm-6" >
<div class="sparkline12-list" style="float:right;">
                            <div class="sparkline12-hd" >
                                <div class="main-sparkline12-hd" >
                                    
                                    <h3> Venue<span class="table-project-n">  </span> </h3>
                                </div>
                            </div>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.0448775302043!2d77.16373785069626!3d28.53837078236883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1ddb55725eaf%3A0xdf1d45bdd082aedf!2sJNU%20Convention%20Center!5e0!3m2!1sen!2sin!4v1593439606377!5m2!1sen!2sin" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        </div>
</div>
        
</div>
    <div class="contentform">
        <div class="full">
            
            <h5 text-align:center>
        <?php
                //getting details of events in which participant has registered
                $equery="select event_name ,begin_time,DATE_FORMAT(begin_date, '%W %D %M %Y') begin_date,end_time,DATE_FORMAT(begin_date, '%W %D %M %Y') end_date,first_prize,second_prize,third_prize,venue_id from events where event_id in (select event_id from participation where p_id='$pid')";
                $eresult=mysqli_query($mysqli,$equery);
                $tquery="select t_id ,e_id from t_participation where p_id='$pid';";
                $tresult=mysqli_query($mysqli,$tquery);
                if(mysqli_num_rows($eresult)>0)
                {   
                    while($row=mysqli_fetch_assoc($eresult)){
                        echo '<div class="row">';
                        echo '<h4><b>Event Name<b>: '. $row['event_name'] . '</h4><br>';
                        echo '<div class="col-sm-4">';
                        echo '<b>Schedule: <br> Begins on: </b>'. $row['begin_date']. '<b>at</b>'.$row['begin_time']. '<b><br> Ends on:</b>'. $row['end_date']. '<b>at</b>'. $row['end_time'].'<br><br>';
                        echo '</div>';
                        echo '<div class="col-sm-4">';
                        echo '<b>Prizes :</b><br> First prize'. $row['first_prize'].'<br> Second Prize: '. $row['second_prize']. '<br> Third prize: '. $row['third_prize'].'<br><br>';
                        echo '</div>';
                        $v=$row['venue_id'];
                        $vquery="select name from venue where v_id='$v'";
                        $vresult=mysqli_query($mysqli,$vquery);
                        while($r=mysqli_fetch_assoc($vresult))
                        {   
                            echo '<div class="col-sm-4">';
                            echo '<b>Venue:</b>'.$r['name'].'<br>';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '<hr style="background-color:black">';
                    }
                    
                }
                if(mysqli_num_rows($tresult)>0)
                {   
                    while($ro=mysqli_fetch_assoc($tresult)){
                        $re=$ro['e_id'];
                        $getedetails="select event_name,begin_time,DATE_FORMAT(begin_date, '%W %D %M %Y') begin_date,end_time,DATE_FORMAT(begin_date, '%W %D %M %Y') end_date,first_prize,second_prize,third_prize,venue_id from events where event_id='$re';";
                        $edetails=mysqli_query($mysqli,$getedetails);
                        while($p=mysqli_fetch_assoc($edetails))
                        {
                            echo '<div class="row">';
                            echo '<h4><b>Event Name<b>: '. $p['event_name'] . '</h4><br>';
                            
                            echo '<div class="col-sm-3">';
                            echo '<b>Schedule: <br> Begins on: </b>'. $p['begin_date']. '<b>at</b>'.$p['begin_time']. '<b><br> Ends on:</b>'. $p['end_date']. '<b>at</b>'. $p['end_time'].'<br><br>';
                            echo '</div>';
    
                            echo '<div class="col-sm-3">';
                            echo '<b>Prizes :</b><br> First prize'. $p['first_prize'].'<br> Second Prize: '. $p['second_prize']. '<br> Third prize: '. $p['third_prize'].'<br><br>';
                            echo '</div>';
    
                            $v=$p['venue_id'];
                            $vquery="select name from venue where v_id='$v'";
                            $vresult=mysqli_query($mysqli,$vquery);
                            while($r=mysqli_fetch_assoc($vresult))
                            {   
                                echo '<div class="col-sm-3">';
                                echo '<b>Venue:</b>'.$r['name'].'<br>';
                                echo '</div>';
                            }
                        }
                       

                        echo '<div class="col-sm-3">';
                        echo '<b>Team Name:'.$ro['t_id'].'</b><br>';
                        $rt=$ro['t_id'];
                        $mq="select fname,mname,lname from participants where p_id in (select p_id from t_participation where t_id='$rt');";
                        $mr=mysqli_query($mysqli,$mq);
                        echo '<b>Team members:</b><br>';
                        while($m=mysqli_fetch_assoc($mr))
                        {
                            echo '-->'.$m['fname'].' '.$m['mname'].' '.$m['lname'].'<br>';
                        };
                        echo '</div>';
                        
                        echo '</div>';
                        echo '<hr>';
                    }
                    
                }
                else{
                    echo "not registered in any event yet";
                }



    
             

            

      
 
?></h5>
                
                
        </div>
    </div>

       
</div>
    
</body>

</html>