<?php 
include "../config.php"; 

$query1 = "select entry_id,city_id,excursion_name,duration from excursion_master_tariff where active_flag='Active'";

$city_id = $_POST['city_id'];

if($city_id!=""){
    $query1 .=" and city_id='$city_id' ";
}

                        $query = mysql_query($query1);
                        while($row_ser = mysql_fetch_assoc($query)){
                        $sq_city = mysql_fetch_assoc(mysql_query("select city_name from city_master where city_id='$row_ser[city_id]'"));
                        $sq_exc_count = mysql_num_rows(mysql_query("select * from excursion_master_images where exc_id = $row_ser[entry_id]"));
                        if($sq_exc_count == 0){
                            $newUrl = 'img/sightDummy.jpg'; 
                        }
                        else
                        {
                            $sq_exc_image = mysql_query("select * from excursion_master_images where exc_id = $row_ser[entry_id]");
                            while($row_exc2 = mysql_fetch_assoc($sq_exc_image))
                            { 
                              $image = $row_exc2['image_url']; 
                              $newUrl = preg_replace('/(\/+)/','/',$image);
                              $newUrl = explode('uploads', $newUrl);
                              $newUrl = BASE_URL.'uploads'.$newUrl[1]; 
                            }
                        }

                    ?>
                    <div class="col-xs-12 col-md-4 col-sm-6">
                        <a href="activity-enquiry.php">
                            <div class="pack-grid-thumb grid-left-col6" style="background-image: url(<?= $newUrl ?>);"><div class="grd-view-overlap"><h3 class="cc-font-weight-8"><?=  $row_ser['excursion_name'] ?></h3></div>
                            </div>
                            <div class="exDetail">
                                <ul>
                                    <li><?=  $row_ser['duration'] ?></li>
                                    <li><?= $sq_city['city_name'] ?></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <?php } ?>