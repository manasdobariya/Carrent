<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <section class="header">
        <a href="home.php" class="logo">CaRent.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="book.php">cars</a>
            <!-- <a href="book.php">book</a> -->
            <a href="Gallery.php">Gallery</a>
            <a href="logout.php">Log out</a>
            <!-- <a href="login.php">log in/sign up</a> -->


        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(https://cdn.pixabay.com/photo/2021/11/13/19/04/car-rental-6792111_640.jpg) no-repeat">
                    <div class="content">


                        <span>explore,discover,travel</span>
                        <h3>travel arround the world</h3>
                        <a href="cars.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(https://cdn.pixabay.com/photo/2023/10/12/18/13/ai-generated-8311473_960_720.jpg) no-repeat">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>discover the new places</h3>
                        <a href="cars.php" class="btn">discover more</a>
                    </div>
                </div>




                <div class="swiper-slide slide" style="background:url(https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y2FyfGVufDB8fDB8fHww) no-repeat">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="cars.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>
    </section>



    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">

                <h3>Online Booking</h3>
            </div>
            <div class="box">

                <h3>Car Selection</h3>
            </div>

            <div class="box">

                <h3>Location Finder</h3>
            </div>
            <div class="box">

                <h3>Customer Support</h3>
            </div>
            <div class="box">

                <h3>Special Offers And Discounts</h3>
            </div>
            <div class="box">

                <h3>Delivery</h3>
            </div>
        </div>
    </section>


    <section class="home-about">
        <div class="image">
            <img src="https://images.pexels.com/photos/97079/pexels-photo-97079.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>

            <br>
            <span>

                1. Payment: Accepted payment methods, deposit requirements, and any additional fees like taxes or surcharges.
                <br>
                <br>
                2. Insurance: Details about insurance coverage options, including collision damage waivers (CDW), liability insurance, and any restrictions or requirements.
                <br>
                <br>
                3. Fuel: Policies on fueling the vehicle before returning it, such as whether it should be returned with a full tank or if there are options to prepay for fuel.
                <br>

                <br>
                4. Vehicle Return: Guidelines for returning the vehicle, including any applicable fees for returning it late or to a different location than originally specified.
                <br>
                <br>
                5. Damage and Liability: Details on the renter's responsibility for damages to the vehicle and any liability limitations.
                <br>
                <br>
                6. Mileage Restrictions: Any limitations on the number of miles allowed during the rental period, and associated fees for exceeding the limit.
                <br>
                <br>
                7. Restrictions and Prohibitions: Any restrictions on where the vehicle can be driven, such as off-road use or crossing international borders.
                <br>

                <br>
                8. Penalties and Fines: Any penalties or fines for violations of rental policies, such as smoking in the vehicle or returning it excessively dirty.
                <br>

            </span>
            </p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </section>
    <!-- <section class="search">
        <form action="" method="GET">
            <div class="input-group mb-3" id="search-bar">
                <input type="text" name="search" onfocus="this.value=''" required value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                    } ?>" class="form-control" placeholder="Search data">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <?php
        $con = mysqli_connect("localhost", "root", "", "carrent");

        if (isset($_GET['search'])) {
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM cars WHERE CONCAT(id,name,price,image) LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $items) {

        ?>
                     <tr>
                <td><?= $items['id']; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['price']; ?></td>
                <td><?= $items['image']; ?></td>

              </tr> 

                    <div class="card1" style="width:400px">
                        <img class="card-img-top" src="<?php echo $items['image']; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $items['name']; ?></h4>
                            <p class="card-text">₹<?php echo $items['price']; ?></p>
                            <button type="submit" class="btn btn-primary"><a href="cars.php">Buy now</a></button>


                        </div>

                    </div>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                </tr>
        <?php
            }
        }
        ?>
    </section> -->

    <section class="home-packages">
        <h1 class="heading-title">Our packages</h1>
         <form action="" method="GET">
            <div class="input-group mb-3" id="search-bar">
                <input type="text" name="search" onfocus="this.value=''" required value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                    } ?>" class="form-control" placeholder="Search data">
                <button type="submit" class="btn">Search</button>
            </div>
        </form>
        <?php
        $con = mysqli_connect("localhost", "root", "", "carrent");

        if (isset($_GET['search'])) {
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM cars WHERE CONCAT(id,name,price,image) LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $items) {

        ?>
                     <!-- <tr>
                <td><?= $items['id']; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['price']; ?></td>
                <td><?= $items['image']; ?></td>

              </tr>  -->

                    <div class="card1" style="width:400px">
                        <img class="card-img-top" src="<?php echo $items['image']; ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $items['name']; ?></h4>
                            <p class="card-text">₹<?php echo $items['price']; ?></p>
                            <!-- <button type="submit" class="btn"> <a href="cars.php">Buy now</a></button> -->
                            <!-- <a href="book.php" class="btn">Book now</a> -->


                        </div>

                    </div>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">No Record Found</td>
                </tr>
        <?php
            }
        }
        ?>


        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/25581/HostCarImage/host_car_image_25581a9f56464-c1f7-4a24-93e0-702f015ff6d7.jpg20230109-32-1bqlw7w" alt="">
                </div>
                <div class="content">
                    <h3>Mahindra Thar 2021</h3>
                    <p>Manual
                        Diesel
                        4 Seats</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/297389/HostCarImage/cover0c11ddf5-5adc-4ac5-9e8c-012e5d2ec6b7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>KIA Seltos 2020</h3>
                    <p>Manual
                        Petrol
                        5 Seats</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="https://zoomcar-assets.zoomcar.com/21327/HostCarImage/host_car_image_213271f5e1f05-924c-4995-a4fb-1b84d13b2016.jpg20230308-42-178r3to" alt="">
                </div>
                <div class="content">
                    <h3>Hyundai Creta 2015</h3>
                    <p> Manual
                        Petrol
                        5 Seats</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div> 


        </div>
        <div class="load-more"><a href="book.php" class="btn">load more</a></div>

    </section>

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, nihil! Neque doloremque nesciunt quod placeat labore autem adipisci, nemo aut provident soluta esse sed aliquam cupiditate quo dolores libero tempore!</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
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
                <a href="welcome.php"><i class="fas fa-angle-right"></i>reset password</a>
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
            <div class="subs">
                <form onsubmit="senDmail(); reset(); return false;">
                    <h3>GET IN TOUCH</h3>

                    <input type="email" id="email" placeholder="enter your email" required>
                    <button type="submit" class="sbtn">Send</button>
                    <form>
            </div>

        </div>

        <div class="credit">created by <span>Internship_project</span> | all rights reserved</div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function senDmail() {
            // let email = document.getElementById("email").value;
            // let body = "Email id:" + email;

            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "temporaryac.in@gmail.com",
                Password: "0B9E891CDFCA4D9C4296CDD10001A62D747F",
                To: 'temporaryac.in@gmail.com',
                From: '21id01it008@ppsu.ac.in',
                // From: document.getElementById("email").value,
                Subject: document.getElementById("email").value,
                Body: "New email from your subscribe user"

            }).then(
                message => alert(message)
            );
        }
    </script>
</body>

</html>