<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARINAS HOTEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="icon" href="ARINAS HOTEL.png" type="image/jpg"/>
    <style>
        /* General CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        input[type=number] {
            -moz-appearance: textfield;
        }
        .navbar1 {
            display: flex;
            justify-content: space-between;
            padding: 5px;
            height: 70px;
            align-items: center;
            margin: 4px 0;
            position: relative;
        }
        .navbar1::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("télécharger\ \(9\).jpeg") no-repeat center center;
            background-size: cover;
            filter: blur(15px);
            z-index: -1;
        }
        .navbar1 ul {
            display: flex;
            margin-left: 170px;
        }
        .navbar1 ul li {
            margin-left: 13px;
            padding: 10px;
            list-style: none;
        }
        .navbar1 ul li a {
            text-decoration: none;
            font-size: 20px;
            color: white;
            position: relative;
        }
        .navbar1 ul li a::after {
            content: "";
            width: 0;
            height: 2px;
            background-color: aliceblue;
            display: block;
            margin: auto;
            transition: width 0.5s;
        }
        .navbar1 ul li a:hover::after {
            width: 100%;
        }
        .navbar1 .logo i {
            color: white;
            font-size: 23px;
            margin-left: 13px;
            padding: 10px;
            font-weight: bolder;
        }
        .btn1 {
            height: 35px;
            border-radius: 7px;
            width: 80px;
            border: none;
            background-color: white;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn1:hover {
            background-color: #b0633c;
            color: white;
        }
        .swiper {
            width: 700px;
            float: right;
            margin-right: 40px;
            margin-top: 30px;
        }
        .swiper-slide img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .swiper-button-prev, .swiper-button-next,
        .swiper-pagination-bullet,
        .swiper-scrollbar-drag {
            background: #b0633c;
        }
        .swiper-pagination-bullet-active {
            background: white;
        }
        .txt p {
            padding: 20px;
            font-size: 30px;
            font-weight: 700;
            color: #b0633c;
        }
        section {
            background-color: #b0633c;
            padding: 10px;
            margin: 15px 0;
        }
        .form-select, .form-control {
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ced4da;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control:focus, .form-select:focus {
            border-color: #495057;
            box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.25);
        }
        label {
            font-weight: bold;
            color: #333;
        }
        h5 {
            margin-bottom: 20px;
            color: #b0633c;
        }
        .rooms {
            background-color: transparent;
        }
    </style>
</head>
<body>
<nav class="navbar1">
    <div class="logo"><i>ARINAS</i></div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Rooms.php">Rooms</a></li>
        <li><a href="Facilities.php">Facilities</a></li>
        <li><a href="ContactUs.php">Contact us</a></li>
        <li><a href="About.php">About</a></li>
    </ul>
    <div class="srch">
        <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
    </div>
</nav>

<!-- Modal1 -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fa-solid fa-user"></i> User login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required>
                        <a href="javascript:void(0)" class="a">Forgot password?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Login</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fa-solid fa-user"></i> Register Now</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="number">Phone number</label>
                        <input type="number" class="form-control" id="numberInput" placeholder="Phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="number">CIN number</label>
                        <input type="number" class="form-control" id="cinInput" placeholder="CIN number" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date of birth</label>
                        <input type="date" class="form-control" id="dobInput" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-select" id="genderSelect" required>
                            <option selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-select" id="countrySelect" required>
                            <option selected>Country</option>
                            <option value="morocco">Morocco</option>
                            <option value="spain">Spain</option>
                            <option value="france">France</option>
                            <option value="germany">Germany</option>
                            <option value="portugal">Portugal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bioTextarea" rows="3" placeholder="Tell us about yourself"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Register Now</button>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="txt">
        <p>Discover Your Dream Escape</p>
    </div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="image1.jpg" alt="Image 1"></div>
            <div class="swiper-slide"><img src="image2.jpg" alt="Image 2"></div>
            <div class="swiper-slide"><img src="image3.jpg" alt="Image 3"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<h5 class="text-center">OUR ROOMS</h5>
<div class="card-deck mx-4">
    <div class="card">
        <img src="cardimage1.jpg" class="card-img-top" alt="Room Image 1">
        <div class="card-body">
            <h5 class="card-title">Luxury Suite</h5>
            <p class="card-text">Experience the epitome of luxury with our exquisitely designed suites.</p>
        </div>
    </div>
    <div class="card">
        <img src="cardimage2.jpg" class="card-img-top" alt="Room Image 2">
        <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">Indulge in comfort with our elegantly appointed deluxe rooms.</p>
        </div>
    </div>
    <div class="card">
        <img src="cardimage3.jpg" class="card-img-top" alt="Room Image 3">
        <div class="card-body">
            <h5 class="card-title">Standard Room</h5>
            <p class="card-text">Enjoy simplicity and convenience with our standard rooms.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
