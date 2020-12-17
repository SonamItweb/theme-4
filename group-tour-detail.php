<?php include "config.php"; ?>


<!DOCTYPE html>
<html lang="en">

<?php include "configHead.php"; $tour_id = $_GET['id']; ?>

<head>
    <title> </title>
    <meta charset='UTF-8'>
    <meta property="og:image" content="img/projectimage/logo.png" />
    <meta property="og:url" content="index.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="192x192"  href="img/projectimage/favicon/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="<?= $circle_logo_url ?>"><link rel="icon" type="image/png" sizes="96x96" href="<?= $circle_logo_url ?>"><link rel="icon" type="image/png" sizes="16x16" href="<?= $circle_logo_url ?>">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="alternate" href="index.html" hreflang="x-default" />
    <link rel="alternate" href="index.html" hreflang="en_In" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700,700i,800,900" rel="stylesheet">

<link rel="manifest" href="img/projectimage/favicon/manifest.json">
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><![endif]-->
    <link rel="canonical" href="index.html" />
    <link rel="stylesheet" href="css/slider/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="css/style.css">
</head>



<body>

    <?php include "configSiteHeader.php"; 
    $sq_tours = mysql_query("select * from tour_master where tour_id = $tour_id");
    $row_tour = mysql_fetch_assoc($sq_tours);
    $sq_day_count = mysql_num_rows(mysql_query("select * from group_tour_program where tour_id = $tour_id"));
    $sq_night_count = $sq_day_count - 1;
    $currency = mysql_fetch_assoc(mysql_query("select * from currency_name_master where id=$adminDetail[currency]"));
    $sq_dest = mysql_fetch_assoc(mysql_query("select * from destination_master where dest_id=$row_tour[dest_id]"));
    $sq_package_program = mysql_query("select * from group_tour_program where tour_id =$tour_id");
    ?>
    <div class="inner-banner weave-border pkglist-poster">
        <div class="bannerTitle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="text-center">Tour Detail</h3>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none" class="weave-strip weave-bot-strip">
            <path class="elementor-shape-fill" d="M283.5,9.7c0,0-7.3,4.3-14,4.6c-6.8,0.3-12.6,0-20.9-1.5c-11.3-2-33.1-10.1-44.7-5.7 s-12.1,4.6-18,7.4c-6.6,3.2-20,9.6-36.6,9.3C131.6,23.5,99.5,7.2,86.3,8c-1.4,0.1-6.6,0.8-10.5,2c-3.8,1.2-9.4,3.8-17,4.7   c-3.2,0.4-8.3,1.1-14.2,0.9c-1.5-0.1-6.3-0.4-12-1.6c-5.7-1.2-11-3.1-15.8-3.7C6.5,9.2,0,10.8,0,10.8V0h283.5V9.7z M260.8,11.3  c-0.7-1-2-0.4-4.3-0.4c-2.3,0-6.1-1.2-5.8-1.1c0.3,0.1,3.1,1.5,6,1.9C259.7,12.2,261.4,12.3,260.8,11.3z M242.4,8.6 c0,0-2.4-0.2-5.6-0.9c-3.2-0.8-10.3-2.8-15.1-3.5c-8.2-1.1-15.8,0-15.1,0.1c0.8,0.1,9.6-0.6,17.6,1.1c3.3,0.7,9.3,2.2,12.4,2.7  C239.9,8.7,242.4,8.6,242.4,8.6z M185.2,8.5c1.7-0.7-13.3,4.7-18.5,6.1c-2.1,0.6-6.2,1.6-10,2c-3.9,0.4-8.9,0.4-8.8,0.5 c0,0.2,5.8,0.8,11.2,0c5.4-0.8,5.2-1.1,7.6-1.6C170.5,14.7,183.5,9.2,185.2,8.5z M199.1,6.9c0.2,0-0.8-0.4-4.8,1.1  c-4,1.5-6.7,3.5-6.9,3.7c-0.2,0.1,3.5-1.8,6.6-3C197,7.5,199,6.9,199.1,6.9z M283,6c-0.1,0.1-1.9,1.1-4.8,2.5s-6.9,2.8-6.7,2.7  c0.2,0,3.5-0.6,7.4-2.5C282.8,6.8,283.1,5.9,283,6z M31.3,11.6c0.1-0.2-1.9-0.2-4.5-1.2s-5.4-1.6-7.8-2C15,7.6,7.3,8.5,7.7,8.6  C8,8.7,15.9,8.3,20.2,9.3c2.2,0.5,2.4,0.5,5.7,1.6S31.2,11.9,31.3,11.6z M73,9.2c0.4-0.1,3.5-1.6,8.4-2.6c4.9-1.1,8.9-0.5,8.9-0.8   c0-0.3-1-0.9-6.2-0.3S72.6,9.3,73,9.2z M71.6,6.7C71.8,6.8,75,5.4,77.3,5c2.3-0.3,1.9-0.5,1.9-0.6c0-0.1-1.1-0.2-2.7,0.2    C74.8,5.1,71.4,6.6,71.6,6.7z M93.6,4.4c0.1,0.2,3.5,0.8,5.6,1.8c2.1,1,1.8,0.6,1.9,0.5c0.1-0.1-0.8-0.8-2.4-1.3    C97.1,4.8,93.5,4.2,93.6,4.4z M65.4,11.1c-0.1,0.3,0.3,0.5,1.9-0.2s2.6-1.3,2.2-1.2s-0.9,0.4-2.5,0.8C65.3,10.9,65.5,10.8,65.4,11.1 z M34.5,12.4c-0.2,0,2.1,0.8,3.3,0.9c1.2,0.1,2,0.1,2-0.2c0-0.3-0.1-0.5-1.6-0.4C36.6,12.8,34.7,12.4,34.5,12.4z M152.2,21.1    c-0.1,0.1-2.4-0.3-7.5-0.3c-5,0-13.6-2.4-17.2-3.5c-3.6-1.1,10,3.9,16.5,4.1C150.5,21.6,152.3,21,152.2,21.1z"></path>
            <path class="elementor-shape-fill" d="M269.6,18c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3 C267.7,18.8,269.7,18,269.6,18z"></path>
            <path class="elementor-shape-fill" d="M227.4,9.8c-0.2-0.1-4.5-1-9.5-1.2c-5-0.2-12.7,0.6-12.3,0.5c0.3-0.1,5.9-1.8,13.3-1.2   S227.6,9.9,227.4,9.8z"></path>
            <path class="elementor-shape-fill" d="M204.5,13.4c-0.1-0.1,2-1,3.2-1.1c1.2-0.1,2,0,2,0.3c0,0.3-0.1,0.5-1.6,0.4  C206.4,12.9,204.6,13.5,204.5,13.4z"></path>
            <path class="elementor-shape-fill" d="M201,10.6c0-0.1-4.4,1.2-6.3,2.2c-1.9,0.9-6.2,3.1-6.1,3.1c0.1,0.1,4.2-1.6,6.3-2.6  S201,10.7,201,10.6z"></path>
            <path class="elementor-shape-fill" d="M154.5,26.7c-0.1-0.1-4.6,0.3-7.2,0c-7.3-0.7-17-3.2-16.6-2.9c0.4,0.3,13.7,3.1,17,3.3   C152.6,27.5,154.6,26.8,154.5,26.7z"></path>
            <path class="elementor-shape-fill" d="M41.9,19.3c0,0,1.2-0.3,2.9-0.1c1.7,0.2,5.8,0.9,8.2,0.7c4.2-0.4,7.4-2.7,7-2.6  c-0.4,0-4.3,2.2-8.6,1.9c-1.8-0.1-5.1-0.5-6.7-0.4S41.9,19.3,41.9,19.3z"></path>
            <path class="elementor-shape-fill" d="M75.5,12.6c0.2,0.1,2-0.8,4.3-1.1c2.3-0.2,2.1-0.3,2.1-0.5c0-0.1-1.8-0.4-3.4,0  C76.9,11.5,75.3,12.5,75.5,12.6z"></path>
            <path class="elementor-shape-fill" d="M15.6,13.2c0-0.1,4.3,0,6.7,0.5c2.4,0.5,5,1.9,5,2c0,0.1-2.7-0.8-5.1-1.4    C19.9,13.7,15.7,13.3,15.6,13.2z"></path>
        </svg>
    </div>
    <div class="content">
        <div class="container">
                <div class="content">
        <div class="container">

            <div class="row" itemscope itemtype="http://schema.org/Product">
                <div class="col-md-6">
                    <span class="tourCode text-muted small">
                        <?= $row_tour['tour_type']?> Tour </span>
                    <h1 class="holidayName margintop0 cc-default-color" itemprop="name" id="tourname"><?= $sq_night_count.'N/'.$sq_day_count.'D' ?></h1>
                    <h2 class="cc-margin-0 cc-font-size-25 cc-font-weight-8"><?=  $row_tour['tour_name'] ?></h2>


                </div>
                <div class="col-md-2">
                    <div class="holidayCost">
                        <div><b>Starting From</b></div>
                        <div class="primaryColor pkg-last-price" itemscope itemtype="http://schema.org/Offer"><b
                                itemprop="price"><?= $currency['currency_code']?> <?= number_format($row_tour['adult_cost'], 0, ' ', '');?>/-</b></div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4 package-aside-sec">
                    <div class="pkg-sidebar">
                        <p class="marginbot15"><b>Facilities You Get</b></p>
                        <ul class="list-unstyled facilitylist cc-margin-bottom-0">
                            <li>
                                <img src="img/projectimage/hotel.svg" alt="International hotel booking services from Life Holidays"
                                    width="25">
                                <div class="text-muted">Hotel</div>
                            </li>
                            <li>
                                <img src="img/projectimage/breakfast.svg" alt="Breakfast service from Life Holidays"
                                    width="25">
                                <div class="text-muted">Breakfast</div>
                            </li>
                            <li>
                                <img src="img/projectimage/visa.svg" alt="Visa consulting services Life Holidays"
                                    width="25">
                                <div class="text-muted">Visa</div>
                            </li>
                            <li>
                                <img src="img/projectimage/taxi.svg" alt="Taxi transfer services from Life Holidays"
                                    width="25">
                                <div class="text-muted">Transfer</div>
                            </li>
                            <li>
                                <img src="img/projectimage/mountain.svg" alt="Mountain sightseeing with Life Holidays"
                                    width="25">
                                <div class="text-muted">Sightseeing</div>
                            </li>
                        </ul>



                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-7 col-md-offset-5">
                    <div class="row margin0 viewDetails">
                        <a href="enquiry.php" class="btn cc-secondary-btn col-xs-6 col-sm-6 col-md-6 pull-right">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 artical">

                    <div id="carousel" class="flexslider cc-margin-bottom-15">
                        <div class="owl-carousel owl-theme packageSlider">
                            <?php
                            $imgUrl = "http://itourscloud.com/destination_gallery/asia/singapore/Asia_Singapore_Four.jpg";
                             $sq_Daywise_img = mysql_query("select daywise_images from group_tour_program where tour_id = $tour_id");
                            while ($row_img = mysql_fetch_assoc($sq_Daywise_img)){
                                    $imgUrl = $row_img['daywise_images'];
                            ?>
                            <div class="item">
                                <img src='<?php echo $imgUrl; ?>'/>
                            </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 artical">
                    <div class="holidayTab">
                        <ul class="nav nav-tabs" id="myTabs" role="tablist">
                            <li role="presentation" class="active"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                    aria-controls="profile">Itinerary</a></li>
                            <li role="presentation"><a href="#hotel" id="hotel-tab" role="tab" data-toggle="tab"
                                    aria-controls="home" aria-expanded="true">Dates & Capacity</a></li>
                            <li><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Inclusions</a></li>
                        </ul>
                        <div class="tab-content holidayDetails" id="myTabContent">
                            <div class="tab-pane fade in active cityItinerary cc-border-all" role="tabpanel" id="profile"
                                aria-labelledby="profile-tab">
                                <h4 class="packageHolidayHead primaryColor margin0 cc-border-bottom"><b>Itinerary</b></h4>
                                <div class="panel-body">
                                    <?php 
                                      $count = 1;
                                      while($row_itinarary = mysql_fetch_assoc($sq_package_program)){
                                    ?>
                                    <div class="row">
                                        <div class="col-sm-2 col-md-2">
                                            <div class="dayBox primaryback cc-font-weight-8">Day-<?= $count ?></div>
                                        </div>
                                        <div class="col-sm-10 col-md-10 borderdash itinery-list">
                                            <h4 class="cc-margin-top cc-margin-bottom-15 dotsymbol"><b><?=  $row_itinarary['attraction'] ?></b></h4>
                                            <div itemprop="description">
                                                <p style="text-align: justify; "><?= $row_itinarary['day_wise_program'] ?></p>
                                            </div>
                                            <div class="featur">
                                                <ul>
                                                    <li style="padding-left: 25px;">Overnight Stay : <?=  $row_itinarary['stay'] ?></li>
                                                    <li style="padding-left: 25px;">Meal Plan : <?= $row_itinarary['meal_plan'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $count++; } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade cc-border-all" role="tabpanel" id="hotel" aria-labelledby="hotel-tab">
                                <div class="hotelList">
                                    <h4 class="packageHolidayHead primaryColor margin0 cc-border-bottom"><b>Hotel</b></h4>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr class="table-heading-row">
                                                    <th>Total Seats</th>
                                                    <th>From Date</th>
                                                    <th>To Date</th>
                                                </tr>
                                                    <?php 
                                                    $query = "Select * from tour_groups where tour_id = $row_tour[tour_id]";
                                                    $sq_tourgrp1 = mysql_query($query);
                                                    while($sq_tourgrp = mysql_fetch_assoc($sq_tourgrp1)) {
                                                    ?>
                                                      <tr>
                                                          <td><?php echo $sq_tourgrp['capacity']; ?></td>
                                                          <td><?php echo date('d/m/Y', strtotime($sq_tourgrp['from_date']));?></td>
                                                          <td><?php echo date('d/m/Y', strtotime($sq_tourgrp['to_date'])); ?></td>
                                                      </tr> 
                                                      <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade inclusionExclusion" role="tabpanel" id="dropdown1"
                                aria-labelledby="dropdown1-tab">
                                <div class="cc-border-all cc-margin-bottom-15">
                                    <h4 class="packageHolidayHead primaryColor margin0 cc-border-bottom"><b>Inclusions</b></h4>
                                    <div id="Inclusion1" class="panel-body">
                                        <?= $sq_package['inclusions'] ?>
                                    </div>
                                </div>
                                <div class="cc-border-all">
                                    <h4 class="packageHolidayHead primaryColor margin0 cc-border-bottom"><b>Exclusions</b></h4>
                                    <div class="panel-body">
                                        <?= $sq_package['exclusions'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--====== Train ==========-->
                    <?php 
                    $sq_t_count = mysql_num_rows(mysql_query("Select * from group_train_entries where tour_id = '$tour_id'"));
                    if($sq_t_count != '0'){
                    ?>
                    <div class="tour_head">
                        <div class="tour_right tour_incl tour-ri-com">
                            <h3 class="noMarg">Train Details</h3>
                            <div class="">
                                <div class="">
                                         <div class="table-responsive">
                                            <table class="table noMarg table-bordered">
                                                <thead>
                                                    <tr class="table-heading-row">
                                                        <th>S_No.</th>
                                                        <th>From_Location</th>
                                                        <th>To_Location</th>
                                                        <th>Class</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $count = 1; 
                                                        $query1 = "Select * from group_train_entries where tour_id = '$tour_id'";
                                                        $sq_tourgrp1 = mysql_query($query1);
                                                        while($sq_tourgrp2 = mysql_fetch_assoc($sq_tourgrp1)) 
                                                        {                         
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo $sq_tourgrp2['from_location']; ?></td>
                                                        <td><?php echo $sq_tourgrp2['to_location']; ?></td>
                                                        <td><?php echo $sq_tourgrp2['class']; ?></td>                       
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- Flight -->
                    <?php 
                    $sq_f_count = mysql_num_rows(mysql_query("Select * from group_tour_plane_entries where tour_id = '$tour_id'"));
                    if($sq_f_count != '0'){
                    ?>
                    <div class="tour_head">
                        <div class="tour_right tour_incl tour-ri-com">
                            <h3 class="noMarg">Flight Details</h3>
                            <div class="">
                                <div class="">
                                         <div class="table-responsive">
                                            <table class="table noMarg table-bordered">
                                                <thead>
                                                    <tr class="table-heading-row">
                                                        <th>S_No.</th>
                                                        <th>From_City</th>
                                                        <th>Sector_From</th>
                                                        <th>To_City</th>
                                                        <th>Sector_To</th>
                                                        <th>Airline_Name</th>
                                                        <th>Class</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $count = 1; 
                                                        $query = "Select * from group_tour_plane_entries where tour_id = '$tour_id'";
                                                        $sq_tourgrp1 = mysql_query($query);
                                                        while($sq_tourgrp = mysql_fetch_assoc($sq_tourgrp1)) {
                                                            $sq_airline = mysql_fetch_assoc(mysql_query("select * from airline_master where airline_id='$sq_tourgrp[airline_name]'"));
                                                            $sq_city = mysql_fetch_assoc(mysql_query("select city_name from city_master where city_id='$sq_tourgrp[from_city]'"));
                                                            $sq_city1 = mysql_fetch_assoc(mysql_query("select city_name from city_master where city_id='$sq_tourgrp[to_city]'"));
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo $sq_city['city_name']; ?></td>
                                                        <td><?php echo $sq_tourgrp['from_location']; ?></td>
                                                        <td><?php echo $sq_city1['city_name']; ?></td>
                                                        <td><?php echo $sq_tourgrp['to_location']; ?></td>
                                                        <td><?php echo $sq_airline['airline_name'].' ('.$sq_airline['airline_code'].')'; ?></td>
                                                        <td><?php echo $sq_tourgrp['class']; ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- Cruise -->
                    <?php 
                    $sq_c_count = mysql_num_rows(mysql_query("Select * from group_cruise_entries where tour_id = '$tour_id'"));
                    if($sq_c_count != '0'){
                    ?>
                    <div class="tour_head">
                        <div class="tour_right tour_incl tour-ri-com">
                            <h3 class="noMarg">Cruise Details</h3>
                            <div class="row">
                                <div class="col-md-12 mg_tp_30">
                                         <div class="table-responsive">
                                            <table class="table noMarg table-bordered">
                                                <thead>
                                                    <tr class="table-heading-row">
                                                        <th>S_No.</th>
                                                        <th>Route</th>
                                                        <th>Cabin</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $count = 1; 
                                                        $query = "select * from group_cruise_entries where tour_id = '$tour_id'";
                                                        $sq_tourgrp_c1 = mysql_query($query);
                                                        while($sq_tourgrp_c = mysql_fetch_assoc($sq_tourgrp_c1)) {
                                                      
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo $sq_tourgrp_c['route']; ?></td>
                                                        <td><?php echo $sq_tourgrp_c['cabin']; ?></td>
                                                    </tr>
                                                    <?php 
                                                    } ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>


                    
                    <!--====== Hotel ==========-->
                    <?php 
                    $sq_hotel_count = mysql_num_rows(mysql_query("select * from group_tour_hotel_entries where tour_id = '$tour_id'")); 
                    if($sq_hotel_count != '0'){
                    ?>
                    <div class="tour_head">
                        <div class="tour_right tour_incl tour-ri-com">
                            <h3 class="noMarg">Hotel Information</h3>
                            <div class="row">
                                <div class="col-md-12 mg_tp_30">
                                         <div class="table-responsive">
                                            <table  class="table noMarg table-bordered">

                                            <tr class="table-heading-row">

                                                <th>S_No.</th>

                                                <th>City_Name</th>

                                                <th>Hotel_Name</th>

                                                <th>Hotel_Type</th>

                                                <th>Total_Night</th>

                                            </tr>

                                           <?php

                                            $count_hotel =0; 

                                            $sq_pckg_hotel = mysql_query("select * from group_tour_hotel_entries where tour_id = '$tour_id'");          

                                             while($row_hotel = mysql_fetch_assoc($sq_pckg_hotel)){

                                                $sq_hotel = mysql_fetch_assoc(mysql_query("select * from hotel_master where hotel_id = '$row_hotel[hotel_id]'"));       

                                                $sq_city = mysql_fetch_assoc(mysql_query("select * from city_master where city_id = '$row_hotel[city_id]'"));       

                                              $count_hotel++;

                                             ?>

                                                  <tr>

                                                      <td><?= $count_hotel ?></td>

                                                      <td><?php echo ucfirst($sq_city['city_name']); ?></td>

                                                      <td><?php echo ucfirst($sq_hotel['hotel_name']); ?></td>

                                                      <td><?php echo $row_hotel['hotel_type']; ?></td>

                                                      <td><?php echo $row_hotel['total_nights']; ?></td>

                                                  </tr> 

                                                  <?php } ?>

                                        </table>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

        </div>
    </div>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="okpopup">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thank You</h4>
                </div>
                <div class="modal-body">
                    <p>Thank you for getting in touch <br>
                        We will contact you soon.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    <!--?php $desktop = selectQuery(VLIST,"*","device<>'android' AND device<>'Windows Phone' AND device<>''");
$mobile = selectQuery(VLIST,"*","(device='android' OR device='Windows Phone') AND device<>''"); ?-->

    <!--====== FOOTER  ==========-->
    <?php include "configSiteFooter.php"; ?>
    <!--====== FOOTER End ==========-->

</body>

<!-- Mirrored from www.lifeholidays.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 07:37:04 GMT -->
</html>