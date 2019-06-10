<?php


class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }

    function resize($size)
    {
        // TODO: Implement resize() method.
        $this->width += $this->width * $size / 100;
        $this->height += $this->height * $size / 100;
    }
}