<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
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
        input[type=button]
        {
        background-color:#000080;
        border: none;
        color: white;
        padding: 15px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        }
        input[type=button]:hover{
        background-color: #000056;
        }
    </style>

</head>

<body>
<div class="row">
    <div class="col-sm-1" style="float: left">
    
    <input type="button" name="sub" class="fadeIn fourth" onclick="window.location.href='mainpage.php'" value="Home">
    </div>
</div>
    <h1>Zephyr Participation Registration Form.</h1>
    <div class="container">
    <!-- form begins -->
        <form action="" method="post">
        <h1>Fill in the details to get your Zephyr participation Id</h1>

<div class="contentform">

    <div class="leftcontact">
        <div class="form-group">
            <p>First Name<span>*</span></p>
            <span class="icon-case"><i class="fa fa-male"></i></span>
            <input type="text" name="fname" id="f-name" required />

        </div>
        <div class="form-group">
            <p>Middle name <span></span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
            <input type="text" name="mname" id="m-name" />
        </div>
        <div class="form-group">
            <p>Last Name <span></span></p>
            <span class="icon-case"><i class="fa fa-male"></i></span>
            <input type="text" name="lname" id="l-name" />
        </div>

        <div class="form-group">
            <p>E-mail <span>*</span></p>
            <span class="icon-case"><i class="	fa fa-envelope-o"></i></span>
            <input type="email" name="email" id="email" required />
        </div>

        

        
        <div class="form-group">
            <p>Phone number <span></span></p>
            <span class="icon-case"><i class="fa fa-phone"></i></span>
            <input name="pnumber" id="phone" />
        </div>
        

        

    </div>

    <div class="rightcontact">
        
        
        <div class="form-group">
            <p>Gender <span>*</span></p>
            <select class="form-control" id="gender" name="gender" required style="width: auto;">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <p>Course <span>*</span></p>
            <select class="form-control" id="course" required name="course" style="width: 81%;">
                <option>B.Tech</option>
                <option>M.Tech</option>
                <option>P.hd</option>
                <option>BA/MA</option>
                <option>Other</option>
            </select><br>
        </div>
        <div class="form-group">
            <p>College Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-building-o"></i></span>
            <input type="text" name="cname" id="c-name" required/>
            
        </div>
        <div class="form-group">
            <p>College City <span>*</span></p>
            <input type="text" class="form-control" id="city" name="ccity" required style="width: 81%;">
                
        </div>

        <div class="form-group">
            <p>College State <span></span></p>
            <select class="form-control" id="state" name="cstate" style="width: 81%;">
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
            </select>
            <br>
            
        </div>
        

        
        <div class="form-group">
            <p>Password <span>*</span></p>
            <span class="icon-case"><i class="fa fa-lock"></i></span>
            <input type="password" name="pw" id="password" required />
        </div>

    </div>
</div>
<button type="submit" name="sub" class="button-contact">Submit</button>
        </form>
        <!-- form ends -->
    </div>
    <?php
    // making connection
        include "linc.php";
        if(isset($_POST["sub"]))
        {
            //taking all variables from form
           
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
            $password=mysqli_real_escape_string($mysqli,$_POST["pw"]);

            $querycheck="select p_id from participants where emailid='$email'";
            $resultcheck=mysqli_query($mysqli,$querycheck);
            //to check whether already registered mail or not
            if(mysqli_num_rows($resultcheck)==0)
            {
                //insertion query
                $query="insert into participants (fname,mname,lname,gender,course,emailid,pnumber,cname,ccity,cstate,password) VALUES ('$fname','$mname','$lname','$gender','$course','$email','$pnumber','$cname','$ccity','$cstate','$password')";
               // $query="insert into participants (fname,mname,lname,gender,course,emailid,pnumber,cname,ccity,cstate,password) VALUES ('$fname','$mname','$lname','$gender','$course','$email','$pnumber','$cname','$ccity','$cstate','$password')";
                 if (!mysqli_query($mysqli,$query))
                {
                    echo "query error:".mysqli_error($mysqli);
                    die();
                }
                //echo "submitted successfully<br>";
                 $query2="select p_id from participants where emailid='$email'";
                 $result2=mysqli_query($mysqli,$query2);
                if(!$result2)
                {
                    echo "Query error:".mysli_error($mysqli);
                    die();
                }
                else
                {

                };
//echo "Your participant id is ";
                while($row=mysqli_fetch_assoc($result2))
                {   //displaying ID
                     echo "<h3>Submitted successfully.Your participant id is  ".$row["p_id"]."<br></h3>";
                    
                     
                }
                                        //echo "<hr>";

            }else{
                //displaying error
                echo '<script>alert("This email id is already registered.")</script>';
              // echo "<h3>This email id is already registered</h3>";
            }
            
        };

        ?>       
</body>

</html>