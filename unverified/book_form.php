<!-- <?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    // $guests = $_POST['guests'];
    // $arrivals = $_POST['arrivals'];
    // $leaving =$_POST['leaving'];
    // $package =$_POST['package'];
    // $vehical=$_POST['vehical'];
    // $vehical_t=$_POST['vehical_t'];

    $request = " insert into book_form(name, email, phone, address,location) 
    values('$name','$email','$phone',' $address','$location')";
    mysqli_query($connection, $request);
    // $sql = "SELECT * FROM BOOK_FORM EHERE arrivals BETWEEN CAST('2023-01-01' AS DATE) AND CAST ('2029-01-01' AS DATE)";

    header('location:book.php');
    

}else{
    echo 'something went wrong try again';
}
?> -->