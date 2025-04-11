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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
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
   
    <nav class=" navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
        <div class="nav-sec container-fluid">
          <a class="navbar-brand" href="#">musicON</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>

      <div class="container-fluid main-content ">
        <div class="row mt-3 ">
            <div class="left-nav col-3 moderatedark rounded ">
                <div class="lib-nav d-flex flex-row justify-content-between align-items-center text-white-50 mb-4">
                    <div class="lib-nav-left d-flex flex-row align-items-center ms-1">
                        <img class="me-1" src="./assets/library_icon.png" height="15px" >
                        <div class="p-2">Your Library</div>
                    </div>
                    <div class="lib-nav-right">
                        <i class="fa-solid fa-plus p-2"></i>
                        <i class="fa-solid fa-arrow-right p-2"></i>
                    </div>
                </div>
                <div class="d-flex flex-column text-white ">
                    <div class="mb-3 p-2 lightdark rounded">
                        <p class="h6">Create your first Playlist</p>
                        <p>It's easy,we'll help you</p>
                        <button class="btn btn-rounded bg-light">Create Playlist</button>
                    </div>
                    <div class="mb-3 p-2 lightdark rounded">
                        <p class="h6">Let's find some podcasts to follow</p>
                        <p>We'll keep you updated on new episodes</p>
                        <button class="btn btn-rounded bg-light">Browse podcasts</button>
                    </div>
                </div>
                
            </div>
            <div class="song-section col-8 ms-2 moderatedark rounded ">
              <div class="main1 mb-4 ">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-4 text-white">Featured Charts</h3>
                  <button class="btn  btn-outline-light border-0">Show all</button>
                </div>
                <div class="resplay row carousel-wrapper">
                  <button class="prev-btn">← Prev</button>
                  <div class="owl-carousel">
                    <div class="card p-2 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/featured1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/featured2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/featured3.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/featured4.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/featured5.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/featured6.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    </div>
                    <button class="next-btn">Next →</button>
                </div>
              </div> 
              <div class="main2 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-4 text-white">India's Best</h3>
                  <button class="btn  btn-outline-light border-0">Show all</button>
                </div>
                <div class="resplay row carousel-wrapper">
                  <button class="prev-btn">← Prev</button>
                  <div class="owl-carousel">
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">True Story Bro! with Triggered Insaan</h5>
                          <p class="card-text"><small class="text-muted">Spotify</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Chanakya Niti</h5>
                          <p class="card-text"><small class="text-muted">Kiran Chavada</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india3.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">The Horror show by Khooni Mcnday</h5>
                          <p class="card-text"><small class="text-muted">TMV Studios</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india4.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india5.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india6.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india7.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india8.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india9.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/india10.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                  </div>
                  <button class="next-btn">Next →</button>
                </div> 
              </div> 
              <div class="main3 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                  <h3 class="mb-4 text-white">Shows to try</h3>
                  <button class="btn  btn-outline-light border-0">Show all</button>
                </div>
                <div class="resplay row carousel-wrapper">
                  <button class="prev-btn">← Prev</button>
                  <div class="owl-carousel">
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">True Story Bro! with Triggered Insaan</h5>
                          <p class="card-text"><small class="text-muted">Spotify</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Chanakya Niti</h5>
                          <p class="card-text"><small class="text-muted">Kiran Chavada</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows3.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">The Horror show by Khooni Mcnday</h5>
                          <p class="card-text"><small class="text-muted">TMV Studios</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows4.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows5.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows6.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows7.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows8.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows9.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card p-2 col-3 me-2 mb-2" style="width: 15rem; ">
                        <img class="card-img-top" src="./assets/shows10.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Top 50- Global</h5>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                  </div>
                  <button class="next-btn">Next →</button>
              </div>
            </div> 
                    
                </div>
              </div> 

            </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="music-player row fixed-bottom z-1 music-Player-background-color">
          <div class="music-player-left col-3"></div>
          <div class="music-player-middle col-6 offset-2 ">
            <div class="middle-top">
              <img class="icon-size" src="./assets/player_icon1.png" alt="">
              <img class="icon-size" src="./assets/player_icon2.png" alt="">
              <img class="icon-size" src="./assets/player_icon3.png" style="height: 30px; width: 30px; " alt="">
              <img class="icon-size" src="./assets/player_icon4.png" alt="">
              <img class="icon-size" src="./assets/player_icon5.png" alt="">
            </div>
            <div class="middle-bottom ">
              <span>00:00</span>
              <input class="w-25" type="range" min="0" max="100"  name="" id="">
              <span>02:17</span>
            </div>
          </div>
          <div class="music-player-right col-3"></div>
        </div>
      </div>
    
</body>
</html>