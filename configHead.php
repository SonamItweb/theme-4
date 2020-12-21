<!-- Mirrored from www.lifeholidays.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 07:36:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<?php
$adminDetail = mysql_fetch_assoc(mysql_query("select * from app_settings where 1"));
$contCode = mysql_fetch_assoc(mysql_query("select * from country_list_master where country_id = $adminDetail[country]"));
?>