<?php  include('includes\header.php')  ?>


<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



$MedicineName="Ace";
$CompanyName ="Square";
$Price="280";



if( isset($_POST['submit'])){

    $MedicineName= test_input( $_POST['MedicineName']);
    $CompanyName= test_input ( $_POST['CompanyName']);
    $Price= test_input ( $_POST['Price']);
  
    $sql= "INSERT INTO Medicine (MedicineName,CompanyName,Price) VALUES ('$MedicineName' ,'$CompanyName' ,'$Price' ) ";

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
    if( isset($_POST['reset'])){

  
        $MedicineName="Ace";
        $CompanyName ="Square";
        $Price="280";
    }
?>


<form action="" method="post">

Medicine Name :<input type="text" name="MedicineName" value= <?php    echo $MedicineName ?> /> <br>

Company Name :<input type="text" name="CompanyName"  value= <?php    echo $CompanyName ?> /><br>


Price :<input type="Number" name="Price"  value= <?php    echo $Price ?> /><br>

<input type="submit" value="Add" name= 'submit'/>
<input type="reset" name="reset" value="Reset">




</form>



<?php  include('includes\footer.php')  ?>