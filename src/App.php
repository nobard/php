<?php
class Point{
    public $X;

    public $Y;

    public function Move($x, $y, $dx, $dy){
        $x += $dx;
        $y += $dy;
    }
}

class Vector{
    public $X;

    public $Y;

    public function VectorModule($x, $y){
        return sqrt($x^2 + $y^2);
    }

    public function CheckToNull($x, $y){
        if(($x^2 + $y^2) == 0)
            echo 'Нулевой';
        else
            echo 'Ненулевой';
    }

    public function CheckToPerpendicular($x1, $y1, $x2, $y2){
        if(($x1 * $x2 + $y1 * $y2) == 0)
            echo 'Векторы перпендикулярны';
        else
            echo 'Векторы не перпендикулярны';
    }
}
?>