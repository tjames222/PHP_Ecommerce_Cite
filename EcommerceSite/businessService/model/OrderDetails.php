<?php
namespace businessService\model;

class OrderDetails
{
    ////////// Properties
    private $id;
    private $orders_id;
    private $products_id;
    private $quantity;
    private $currentprice;
    private $currentdescription;

    ////////// Constructor
    public function __construct($id, $orderId, $productId, $quantity, $currPrice, $currDesc)
    {
        $this->id = $id;
        $this->orders_id = $orderId;
        $this->products_id = $productId;
        $this->quantity = $quantity;
        $this->currentprice = $currPrice;
        $this->currentdescription = $currDesc;
    }
    
    ////////// Getters and Setters
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
    public function getOrders_id()
    {
        return $this->orders_id;
    }
    
    /**
     * @return mixed
     */
    public function getProducts_id()
    {
        return $this->products_id;
    }
    
    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    /**
     * @return mixed
     */
    public function getCurrentprice()
    {
        return $this->currentprice;
    }
    
    /**
     * @return mixed
     */
    public function getCurrentdescription()
    {
        return $this->currentdescription;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param mixed $orders_id
     */
    public function setOrders_id($orders_id)
    {
        $this->orders_id = $orders_id;
    }
    
    /**
     * @param mixed $products_id
     */
    public function setProducts_id($products_id)
    {
        $this->products_id = $products_id;
    }
    
    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    /**
     * @param mixed $currentprice
     */
    public function setCurrentprice($currentprice)
    {
        $this->currentprice = $currentprice;
    }
    
    /**
     * @param mixed $currentdescription
     */
    public function setCurrentdescription($currentdescription)
    {
        $this->currentdescription = $currentdescription;
    }
}

