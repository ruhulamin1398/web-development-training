<?php  include('includes\header.php')  ?>

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){

    $Name= test_input( $_POST['Name']);
    $Class= test_input ( $_POST['Class'] );
    $Phone_number= test_input( $_POST['Phone_number']);
    $Address= test_input ( $_POST['Address'] );
   

  
    $sql= " INSERT INTO student
    (Name,Class,Phone_number,Address ) VALUES('$Name','$Class','$Phone_number','$Address')";


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
                    <input type="text" name="Name"    id="inputName"
                        class="form-control">
                    <label for="inputName">Name</label>
                </div>

               
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Class"   id="inputClass"
                        class="form-control">
                    <label for="inputClass">Class</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Phone_number"     id="inputPhone_number"
                        class="form-control">
                    <label for="inputPhone_number">Phone_number</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Address"  id="inputAddress"
                        class="form-control">
                    <label for="inputAddress">Address</label>
                </div>
               
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