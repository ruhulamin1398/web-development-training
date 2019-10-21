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


  
    $sql= " INSERT INTO girls
    (Firstname,Lastname,Reg_No,Hometown,  Department,Phone_no  ) VALUES('$Firstname', '$Lastname', '$Reg_No','$Hometown','$Department','$Phone_no')";


    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to insert data !! Try again";

}
?>






<!-- Horizontal material form -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="" method="post" >

          

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Firstname"    id="inputFirstname"
                        class="form-control">
                    <label for="inputFirstname">First Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Lastname"    id="inputLastname"
                        class="form-control">
                    <label for="inputLastname">Last Name</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Reg_No"   id="inputReg_No"
                        class="form-control">
                    <label for="inputReg_No">Reg No</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Hometown"     id="inputHometown"
                        class="form-control">
                    <label for="inputHometown">Hometown</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Department"  id="inputDepartment"
                        class="form-control">
                    <label for="inputDepartment">Department</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-mobile-alt prefix"></i>
                    <input type="text" name="Phone_no"     id="inputPhone_no"
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




<?php  include('includes\footer.php')  ?>