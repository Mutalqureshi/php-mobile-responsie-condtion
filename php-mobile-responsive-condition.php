<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if(preg_match('/mobile/i', $user_agent)) {
  // code to execute if the device is a mobile device
  echo "Mobile Device";
} else {
  // code to execute if the device is not a mobile device
  echo "Desktop";
}
?>