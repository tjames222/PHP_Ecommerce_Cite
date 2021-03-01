<?php

require_once 'UserDataService.php';

$u = new UserDataService();

// Testing the findByFirstName service
// Prints the array of arrays in a formatted manner
//echo "<pre>" . print_r($u->findByFirstName("John"), TRUE) . "<pre>";

// Prints the data of returned array from finfByFirstName service
// Data is formatted in JSON style
echo json_encode($u->findByFirstName("John"));