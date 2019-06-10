<?php


class Circle extends Shape implements Resizeable
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }

    function resize($size)
    {
        // TODO: Implement resize() method.
        $this->radius+=$this->radius*$size/100;
    }
}