<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){

    $firstname= test_input( $_POST['firstname']);
    $lastname= test_input ( $_POST['lastname'] );
    $uid= test_input ( $_POST['uid'] );
  

    $sql= "UPDATE USERS SET firstname='$firstname', lastname='$lastname'  WHERE id=$uid";

    if($db->query($sql)== TRUE)
    echo "Data update Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
?>



<?php 
 if( isset($_GET['uid']))
{

$uid= $_GET['uid'];

  $sql = "SELECT * FROM users WHERE id=$uid";
  $user= $db->query($sql)->fetch_assoc();

  $firstname=$user['firstname'];
  $lastname= $user['lastname'];
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
                    <input type="text" name="firstname" value="<?php    echo $firstname ?>" id="inputfirstname"
                        class="form-control">
                    <label for="inputfirstname">First Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="lastname" value="<?php    echo $lastname ?>" id="inputlastname"
                        class="form-control">
                    <label for="inputlastname">Last Name</label>
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


<?php } else {
?>

<form action="" method="get">
<div class="form-row align-items-center">
    <!-- Grid column -->
    <div class="col-auto">
      <!-- Material input -->
      <div class="md-form">
        <input type="number"  name="id" class="form-control mb-2" id="inlineFormInputMD" placeholder="1">
        <label class="sr-only" for="inlineFormInputMD">ID</label>
      </div>
    </div>
    <!-- Grid column -->
    <div class="col-auto">
      <input  type="submit" value="edit" name='update'>
    </div>
</div>

 

</form>



<?php } ?>




<?php  include('includes\footer.php')  ?>