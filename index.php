<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>  </h1>
            
        <p>
            Es un parrafooooooooooooooooo!!

        </p> 
        
        <?php
$mysqli = new mysqli("localhost", "root", "avaras08", "Persona");
if ($mysqli->connect_errno) {
echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";


        ?>
        
        
    </body>
</html>

 http://php.net/manual/en/mysqli.quickstart.connections.php 

