<?php

class Student extends Human{
    /**
     *
     * @var string
     */
    protected $group;
    /**
     *
     * @var string
     */    
    protected $email;
    
    public function __construct($name, $surname, $age, $address, $group, $email) {
        parent::__construct($name, $surname, $age, $address);
        $this->group=$group;
        $this->email=$email;
    }

    public function __toString(){
       $str= parent::__tostring();
       $str.='Группа - '. $this->group.'<br>';
       $str.='Почта - '. $this->email.'<br>';
       return $str;
    }
}