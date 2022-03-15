<?php
$pattern = '/^\([0-9]{2}\)\-\([0]{1}[0-9]{9}\)/';
$phone_number = '(84)-(0978489648)';
function checkPhoneNumber($pattern,$phone_number){
    if(preg_match($pattern,$phone_number)){
        echo "Số điện thoại hợp lệ";
    } else {
        echo "Nhầm số ";
    }
}
echo checkPhoneNumber($pattern,$phone_number);