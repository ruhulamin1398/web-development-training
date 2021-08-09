
<?php  include('includes\db.php')  ?>

<?php




    $uid= $_POST['uid'];

    $sql= "DELETE FROM students WHERE id =$uid ";

    if($db->query($sql)== TRUE)
    echo "Data delete Successfully";
    else 
    echo "Fail to delete data !! Try again";
    header("Location:student_profile.php"); 
  
    exit; 














?>