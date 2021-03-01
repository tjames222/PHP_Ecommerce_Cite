<?php

require_once 'Database.php';

class UserDataService
{
    /////////// Service to return array of users by first name
    function findByFirstName($name)
    {
        $db = new Database();
        
        // Testing comments. Use for testing purposes
        //echo "Testing the db data <br>";
        //print_r($db);
        //echo "I am searching for " . $name . "<br>";
        
        // Query 
        $sql_query = "SELECT * FROM USER WHERE FIRSTNAME LIKE '%$name%'";
        
        // Connection to db
        $connection = $db->getConnection();
        
        // Result from db query
        $result = $connection->query($sql_query);
        
        // This checks to make sure SQL statement is correct
        if(!$result)
        {
            echo "Something might be wrong with SQL statement";
            return null;
            exit;
        }
        
        // This looks for results and returns data
        if ($result->num_rows == 0)
        {
            // echo "No rows found<br>";
            return null;     
        }
        else
        {
            //echo "I found " . $result->num_rows . " results!<br>";
            
            $userArray = array();
            
            // Loop through results and print data
            while ($user = $result->fetch_assoc())
            {
                // Print results in a SQL unformatted manner
                // print_r($user);
                //echo "<br>";
                
                // Print results in a formatted manner
                // echo "User ID: " . $user['ID'] . "<br>First Name: " . $user['FIRSTNAME'] .
                // "<br>Last Name: " . $user['LASTNAME'] . "<hr>";
                
                // Adds results to an array for use elsewhere
                array_push($userArray, $user);
            }  
            return $userArray;
        }
    }
    
    ////////// Service to Login
    function Login($user, $pass)
    {
        $db = new Database();
        
        // Query
        $sql_query = "SELECT * FROM USER WHERE USERNAME='$user' AND PASSWORD='$pass'";
        
        // Connection to db
        $connection = $db->getConnection();
        
        // Result from db query
        $result = $connection->query($sql_query);
        
        // This checks to make sure SQL statement is correct
        if(!$result)
        {
            echo "Something might be wrong with SQL statement";
            return null;
            exit;
        }
        
        // This looks for results and returns data
        if ($result->num_rows == 0)
        {
            // echo "No rows found<br>";
            return FALSE;
        }
        else
        {            
            return TRUE;
        }
    }
    
    function Register($fname, $lname, $user, $pass)
    {
        $db = new Database();
        
        // Query
        $sql_query = "INSERT INTO `user` (`FIRSTNAME`, `LASTNAME`, `USERNAME`, `PASSWORD`) 
                        VALUES ('$fname', '$lname', '$user', '$pass')";
        
        // Connection to db
        $connection = $db->getConnection();
        
        // Result from db query
        $result = $connection->query($sql_query);
        
        // This checks to make sure SQL statement is correct
        if(!$result)
        {
            echo "Something might be wrong with SQL statement";
            return null;
            exit;
        }
        
        // This looks for results and returns data
        if ($result)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
}

