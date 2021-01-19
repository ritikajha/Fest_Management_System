<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gayak</title>
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

        input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 90%;
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

    <h1>Registration Form of GAYAK</h1>
    <div class="container">
        <form action="" method="post">
            <h1>Please enter the field to register in GAYAK-Zephyr</h1>

            <div class="contentform">
                   


                <div class="form-group">
                    <p>Participant Id:  <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="p_id" id="usern" />
                </div>
                <div class="form-group">
                    <p>Password <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-lock"></i></span>
                    <input type="password" name="pw" id="password" />
                </div>

            </div>
            <button type="submit" class="button-contact" name="sub">Register</button>

        </form>
    </div>
    <?php
include "linc.php";
if (isset($_POST["sub"])){
    $p_id=mysqli_real_escape_string($mysqli,$_POST["p_id"]);
    $pw=mysqli_real_escape_string($mysqli,$_POST["pw"]);
    $query="select * from participants where p_id='$p_id' and password='$pw'";
    $result=mysqli_query($mysqli,$query);
    //checking for correct id and password
    if(mysqli_num_rows($result)==1){
        $q="select * from participation where p_id='$p_id' and event_id=3";
        $r=mysqli_query($mysqli,$q);
        if(mysqli_num_rows($r)==0)
        {   //checking for already registered or not
            $query2="insert into participation (p_id,event_id) values('$p_id',3)";
            if (!mysqli_query($mysqli,$query2))
            {
                echo "query error:".mysqli_error($mysqli);
                die();
            }
            echo "<script>alert('successfully registered')</script><br>";
            //echo "succesffully registered";
        }
        else
        {
            echo "<script>alert('You have already registered in Gayak')</script><br>";
        }

        
    }
    else{
        echo "<script>alert('participant id or password is wrong')</script>";
    }
}
?>
</body>

</html>