<?php
function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "example";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
        if ($conn->connect_error) {
            return false;
        }
        
        return $conn;
    }
 
function CloseCon($conn)
 {
    $conn -> close();
 }
   
?>