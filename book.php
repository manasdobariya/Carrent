<?php
include('config.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>book</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">CaRent.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="cars.php">cars</a>
            <!-- <a href="book.php">book</a> -->
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>


    <div class="heading" style="background:url(pexels-ünsal-demirbaş-23547.jpg) no-repeat">
        <h1>book now</h1>
    </div>



    <section class="booking">
        <h1 class="heading-title">book your Car!</h1>
        <!-- onclick="validateAndSubmit()" -->
        <form action="config.php" method="post" class="book-form" id="f" onsubmit="myFunction()">

            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" value="<?php echo $_SESSION['username']; ?>" placeholder="enter your name" name="name" required>
                </div>
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="tel"  placeholder="enter your number"  name="phone" required>
                </div>
                <div class="inputbox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>
                 <div class="inputbox">
                <span>city</span>
                <input type="text" placeholder="Enter your city" name="location" required >
            </div>
                <!-- <div class="inputbox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests" required>
                </div> -->

                <!-- <div class="inputbox">
              
                <span>Choose a package</span>
                <select id="cars">
                    <option value="volvo">shimla</option>
                    <option value="saab">darjiling</option>
                    <option value="opel">mumbai</option>
                    <option value="audi">manali</option>
                </select>
            </div> -->


                <!-- <div class="inputbox">
                    <span>Chose a package</span>
                    <br>
                    <select name="package" id="option" onchange="preferedBrowser()"> class="op" >
                        <option value="">Choose a pacakage</option>
                        <option value="shimla">shimla</option>
                        <option value="Jyotirling Tour">Jyotirling Tour</option>
                        <option value="Golden Triangle ">Golden Triangle </option>
                        <option value="Aurangabad">Aurangabad</option>
                        <option value="Saputara">Saputara</option>
                        <option value="Singapour">Singapour</option>
                        <option value="Spectacular South Gujarat Tour">Spectacular South Gujarat Tour</option>
                        <option value="Manali - Dalhousie Tour">Manali - Dalhousie Tour</option>
                        <option value="Navratri Festival Package 06N & 07D Tour">Navratri Festival Package 06N & 07D Tour</option>
                        <option value="Kullu-Manali ">Kullu-Manali </option>
                        <option value="Chardham Yatra">Chardham Yatra</option>
                    </select>
                </div> -->

                <!-- <div class="inputbox">
                <span>arrivals :</span>
                <input type="date" class="adate" id="ardate" name="arrivals" max="2024-09-30" >
            </div>
            <div class="inputbox">
                <span>leaving :</span>
                <input type="date"  name="leaving" >
            </div>  -->

                <!-- <div class="inputbox">
            <span>Chose a vehical</span>
            <br>
            <select name="package" id="option"> 
            <option value="">Choose a vehical</option>
                <option value="car" title="ac =1000 and non ac =700">car</option>
                <option value="jeep">jeep</option>
                <option value="bus">bus</option>
                <option value="Traveller">Traveller</option>
              
            </select>
            </div> -->
                <!-- <div class="inputbox">
                    <span>Chose a vehical </span>
                    <br>
                    <select name="vehical" id="option">
                        <option value="">Choose a vehical</option>
                        <option value="car">car</option>
                        <option value="bus">bus</option>
                        <option value="Train">Train</option>

                    </select>
                </div>
                <div class="inputbox">
                    <span>Chose a vehical type </span>
                    <br>
                    <select name="vehical_t" id="option">
                        <option value="">Choose a vehical type</option>
                        <option value="Ac">Ac</option>
                        <option value="Non Ac">Non Ac</option>


                    </select>
                </div> -->


            </div>
            <input type="submit" value="submit" class="btn" name="send">





            <!-- 
        <div class="row">
  <div class="column">
  <i class="fas fa-car" style="font-size:50px;color:#8e44ad;text-align: center;"></i>
    <h2 >car</h2>
    <p>Ac 3000/-  non-ac 2000/-</p>
  </div>
  <div class="column" >
  <i class="fas fa-bus" style="font-size:50px;color:#8e44ad;"></i>
    <h2 style="font-size: 25px;text-align: center;">bus</h2>
    <p>Ac 15000/-  non-ac 8000/-</p>
  </div>
  <div class="column" >
  <i class="fas fa-train" id="th" style="font-size:50px;color:#8e44ad;text-align: center;"></i>
    <h2>Train</h2>
    <p>Ac 10000/-  non-ac 6000/-</p>
  </div>
</div> -->


            <!-- <div class="box123">
                <div class="one">
                    <i class="fas fa-car" style="font-size:50px;color:#8e44ad;text-align: center;"></i>
                    <h2 style="font-size: 25px;text-align:center; margin-top:10px;">car</h2>
                    <p style="font-size: 15px;margin-top:10px;">Ac 3000/- non-ac 2000/-</p>
                </div>
                <div class="two">
                    <i class="fas fa-bus" style="font-size:50px;color:#8e44ad;"></i>
                    <h2 style="font-size: 25px;text-align: center; margin-top:10px;">bus</h2>
                    <p style="font-size: 15px;margin-top:10px;">Ac 15000/- non-ac 8000/-</p>
                </div>
                <div class="three">
                    <i class="fas fa-train" id="th" style="font-size:50px;color:#8e44ad;text-align: center;"></i>
                    <h2 style="font-size: 25px;text-align: center;margin-top:10px;">Train</h2>
                    <p style="font-size: 15px;margin-top:10px;">Ac 10000/- non-ac 6000/-</p>
                </div>
            </div> -->



            </div>






            <!-- 




additional code 
-->

            <!-- to these -->


        </form>
    </section>

    <section class="footer" style="background:url(A_black_image.jpg) ">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="cars.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
                <a href="Gallery.php"><i class="fas fa-angle-right"></i>Gallery</a>
                <a href="logout.php"><i class="fas fa-angle-right"></i>logout</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>

            </div>


            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i> carent@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> mumbai,india -400104</a>

            </div>

            <div class="box">
                <h3>follow us</h3>

                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>

            </div>

        </div>

        <div class="credit">created by <span>Internship_project</span> | all rights reserved</div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>