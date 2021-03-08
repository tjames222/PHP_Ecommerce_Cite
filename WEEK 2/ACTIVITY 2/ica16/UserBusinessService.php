<?php

require_once 'autoLoader.php';

class UserBusinessService
{
    
    ////////// Search by first name
    function searchByFirstName($pattern)
    {
        $service = new UserDataService();
        return $service->findbyFirstName($pattern);
    }
    
}
