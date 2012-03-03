<?php

$rakuten = new rakuten(0);
$rakuten->rise(0);
echo $rakuten->getSum();

class rakuten{

    private $sum;

    public function __construct($sum){
        $this->sum = $sum;
    }

    public function rise($step){
        if($step < 100){
            $this->rise($step + 1);
            $this->rise($step + 2);
            $this->rise($step + 3);
        } else {
            $this->sum++;
        }
    }
    
    public function getSum(){
        return $this->sum;
    }
}
