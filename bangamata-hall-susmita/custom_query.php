<?php
include('includes/header.php');
$sql="#   INSERT INTO USERS (firstname, lastname) VALUES ('Ruhul','Amin'); 
#   SELECT *FROM users;
#   SELECT *FROM users;
";
?>






<?php 
if(isset($_POST['submit'])){
    $sql  = trim($_POST['code']);   
     $result = $db->query($sql );
    


}

?>


<form action="" method="post">
    <textarea name=" code" id="" cols="150" rows="15">
    <?php  echo $sql  ?>
</textarea>
    <br>
    <input type="submit" name="submit" value="Execute" />

</form>




<?php 



if(isset($_POST['submit'])){

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<pre>";
            print_r($row);
            echo "<br>";
        }
        
    
    } 
    else if ($result==TRUE) {
        echo "success";
    }
        else
        echo "Fail";


}
    ?>



<?php
include('includes/footer.php');
?>