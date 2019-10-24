

<?php




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 

if( isset($_POST['submit'])){

    $bookName= test_input( $_POST['bookName']);
    $amount= test_input ( $_POST['amount'] );

  
    $sql= "INSERT INTO USERS (bookName, amount) VALUES ('$bookName' ,'$amount' ) ";

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
                    <input type="text" name="bookName" value="" id="inputfullName"
                        class="form-control">
                    <label for="inputfullName">Book Name</label>
                </div>

                <!-- Material input -->
                <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input type="number" name="amount" value="" id="inputrasult"
                        class="form-control">
                    <label for="inputrasult">Amount</label>
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
