<?php 
// getA()->getB()->getC();
// $name = new Person();
// $name->get();



// ao, ca chua, gao, xoai, 


//5 cai ao: 120k/p,
//7 kg- ca chua 50k/kg,
//10kg gao: 15k/kg
// 3kg xoai: 80k/kg 

// tinh tien bill $bill

class Bill {
    protected $shirt_price =  120000;
    protected $tomato_price =  50000;
    protected $rice_price =  15000;
    protected $mango_price =  80000;
    public $bill = 0;

    public function getShirt($kg){
        $this->bill += $kg*$this->shirt_price;
        return $this;
    }

    public function getTomato($kg){
        $this->bill += $kg*$this->tomato_price;
        return $this;
    }

    public function getRice($kg){
        $this->bill += $kg*$this->rice_price;
        return $this;
    }

    public function getMango($kg){
        if($kg > 0){
            $this->bill += $kg*$this->mango_price;
        }
        return $this;
    }
}

$myMill = new Bill();

$myMill->getTomato(7)->getRice(15)->getMango(3)->getShirt(5);

echo $myMill->bill;
// getRiceValue(5)