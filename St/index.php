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
class StopWatch{
    private $starTime;
    private $endTime;
    public function start()
    {
        $this->starTime = date('Y-M-d h:m:s');
    }
    public function getStarTime(){
        return $this->starTime;
    }
    function stop(){
        return $this->getEndTime();
    }

}
$stopwatch = new $StopWatch();
echo $this->starTime;
?>
</body>
</html>