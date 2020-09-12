<? php

require_once 'Mobile-Detect-master/Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect;
if($detect->isAndroidOS()) {
    header('Location: http://android.com/');
   
}else if($detect->isiPhone()){
    header('Location: http:/iphone.com/');
    
}






?>
