<?php
include "Class/Shape.php";
include "Interface/Resizeable.php";
include "Class/Circle.php";
include "Class/Rectangle.php";
include "Class/Square.php";

$shape[0]=new Circle('Circle',10);
$shape[1]=new Rectangle('Rectangle',10,5);
$shape[2]=new Square('Square',10);
foreach ($shape as $value) {
    echo $value->getName(). " is area: ".$value->calculateArea();
    echo "<br/>";
    $size=rand(1,100);
    echo "Size up is: $size".'%'."<br/>";
    $value->resize($size);
    echo $value->getName()." new is area: ".$value->calculateArea();
    echo "<br/>";
}
?>