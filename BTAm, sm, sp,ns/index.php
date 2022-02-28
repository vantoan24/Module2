<?php
include "dongha/Profile.php";
include "giolinh/Profile.php";

use giolinh\Profile;
use dongha\Profile as ProfileDongha;
// $objPro = new Profile();
$objPro = new ProfileDongha();

echo $objPro->name;
