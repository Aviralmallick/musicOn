<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jqu\ery.min.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>
</head>

<body>
   <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center mt-4">
      <form class="col-5 bg-dark p-5 rounded" action="userSignUpData.php" method="post">
        <h2 class="text-white mb-5 text-success">Signup to musicOn</h2>
        <div class="form-group mb-3">
            <div class="firName mb-3">
                <label for="exampleInputEmail1" class="text-white">First Name</label>
                <input type="text" class="form-control" name="fName"  placeholder="Enter First Name">
            </div>
            <div class="lastName">
                <label for="exampleInputEmail1" class="text-white">Last Name</label>
                <input type="text" class="form-control" name="lName"  placeholder="Enter Last Name">
            </div>   
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="text-white">Phone Number</label>
            <input type="tel" class="form-control" name="pNumber"  placeholder="Enter Phone Number">
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" class="text-white">Email address</label>
          <input type="email" class="form-control" name="email"  placeholder="Enter email">
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputPassword1" class="text-white">Password</label>
          <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary mb-3 ">Submit</button>
        <a href="./index.php" class="d-block link-underline link-underline-opacity-0">LogIn for musicOn</a>
      </form>
      </div>
    </div>

   
    
</body>
</html>
