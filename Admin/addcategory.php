<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
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
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
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
                <h1 class="text-white mb-3">Add Category</h1>
                <form action="submit-category.php" class="w-50 mt-5 offset-3" method="post" enctype="multipart/form-data">    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-white h6">Category Name</label>
                      <input type="text" name="cName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-white h6">Description</label>
                      <input type="text" name="cDesc" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="file" class="form-check-input " id="exampleCheck1">
                      <label class="form-check-label text-white h6" name="cImg" for="exampleCheck1 ">Cover Image</label>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                  </form> 

            </div>
        </div>
      </div>

      
      </div>
    
</body>
</html>