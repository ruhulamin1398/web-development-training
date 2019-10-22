<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){

    $Firstname= test_input( $_POST['Firstname']);
    $Lastname= test_input ( $_POST['Lastname'] );
    $Reg_No= test_input( $_POST['Reg_No']);
    $Hometown= test_input ( $_POST['Hometown'] );
    $Department= test_input( $_POST['Department']);
    $Phone_no= test_input ( $_POST['Phone_no'] );


    $uid= test_input ( $_POST['uid'] );
  
    $sql= "UPDATE girls SET 
    Firstname='$Firstname', 
    Lastname='$Lastname', 
    Reg_No='$Reg_No',
    Hometown='$Hometown',
    Department='$Department',
    Phone_no='$Phone_no'
    
     WHERE Id=$uid";


    if($db->query($sql)== TRUE)
    echo "Data Update Successfully";
    else 
    echo "Fail to insert data !! Try again";

}
?>



<?php 
 if( isset($_GET['uid']))
{

$uid= $_GET['uid'];

  $sql = "SELECT * FROM girls WHERE Id=$uid";
  $girls= $db->query($sql)->fetch_assoc();

  $Firstname=$girls['Firstname'];
  $Lastname= $girls['Lastname'];
  $Reg_No=$girls['Reg_No'];
  $Hometown= $girls['Hometown'];
  $Department=$girls['Department'];
  $Phone_no= $girls['Phone_no'];
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
                    <input type="text" name="Firstname" value="<?php    echo $Firstname ?>" id="inputFirstname"
                        class="form-control">
                    <label for="inputFirstname">First Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Lastname" value="<?php    echo $Lastname ?>" id="inputLastname"
                        class="form-control">
                    <label for="inputLastname">Last Name</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Reg_No" value="<?php    echo $Reg_No ?>" id="inputReg_No"
                        class="form-control">
                    <label for="inputReg_No">Reg No</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Hometown" value="<?php    echo $Hometown ?>" id="inputHometown"
                        class="form-control">
                    <label for="inputHometown">Hometown</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Department" value="<?php    echo $Department ?>" id="inputDepartment"
                        class="form-control">
                    <label for="inputDepartment">Department</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Phone_no" value="<?php    echo $Phone_no ?>" id="inputPhone_no"
                        class="form-control">
                    <label for="inputPhone_no">Phone No</label>
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