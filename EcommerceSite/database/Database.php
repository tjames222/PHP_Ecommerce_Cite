<?php
require_once 'C:/MAMP/htdocs/EcommerceSite/autoLoader.php';
class Database 
{
    private $dbservername = "localhost";
    private $dbusername = "root";
    private $dbpassword = "root";
    private $dbname = "ecommercesite";
    private $port = 8889;
    
    function getConnection()
    {
        $conn = new mysqli("$this->dbservername:$this->port", $this->dbusername, $this->dbpassword, $this->dbname);
        
        if ($conn->connect_error)
        {
            echo "Connection failed: " . $conn->connect_error . "<br>";
        }
        else 
        {
            //echo "Connection Successful<br>";
            return $conn;    
        }
    }
}