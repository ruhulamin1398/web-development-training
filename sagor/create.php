<?php  include('includes\header.php')  ?>


<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



$firstname="Ruhul";
$lastname ="Amin";
if( isset($_POST['submit'])){

    $firstname= test_input( $_POST['firstname']);
    $lastname= test_input ( $_POST['lastname'] );
  
    echo $firstname."--".$lastname;
    $sql= "INSERT INTO USERS (firstname, lastname) VALUES ('$firstname' ,'$lastname' ) ";

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
    if( isset($_POST['reset'])){

  
$firstname="Ruhul";
$lastname ="Amin";

}
?>


<form action="" method="post">

First Name :<input type="text" name="firstname" value= <?php    echo $firstname ?> id=""/> <br>
First Name :<input type="text" name="lastname"  value= <?php    echo $lastname ?> id="" /><br>
<input type="submit" value="Add" name= 'submit'/>
<input type="reset" name="reset" value="Reset">




</form>



<?php  include('includes\footer.php')  ?>