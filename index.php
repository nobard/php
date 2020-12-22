<?php

$T1 = new Point;
$T1->X = 4;
$T1->Y = 3;

$V1 = new Vector;
$V1->X = 4;
$V1->Y = 6;

$V2 = new Vector;
$V2->X = 0;
$V2->Y = 0;

$V3 = new Vector;
$V3->X = -3;
$V3->Y = 2;

echo Vector::VectorModule($V1->X, $V1->Y).'<br>';
echo Vector::VectorModule($V2->X, $V2->Y).'<br>';
echo Vector::VectorModule($V3->X, $V3->Y).'<br>';

Vector::CheckToPerpendicular($V1->X, $V1->Y, $V3->X, $V3->Y);

Point::Move($T1, $V1->X, $V1->Y);
print_r('x = '.$T1->X.'<br>'.'y = '.$T1->Y);

class Point{
    public $X;

    public $Y;

    public static function Move($T1, $dx, $dy){
        $T1->X += $dx;
        $T1->Y += $dy;
    }
}

class Vector{
    public $X;

    public $Y;

    public static function VectorModule($x, $y){
        return sqrt($x * $x + $y * $y);
    }

    public function CheckToNull($x, $y){
        if(($x^2 + $y^2) == 0)
            echo 'Нулевой';
        else
            echo 'Ненулевой';
    }

    public static function CheckToPerpendicular($x1, $y1, $x2, $y2){
        if(($x1 * $x2 + $y1 * $y2) == 0)
            echo 'Векторы перпендикулярны'.'<br>';
        else
            echo 'Векторы не перпендикулярны';
    }
}
?>
