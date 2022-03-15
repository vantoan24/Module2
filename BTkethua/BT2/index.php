<?php
include_once "Point2D.php";
include_once  "Point3D.php";
use BT2\Point2D;
use BT2\Point3D;
$point2d = new Point2D(2,3);
echo $point2d->getXY();
$point3d = new Point3D(4,5,6);
echo $point3d -> getXYZ(5,6,8);
