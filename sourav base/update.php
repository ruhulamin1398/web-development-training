<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){

    $fullName= test_input( $_POST['fullName']);
    $rasult= test_input ( $_POST['result'] );
    $uid= test_input ( $_POST['uid'] );
  
    $sql= "UPDATE USERS SET fullName='$fullName', result='$rasult'  WHERE id=$uid";

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

  $fullName=$user['fullName'];
  $rasult= $user['result'];
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
                    <input type="text" name="fullName" value="<?php    echo $fullName ?>" id="inputfullName"
                        class="form-control">
                    <label for="inputfullName">Full Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="result" value="<?php    echo $rasult ?>" id="inputrasult"
                        class="form-control">
                    <label for="inputrasult">Result</label>
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