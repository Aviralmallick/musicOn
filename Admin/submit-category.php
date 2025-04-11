<?php 
    include "db.php" ;

     $cName=$_POST['cName'];
     $cDesc=$_POST['cDesc'];
     $cImg=$_FILES['cImg'];

    if($con){
        echo $sql = "insert into addcategory(cName,cDesc,cImg) values ('$cName','$cDesc','$cImg')";
        // exit(); 
        mysqli_query($con,$sql);
?>
    <script type="text/javascript">
        alert("category added.");
        window.location="viewCategory.php" ;
    </script>
<?php
    }
?>