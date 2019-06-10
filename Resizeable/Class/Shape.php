<?php


abstract class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
    abstract function calculateArea();
    abstract function calculatePerimeter();
}