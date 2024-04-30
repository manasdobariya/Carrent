<?php

$connection = mysqli_connect('localhost','root','','payment');

if(isset($_POST['send'])){
    $cnumber = $_POST['cnumber'];
    $edate = $_POST['edate'];
    $cvv = $_POST['cvv'];
    $amount = $_POST['amount'];
  

    $request = " insert into pay_form(cnumber,edate,cvv,amount) 
    values('$cnumber','$edate','$cvv',' $amount')";
    mysqli_query($connection, $request);
    



    

    


    header('location:payment.php');
    

}else{
    echo 'something went wrong try again';
}
?>