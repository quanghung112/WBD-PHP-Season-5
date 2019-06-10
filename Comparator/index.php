<?php
include "Astractclass/Shape.php";
include "Interface/Comparator.php";
include "Class/Rectangle.php";
include "Class/RectangleCompare.php";
$rectangle1=new Rectangle('rectangle1',4,5);
$rectangle2=new Rectangle('rectangle2',4,5);
$rectangleCompare=new RectangleCompare();
echo $rectangleCompare->compare($rectangle1,$rectangle2);
