<?php
        // We get the DBJsonCon.php file 
        $docRoot = $_SERVER['DOCUMENT_ROOT'];
        $DBJsonCon = $docRoot . '/config/DBJsonCon.php';
        require_once $DBJsonCon;

        // Insert Query 
        $q = $DBJ->addLine('
                {
                    "Name" : "Edi Cohen",
                    "Email": "ediedi@ex.com",
                    "City" : "Tel Aviv"
                }
        ',"Customers");
        echo $q;
?>        
