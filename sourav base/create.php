













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

  
    $sql= "INSERT INTO USERS (fullName, result) VALUES ('$fullName' ,'$rasult' ) ";

    if($db->query($sql)== TRUE)
    echo "Data insert Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
?>



<?php 
 
{

?>


<!-- Horizontal material form -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="" method="post" >

       

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="fullName" value="" id="inputfullName"
                        class="form-control">
                    <label for="inputfullName">Full Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="result" value="" id="inputrasult"
                        class="form-control">
                    <label for="inputrasult">Result</label>
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


<?php } 
?>




<?php  include('includes\footer.php')  ?>