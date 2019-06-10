<?php


class Rectangle extends Shape
{
    private $width;
    private $height;
    public function __construct($name,$height,$width)
    {
        parent::__construct($name);
        $this->width=$width;
        $this->height=$height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getArea()
    {
        // TODO: Implement getArea() method.
        return $this->width*$this->height;
    }
    public function getPer()
    {
        // TODO: Implement getPer() method.
        return ($this->width+$this->height)*2;
    }
}