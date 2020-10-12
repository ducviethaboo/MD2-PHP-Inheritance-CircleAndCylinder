<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($_radius, $_color)
    {
        $this->radius = $_radius;
        $this->color = $_color;
    }


    public function getRadius()
    {
        return $this->radius;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius,2);
    }


}