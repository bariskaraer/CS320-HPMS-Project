<?php
if($_SESSION['adminID']){
unset($_SESSION['adminID']);
}
session_destroy();
Header ("Location: $url/login");
?>