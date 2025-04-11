<?php
  include "db.php";
  $sql = "select * from addcategory";
  $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
</head>

<body>
   
      <?php
      include "navbar.php";
      ?>

      <div class="container-fluid ">
        <div class="row mt-3">
            <?php
            include "adminopt.php";
            ?>
            <div class="col-8 ms-2 moderatedark rounded ">
              <div class="main1 mb-4 ">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-4 text-white">View Category</h3>
                  <button class="btn  btn-outline-light border-0">Show all</button>
                </div>
                <div class="resplay row carousel-wrapper">
                  <table class="table ">
                    <thead>
                      <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        if($query){
                          while($data = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                              <th scope="row"><?php echo $data['serialNo'];  ?></th>
                              <td><?php echo $data['cName'];?></td>
                              <td><?php echo $data['cDesc'];?></td>
                              <!-- <td><?php echo $data['cImg'];?></td> -->

                              <td>
                                <div class="cat-btn d-flex">
                                  <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                                  <a href="deleteCategory.php?serialNo=<?php echo $row['id']; ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                              </td>
                            </tr>
                            <?php
                          }
                        }else{
                          echo "Query Failed: " . mysqli_error($con);
                        }
                        
                      ?>
                      <tr>
                        <th scope="row">1</th>
                        <td>Romantic</td>
                        <td>Romantic music is all about deep emotions, love, passion, and heartfelt connections.</td>
                        <td>
                          <div class="cat-btn d-flex">
                            <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Pop</td>
                        <td>A catchy and melodic genre designed for mass appeal.</td>
                        <td>
                          <div class="cat-btn d-flex">
                            <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Rock</td>
                        <td>A broad genre with heavy use of electric guitars, bass, and drums.</td>
                        <td>
                          <div class="cat-btn d-flex">
                            <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Hip-hop/Rap</td>
                        <td>Characterized by rhythmic speech, beats, and bass-heavy instrumentals.</td>
                        <td>
                          <div class="cat-btn d-flex">
                            <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Jazz</td>
                        <td>Known for improvisation, swing rhythms, and complex harmonies.</td>
                        <td>
                          <div class="cat-btn d-flex">
                            <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Blues</td>
                        <td>A soulful genre with deep emotions, slow beats, and expressive guitar solos./td>
                        <td>
                          <div class="cat-btn d-flex">
                            <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>Folk</td>
                        <td>Simple, acoustic-driven music often based on traditional songs.</td>
                        <td>
                          <div class="cat-btn d-flex">
                            <button type="button" class="btn btn-warning btn-sm me-1">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                          </div>
                        </td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
                </div>
                  
                    
                    
              </div> 
              
          
        </div>
      </div>
    
</body>
</html>