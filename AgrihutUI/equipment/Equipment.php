<!DOCTYPE html>
<html>
<head>
<title>The Generics | Store</title>
<meta name="description" content="This is the description">
<script src="store.js" async></script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700');
@import url("https://fonts.googleapis.com/css?family=Metal+Mania");

@font-face {
    font-family: "Booter - Zero Zero";
    src: url("Fonts/Booter - Zero Zero.woff") format("woff"),
         url("Fonts/Booter - Zero Zero.woff2") format("woff2");
    font-weight: normal;
    font-style: normal;
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

* {
    box-sizing: border-box;
    font-family: Raleway;
    color: #777;
}

html, body {
    margin: 0;
    padding: 0;
    min-height: 100%;
}

.nav ul {
    margin: 0;
}

.nav li {
    display: inline;
}

.nav a {
    display: inline-block;
    padding: .5em;
    color: white;
    text-decoration: none;
}

.main-nav {
    text-align: center;
    font-size: 1.1em;
    font-weight: lighter;
    border-bottom: 1px solid rgba(255, 255, 255, .3)
}

.main-nav li {
    padding: 0 5%;
}

.nav a:hover {
    background-color: rgba(255, 255, 255, .3)
}

.main-header {
    background-color: rgba(0, 0, 0, .6);
    background-image: url("Images/Header Background.jpg");
    background-blend-mode: multiply;
    background-size: cover;
    padding-bottom: 30px;
}

.band-name {
    text-align: center;
    margin: 0;
    font-size: 4em;
    font-family: "Booter - Zero Zero";
    font-weight: normal;
    color: white;
}

.band-name-large {
    font-size: 8em;
}

.content-section {
    margin: 1em;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1.5em;
}
.section-header {
    font-family: "Metal Mania";
    font-weight: normal;
    color: #333;
    text-align: center;
    font-size: 2.5em;
}

.about-band-image {
    float: left;
    height: 200px;
    width: 200px;
    margin: 15px;
    border-radius: 50%;
}

.main-footer {
    background-color: #56CCF2;
    color: white;
    padding: .25em 0;
}

.main-footer-container {
    display: flex;
    align-items: center;
}

.main-footer-container ul {
    flex-grow: 1;
    text-align: end;
}

.footer-nav li {
    padding: 0 .5em;
}

.footer-nav img {
    width: 30px;
    height: 30px;
}

.btn {
    text-align: center;
    vertical-align: middle;
    padding: .67em .67em;
    cursor: pointer;
}

.btn-header {
    margin: .5em 15% 2em 15%;
    color: white;
    border: 2px solid #2D9CDB;
    background-color: rgba(255, 255, 255, .1);
    border-radius: 0;
    font-size: 1.5em;
    font-weight: lighter;
    padding-left: 2em;
    padding-right: 2em;
}

.btn-header:hover {
    background-color: rgba(255, 255, 255, .3);
}

.btn-play {
    display: block;
    margin: 0 auto;
    color: #2D9CDB;
    font-size: 4em;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    padding: 0;
    text-align: center;
}

.btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #2D9CDB;
}

.tour-row {
    border-bottom: 1px solid black;
    padding-bottom: 1em;
    margin-bottom: 1em;
}

.tour-row:last-child {
    border: none;
}

.tour-item {
    display: inline-block;
    padding-right: .5em;
}

.tour-date {
    color: #555;
    width: 11%;
    font-weight: bold;
}

.tour-city {
    width: 24%;
}

.tour-arena {
    width: 42%;
}

.tour-btn {
    max-width: 19%;
}

.shop-item {
    margin: 10px;
}

.shop-item-title {
    display: block;
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
    color: #333;
    margin-bottom: 10px;
}

.shop-item-image {
    height: 250px;
    width:250px;
   
}
.shop-item-image:hover
{  transform: scale(1.4);
    z-index: 2;
}

.shop-item-details {
    display: flex;
    align-items: center;
    padding: 5px;
}

.shop-item-price {
    flex-grow: 1;
    color: #333;
}

.shop-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
}

.cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
}

.cart-item {
    width: 45%;
}

.cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
}

.cart-quantity {
    width: 35%;
}

.cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.2em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
}

.btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-danger:hover {
    background-color: #CC4C4C;
}
.bottom
        {
            margin-top: 50px;
            background-color:cornsilk;
            width: 100%;
            height: 200px;
            display: inline-block;
			font-size: 17px;
        }
		
        .get
{
	 width:200px;
	 height:150px;
	 font-size: 17px;
	 background-color:yellowgreen;
	 display:inline-block;
	 margin-left:100px;
	 margin-top:30px;
	 margin-bottom:50px;
	
}
.quick
{  margin-bottom:50px;
	 width:200px;
	 height:150px;
	 font-size:17px;
	 background-color:cornsilk;
	 margin-top:30px;
	  display:inline-block;
	  margin-left:30px;
	  margin-right:50px;
}
.links
{
	 width:200px;
	 height:150px;
	 font: size 17px;
	 background-color:cornsilk;
	 display:inline-block;
	 margin-right:10px;
	 margin-top:30px;
	  margin-bottom:50px;
	 
}
.popular
{
	 width:300px;
	 height:150px;
	 font-size:24px;
	 background-color:cornsilk;
	 display:inline-block;
	 margin-right:10px;
	 margin-top:30px;
	  margin-bottom:30px;
	 
}
.connect
{
	width:300px;
	 height:150px;
	 font-size:24px;
	 background-color:cornsilk;
	 display:inline-block;
	 margin-right:10px;
	 margin-top:30px;
	  margin-bottom:30px;
}


</style>

</head>
<body>

<h2 class="section-header">Equipment</h2>
<section>
<div class="shop-items">
    <div class="shop-item">
        <span class="shop-item-title">Balwan Motorpump</span>
            <a href="balwan motarpump.html"><img class="shop-item-image" src="equipment/balwan_motorpump.jpg"></a>
            <div class="shop-item-details">
            <span class="shop-item-price">₹ 2999</span>
            <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
        </div>
    </div>

    <div class="shop-item">
    <span class="shop-item-title">Hectare Mango Fruit Picker</span>
    <a href="fruit_picker.html"><img class="shop-item-image" src="equipment/fruit_picker.webp"></a>
    <div class="shop-item-details">
    <span class="shop-item-price">₹ 570</span>
    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
    </div>
    </div>
<div class="shop-item">
<span class="shop-item-title">Hand Weeder</span>
<a href="handweeder.html"><img class="shop-item-image" src="equipment/handweeder.jpg"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 560</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
</div>
</section>
<section class="container content-section">
<div class="shop-items">
<div class="shop-item">
<span class="shop-item-title">Auto Studio Kaveri Hosepipe</span>
<a href="hosepipr.html"><img class="shop-item-image" src="equipment/hosepipe.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 2,577</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Khurpa</span>
<a href="khurpa.html"><img class="shop-item-image" src="equipment/khurpa.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 166</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Power Wedder</span>
<a href="powe wedder.html"><img class="shop-item-image" src="equipment/power wedder.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 25,450</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Roll Cut Secateur</span>
<a href="rollcut.html"><img class="shop-item-image" src="equipment/rollcut.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 315</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Pruning Secateur</span>
<a href="secateur.html"><img class="shop-item-image" src="equipment/secateur.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 375</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Hedge Shear</span>
<a href="shear.html"><img class="shop-item-image" src="equipment/shear.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 626</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Mulching Sheet</span>
<a href="sheet.html"><img class="shop-item-image" src="equipment/sheet.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 2,646</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">MITVA Solar Light</span>
<a href="solor light.html"><img class="shop-item-image" src="equipment/solar_light.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 1,800</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>

<div class="shop-item">
<span class="shop-item-title">Agrimate Sprayer</span>
<a href="sprayer.html"><img class="shop-item-image" src="equipment/sprayer.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 375</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Mipatex Tarpaulin Sheet</span>
<a href="tadpatri.html"><img class="shop-item-image" src="equipment/tadpatri.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 1,049</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>

    <div class="shop-item">
<span class="shop-item-title">TAPAS Double Pump Motor</span>
<a href="tapas motor pump.html"><img class="shop-item-image" src="equipment/tapas_motorpump.jpg"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 4,299</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>

<div class="shop-item">
    <span class="shop-item-title">Mipatex Rain Hosepipe</span>
    <a href="tape.html"><img class="shop-item-image" src="equipment/tape.webp"></a>
    <div class="shop-item-details">
    <span class="shop-item-price">₹ 1,199</span>
    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
    </div>
    </div>

    <div class="shop-item">
        <span class="shop-item-title">Multi Utilty Torch</span>
        <a href="tourch.html"><img class="shop-item-image" src="equipment/torch.webp"></a>
        <div class="shop-item-details">
        <span class="shop-item-price">₹ 750</span>
        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
        </div>
        </div>
</div>
</section>
<section class="container content-section">
<h2 class="section-header">CART</h2>
<div class="cart-row">
<span class="cart-item cart-header cart-column">ITEM</span>
<span class="cart-price cart-header cart-column">PRICE</span>
<span class="cart-quantity cart-header cart-column">QUANTITY</span>
</div>
<div class="cart-items">
</div>
<div class="cart-total">
<strong class="cart-total-title">Total</strong>
<span class="cart-total-price">$0</span>
</div>
<button class="btn btn-primary btn-purchase"
type="button"><a href="billing.html">click here to generate bills 
</a></button>
</section>
</body>
</html>