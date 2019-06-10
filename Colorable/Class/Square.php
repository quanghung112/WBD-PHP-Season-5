<?php

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    function howToColor()
    {
        // TODO: Implement howToColor() method.
        return "Color all four side";
    }
}