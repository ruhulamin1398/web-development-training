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
    $Rollno= test_input( $_POST['Rollno']);
    $Hometown= test_input ( $_POST['Hometown'] );
    $Class= test_input( $_POST['Class']);
    $Phoneno= test_input ( $_POST['Phoneno'] );


  
    $sql= " INSERT INTO students
    (Firstname,Lastname,Rollno,Hometown,  Class ,Phoneno  ) VALUES('$Firstname', '$Lastname', '$Rollno','$Hometown','$Class','$Phoneno')";


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

  $sql = "SELECT * FROM students WHERE Id=$uid";
  $student= $db->query($sql)->fetch_assoc();

  

  
  $Firstname= $student['Firstname'];
  $Lastname= $student['Lastname'] ;
  $Rollno= $student['Rollno'];
  $Hometown= $student['Hometown'] ;
  $Class= $student['Class'];
  $Phoneno= $student['Phoneno'] ;





?>


<!-- Horizontal material form -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="" method="post" >

          

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="uid"         value="<?php    echo $uid ?>"   id="inputuid"
                        class="form-control " readonly>
                    <label for="inputuid">Id</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Firstname"         value="<?php    echo $Firstname ?>"   id="inputFirstname"
                        class="form-control">
                    <label for="inputFirstname">First Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Lastname"          value="<?php    echo $Lastname ?>"  id="inputLastname"
                        class="form-control">
                    <label for="inputLastname">Last Name</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Rollno"        value="<?php    echo $Rollno ?>"  id="inputRollno"
                        class="form-control">
                    <label for="inputRollno">Roll No</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Hometown"          value="<?php    echo $Hometown ?>"   id="inputHometown"
                        class="form-control">
                    <label for="inputHometown">Hometown</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Class"     value="<?php    echo $Class ?>"   id="inputClass"
                        class="form-control">
                    <label for="inputClass">Class</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-mobile-alt prefix"></i>
                    <input type="text" name="Phoneno"           value="<?php    echo $Phoneno ?>"   id="inputPhoneno"
                        class="form-control">
                    <label for="inputPhoneno">Phone No</label>
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

<?php } ?>

<?php  include('includes\footer.php')  ?>