<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){
    $uid=  $_POST['uid'];

    $MedicineName= test_input( $_POST['MedicineName']);
    $CompanyName= test_input ( $_POST['CompanyName']);
    $Price= test_input ( $_POST['Price']);
    $sql= "UPDATE Medicine SET MedicineName='$MedicineName', CompanyName='$CompanyName',Price='$Price'  WHERE id=$uid";
    

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
?>



<?php 
 if( isset($_GET['uid']))
{

$uid= $_GET['uid'];

  $sql = "SELECT * FROM Medicine WHERE id=$uid";
  $Medicine= $db->query($sql)->fetch_assoc();


  $MedicineName= $Medicine['MedicineName'];
  $CompanyName=  $Medicine['CompanyName'];
  $Price= $Medicine['Price'];

?>


<!-- Horizontal material form -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="" method="post" >

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="uid" value="<?php    echo $uid ?>" id="inputid" class="form-control"
                        readonly>
                    <label>User Id</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="MedicineName" value="<?php    echo $MedicineName ?>" id="inputfirstname"
                        class="form-control">
                    <label for="inputfirstname">Medicine Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="CompanyName" value="<?php    echo $CompanyName ?>" id="inputlastname"
                        class="form-control">
                    <label for="inputlastname">Company Name</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Price" value="<?php    echo $Price ?>" id="inputlastname"
                        class="form-control">
                    <label for="inputlastname">Price</label>
                </div>
                <!-- Material input -->
                <div class="md-form">

                    <input type="submit" name="submit" value="Edit" id="inputsubmit" class="form-control">

                </div>



            </form>
        </div>
    </div>
</div>
<!-- Horizontal material form -->



</form>


<?php } 
?>




<?php  include('includes\footer.php')  ?>