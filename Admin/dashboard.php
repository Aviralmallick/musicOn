<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Music</title>
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

      <div class="container-fluid main-content">
        <div class="row mt-3">
            <?php
            include "adminopt.php";
            ?>
            <div class="col-8 ms-2 moderatedark rounded song-section ps-4 ">
                <h1 class="text-white mb-3">Dashboard</h1>
                <div class="main1 mb-4 ">

                    
                      <div class="row d-flex justify-content-between flex-wrap">
                        <div class="card p-2 me-2 mb-2 col-4 me-5 mb-5" style="width: 15rem;">
                            <img class="card-img-top" src="../assets/featured3.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Total Categories</h5>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card p-2 me-2 mb-2 col-4 me-5 mb-5" style="width: 15rem; ">
                            <img class="card-img-top" src="../assets/featured4.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Total Songs</h5>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card p-2 me-2 mb-2 col-4 me-5 mb-5" style="width: 15rem; ">
                            <img class="card-img-top" src="../assets/featured5.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Number of Users</h5>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card p-2 me-2 mb-2 col-5 me-5 mb-5" style="width: 15rem; ">
                            <img class="card-img-top" src="../assets/featured6.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Top Singers</h5>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                     </div>    
                    
                        

                </div>
            </div>
      </div>

      
      </div>
    
</body>
</html>