<?php


class RectangleCompare implements Comparator
{

    function compare($rectangle1,$rectangle2)
    {
        // TODO: Implement compare() method.
        $areaRectangle1=$rectangle1->getArea();
        $areaRectangle2=$rectangle2->getArea();
        if ($areaRectangle1>$areaRectangle2){
            return 1;
        } else if ($areaRectangle1==$areaRectangle2){
            return 0;
        } else {
            return -1;
        }
    }
}