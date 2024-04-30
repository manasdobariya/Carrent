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
    <title>package</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .card-text {
            font-size: 2.5rem;
        }



        .col {
            display: flex;
            border: 3px solid black;
        }

        .card-img-top {

            width: 100%;
            height: 250px;
        }

        .card-body {
            font-size: 2.1rem;
            text-align: center;
        }
    </style>
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


    <div class="heading" style="background:url(pexels-eberhard-grossgasteiger-707344.jpg) no-repeat">
        <h1>CARS</h1>
    </div>

    <section class="packages">
        <h1 class="heading-title">top cars</h1>
        <div class="box-container">
            <!-- <div class="box"> -->
            <?php

            $sql = "select * from cars";
            $result = mysqli_query($link, $sql);

            while ($data = mysqli_fetch_array($result)) { ?>



                <div class="col">
                    <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">



                        <input type="hidden" name="business" value="sb-j43uwg29130663@business.example.com">
                        <input type="hidden" name="item_name" value="<?php echo $data['name']; ?>">
                        <input type="hidden" name="item_number" value="<?php echo $data['id']; ?>">
                        <input type="hidden" name="amount" value="<?php echo $data['price']; ?>">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="no_shipping" value="1">
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="return" value="http://localhost/Carrent/success.php">
                        <input type="hidden" name="cancel_return" value="http://localhost/paypal/cancel.php">


                        <div class="card">
                            <img class="card-img-top" src="<?php echo $data['image']; ?>" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $data['name']; ?></h4>
                                <p class="card-text">₹<?php echo $data['price']; ?></p>
                                <button type="submit" class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>

                    </form>

                </div>
            <?php } ?>
        </div>

        <!-- <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/21327/HostCarImage/host_car_image_213271f5e1f05-924c-4995-a4fb-1b84d13b2016.jpg20230308-42-178r3to" alt="3">
                </div>
                <div class="content">
                    <h3>Hyundai Creta 2015</h3>
                    <p> Manual
                        Petrol
                        5 Seats</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/34980/HostCarImage/host_car_image_3498093876f7b-32f2-4b4c-aac7-c0ac306a6b20.jpg20230207-40-jzarnn" alt="4">
                </div>
                <div class="content">
                    <h3>Maruti Suzuki Ertiga 2017</h3>
                    <p>Manual
                        Petrol
                        7 Seats</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/136779/HostCarImage/host_car_image_1367791161b223-062b-4df5-b4f5-0b713594158a.jpg20230221-42-1yx3ai5" alt="5">
                </div>
                <div class="content">
                    <h3>Hyundai I20 2023</h3>
                    <p>Automatic
                        Petrol
                        5 Seats</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/136476/HostCarImage/host_car_image_136476d9a4db7c-0776-4f3c-bbc8-46701844b121.jpg20230326-26-n7tipx" alt="6">
                </div>
                <div class="content">
                    <h3>Maruti Suzuki BALENO 2022</h3>
                    <p>Manual
                        Petrol
                        5 Seats</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>



            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/13515/HostCarImage/host_car_image_1351597f58b90-ef06-4dee-8241-c7d373459195.jpg20230117-63-r1ndxc" alt="7">
                </div>
                <div class="content">
                    <h3>Tata Tiago 2017</h3>
                    <p>Automatic
                        Petrol
                        5 Seats</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/165507/HostCarImage/165507_host_car_image_16550740aff3ac-622b-4762-853b-0837c2c3c1ad76e5f1b2-e59a-4c32-a1d8-1106f501b0ca.jpg" alt="8">
                </div>
                <div class="content">
                    <h3>Maruti Suzuki Ertiga 2021</h3>
                    <p>Manual
                        Petrol
                        7 Seats</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/360191/HostCarImage/host_car_image_3601915be71471-1361-4cfd-a012-13ffe5d022b2.jpg20230827-51-o0cbb" alt="9">
                </div>
                <div class="content">
                    <h3>KIA Sonet 2023</h3>
                    <p>Manual
                        Petrol
                        5 Seats</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div> -->
        <!-- <div class="box">
                <div class="image">
                    <img src="pexels-simon-berger-10361600.jpg" alt="10">
                </div>
                <div class="content">
                    <h3>Navratri Festival Package 06N & 07D Tour</h3>
                    <p>Surat, Ahmadabad , Baroda</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div> -->
        <!-- <div class="box">
                <div class="image">
                    <img src="pexels-sudipta-mondal-1603650.jpg" alt="11">
                </div>
                <div class="content">
                    <h3>Spectacular South Gujarat Tour</h3>
                    <p>Ahmedabad, Champaner , Surat, Daman, Saputara, Vadodara (Baroda), Pavagah</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="pexels-tyler-lastovich-572688.jpg" alt="12">
                </div>
                <div class="content">
                    <h3>Manali - Dalhousie Tour</h3>
                    <p>Surat, New Delhi , Manali, Dalhousie </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div> -->

        </div>

        <!-- <div class="load-more"><span class="btn">load more</span></div> -->
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
</body>

</html>