<?php
namespace circle;

class Cylinder extends Circle
{
    protected float $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return float|int
     */
    public function getArea()
    {
        return $this->area;
    }

    public function calculatorVolume(): float{
        return $this->area * $this->height;
    }

    public function __toString(): string
    {
       return $this->calculatorVolume();
    }
}