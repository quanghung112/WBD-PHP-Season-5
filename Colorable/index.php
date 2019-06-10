<?php
include "Interface/Colorable.php";
include "Class/Shape.php";
include "Class/Rectangle.php";
include "Class/Circle.php";
include "Class/Square.php";
$shape[0]=new Rectangle('Rectangle',6,8);
$shape[1]=new Rectangle('Rectangle2',10,6);
$shape[2]=new Square('Square',10);
$shape[3]=new Circle('Circle',8);
$shape[4]=new Square('Square1',6);
foreach ($shape as $value){
    echo "area of ".$value->getName()." is: ".$value->calculateArea()."<br/>";
    if ($value instanceof Colorable){
        echo $value->getName().": ".$value->howToColor()."<br/>";
    }
}