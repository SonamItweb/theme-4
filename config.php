<?php
/*$seperator = strstr(strtoupper(substr(PHP_OS, 0, 3)), "WIN") ? "\\" : "/";
session_save_path('..'.$seperator.'xml'.$seperator.'session_dir');
ini_set('session.gc_maxlifetime', 6); // 3 hours
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.cookie_secure', FALSE);
ini_set('session.use_only_cookies', TRUE);*/
ini_set("session.gc_maxlifetime", 3*60*60);
ini_set('session.gc_maxlifetime', 3*60*60);
session_start();

date_default_timezone_set('Asia/Kolkata');

set_error_handler("myErrorHandler");
function myErrorHandler($errno, $errstr, $errfile, $errline){
   // echo  "<br><br>".$errno."<br>".$errstr."<br>".$errfile."<br>".$errline;
}
$localIP = getHostByName(getHostName());

$connection=mysql_connect("localhost","itourscl_v7tuser","FiIh;3~d1Oh8");
if(!$connection){ echo "Unable To make Connection."; }

$db_connect=mysql_select_db("itourscl_v7test");
if(!$db_connect) { echo "Database Not Connected."; }

define('BASE_URL', 'https://itourscloud.com/v7/v7/');
mysql_query("SET SESSION sql_mode = ''");
mysql_set_charset('utf8',$connection);

//**********Global Variables start**************//
global $admin_logo_url, $circle_logo_url, $report_logo_small_url, $app_email_id_send, $app_smtp_host, $app_smtp_port, $app_smtp_password;

$admin_logo_url = BASE_URL.'images/Admin-Area-Logo.png';
$circle_logo_url = BASE_URL.'images/logo-circle.png';
$report_logo_small_url = BASE_URL.'images/Receips-Logo-Small.jpg';


global $secret_key;
$secret_key = "secret_key_for_iTours";

global $encrypt_decrypt;



$sq_app_setting = mysql_fetch_assoc(mysql_query("select * from app_settings"));
$app_email_id_send = $sq_app_setting['app_email_id'];
$app_smtp_host = $sq_app_setting['app_smtp_host'];
$app_smtp_port = $sq_app_setting['app_smtp_port'];
$app_smtp_password = $sq_app_setting['app_smtp_password'];

$encrypt_decrypt = new encrypt_decrypt;
class encrypt_decrypt
{
    function fnEncrypt($sValue, $sSecretKey)
    {
        return rtrim(
            base64_encode(
                mcrypt_encrypt(
                    MCRYPT_RIJNDAEL_256,
                    $sSecretKey, $sValue, 
                    MCRYPT_MODE_ECB, 
                    mcrypt_create_iv(
                        mcrypt_get_iv_size(
                            MCRYPT_RIJNDAEL_256, 
                            MCRYPT_MODE_ECB
                        ), 
                        MCRYPT_RAND)
                    )
                ), "\0"
            );
    }
    function fnDecrypt($sValue, $sSecretKey)
    {
        return rtrim(
            mcrypt_decrypt(
                MCRYPT_RIJNDAEL_256, 
                $sSecretKey, 
                base64_decode($sValue), 
                MCRYPT_MODE_ECB,
                mcrypt_create_iv(
                    mcrypt_get_iv_size(
                        MCRYPT_RIJNDAEL_256,
                        MCRYPT_MODE_ECB
                    ), 
                    MCRYPT_RAND
                )
            ), "\0"
        );
    }
}
//**********App Settings Global Variables start**************//


?>
