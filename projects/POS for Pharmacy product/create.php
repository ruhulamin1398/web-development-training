<?php  include('includes\header.php')  ?>


<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



$MedicineName="Ace";
$CompanyName ="Square";
$Price="280";



if( isset($_POST['submit'])){

    $MedicineName= test_input( $_POST['MedicineName']);
    $CompanyName= test_input ( $_POST['CompanyName']);
    $Price= test_input ( $_POST['Price']);
  
    $sql= "INSERT INTO Medicine (MedicineName,CompanyName,Price) VALUES ('$MedicineName' ,'$CompanyName' ,'$Price' ) ";

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";

}
    if( isset($_POST['reset'])){

  
        $MedicineName="Ace";
        $CompanyName ="Square";
        $Price="280";
    }
?>










<!-- Horizontal material form -->
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="" method="post" >

                <!-- Material input -->
             

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="MedicineName" value="<?php    echo $MedicineName ?>" id="inputfirstname"
                        class="form-control">
                    <label for="inputfirstname">Medicine Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="CompanyName" value="<?php    echo $CompanyName ?>" id="inputlastname"
                        class="form-control">
                    <label for="inputlastname">Company Name</label>
                </div>
                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" name="Price" value="<?php    echo $Price ?>" id="inputlastname"
                        class="form-control">
                    <label for="inputlastname">Price</label>
                </div>
                <!-- Material input -->
                <div class="md-form">

                    <input type="submit" name="submit" value="Add" id="inputsubmit" class="form-control">

                </div>



            </form>
        </div>
    </div>
</div>
<!-- Horizontal material form -->

<?php  include('includes\footer.php')  ?>