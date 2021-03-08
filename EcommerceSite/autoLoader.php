<?php

spl_autoload_register(function($class)
{
    // Get the location of file in reference to autoloader
    $lastDirectories = substr(getcwd(), strlen(__DIR__));
    
    // Count the number of slashes for folder depth
    $numOfLastDir = substr_count($lastDirectories, '\\');
    
    // List of possible file locations
    $directories = ['businessService', 'businessService/model', 'database', 'presentation', 'presentation/handlers',
        'presentation/views', 'presentation/views/login', 'presentation/views/register', 'utility'];
    
    // Search each directory for the requested file
    foreach ($directories as $dir)
    {
        $currentDir = $dir;
        for ($i = 0; $i < $numOfLastDir; $i++)
        {
            $currentDir = "../" . $currentDir;
        }
        $file = $currentDir . '/' . $class . '.php';
        
        if (is_readable($file))
        {
            if (require $dir . '/' . $class . ".php")
            {
                break;
            }
        }
    }
});