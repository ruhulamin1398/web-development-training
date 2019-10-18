<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['edit'])){
    header("Location:index.php"); 

    $firstname= test_input( $_POST['firstname']);
    $lastname= test_input ( $_POST['lastname'] );
  
    echo $firstname."--".$lastname;
    $sql= "INSERT INTO USERS (firstname, lastname) VALUES ('$firstname' ,'$lastname' ) ";

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
?>




<?php 
 if( isset($_POST['uid']))
{

$uid= $_POST['uid'];

  $sql = "SELECT * FROM users WHERE id=$uid";
  $user= $db->query($sql)->fetch_assoc();

  $firstname=$user['firstname'];
  $lastname= $user['lastname'];
?>


<!-- Horizontal material form -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="firstname" value="<?php    echo $uid ?>" id="inputid" class="form-control"
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

                    <input type="submit" name="edit" value="Edit" id="inputsubmit" class="form-control">

                </div>



            </form>
        </div>
    </div>
</div>
<!-- Horizontal material form -->



</form>


<?php } else {
?>
<form action="" method="post">

    Enter Id :<input type="number" name="uid" /><br>
    <input type="submit" value="edit" name='update' />

</form>

<?php } ?>


<?php  include('includes\footer.php')  ?>