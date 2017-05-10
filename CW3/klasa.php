<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Admin
 */
class klasa {
    private $email;
    private $userName;
    private $fullName;
    private $Status;
    
    public function __construct($userName, $fullName, $email, $Status) {
        $this->userName=$userName;        $this->fullName=$fullName;        $this->email=$email;        $this->Status=$Status;
    }
    
    function show()
    {
        echo "Username: ".$this->userName."</br>Fullname: ".$this->fullName."</br>Email: ".$this->email."</br>Status: ".$this->Status."</br>";
    }
    
    function getName()
    {
        return $this->userName;
    }
    function getFullName()
    {
        return  $this->fullName;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getStatus()
    {
        return $this->Status;
    }
    
    function setName($userName)
    {
        $this->userName=$userName;
    }
    function setFullName($fullName)
    {
        $this->fullName=$fullName;
    }
    function setEmail($email)
    {
        $this->email=$email;
    }
    function setStatus($Status)
    {
        $this->Status=$Status;
    }
}
