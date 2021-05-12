<?php
namespace circle;

class Circle
{
    protected float $radius;
    protected string $color;
    protected float $area;
    public array $array;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->area = pi() * pow($radius,2);
        $this->array = [1,2,3,4];

    }



    /**
     * @return float|int
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

   public function __toString(): string
   {
       // TODO: Implement __toString() method.
       return $this->getArea();
   }
}