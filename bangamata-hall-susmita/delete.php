
<?php  include('includes\db.php')  ?>

<?php




    $uid= $_GET['uid'];

    $sql= "DELETE FROM girls WHERE id =$uid ";

    if($db->query($sql)== TRUE)
    echo "Data Added Successfully";
    else 
    echo "Fail to inser data !! Try again";
   # header("Location:index.php"); 
  
    # exit; 














?>