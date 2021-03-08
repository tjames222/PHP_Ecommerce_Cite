<?php

class UserDataService
{
    /////////// Service to return array of users by first name
    function findByFirstName($name)
    {
        $db = new Database();
        
        // Query
        $sql_query = "SELECT * FROM USERS WHERE FIRST_NAME LIKE '%$name%'";
        
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
            $userArray = array();
            
            // Loop through results and print data
            while ($user = $result->fetch_assoc())
            {
                // Adds results to an array for use elsewhere
                array_push($userArray, $user);
            }
            return $userArray;
        }
    }
}

