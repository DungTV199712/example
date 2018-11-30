<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Point
{
    private $x;
    private $y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
      return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function getXY()
    {
        print_r([$this->x,$this->y]);
    }
}
class MoveAblePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function getSpeed()
    {
        print_r([$this->xSpeed + $this->getX(),$this->ySpeed + $this->getY()]);
    }
    function move()
    {
//        $this->getX += $this->xSpeed;
    }
}
$point = new Point(3,4);
echo 'point coordinates : ';
$point->getXY();
echo '-> move -> : ';
$moveablePoint = new MoveAblePoint(3,4,3,4);
$moveablePoint->getSpeed();
?>
</body>
</html>