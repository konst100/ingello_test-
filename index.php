<?php
class MyClass {
    public $x;
    public $y;
    const pi = 3.1415926;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        echo "Был создан объект с параметрами: $x и $y";
    }
}
?>
