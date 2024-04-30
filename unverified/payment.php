<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
       
        

        .heading {
            background-size: cover !important;
            background-position: center !important;
            padding-top: 18rem;
            padding-bottom: 18rem;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .heading h1 {
            font-size: 10rem;
            text-transform: uppercase;
            color: var(--white);
            text-shadow: var(--text-shadow);
        }





        .booking .book-form{
    padding: 2rem;
    background: var(--light-bg);
}
.booking .book-form .flex{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}
.booking .book-form .flex .inputbox{
    flex:1 1 41rem;
}
.booking .book-form .flex .inputbox input{
   width: 100%;
   padding: 1.2rem 1.4rem;
   font-size: 1.6rem;
   color: var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border: var(--border);
}
.booking .book-form .flex .inputbox input:focus{
    background: var(--black);
    color: var(--white);

}
.booking .book-form .flex .inputbox input:focus::placeholder{
    background: var(--black);
    color: var(--light-white);
}
.booking .book-form .flex .inputbox span{
    font-size: 1.5rem;
    color: var(--light-black);
}
.booking .book-form .btn{
    margin-top: 2rem;
}
    </style>
</head>

<body>
    <div class="heading" style="background:url(pexels-eberhard-grossgasteiger-707344.jpg) no-repeat">
        <h1>payment</h1>
    </div>
    <!-- <section class="booking">
    <div class="container">
        <h2>Payment Details</h2>
        <form id="payment-form">
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" placeholder="Enter your card number" required>
            </div>
            <div class="form-group">
                <label for="expiry">Expiry Date</label>
                <input type="text" id="expiry" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" placeholder="Enter CVV" required>
            </div>
            <div class="inputbox">
                <span>Amount</span>
                <input type="number" id="amount" placeholder="Enter payment amount" required>
            </div>

            <div class="inputbox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests" required >
            </div>
            <button type="submit" onclick="pay()">Submit Payment</button>
        </form>
        </section> -->










    <section class="booking">
       
        
        <form action="pay_form.php"  method="post" class="book-form" id="f" onsubmit="showAlert()">

            <div class="flex">
               
                <div class="inputbox">
                    <span>Card Number</span>
                    <input type="text" id="card-number" name="cnumber"  pattern="[0-9]{12}"  placeholder="Enter your card number" required>
                </div>
                <div class="inputbox">
                    <span>Expiry Date</span>
                    <input type="date" id="expiry" name="edate" placeholder="MM/YY" required>
                </div>
                <div class="inputbox">
                    <span>CVV</span>
                    <input type="text" id="cvv" name="cvv" pattern="[0-9]{03}"  placeholder="Enter CVV" required>
                </div>
                <div class="inputbox">
                    <span>Amount</span>
                    <input type="number" id="amount" name="amount" placeholder="Enter payment amount" required>
                </div>
                </div>
            
            <input type="submit"  value="submit" class="btn" name="send">
          

        </form>
    </section>
      
       
    </div>

    <script>
        
        
var form = document.getElementById('f');
let myWindow;

function myFunction() {
  if (form.checkValidity()) {
    alert("Adding Succesful!");
  }
}
function showAlert() {

 alert("Payment successful!");
//   window.open("home.php");
myWindow = window.open("home.php");

 
//   return true;
}

      
    </script>
</body>

</html>