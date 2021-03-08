<?php
namespace businessService\model;

class Address
{
    ////////// Properties
    private $id;
    private $addresstype;
    private $isdefault;
    private $user_id;
    private $street;
    private $city;
    private $state;
    private $postalcode;
    
    ////////// Constructor
    public function __construct($id, $addressType, $isDefault, $userID, $street, $city, $state, $postal)
    {
        $this->id = $id;
        $this->addresstype = $addressType;
        $this->isdefault = $isDefault;
        $this->user_id = $userID;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->postalcode = $postal;
    }
      
    ////////// Getters and Setters
    public function getId()
    {
        return $this->id;
    }

    public function getAddresstype()
    {
        return $this->addresstype;
    }

    public function getIsdefault()
    {
        return $this->isdefault;
    }

    public function getUser_idl()
    {
        return $this->user_idl;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getPostalcode()
    {
        return $this->postalcode;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAddresstype($addresstype)
    {
        $this->addresstype = $addresstype;
    }

    public function setIsdefault($isdefault)
    {
        $this->isdefault = $isdefault;
    }

    public function setUser_idl($user_idl)
    {
        $this->user_idl = $user_idl;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    }
}

