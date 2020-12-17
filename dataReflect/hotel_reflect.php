<?php include "../config.php"; 


$city_id = $_POST['city_id'];
$query = "select * from hotel_master where active_flag = 'Active' ";


if($city_id!=""){
	$query .=" and city_id='$city_id' ";
}

$sq_hotel = mysql_query($query);

while($row_hotel = mysql_fetch_assoc($sq_hotel)){
$sq_city = mysql_fetch_assoc(mysql_query("select * from city_master where city_id = $row_hotel[city_id]"));
$mobile_no = $encrypt_decrypt->fnDecrypt($row_hotel['mobile_no'], $secret_key);
$sq_hotel_count = mysql_num_rows(mysql_query("select * from hotel_vendor_images_entries where hotel_id = $row_hotel[hotel_id]"));
if($sq_hotel_count == 0){
    $newUrl = 'img/hotelDummy.jpg'; 
}
else
{
    $sq_hotel_image = mysql_query("select * from hotel_vendor_images_entries where hotel_id = $row_hotel[hotel_id]");
    while($row_hotel2 = mysql_fetch_assoc($sq_hotel_image))
    { 
      $image = $row_hotel2['hotel_pic_url']; 
      $newUrl = preg_replace('/(\/+)/','/',$image);
      $newUrl = explode('uploads', $newUrl);
      $newUrl = BASE_URL.'uploads'.$newUrl[1]; 
    }
}
?>


                            <div class="pachage-preview col-md-6 col-sm-12 col-xs-12">
                                <div class="card pkg-list-card">
                                    <div class="media">
                                        <div class="media-left pkg-med-left">
                                            <div class="package-thumb text-center">
                                                <!--<a href="hotel-enquiry.php" class="black"> </a>-->
                                                
                                                    <img src="<?= $newUrl ?>"
                                                        class="media-object"  class="img-responsive" onclick="display_modal(<?= $row_hotel['hotel_id'] ?>)">
                                                
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="pkg-list-body">
                                                <div title=" All Of Andaman" class="list-pack-title" itemscope itemtype="http://schema.org/Product">
                                                    <h3 class="cc-font-weight-8" title="All Of Andaman" itemprop="name">
                                                        <a href="hotel-enquiry.php" class="black"><?= $row_hotel['hotel_name'] ?></a>
                                                    </h3>
                                                </div>
                                                <div class="duration text-primary mbottom15 small">
                                                    <span> <?= $row_hotel['rating_star'] ?>
                                                    </span> | <span class="viewtourcode"><?= $row_hotel['hotel_type'] ?></span>
                                                </div>
                                                <div class="mute-text mbottom20" itemscope itemtype="http://schema.org/Offer">
                                                    <span class="small"><?= $row_hotel['hotel_address'] ?></span>
                                                    <div class="pks-price-rate primaryColor cc-font-weight-8" itemprop="price"><small class="text-muted"><i class="fa fa-map-marker"></i> <?= $sq_city['city_name'] ?></small>
                                                    </div>
                                                </div>
                                                <div class="panelBtn">
                                                    <a href="hotel-enquiry.php" class="btn cc-secondary-btn col-xs-6 col-sm-6 col-md-6">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php } ?>