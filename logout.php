<?php

include 'bootstrapper.php';

session_destroy();
header('location:'.URLROOT.'/login.php');
?>