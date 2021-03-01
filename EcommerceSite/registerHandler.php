<?php     

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'header.php';
require_once 'autoLoader.php';

if (isset($_REQUEST['submit'])!='')
{
    if ($_REQUEST['firstname']=='' || $_REQUEST['lastname']=='' || $_REQUEST['username']==''|| $_REQUEST['password']=='')
    {
    echo "Ensure all fields are filled.";
    include 'Register.html';
    }
    else
    {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $user = $_POST["username"];
        $pass = $_POST["password"];
        
        $service = new UserDataService();
        
        $registered = $service->Register($fname, $lname, $user, $pass);
        //$sql = "INSERT INTO USER(FIRSTNAME, LASTNAME, USERNAME, PASSWORD) 
               // VALUES('".$_REQUEST['firstname']."', '".$_REQUEST['lastname']."', '".$_REQUEST['username']."', '".$_REQUEST['password']."')";
        //$result = mysql_query($sql);
        if($registered)
        {
            include 'login.html';
        }
        else
        {
            echo "Registration failed";
            include 'Register.html';
        }
    }
}

?>