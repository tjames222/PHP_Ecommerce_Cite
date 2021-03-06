<?php

require_once 'autoLoader.php';

$searchPattern = $_POST["search"];

$service = new UserDataService();

$results = $service->findByFirstName($searchPattern);

if ($results)
{
    echo "<pre>" . print_r($results, TRUE) . "<pre>";
    include "_displayAllUsers.php";
}
else
{
    echo "There were no users found";
}