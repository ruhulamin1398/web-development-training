<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){

    $student_name= test_input( $_POST['student_name']);
    $fathers_name= test_input( $_POST['fathers_name']);
    $mothers_name= test_input( $_POST['mothers_name']);
    $present_address= test_input( $_POST['present_address']);
    $phone_number= test_input( $_POST['phone_number']);










  
    $sql="INSERT INTO students (student_name,fathers_name,mothers_name,present_address,phone_number) VALUES ($student_name,$fathers_name,$mothers_name,$present_address,$phone_number)";

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
?>


<!-- 
<?php 
//  if( isset($_GET['uid']))
// {

// $uid= $_GET['uid'];

//   $sql = "SELECT * FROM students WHERE id=$uid";
//   $student= $db->query($sql)->fetch_assoc();

//   $student_name= $student['student_name'];
//   $fathers_name= $student['fathers_name'];
//   $mothers_name= $student['mothers_name'];
//   $present_address= $student['present_address'];
//   $phone_number= $student['phone_number'];
?> -->


<!-- Horizontal material form -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="" method="post" >






                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="student_name" value="" id="student_name"
                        class="form-control">
                    <label for="student_name">Student Name</label>
                </div>




                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="fathers_name" value="" id="fathers_name"
                        class="form-control">
                    <label for="fathers_name">Father's Name</label>
                </div>




                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="mothers_name" value="" id="mothers_name"
                        class="form-control">
                    <label for="mothers_name">Mother's Name</label>
                </div>




                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="present_address" value="" id="present_address"
                        class="form-control">
                    <label for="present_address">Present Address</label>
                </div>




                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="phone_number" value="" id="phone_number"
                        class="form-control">
                    <label for="phone_number">Phone Number</label>
                </div>





















                <!-- Material input -->
                <div class="md-form">

                    <input type="submit" name="submit" value="submit" id="inputsubmit" class="form-control border border-success">

                </div>



            </form>
        </div>
    </div>
</div>
<!-- Horizontal material form -->



</form>


<?php 
?>


<?php  include('includes\footer.php')  ?>