
<?php  include('includes\db.php')  ?>

<?php




    $uid= $_GET['uid'];

    $sql= "DELETE FROM students WHERE id =$uid ";

    if($db->query($sql)== TRUE)
    echo "Data Delete Successfully";
    else 
    echo "Fail to delete data !! Try again";
    header("Location:student.php"); 
  
    exit; 














?>