<?php
  
    include "linc.php";
    if (!isset($_SESSION['pid']))
 {
  header('Location: plogin.php');
 }
 //gettig current information which is to be updated
    $i=$_SESSION['pid'];
    $query="select * from participants where p_id='$i' ";
    $r=mysqli_query($mysqli,$query);
    $row = mysqli_fetch_assoc($r);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update participant</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/zephyr-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: auto;
            background: #eaeaea;
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
            text-align: center;
            color: blue;
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

        .form-group {
            overflow: inherit;
            clear: both;
        }

        .icon-case {
            width: 35px;
            float: left;
            border-radius: 5px 0px 0px 5px;
            background: #eeeeee;
            height: 42px;
            position: relative;
            text-align: center;
            line-height: 40px;
        }
        

        i {
            color: #555;
            padding-top: 11px;
        }

        .contentform {
            padding: 40px 30px;
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

        .leftcontact {
            width: 49.5%;
            float: left;
            border-right: 1px dotted #CCC;
            box-sizing: border-box;
            padding: 0px 15px 0px 0px;
        }

        .rightcontact {
            width: 49.5%;
            float: right;
            box-sizing: border-box;
            padding: 0px 0px 0px 15px;
        }
    </style>

</head>

<body>

<!-- updationform -->
    <h1>Updation form</h1>
    <div class="container">
        <form action="" method="post">
        <h1>Fill correct details below.</h1>

<div class="contentform">

    <div class="leftcontact">
        <div class="form-group">
            <p>First Name<span>*</span></p>
            <span class="icon-case"><i class="fa fa-male"></i></span>
            <input type="text" name="fname" value="<?php echo $row['fname']?>" id="f-name" required />

        </div>
        <div class="form-group">
            <p>Middle name <span></span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
            <input type="text" name="mname" value="<?php echo $row['mname']?>" id="m-name" />
        </div>
        <div class="form-group">
            <p>Last Name <span></span></p>
            <span class="icon-case"><i class="fa fa-male"></i></span>
            <input type="text" name="lname" value="<?php echo $row['lname']?>" id="l-name" />
        </div>

        <div class="form-group">
            <p>E-mail <span>*</span></p>
            <span class="icon-case"><i class="	fa fa-envelope-o"></i></span>
            <input type="email" name="email" value="<?php echo $row['emailid']?>" id="email" required />
        </div>

        

        
        <div class="form-group">
            <p>Phone number <span></span></p>
            <span class="icon-case"><i class="fa fa-phone"></i></span>
            <input name="pnumber" value="<?php echo $row['pnumber']?>" id="phone" />
        </div>
        

        

    </div>

    <div class="rightcontact">
        
        
        <div class="form-group">
            <p>Gender <span>*</span></p>
            <select class="form-control" id="gender" name="gender" required style="width: auto;">
                <option>female</option>
                <option>male</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <p>Course <span>*</span></p>
            <select class="form-control" id="course" required name="course" style="width: 81%;">
                <option>B.Tech</option>
                <option>M.Tech</option>
                <option>P.hd</option>
            </select><br>
        </div>
        <div class="form-group">
            <p>College Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-building-o"></i></span>
            <input type="text" name="cname" value="<?php echo $row['cname']?>" id="c-name" required/>
            
        </div>
        <div class="form-group">
            <p>College City <span>*</span></p>
            <select class="form-control" id="city" value="<?php echo $row['ccity']?>" name="ccity" required style="width: 81%;">
                <option>Jaipur</option>
                <option>Mumbai</option>
                <option>Lucknow</option>
            </select>
        </div>

        <div class="form-group">
            <p>College State <span></span></p>
            <select class="form-control" id="state" value="<?php echo $row['cstate']?>" name="cstate" style="width: 81%;">
                <option>Delhi</option>
                <option>Rajasthan</option>
                <option>U.P</option>
            </select>
            <br>
            
        </div>
        

        
        

    </div>
</div>
<button type="submit" name="sub" class="button-contact">Update</button>
        </form>
    </div>
   
</body>
<?php
        include "linc.php";
        if(isset($_POST["sub"]))
        {
            //alert();
           //taking up new data
            $fname=mysqli_real_escape_string($mysqli,$_POST["fname"]);
            $mname=mysqli_real_escape_string($mysqli,$_POST["mname"]);
            $lname=mysqli_real_escape_string($mysqli,$_POST["lname"]);
            $gender=mysqli_real_escape_string($mysqli,$_POST["gender"]);
            $course=mysqli_real_escape_string($mysqli,$_POST["course"]);
            $email=mysqli_real_escape_string($mysqli,$_POST["email"]);
            $pnumber=mysqli_real_escape_string($mysqli,$_POST["pnumber"]);
            $cname=mysqli_real_escape_string($mysqli,$_POST["cname"]);
            $ccity=mysqli_real_escape_string($mysqli,$_POST["ccity"]);
            $cstate=mysqli_real_escape_string($mysqli,$_POST["cstate"]);
           // $password=mysqli_real_escape_string($mysqli,$_POST["pw"]);

            //updation query

                $query="update participants set fname='$fname',mname='$mname',lname='$lname',gender='$gender',course='$course',emailid='$email',pnumber='$pnumber',cname='$cname',ccity='$ccity',cstate='$cstate'  where p_id='$i'";
               // $query="insert into participants (fname,mname,lname,gender,course,emailid,pnumber,cname,ccity,cstate,password) VALUES ('$fname','$mname','$lname','$gender','$course','$email','$pnumber','$cname','$ccity','$cstate','$password')";
                 if (!mysqli_query($mysqli,$query))
                {
                    echo "query error:".mysqli_error($mysqli);
                    die();
                }
                else
                {
                    echo "Successfully updated";
                }
                                        //echo "<hr>";

            
            
        };

        ?>       

</html>