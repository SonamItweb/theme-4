 
<?php 

$localIP = getHostByName(getHostName());

$connection=mysql_connect("localhost","itourscl_v7tuser","FiIh;3~d1Oh8");
if(!$connection){ echo "Unable To make Connection."; }

$db_connect=mysql_select_db("itourscl_v7test");
if(!$db_connect) { echo "Database Not Connected."; }

define('BASE_URL', 'https://itourscloud.com/v7/v7/');
mysql_query("SET SESSION sql_mode = ''");
mysql_set_charset('utf8',$connection);

$entry_id = $_POST['entry_id'];
$query = "select * from hotel_master where hotel_id='$entry_id'";

$sq_hotel = mysql_query($query);
$row_hotel = mysql_fetch_assoc($sq_hotel);

$sq_city = mysql_fetch_assoc(mysql_query("select * from city_master where city_id = $row_hotel[city_id]"));
// $mobile_no = $encrypt_decrypt->fnDecrypt($row_hotel['mobile_no'], $secret_key);

?>
<div class="modal fade profile_box_modal" id="display_modal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
  	
    <div class="modal-content">
      <div class="modal-body profile_box_padding">
      	
      	<div>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				 <div class="panel panel-body fieldset profile_background">
				 	 <!-- Tab panes1 -->
					  <div class="tab-content">

					    <!-- *****TAb1 start -->
					    <div role="tabpanel" class="tab-pane active" id="basic_information">
					     <div class="col-md-12 col-sm-12 col-xs-12">
		                    <div style="margin-bottom: 0;">
		                        <div cass="blog-full mar-bottom-30">
		                            <div class="row">
		                                <div class="col-md-4 col-xs-12">
		                                    <div class="hotelSLider">
		                                        <div class="owl-carousel">
<?php 

$sq_hotel_count = mysql_num_rows(mysql_query("select * from hotel_vendor_images_entries where hotel_id = '$entry_id'"));
if($sq_hotel_count == 0){
    $newUrl = 'images/hotelDummy.jpg'; 

?>

<div class="item">
	<img src=<?= $newUrl ?> class="img-responsive">
</div>

<?php 
}
else
{
    $sq_hotel_image = mysql_query("select * from hotel_vendor_images_entries where hotel_id = '$entry_id'");
    while($row_hotel2 = mysql_fetch_assoc($sq_hotel_image))
    { 
      $image = $row_hotel2['hotel_pic_url']; 
      $newUrl = preg_replace('/(\/+)/','/',$image);
      $newUrl = explode('uploads', $newUrl);
      $newUrl = BASE_URL.'uploads'.$newUrl[1]; 

      ?>
		<div class="item">
			<img src=<?= $newUrl ?> class="img-responsive">
		</div>
	  <?php 
    }
}

?>
						                      </div>
		                                    </div>
		                                </div>
		                                <div class="col-md-8 col-xs-12">
		                                    <div class="blog-content">
		                                        <h3 class="blog-title"><?= $row_hotel['hotel_name'] ?></h3>
		                                        <p class="price"><span><?= $row_hotel['rating_star'] ?></span> (<?= $row_hotel['hotel_type'] ?>)</p>
		                                        
		                                        <p><i class="flaticon-location-pin"></i><?= $row_hotel['hotel_address'] ?>, <?= $sq_city['city_name'] ?></p>
		                                        
		                                    </div>
		                                </div>
		                                <div class="col-xs-12">

		                                        <p><?= $row_hotel['policies'] ?></p>
		                                    
		                                </div>
		                                <div class="col-xs-12">

		                                        <hr>
		                                    
		                                </div>
		                                <div class="col-xs-12">

		                                        <p><?= $row_hotel['description'] ?></p>
		                                    
		                                </div>
		                                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3 col-xs-12">

		                                        <a href="hotel-enquiry.php" class="hotel-btn">Check Availability</a>
		                                    
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
					    </div>
					    <!-- ********Tab1 End******** --> 
		                

					  </div>
				 </div>

        </div>
        
	   </div>
     
      </div>
    </div>
  
</div>



<script src="js/owl.carousel.min.js"></script>
<script>
	$('#display_modal').modal('show');

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        pagination:false,
        autoPlay:true,
        singleItem:true,
        navigation:true,
        navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
</script>