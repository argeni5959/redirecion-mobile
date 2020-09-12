<? php

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if($detect->isAndroidOS()) {
    header('Location: http://android.com/');
    exit;
}else if($detect->isiPhone()){
    header('Location: http:/iphone.com/');
    exit;
}






?>
