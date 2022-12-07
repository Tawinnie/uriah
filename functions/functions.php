<?php  
    function getIPAddress() {  
    //check if IP address is from a shared internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip_address = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    // check if IP is shared 

    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip_address = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip_address;  
}
