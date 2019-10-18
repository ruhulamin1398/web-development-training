<?php

include('../includes/db.php');



# Drop if Exists 

$sql=" 
    DROP TABLE users
";


if($db->query($sql) == TRUE)
echo "drop success";
else
echo " droop failed";



echo "<br>";
#  Create table again 

$sql = "CREATE TABLE users(
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(55) NOT NULL,
    Lastname  VARCHAR(55) NOT NULL,
    Reg_No     INT(12)  NOT NULL,
    Hometown  VARCHAR(255) NOT NULL,
    Department VARCHAR(255) NOT NULL,
    Phone_no VARCHAR(255) NOT NULL



)";

if($db->query($sql) == TRUE)
echo "table create success";
else
echo "table create failed";


echo "<br>";
# Seeding data


$sql ="INSERT INTO users(Firstname,Lastname,Reg_No,Hometown,Department, Phone_no )  
VALUES('Ruhul','Amin',2016331515,'Sylhet','CSE',01719843679);

";

$sql.="INSERT INTO users(Firstname,Lastname,Reg_No,Hometown,Department, Phone_no )  
VALUES('Yasir','Ahmed',562382719,'dhaka','EEE',9477247);

";

$sql .="INSERT INTO users(Firstname,Lastname,Reg_No,Hometown,Department, Phone_no )  
VALUES('Ruhul','Amin');

";


if($db->multi_query($sql) == TRUE)
echo "insert success";
else
echo "insert failed";


?>