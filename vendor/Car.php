<?php

class Car {
    /**
     *
     * @var string
     */
    protected $carcass;
    /**
     *
     * @var string
     */    
    protected $color;
    /**
     *
     * @var string
     */    
    protected $engine;
    /**
     *
     * @var string
     */    
    protected $number;
    
        public function __construct($carcass, $color, $engine, $number) {
        $this->carcass=$carcass;
        $this->color=$color;
        $this->engine=$engine;
        $this->number=$number;
    }
    /**
     * 
     * @return string
     */
    public function __toString() {
        $str='';
        $str .='Кузов -' . $this->carcass.'<br>';
        $str .='Цвет -' . $this->color.'<br>';
        $str .='Объем двигателя ' . $this->engine.'<br>';
        $str .='Номер ' . $this->number.'<br>';
        return $str;
    }
}
