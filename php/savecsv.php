<?php

include "../config.php";

error_log("New Data Called...\n", 3, "php.log");

$csvdata = $_POST['csvdata'];

error_log($csvdata, 3, "php.log");

$data = str_getcsv($csvdata, "\n"); //parse the rows

array_shift($data);
//array_shift($data);

foreach($data as &$row) 
{
    $row = str_getcsv($row, ",",'"'); //parse the items in rows
    $stmt = $link->prepare("INSERT INTO cableconnect VALUES ('',?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssss',$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);

    if($stmt->execute())
    {
        echo "test";
    }
    
    $stmt1 = $link->prepare("INSERT INTO payment VALUES ('',?,?,?,?,?)");
    $stmt1->bind_param('sssss',$row[1],$row[11],$row[12],$row[13],$row[14]);
    if($stmt1->execute())
    {
        echo "test";
    }
    
}

?>