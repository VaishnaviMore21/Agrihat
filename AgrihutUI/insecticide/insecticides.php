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

<h2 class="section-header">Insecticide</h2>
<section>
<div class="shop-items">
    <div class="shop-item">
        <span class="shop-item-title">Amruth AlMAX liquid</span>
           <a href="almax.html"> <img class="shop-item-image" src="insecticide/almax.webp"></a>
            <div class="shop-item-details">
            <span class="shop-item-price">₹ 215</span>
            <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
        </div>
    </div>

    <div class="shop-item">
    <span class="shop-item-title">AZAAL Neem Oil</span>
    <a href="Azaal.html"><img class="shop-item-image" src="insecticide/azaal.webp"></a>
    <div class="shop-item-details">
    <span class="shop-item-price">₹ 400</span>
    <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
    </div>
    </div>
<div class="shop-item">
<span class="shop-item-title">Pioneer Aigro Bio METAZ</span>
<a href="BIOMETAZ.html"><img class="shop-item-image" src="insecticide/BIOMETAZ.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 690</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
</div>
</section>
<section class="container content-section">
<div class="shop-items">
<div class="shop-item">
<span class="shop-item-title">Anand DR Bacto's Brave</span>
<a href="brave.html"><img class="shop-item-image" src="insecticide/brave.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 550</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">T.STANES Bio Catch</span>
<a href="catch.html"><img class="shop-item-image" src="insecticide/catch.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 1,088</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Econeem Plus</span>
<a href="econeem.html"><img class="shop-item-image" src="insecticide/ECONEEM.jpg"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 2,100</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Margo ECOTIN</span>
<a href="ecotin.html"><img class="shop-item-image" src="insecticide/ecotin.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 1,105</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">KAYBEE Thrips Raze</span>
<a href="kybee.html"><img class="shop-item-image" src="insecticide/kaybee.jpg"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 304</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Neem-AZADIRACHTIN</span>
<a href="neem.html"><img class="shop-item-image" src="insecticide/neem.png"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 378</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">Katyayani Activated Neem Oil</span>
<a href="neem oil.html"><img class="shop-item-image" src="insecticide/neem_oil.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 265</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">T.STANES Nimbecidine</span>
<a href="nimbecidbe.html"><img class="shop-item-image" src="insecticide/Nimbecidine.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 932</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">TERPA Pillar</span>
 <a href="pillar.html"><img class="shop-item-image" src="insecticide/pillar.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 400</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">SONKUL Sun Bio Beviguard</span>
<a href="sonkul.html"><img class="shop-item-image" src="insecticide/sonkul.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">₹ 1,770</span>
<button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
</div>
</div>
<div class="shop-item">
<span class="shop-item-title">White 
</span>
<a href="wektocon.html"><img class="shop-item-image" src="insecticide/wektocon.webp"></a>
<div class="shop-item-details">
<span class="shop-item-price">30 Rs</span>
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