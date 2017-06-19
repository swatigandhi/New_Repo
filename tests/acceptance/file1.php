<?php
namespace cat;
class A{
    
    function read(){
        echo "Inside class A of file1.php";
        
    }
     function name()
    {
        echo "My name is " , get_class($this) , "\n";
    }
}
