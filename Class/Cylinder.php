<?php
include_once 'Circle.php';

class Cylinder extends Circle
{
    public $height;

    public function __construct($_radius, $_color, $_height)
    {
        parent::__construct($_radius, $_color);
        $this->height = $_height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}