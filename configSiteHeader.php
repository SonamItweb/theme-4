

<div id="overlay"><div id="progstat"></div><div id="progress"></div></div>
<header>


        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> Mon - Sat 08:00 - 18:00 Sunday close
                                </li>
                                <li>Phone: (<?= $contCode['phone_code'] ?>) - <?= $adminDetail['app_contact_no'] ?>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="discount.php">Offers</a>
                                </li>
                                <li><a href="enquiry.php">Enquiry</a>
                                </li>
                                <li><a href="<?= BASE_URL.'view/customer'?>" target="_blank">My Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<nav class="navbar navbar-default themeMenu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
      <img src="<?= $admin_logo_url ?>">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
         <li>
                        <a href="index.php">Home </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Group Tours<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="point1"><a href="group-package.php">Exploer All Tours</a></li>
                        <?php
                        $count=1;
                        $sq_tours = mysql_query("select tour_id,tour_name from tour_master where active_flag='Active'");
                        while($row_tour = mysql_fetch_assoc($sq_tours)){
                            if($count>10){
                                break;
                            }
                        ?>
                            <li class="point1"><a href="group-tour-detail.php?id=<?=  $row_tour[tour_id] ?>"><?=  $row_tour['tour_name'] ?></a></li>
                        <?php $count++; } ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">Holidays<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="point1"><a href="packages.php">Exploer All Tours</a></li>
                        <?php 
                          $count = 1;
                          $sq_tours = mysql_query("select * from custom_package_master where status = 'Active'");
                          while($row_tour = mysql_fetch_assoc($sq_tours)){
                              if ($count>10) {
                                  break;
                              }
                          ?>
                          <li><a href="tour-details.php?id=<?=  $row_tour[package_id] ?>"><?= $row_tour['package_name']?></a></li>
                          <?php } ?>
                        </ul>
                    </li>
                    <li><a href="hotels-list.php">Hotels</a></li>
                    <li><a href="activities.php">Activities</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>