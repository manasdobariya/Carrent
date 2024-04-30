<?php
include('config.php');
// include_once('register.php');

session_start();

if (!empty($_GET)) {
  $_SESSION['product'] = $_GET['item_name'];
  $_SESSION['txn_id'] = $_GET['tx'];
  $_SESSION['amount'] = $_GET['amt'];
  $_SESSION['currency'] = $_GET['cc'];
  $_SESSION['status'] = $_GET['st'];
  $_SESSION['payer_id'] = $_GET['payer_id'];
  $_SESSION['payer_email'] = $_GET['payer_email'];
  $_SESSION['payer_name'] = $_GET['first_name'] . ' ' . $_GET['last_name'];

  date_default_timezone_set('Asia/Kolkata');

  $sql = "insert into payments (payment_id,payer_id,payer_name,payer_email,item_id,item_name,currency,amount,status,created_at) values ('" . $_SESSION['txn_id'] . "','" . $_SESSION['payer_id'] . "','" . $_SESSION['payer_name'] . "','" . $_SESSION['payer_email'] . "','','" . $_SESSION['product'] . "','" . $_SESSION['currency'] . "','" . $_SESSION['amount'] . "','" . $_SESSION['status'] . "','" . date('y-m-d h:i:s') . "')";

  $result = mysqli_query($link, $sql);


  if ($result) {
    header('location:success.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<style>
.loader {
    position: absolute;
    content: '';
    top: calc(4% - 1.5rem);
    left: calc(4% - 2.5rem);
    width: 5rem;
    height: 5rem;
    border: 5px solid lightBlue;
    border-radius: 50%;
    overflow: hidden;
    transition: 0.3s;
    box-shadow: 0rem 0rem 0.6rem rgba(0,0,0,0.3);
    animation: spin 1s linear infinite;
}
.success {
  background: lightGreen;
  border-color: lightGreen;
}
.fail {
  background: #ffcccb;
  border-color: #ffcccb;
}
.loader.success{
    &::before {
      height: 7px;
      width: 2.5rem;
      position: absolute;
      top: 65%;
      left: 44%;
      background-color: green;
      transform: rotate(-45deg);
      transform-origin: 0% 50%;
      border-radius: 5px;
      animation: baseGrow 1s;
      content: '';
    }
    
    &::after {
      height: 7px;
      width: 1.5rem;
      position: absolute;
      top: 65%;
      left: 50%;
      background-color: green;
      transform: rotate(-135deg);
      transform-origin: 0% 50%;
      border-radius: 5px;
      animation: tipGrow 1s;
      content:'';
    }  
}

.loader.success {
  animation: pop 1.2s ease-in-out;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
        border-top: 5px solid blue;
  }
  100% {
    transform: rotate(360deg);
        border-top: 5px solid blue;

  }
}

@keyframes tipGrow {
  0% {
    width: 0px;
    left: 0;
    top: 0;
  }
  25% {
    width: 0px;
    left: 0;
    top: 0; 
  }
  50% {
    top: 0%;
    left: 0%;
    width: 0;
  }
  75% {
    top: 0%;
    left: 0%;
    width: 0rem;
  }
  100% {
    top: 65%;
    left: 50%;
    width: 1.5rem;
  }
}

@keyframes baseGrow {
  0% {

    width: 0;
  }
  90% {
    width: 0;
  }
  100% {

    width: 2.5rem;
  }
}

@keyframes pop {
  0% {
    transform: scale(1);
  }
  80% {
    transform: scale(1);    
  }
  100% {
    transform: scale(1.1);
  }
}

@keyframes leftIn {
  0% {
    left: 0;
    top: 0;
    width: 0;
  }
  100% {
    top: calc(50% - 0.25rem);
    left: calc(50% - 1.5rem);
    width: 3rem;
  }
}

@keyframes rightIn {
  0% {
    rigth: 0;
    top: 0;
    width: 0;
  }
  100% {
    top: calc(50% - 0.25rem);
    right: calc(50% - 1.5rem);
    width: 3rem;
  }
}
</style>
</head>

<body>

  <div class="container mt-3">
    <span class="loader">
    </span>

    <div class="alert alert-success">
      <strong>Success!</strong> Payment has been successful
    </div>

    <table class="table table-bordered">
      <tbody>
        <tr>
          <td>User name</td>
          <td><?php echo $_SESSION['username']; ?></td>
        </tr>
       
        <tr>
          <td>Transaction Id</td>
          <td><?php echo $_SESSION['txn_id']; ?></td>
        </tr>
        <tr>
          <td>Product Name</td>
          <td><?php echo $_SESSION['product']; ?></td>
        </tr>
        <tr>
          <td>Amount</td>
          <td><?php echo $_SESSION['amount']; ?></td>
        </tr>

        <tr>
          <td>Payment Status</td>
          <td><?php echo $_SESSION['status']; ?></td>
        </tr>

      </tbody>
    </table>
    <button id="downloadButton" class="btn">Download PDF</button>
    <a href="home.php" class="btn">Home</a>
  </div>

  <script>
    // Function to download the current page as a PDF file
    function downloadPDF() {
      // Define the options for html2pdf
      var opt = {
        margin: 0.5,
        filename: '<?php echo $_SESSION['txn_id']; ?>.pdf',
        image: {
          type: 'jpeg',
          quality: 0.98
        },
        html2canvas: {
          scale: 2
        },
        jsPDF: {
          unit: 'in',
          format: 'letter',
          orientation: 'portrait'
        }
      };

      // Use html2pdf to convert the current page to PDF and download it
      html2pdf().from(document.body).set(opt).save();
    }

    // Add event listener to the download button
    document.getElementById("downloadButton").addEventListener("click", downloadPDF);
  </script>
  <script>




    const loader = document.querySelector('.loader');
    let timeoutID;
   
    function success() {
      loader.classList.add('success');
      
      
    }
    clearTimeout(timeoutID);
    timeoutID = setTimeout(success, 0.05);
    // setTimeout(() => success(), 1000);
    
    
    
  </script>
</body>

</html>