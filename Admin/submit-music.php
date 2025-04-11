<?php
 include "db.php";

 $songName=$_POST['songName'];
 $songFile=$_FILES['songFile'];
 $singer=$_POST['singer'];
 $description=$_POST['description'];
 $coverImage=$_FILES['coverImage'];

 if($con){
    echo $sql = "insert into addmusic(songName,songFile,singer,description,coverImage) values ('$songName','$songFile','$singer','$description','$coverImage')";
        // exit(); 
        mysqli_query($con,$sql);
        ?>
        <script type="text/javascript">
            alert("category added.");
            window.location="view-music.php" ;
        </script>
        
        
     <?php
        
}

?>