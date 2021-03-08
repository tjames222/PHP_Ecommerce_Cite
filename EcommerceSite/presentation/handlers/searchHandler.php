<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'C:/MAMP/htdocs/EcommerceSite/autoLoader.php';

$searchPattern = $_GET["search"];

$service = new UserDataService();

$results = $service->findByFirstName($searchPattern);
?>

<h2>Search Results</h2>

<?php 
if ($results)
{
    //echo "<pre>" . print_r($results, TRUE) . "<pre>";
    include('C:/MAMP/htdocs/EcommerceSite/presentation/handlers/_displayAllUsers.php');
}
else
{
    echo "There were no users found";
}
?>