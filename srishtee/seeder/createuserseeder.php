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
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(55) NOT NULL,
    fathers_name varchar(55) NOT NULL,
    mothers_name varchar(55) NOT NULL,
    present_address varchar(100) NOT NULL,
    phone_number varchar(11) NOT NULL

)";

if($db->query($sql) == TRUE)
echo "table create success";
else
echo "table create failed";


echo "<br>";
# Seeding data


$sql ="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Ruhul Amin','Haidar Ali','Neelufa Akter','Habiganj', 01234567891);

";

$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Shoumik Roy','X','Y','Sylhet', 01234567891);

";



$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Sita Rani Nath','X','Y','Sunamgonj', 01234567891);

";


$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Sushmita Sarker','W','X','Sylhet', 01234567891);

";


$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Shamim','MP','kusuma','Bagura', 01234567891);

";

$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Shamim Khan','MP','kusuma','Bagura', 01234567891);

";

$sql .="INSERT INTO students(student_name,fathers_name,mothers_name,present_address,phone_number )  
VALUES('Showrav Mitra','MP','kusuma','Chittagong', 01234567891);

";





if($db->multi_query($sql) == TRUE)
echo "insert success";
else
echo "insert failed";


?>