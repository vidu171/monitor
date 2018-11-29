<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard: Student</title>
    <link href=".css/bootstrap.min.css" rel="stylesheet">
    <link href=".css/bootstrap-theme.css" rel="stylesheet">
    <link href=".css/elegant-icons-style.css" rel="stylesheet" />
    <link href=".css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href=".css/owl.carousel.css" type="text/css">
    <link href=".css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href=".css/widgets.css" rel="stylesheet">
    <link href=".css/style.css" rel="stylesheet">
    <link href=".css/style-responsive.css" rel="stylesheet" />
    <link href=".css/xcharts.min.css" rel=" stylesheet">
    <link href=".css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>
<body>
<?php
include 'header.php';
$username = $_SESSION["username"];
$result   = mysqli_query($mysqli, "SELECT * FROM users WHERE username = '$username'");

$res  = mysqli_fetch_array($result);
$name = $res["name"];

?>
<section id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo">Monitoring System <span class="lite">Student</span></a>
        <!--logo end-->
        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>
        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
                <!-- task notificatoin start -->
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <span class="icon-task-l"></i>
                         <span class="badge bg-important">0</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 0 pending Assignment</p>
                        </li>
<!--                        <li>-->
<!--                            <a href="#">-->
<!--                                <div class="task-info">-->
<!--                                    <div class="desc">SWE: UI</div>-->
<!--                                    <div class="percent">60%</div>-->
<!--                                </div>-->
<!--                                <div class="progress progress-striped">-->
<!--                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%">-->
<!--                                        <span class="sr-only">60% Complete (success)</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </li>-->

                    </ul>
                </li>
                <!-- task notificatoin end -->
                <!-- inbox notificatoin start-->
                <li id="mail_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-l"></i>
                        <span class="badge bg-important">0</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 0 new messages</p>
                        </li>
<!--                        <li>-->
<!--                            <a href="#">-->
<!--                                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>-->
<!--                                <span class="subject">-->
<!--                           <span class="from">Darth Vader</span>-->
<!--                           <span class="time">6 min</span>-->
<!--                           </span>-->
<!--                                <span class="message">-->
<!--                           Stop Calling me Daddy.-->
<!--                           </span>-->
<!--                            </a>-->
<!--                        </li>-->

                    </ul>
                </li>
                <!-- inbox notificatoin end -->
                <!-- alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">0</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 0 new notifications</p>
                        </li>

                    </ul>
                </li>
                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <span class="profile-ava">
                     <img alt="" src="img/user.png" style="width:40px; height:40px;">
                     </span>
                        <span class="username"><?php $_SESSION["username"]; ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="MyProfile.html"><i class="icon_profile"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="MyInbox.html"><i class="icon_mail_alt"></i> My Inbox</a>
                        </li>
                        <li>
                            <a href="/logout.php"><i class="icon_key_alt"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!--Project Activity start-->
                    <section class="panel">
                        <div class="panel-body progress-panel">
                            <div class="row">
                                <div class="col-lg-8 task-progress pull-left">
                                    <h1>Your Courses</h1>
                                </div>
                                <div class="col-lg-4">
                                 <span class="profile-ava pull-right">
                                 <img alt="" class="simple" src="img/user.png" style="width:40px; height:40px;">
                                     <?php
                                     echo $name;
                                     ?>
                                 </span>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>
                            <?php

                            $sessions = mysqli_query($mysqli, "SELECT * FROM session WHERE username = 'viduuj@gmail.com'");

                            while ($res = mysqli_fetch_array($sessions)) {
                                $_id = $res["course"];
                                $course = mysqli_query($mysqli, "SELECT * FROM course WHERE _id = '$_id'");
                                $course  = mysqli_fetch_array($course);
                                $name = $course["name"];

                                $subject_id = $course["subject"];
                                $subject = mysqli_query($mysqli, "SELECT * FROM subjects WHERE _id = '$subject_id'");
                                $subject = mysqli_fetch_array($subject);
                                $subject = $subject["name"];
                                $t = $res["completed"];
                                $t = $t+1;
                                echo "<tr> <td>$name</td> ";
                                echo"  <td> $subject  ";
                                echo " </td><td><button>continue</button></td><td>" ;
                                if($t<20)
                                echo ' <div id="bar-3" class="bar-main-container red">';
                                elseif($t<30)
                                echo ' <div id="bar-3" class="bar-main-container yellow">';
                                elseif($t<50)
                                echo ' <div id="bar-3" class="bar-main-container violet">';
                                elseif($t<70)
                                echo ' <div id="bar-3" class="bar-main-container emerald">';
                                elseif($t<100)
                                echo ' <div id="bar-3" class="bar-main-container azure">';

                                echo '<div class="wrap">';
                                echo "<div class=\"bar-percentage\" data-percentage=\"$t\"></div>";
                                echo '<div class="bar-container">';
                                echo '<div class="bar"></div>';
                                echo '</div></div></div>';
                                echo '</td></tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </section>
                    <!--Project Activity end-->
                </div>
                <div class="col-md-4 portlets">
                    <section class="panel">
                        <div class="panel-body progress-panel">
                            <div class="row">
                                <div class="col-lg-8 task-progress pull-left">
                                    <h1>Enroll to these Courses</h1>
                                </div>

                            </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>
                          <?php
                          $course = mysqli_query($mysqli, "SELECT * FROM `course`");

                          while ($res = mysqli_fetch_array($course)) {
                              $name = $res["name"];
                              $subject_id = $res["subject"];
                              $subject = mysqli_query($mysqli, "SELECT * FROM subjects WHERE _id = '$subject_id'");
                              $subject = mysqli_fetch_array($subject);
                              $subject = $subject["name"];



                              echo "<tr> 
                                <td>$subject</td>
                                <td>
                                    $name
                                </td>
                                <td>
                                    <span class=\"badge bg-important\">Enroll</span>
                                </td>
                            </tr>";
                            } ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
            <div class="row">
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- project team & activity end -->
        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section start -->
<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<!-- jQuery full calendar -->
<<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="js/calendar-custom.js"></script>
<script src="js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="js/jquery.customSelect.min.js" ></script>
<script src="assets/chart-master/Chart.js"></script>
<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/xcharts.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/sparklines.js"></script>
<script src="js/charts.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="assets/chart-master/Chart.js"></script>
<!-- custom chart script for this page only-->
<script src="js/chartjs-custom.js"></script>
<script>
    var chartData = [
        {
            label: "Digital II",
            value : 3.8,
            color: "#D97041"
        },
        {
            value : 3.2,
            color: "#C7604C"
        },
        {
            value : 3,
            color: "#21323D"
        },
        {
            value : 3.6,
            color: "#9D9B7F"
        },
        {
            value : 3.9,
            color: "#7D4F6D"
        },
        {
            value : 2,
            color: "#584A5E"
        }
    ];
    var myPolarArea = new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
</script>
<script>
    //knob
    $(function() {
        $(".knob").knob({
            'draw' : function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function(){
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code){
                el.html(el.html()+' (GDP - '+gdpData[code]+')');
            }
        });
    });



</script>
</body>
</html>