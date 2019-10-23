<?php

include('../includes/db.php');



# Drop if Exists 

$sql=" 
    DROP TABLE Medicine
";


if($db->query($sql) == TRUE)
echo "drop success";
else
echo " droop failed";



echo "<br>";
#  Create table again 

$sql = "CREATE TABLE Medicine(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  MedicineName  VARCHAR(55) NOT NULL,
CompanyName VARCHAR(55) NOT NULL,
Price INT(10) NOT NULL


)";

if($db->query($sql) == TRUE)
echo "table create success";
else
echo "table create failed";


echo "<br>";
# Seeding data


$sql ="INSERT INTO Medicine(MedicineName,CompanyName,Price)  
VALUES('Napa','Beximco','380');

";


$sql .= "INSERT INTO Medicine(MedicineName, CompanyName,Price)
VALUES ('Ace', 'Square','400');

";

$sql .= "INSERT INTO Medicine (MedicineName, CompanyName,Price)
VALUES ('Flazil', 'ACI','280');

";

if($db->multi_query($sql) == TRUE)
echo "insert success";
else
echo "insert failed";


?>