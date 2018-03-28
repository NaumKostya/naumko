<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author office-hr77
 */
class test {
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
     * @var ing 
     */
    protected $age;
    /**
     * 
     * @param type $name
     * @return boolean
     */
    public function setName($name){
        if(is_string($name)){
            $this->name=$name;
            return true;
        }else{
            return false;
        }
    }
    /**
     * 
     * @param type $surname
     * @return boolean
     */
    public function setSurname($surname){
        if(is_string($surname)){
            $this->surname=$surname;
            return true;
        }else{
            return false;
        }
            
    }
    /**
     * 
     * @param type $age
     * @return boolean
     */
    public function setAge($age){
        if(is_int($age)){
        if($age>0){    
            $this->age=$age;
            return true;
        }else{
            return false;
        }
        }else{
            return false;
        }
    }
        /**
         * 
         * @param string $name
         * @param mixed $value
         */
        public function __set($name, $value){
            $method_name='set'.ucfirst($name);
            //получаем имя в формате setСвойство
            if(method_exists($this, $method_name)){
                $this->$method_name($value);
            }
        }
        /**
         * 
         * @param string $name
         * @return boolean
         */
        public function __get($name){
            if(property_exists($this, $name)){
            return $this->$name;
            }else{
            return false;
            }
        }
    }