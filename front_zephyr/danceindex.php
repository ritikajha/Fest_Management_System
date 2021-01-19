<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ZEPHYR-DANCE</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/zephyr-logo.JPG">   <!-- icon shown on top of heading of admin page -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .icon-case {
            width: 22px;
            float: left;
            border-radius: 5px 0px 0px 5px;
            background: #eeeeee;
            height: 22px;
            position: absolute;
            text-align: center;
            line-height: 22px;
        }
        </style>

<body
    style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/about-us-content-image.jpg');">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span
            class="text-primary site-heading-upper mb-3"> Presented by Baila-Amor, Dance society of JNU SE&nbsp;</span>
        <span class="site-heading-lower">Dance Events</span></h1>



    <section class="page-section clearfix">
        <div class="container">
            <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="assets/img/solodance.jpg"
                    style="width: 59%;">
                <div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
                    <h2 class="section-heading mb-4"><span class="section-heading-upper">Solo event</span><span
                            class="section-heading-lower">NATRAJ</span></h2>
                    <p class="mb-3">Are u a passionate solo dancer . Come to Zephyr n show ur worth!!
                        <h6><br><b>VENUE-</b>
                            <?php
                                include "linc.php";
                                $venueq="select name from venue where v_id in (select venue_id from events where event_id=1)";
                                $venuer=mysqli_query($mysqli,$venueq);
                                if($venuer)
                                {
                                    while($row=mysqli_fetch_row($venuer))
                                    {
                                        echo $row[0];
                                    }
                                }

                            ?> <br>

                            <b>TIMINGS-</b> <?php
                            include "linc.php";
                            $query1d="select DATE_FORMAT(begin_date, '%W %D %M %Y') begin_date from events where event_id=1";
                            $query1t="select  begin_time from events where event_id=1";
                            $result1d=mysqli_query($mysqli,$query1d);
                            $result1t=mysqli_query($mysqli,$query1t);
                            if($result1d)
                            {
                                while($row=mysqli_fetch_row($result1d))
                                {
                                    echo $row[0];
                                    echo ',';
                                }
                            }
                            if($result1t)
                            {
                                while($row=mysqli_fetch_row($result1t))
                                {
                                    echo $row[0];
                                }
                            }
                             ?>Hours<br><br><span class="icon-case"><i class="fa fa-file-pdf-o"></i></span><br>
                            <a href="rulebook.pdf" download style="color: blue; "> Download Rulebook </a></h6>
                    </p>
                    <div class="mx-auto intro-button"><a class="btn btn-primary d-inline-block mx-auto btn-xl"
                            role="button" onclick="location.href='natarajreg.php'">Register Now!</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section clearfix">
        <div class="container">
            <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="assets/img/groupdance.jpg"
                    style="width: 59%;">
                <div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
                    <h2 class="section-heading mb-4"><span class="section-heading-upper">Group event</span><span
                            class="section-heading-lower">NARTAKI</span></h2>
                    <p class="mb-3">Love Dancing in groups? Come to Zephyr and engage all others to shake their body
                        with u !!
                        <h6><br><b>VENUE-</b> <?php
                                include "linc.php";
                                $venueq="select name from venue where v_id in (select venue_id from events where event_id=2)";
                                $venuer=mysqli_query($mysqli,$venueq);
                                if($venuer)
                                {
                                    while($row=mysqli_fetch_row($venuer))
                                    {
                                        echo $row[0];
                                    }
                                }

                            ?> <br>

                            <b>TIMINGS-</b> <?php
                            include "linc.php";
                            $query1d="select DATE_FORMAT(begin_date, '%W %D %M %Y') begin_date from events where event_id=2";
                            $query1t="select  begin_time from events where event_id=2";
                            $result1d=mysqli_query($mysqli,$query1d);
                            $result1t=mysqli_query($mysqli,$query1t);
                            if($result1d)
                            {
                                while($row=mysqli_fetch_row($result1d))
                                {
                                    echo $row[0];
                                    echo ',';
                                }
                            }
                            if($result1t)
                            {
                                while($row=mysqli_fetch_row($result1t))
                                {
                                    echo $row[0];
                                }
                            }
                             ?>Hours<br><br><span class="icon-case"><i class="fa fa-file-pdf-o"></i></span><br>
                            <a href="rulebook.pdf" download style="color: blue; "> Download Rulebook </a></h6>
                    </p>
                    <div class="mx-auto intro-button"><a class="btn btn-primary d-inline-block mx-auto btn-xl"
                            role="button" onclick="location.href='nartakireg.php'">Register Now!</a></div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">With Love&nbsp;©&nbsp;Zephyr 2020</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/current-day.js"></script>
</body>

</html>