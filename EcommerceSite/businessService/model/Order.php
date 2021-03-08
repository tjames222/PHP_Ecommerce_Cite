<?php
namespace businessService\model;

class Order
{
    ////////// Properties
    private $id;
    private $date;
    private $user_id;

    ////////// Constructor
    public function __construct($id, $date, $userid)
    {
        $this->id = $id;
        $this->date = $date;
        $this->user_id = $userid;
    }
    
    ///////// Getters and Setters
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * @return mixed
     */
    public function getUser_id()
    {
        return $this->user_id;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    /**
     * @param mixed $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }
}

