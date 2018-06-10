<?php

class Rectangle extends Figure
{
    
    public function __construct() 
            {
        $this->name = "Rectangle";
        $this->side1 = $a;
        $this->side2 = $b;
        parent::__construct('Rectangle');
    }
    
    public function getPerimetr()
    {
        return ($this->side1 + $this->side2) * 2;
    }
    
    public function getArea()
    {
        return $this->side1 * $this->side2;
      }
}