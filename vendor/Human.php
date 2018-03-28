<?php

class Human {
    /**
     *
     * @var string
     */
    protected $name;
    /**
     *
     * @var string
     */
    protected $surname;
    /**
     *
     * @var int
     */
    protected $age;
    /**
     *
     * @var string
     */
    protected $address;
    
    /**
     * 
     * @param string $name
     * @param string $surname
     * @param int $age
     * @param string $address
     */
    public function __construct($name, $surname, $age, $address) {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
        $this->address=$address;
    }
    /**
     * 
     * @return string
     */
    public function __toString() {
        $str='';
        $str .='Имя' . $this->name;
        $str .='Фамилия' . $this->surname;
        $str .='Возраст' . $this->age;
        $str .='Адрес' . $this->address;
    }
}
