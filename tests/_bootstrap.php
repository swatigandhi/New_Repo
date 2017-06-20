<?php
// This is global bootstrap for autoloading
     echo "deleting file";
    echo "\n";
    unlink("vendor".DIRECTORY_SEPARATOR."codeception".DIRECTORY_SEPARATOR."codeception".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."Codeception".DIRECTORY_SEPARATOR."Module".DIRECTORY_SEPARATOR."WebDriver.php");
    echo "Copying file";
  echo "\n";    
    copy("PHP_Files".DIRECTORY_SEPARATOR."WebDriver.php", "vendor".DIRECTORY_SEPARATOR."codeception".DIRECTORY_SEPARATOR."codeception".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."Codeception".DIRECTORY_SEPARATOR."Module".DIRECTORY_SEPARATOR."WebDriver.php");
   
    