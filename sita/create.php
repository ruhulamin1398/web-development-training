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
                    <input type="text" name="Rollno"   id="inputRollno"
                        class="form-control">
                    <label for="inputRollno">Roll No</label>
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
                    <input type="text" name="Class"  id="inputClass"
                        class="form-control">
                    <label for="inputDepartment">Class</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-mobile-alt prefix"></i>
                    <input type="text" name="Phoneno"     id="inputPhoneno"
                        class="form-control">
                    <label for="inputPhoneno">Phone No</label>
                </div>

                <!-- Material input -->
                <div class="md-form">

                    <input type="submit" name="submit" value="Create" id="inputsubmit" class="form-control">

                </div>



            </form>
        </div>
    </div>
</div>
<!-- Horizontal material form -->



</form>




<?php  include('includes\footer.php')  ?>