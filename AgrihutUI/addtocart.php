<!DOCTYPE html>
<html>
<head>
<title>Add to cart</title>
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
    margin: 0 auto;
    width: 90%;
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
    height:400px;
    width:350px;
    margin: 15px;
    box-shadow: 0px 2px 15px lightgray;
}

.shop-item-title {
    display: block;
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
    color: #333;
    margin: 20px 0;
}

.shop-item-image {
    height: 220px;
    width:220px;
   
}
.shop-item-image:hover
{  transform: scale(1.4);
    z-index: 2;
}

.shop-item-details {
    display: flex;
    align-items: center;
    padding: 5px;
    background:white;
    margin:10px 0 0 0;
}

.shop-item-price {
    flex-grow: 1;
    color: #333;
    padding-left:20px;
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

.quantity-display {
    flex-grow: 1;
    color: #333;
    font-size:20px;
}

.quantity-display-input{
    width:50px;
    margin-left:80px;
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
<span class="cart-total-price">Rs 0</span>
</div>
<button class="btn btn-primary btn-purchase" type="button"><a href="billing.php">click here to generate bills 
</a></button>
</section>
</body>
</html>