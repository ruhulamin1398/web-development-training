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
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    costReason VARCHAR(55) NOT NULL,
    amount  INT(55) NOT NULL

)";

if($db->query($sql) == TRUE)
echo "table create success";
else
echo "table create failed";


echo "<br>";
# Seeding data


    $sql ="INSERT INTO users(costReason,amount )  
VALUES('travel','500');

";


$sql .= "INSERT INTO users (costReason, amount)
VALUES ('food', '2000');

";

if($db->multi_query($sql) == TRUE)
echo "insert success";
else
echo "insert failed";


?>