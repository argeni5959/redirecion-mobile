<?php

require_once 'Mobile_Detect.php';
if($detect->isMobile() || $detect->isTablet()) {
    echo "<link rel="stylesheet" href="mobile.css type=" text="" css'="">";
} else {
    echo "<link rel="stylesheet" href="style.css type=" text="" css'="">";
}





?>
