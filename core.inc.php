<?php
// Log in method with assistance from http://friesian.hubpages.com/hub/how-to-create-login-form-in-php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
 
if(isset($_SERVER['HTTP_REFERER']))
{
  $http_referer = $_SERVER['HTTP_REFERER'];
} 
else
{
 $http_referer = '';
}
 
 
function loggedin()
{
if (isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
{
return true;
}
else
{
return false;
}
}
 
?>