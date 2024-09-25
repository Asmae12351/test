<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARINAS HOTEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="ARINAS HOTEL.png" type="image/jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar1">
    <div class="logo"><i>ARISANE</i></div>
    
  
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="#rooms">Rooms</a></li>
        <li><a href="Facilities">Facilities</a></li>
        <li><a href="Contact us">Contact </a></li>
        <li><a href="About">About</a></li>
    </ul>
    <div class="srch">
        <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
        </button>
        <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
        </button>
    </div>
</nav>



<!-- Modal1 -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fa-solid fa-user"></i> User login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg> </button>
            </div>
            <div class="modal-body">
                <!-- Contenu du formulaire de connexion ici -->
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        <a href="javascript: void(0)" class="a">forgot password ?</a>
                    </div>
               
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning ">Login</button>
               
            </div>
        </div>
    </div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fa-solid fa-user"></i> Register Now</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg> </button>
            </div>
            <div class="modal-body">
                <!-- Contenu du formulaire de connexion ici -->
                <span class="badge text-bg-light mb-3 text-wrap lh-base">Note:
                    Your details must match with your ID (Passport , drivig license , ID card , etc ) that will be required during chek-in .
                </span>
                <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
        </div>
        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone" aria-describedby="phoneHelp">
        </div>
        <div class="col-md-6 mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" class="form-control" id="picture" aria-describedby="pictureHelp">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" rows="3"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="pincode" class="form-label">Pincode</label>
            <input type="text" class="form-control" id="pincode" aria-describedby="pincodeHelp">
        </div>
        <div class="col-md-6 mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" aria-describedby="dobHelp">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" aria-describedby="passwordHelp">
        </div>
        <div class="col-md-6 mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" aria-describedby="confirmPasswordHelp">
        </div>
    </div>
</div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning ">Register Now</button>
               
            </div>
        </div>
    </div>
</div>
<!-- Slider main container -->
<div class="section">
<div class="txt">
                 <p>Discover the authenticity and charm of Amazigh culture in an elegant and warm setting. <br> Enjoy modern comfort while being immersed in the local richness. <br> Stay at Hôtel ARISANE for an unforgettable experience.</p>
                </div>
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="La riad berbere.jpeg" alt=""></div>
        <div class="swiper-slide"> <img src="Le Riad Berbère, Marrakech.jpeg" alt=""></div>
    
        <div class="swiper-slide"><img src="WhatsApp Image 2024-08-13 at 19.47.58_cc28ebf4.jpg" alt=""></div>
       

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <!-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
              
</div>         
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true, // Active le loop pour revenir au début après la dernière slide
        speed: 1500, // Durée de la transition en millisecondes (2 secondes pour slow-motion)
        autoplay: {
            delay: 2000, // Délai de 2 secondes entre chaque slide
            disableOnInteraction: false, // Continue à défiler même après une interaction
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
<br><br>
<section class="section1">
  <!-- check availability form -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded ">
            <h5>Check Booking Availability</h5>
            <form action="">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <label for="checkin" class="form-label" style="font-weight:500;">Check-in</label>
                        <input type="date" class="form-control" id="checkin" aria-describedby="dobHelp">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label for="checkout" class="form-label" style="font-weight:500;">Check-out</label>
                        <input type="date" class="form-control" id="checkout" aria-describedby="dobHelp">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label for="adults" class="form-label" style="font-weight:500;">Adult</label><br>
                        <select class="form-select shadow-none" id="adults">
                            <option selected>Select number of adults</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label for="children" class="form-label" style="font-weight:500;">Children</label><br>
                        <select class="form-select shadow-none" id="children">
                            <option selected>Select number of children</option>
                            <option value="0">None</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mt-2">
                        <button type="submit" class="btn text-white shadow-none" style="background-color: #b0633c;">submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
</section>
<!--our Rooms-->
<section class="rooms" id="rooms">
<h2 class="mt-5 pt-4 text-center "><i><b>OUR ROOMS</b></i> </h2>
<div class="card-deck mx-4">
    <div class="card  border-0 shadow">
        <img src="room1.jpg" class="card-img-top" alt="Room Image 1">
        <div class="card-body">
            <h5 class="card-title">Fes Suite</h5>
            <span class="badge rounded-pill text-bg-light  text-wrap text-darck">
                1 Room
            </span>
            <span class="badge rounded-pill text-bg-light  text-wrap text-darck">
                2 Bathroom
            </span>
            <span class="badge rounded-pill text-bg-light  text-wrap text-darck">
                1 Balcony 
            </span>
            <span class="badge rounded-pill text-bg-light  text-wrap text-darck">
                1 Bathtub
            </span>
            <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Complimentary Wi-Fi
    </span>
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Coffee Maker
    </span><br><br>
           <div class="rating mb-4">
           <h6 class="card-title">Rating</h6>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
           </div>

        </div>
        <div class="col-lg-1 mt-2">
                        <a href="#" class="btn text-white shadow-none" style="background-color: #b0633c;">Booking</a>
                        <a href="#" class="btn btn-outline-dark shadow-none" style="margin:5px; width:85px; margin-left:-2px;">Details</a>
        </div>
       
    </div>
    <div class="card  border-0 shadow">
        <img src="room2.jpg" class="card-img-top" alt="Room Image 2">
        <div class="card-body">
            <h5 class="card-title">Chefchaouen Suite</h5>
            <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        1 Room
    </span>
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        2 Bathrooms
    </span>
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Flat-Screen TV
    </span>
 
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Complimentary Wi-Fi
    </span>
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Coffee Maker
    </span><br><br>
           <div class="rating mb-4">
           <h6 class="card-title">Rating</h6>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
           </div>
        </div>
        <div class="col-lg-1 mt-2">
                        <a href="#" class="btn text-white shadow-none" style="background-color: #b0633c;">Booking</a>
                        <a href="#" class="btn btn-outline-dark shadow-none" style="margin:5px; width:85px; margin-left:-2px;">Details</a>
        </div>
       
    </div>
    <div class="card  border-0 shadow">
        <img src="room5.jpg" class="card-img-top" alt="Room Image 3">
        <div class="card-body">
            <h5 class="card-title">Marrakech Suite</h5>
            <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        1 Room
    </span>
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        2 Bathrooms
    </span>
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Flat-Screen TV
    </span>
 
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Complimentary Wi-Fi
    </span>
    <span class="badge rounded-pill text-bg-light text-wrap text-dark">
        Coffee Maker
    </span>
    <span class="badge rounded-pill text-bg-light  text-wrap text-darck">
                2 Bathtub
            </span><br><br>
           <div class="rating mb-4">
           <h6 class="card-title">Rating</h6>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
            <i class="fa-solid fa-star text-warning"></i>
           </div>
        </div>
        <div class=" col-lg-1 mt-2">
                        <a href="#" class="btn text-white shadow-none" style="background-color: #b0633c;">Booking</a>
                        <a href="#" class="btn btn-outline-dark shadow-none" style="margin:5px; width:85px; margin-left:-2px;">Details</a>
        </div>
       
    </div>
</div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0" style="font-weight: 700;">More Rooms >>></a>
        </div>
    </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
