<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.heading
			{
				background-color: aliceblue;
				height: 60px;
			}
			#info{
				display: inline-block;
				text-align: center;
			}
        .navbar
		{
			margin-top: 10px;
		     text-align: center;
			font-size: 30px;
			text-decoration: none;
			background-color:greenyellow;
			height: 60px;
            word-spacing: 10px;

			
		}
		.navbar li
		{
		   text-align: center;	
			height: 40px;
			display: inline-block;
		}
    .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
         height: 300px;
         width: 400px;
         margin-left: 500px;
         margin-top: 180px;
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgb(255, 110, 110);

         
        }
        
        /* Modal Content */
        .modal-content {
          background-color:whitesmoke;
          margin: auto;
          padding: 20px;
        
          width: 80%;
        }
        .modal2 {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
         height: 300px;
         width: 400px;
         margin-left: 500px;
         margin-top: 180px;
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
  background-color: yellowgreen;

         
        }
        
        /* Modal Content */
        .modal-content2 {
          background-color:whitesmoke;
          margin: auto;
          padding: 20px;
        
          width: 80%;
        }
        
        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        </style>
		
</style>
</head>
<body>
  <div class="heading">
    <ul id="info">
    <li>+91 87623616</li>
    <li>Farm Fresh</li>
</ul>
</div>
<div class="navbar">
 <ul class="menuitem">
    <li><a href="homecss.html">Home</a></li>
    <li><a href="store.html">Shop</a></li>
    <li><a href="Services.html">Services</a></li>
    
    <li><a href="abouting.html">About us</a></li>
    <li><a href="contact.html">Contact us</a></li>
    
  </ul>
</div>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form name="bill" action="billdata.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <!--<input type="submit" value="Continue to checkout" class="btn">-->
        <button id="myBtn">Conitnue To Checkout</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
  
     <p>Something went wrong</p>
  </div>

</div>
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal2-content">
    <span class="close">&times;</span>
  
     <p>Thank you</p>
  </div>

</div>

        
      </form>
    </div>
  </div>
 
  </div>
</div>

</body>
<script>
  function  validate()
  {
    if(document.bill.firstname.value.length<1)
    {
      alert("Plase Enter Valid name");
      return false;
    }
     if(document.bill.email.value.length<1)
    {
      alert("Plese fill the Email Address");
      return false;
    }
    if(document.bill.address.value.length<1)
    {
      alert("Please Enter the Valid Delivery Address");
      return false;
    }
    if(document.bill.city.value.length<1)
    {
      alert("Please Enter City");
      return false;
    }
    if(document.bill.state.value.length<1)
    {
      alert("Please Enter City");
      return false;
    }
    if(document.bill.zip.value.length<6 || document.bill.zip.value.length<6)
    {
      alert("Plese Enter Valid Zip Code");
      return false;
    }
    if(document.bill.cardnumber.value.length<17 && document.bill.cardnumber.value.length>17)
    {
      alert("Enter Valid Card Number :CARD NO LENTH IS GREATER THAN 17");
      return false;
    }
   
    if(document.bill.expyear.value.length<4)
    {
      alert("Enter Valid Expiry Date");
      return false;
    }
    if(document.bill.cvv.value.length<3 || document.bill.cvv.value.length<3)
    {
      alert("Please Enter 3 digit CVV Number");
      return false;
    }
    else
    {
      alert("Thank You"
      );
      return true;
    
    }
  
    


  }
  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>
