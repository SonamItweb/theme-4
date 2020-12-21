

<div id="overlay"><div id="progstat"></div><div id="progress"></div></div>

<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/select2.full.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
     $(document).ready(function () {
        var slider = $('.owl-carousel');
        var amountHeaderImages = slider.find('img').length;
        slider.owlCarousel({
            loop: (amountHeaderImages > 3),
            nav: true,
            margin: 20,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 3
                }
            }
        });
    });
</script>

<script>
document.onkeydown = function(e) {
if (e.ctrlKey &&
(e.keyCode === 67 ||
e.keyCode === 86 ||
e.keyCode === 85 ||
e.keyCode === 117)) {
window.event.returnValue = false;
return false;
} else {
return true;
}
};
</script>

<script type="text/javascript">
$(document).ready(function () {
 //Disable cut copy paste
 $('body').bind('cut copy paste', function (e) {
e.preventDefault();
 });
 
 //Disable mouse right click
 $("body").on("contextmenu",function(e){
return false;
 });
});
</script>

<header>

        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $sq_setting['header_strip_note'] ?></li>
                                <li>Phone: <?php if($contCode['phone_code']!=''){?>(<?= $contCode['phone_code'] ?>)<?php } ?> <?= $adminDetail['app_contact_no'] ?></li>
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
                    //Group file name
                    $package_fname = str_replace(' ', '_', $row_tour['tour_name']);
                    $file_name = 'group_tours/'.$package_fname.'-'.$row_tour['tour_id'].'.php';
                    
                    ?>
                    <li><a href="<?=$file_name?>"><?=  $row_tour['tour_name'] ?></a></li>
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
                //Package file name
                $package_fname = str_replace(' ', '_', $row_tour['package_name']);
                $file_name = 'package_tours/'.$package_fname.'-'.$row_tour['package_id'].'.php';
            ?>
            <li><a href="<?=$file_name?>"><?= $row_tour['package_name']?></a></li>
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