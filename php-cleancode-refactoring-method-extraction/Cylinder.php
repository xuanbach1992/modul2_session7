<?php
class Cylinder
{
    protected $radius;
    protected $height;
    public function __construct($radius, $height)
    {
        $this->radius = $radius;
        $this->height = $height;
    }
    public function getVolume()
    {
        return $this->getPerimeter() * $this->height + 2 * $this->getArea();
    }
    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }
    function getArea(){
        return pi() * $this->radius * $this->radius;;
    }
}