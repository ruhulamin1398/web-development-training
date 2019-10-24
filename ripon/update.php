<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){

    $costReason= test_input( $_POST['costReason']);
    $amount= test_input ( $_POST['amount'] );
    $uid= test_input ( $_POST['uid'] );
  
    $sql= "UPDATE USERS SET costReason='$costReason', amount='$amount'  WHERE id=$uid";

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

  $costReason=$user['costReason'];
  $amount= $user['amount'];
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
                    <input type="text" name="costReason" value="<?php    echo $costReason ?>" id="inputfullName"
                        class="form-control">
                    <label for="inputfullName">Reason</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="amount" value="<?php    echo $amount ?>" id="inputrasult"
                        class="form-control">
                    <label for="inputrasult">Amount</label>
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