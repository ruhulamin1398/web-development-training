<?php

include('../includes/db.php');



# Drop if Exists 

$sql=" 
    DROP TABLE students
";


if($db->query($sql) == TRUE)
echo "drop success";
else
echo " droop failed";



echo "<br>";
#  Create table again 

$sql = "CREATE TABLE students(
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname   VARCHAR(55) NOT NULL,
    Lastname    VARCHAR(55) NOT NULL,
    Rollno      INT(12)  NOT NULL,
    Phoneno     VARCHAR(255) NOT NULL,
    Class       INT(12)  NOT NULL,
    Hometown    VARCHAR(255) NOT NULL



)";

if($db->query($sql) == TRUE)
echo "table create success";
else
echo "table create failed";


echo "<br>";
# Seeding data


$sql ="INSERT INTO students(Firstname,Lastname,Rollno,Hometown,Class, Phoneno )  
VALUES('Ruhul','Amin',25,'Sylhet','2',01719843679);

";

$sql .="INSERT INTO students(Firstname,Lastname,Rollno,Hometown,Class, Phoneno )  
VALUES('Ruhul','Amin',25,'Sylhet','2',01719843679);

";



$sql .="INSERT INTO students(Firstname,Lastname,Rollno,Hometown,Class, Phoneno )  
VALUES('Ruhul','Amin',25,'Sylhet','2',01719843679);

";



$sql .="INSERT INTO students(Firstname,Lastname,Rollno,Hometown,Class, Phoneno )  
VALUES('Ruhul','Amin',25,'Sylhet','2',01719843679);

";



$sql .="INSERT INTO students(Firstname,Lastname,Rollno,Hometown,Class, Phoneno )  
VALUES('Ruhul','Amin',25,'Sylhet','2',01719843679);

";



$sql .="INSERT INTO students(Firstname,Lastname,Rollno,Hometown,Class, Phoneno )  
VALUES('Ruhul','Amin',25,'Sylhet','2',01719843679);

";





if($db->multi_query($sql) == TRUE)
echo "insert success";
else
echo "insert failed";


?>