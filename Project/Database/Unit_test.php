<?php
require("Database.php");
//case 1   Inserting data using valid SQL insert command
$dbObj = new Database();
$result= $dbObj->execute("INSERT INTO tbluser(name,age,address,nationality VALUES 
('Reg',27,'Urgello City',Filipino')");
echo "Case1 result: ".$result;
//case 2 Updating data using valid SQL update command

//case 3 Extracting data using valid SQL select command.

//case 4 Deleting data using valid SQL delete command.

//case 5
//case 6
//case 7
//case 8


?>