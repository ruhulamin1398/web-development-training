<?php

include('../includes/db.php');



# Drop if Exists 

$sql=" 
    DROP TABLE student
";


if($db->query($sql) == TRUE)
echo "drop success";
else
echo " droop failed";



echo "<br>";
#  Create table again 

$sql = "CREATE TABLE student(
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(55) NOT NULL,
    Class  VARCHAR(55) NOT NULL,
   Phone_number   INT(12)  NOT NULL,
   Address  VARCHAR(255) NOT NULL
    



)";

if($db->query($sql) == TRUE)
echo "table create success";
else
echo "table create failed";


echo "<br>";
# Seeding data


$sql ="INSERT INTO student(Name,Class,Phone_number,Address)  
VALUES('Diponkor Deb Nath','Seven',1772929084,'Gotatikor,Acharjeepara,sylhet');

";
$sql ="INSERT INTO student(Name,Class,Phone_number,Address)  
VALUES('Ripa Rani Nath','Ten',1794705586,'Gotatikor,Acharjeepara,Sylhet');

";
$sql ="INSERT INTO student(Name,Class,Phone_number,Address)  
VALUES('Sita Rani Nath','Six',1770312867,'Gotatikor, Acharjeepara,Sylhet');

";
$sql ="INSERT INTO student(Name,Class,Phone_number,Address)  
VALUES('Papiya Rani Nath','Ten',1770312867,'Gotatikor, Acharjeepara,Sylhet');

";




if($db->multi_query($sql) == TRUE)
echo "insert success";
else
echo "insert failed";


?>