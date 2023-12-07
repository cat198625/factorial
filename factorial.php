<?php
class Factorial {
    private $num1;
    private $num2;

    public function __construct() {
        $this->num1 = $_SERVER['argv'][1];
        $this->num2 = $_SERVER['argv'][2];
        $isValid = $this->isValid($this->num1, $this->num2);

        if($isValid){
            $factorial1 = $this->factorial($this->num1);
            $factorial2 = $this->factorial($this->num2);
            echo $this->ratioFactorials($factorial1, $factorial2);
        }else{
            echo 'error';
        }
    }

    function isValid($num1, $num2){
        if($num1 < $num2){
            return false;
        }

        return true;
    }

    function factorial($num){
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }

    function ratioFactorials($factorial1, $factorial2){
        return $factorial1/$factorial2;
    }
}