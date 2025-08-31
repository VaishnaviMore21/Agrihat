<html>
    <style>
        /* By Dominik Biedebach @domobch */

body {
  font-family: 'Roboto', sans-serif;
  padding: 0;
  margin: 0;
}

small {
  font-size: 12px;
  color: rgba(0, 0, 0, 0.4);
}

h1 {
  text-align: center;
  padding: 50px 0;
  font-weight: 800;
  margin-top: 20px;
  letter-spacing: -1px;
  color: inherit;
  font-size: 40px;
}

/* By Dominik Biedebach @domobch */

h2 {
  text-align: center;
  font-size: 30px;
  margin-top: 20px;
  font-weight: 300;
  color: inherit;
  padding: 50px;
}

.center {
  text-align: center;
}

/* By Dominik Biedebach @domobch */

/*section {
  height: 100px;
}*/

/* NAVIGATION */
nav {
  width: 80%;
  height: 30px;
  margin: 0 auto;
  background: #fff;
  padding: 50px 0;
  box-shadow: 0px 5px 0px #dedede;
}

/* By Dominik Biedebach @domobch */
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: green;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: #555;
}



/* DROWN */

nav.drown ul li a {
  position: relative;
  overflow: hidden;
  z-index: 1;
}

nav.drown ul li a:hover {
  color: #fff;
}

nav.drown ul li a:before {
  background: #fff;
  content: '.';
  color: transparent;
  position: absolute;
  width: 500%;
  top: 100px;
  right: 300px;
  height: 300px;
  z-index: -1;
}
nav.drown ul li a:hover:before {
  left: auto;
  bottom: auto;
  right: -50%;
  top: 0;
  background: #89C52B;
}



/* Keyframes */
@-webkit-keyframes fill {
  0% {
    width: 0%;
    height: 1px;
  }
  50% {
    width: 100%;
    height: 1px;
  }
  100% {
    width: 100%;
    height: 100%;
    background: #2ECC71;
  }
}

/* Keyframes */
@-webkit-keyframes circle {
  0% {
    width: 1px;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    height: 1px;
    z-index: -1;
    background: #eee;
    border-radius: 100%;
  }
  100% {
    background: #aaa;
    height: 5000%;
    width: 5000%;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 0;
  }
}
.form-style-2{
	max-width: 500px;
margin-left: 200px;
margin-top: 100px;
margin-left: 500px;
    text-align:center;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2-heading{
	font-weight: bold;
	font-style: italic;
	border-bottom: 2px solid #ddd;
	margin-bottom: 20px;
	font-size: 15px;
	padding-bottom: 3px;
}
.form-style-2 label{
	display: block;
	margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
	width: 100px;
	font-weight: bold;
	float: left;
	padding-top: 8px;
	padding-right: 5px;
}
.form-style-2 span.required{
	color:red;
}
.form-style-2 .tel-number-field{
	width: 40px;
	text-align: center;
}
.form-style-2 input.input-field, .form-style-2 .select-field{
	width: 48%;	
}
.form-style-2 input.input-field, 
.form-style-2 .tel-number-field, 
.form-style-2 .textarea-field, 
 .form-style-2 .select-field{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border: 1px solid #C2C2C2;
	box-shadow: 1px 1px 4px #EBEBEB;
	-moz-box-shadow: 1px 1px 4px #EBEBEB;
	-webkit-box-shadow: 1px 1px 4px #EBEBEB;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	padding: 7px;
	outline: none;
}
.form-style-2 .input-field:focus, 
.form-style-2 .tel-number-field:focus, 
.form-style-2 .textarea-field:focus,  
.form-style-2 .select-field:focus{
	border: 1px solid #0C0;
}
.form-style-2 .textarea-field{
	height:100px;
	width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
	border: none;
	padding: 8px 15px 8px 15px;
	background:green;
	color: #fff;
	box-shadow: 1px 1px 4px #DADADA;
	-moz-box-shadow: 1px 1px 4px #DADADA;
	-webkit-box-shadow: 1px 1px 4px #DADADA;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
	background: black;
	color: #fff;
}
/* By Dominik Biedebach @domobch */
    </style>
    <body>
        <!-- By Dominik Biedebach @domobch -->

<link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>



 <!--<section style="background: #89C52B; color: #fff;">-->
  
  <nav class="drown">
    <ul>
      <li><a href="addcroping.html">Add crop</a></li>
      <li><a href="updatecrop.html">Update Crop</a></li>
      <li><a href="deletecrop.html">Delete Crop</a></li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Logout</a></li>
     
    </ul>
  </nav>
</section>
<div class="form-style-2" style="text-align: center;">
    <div class="form-style-2-heading">Add Crops</div>
    <form action="addcropdb.php" method="post">
    <label for="cropname"><span> Enter Crop Name </span><input type="text" class="input-field" name="cropname" value="" /></label>
    <label for="qnty"><span>Enter Quantity</span><input type="text" class="input-field" name="qty" value="" /></label>
   
    <label for="field4"><span>Regarding</span><select name="field4" class="select-field">
    <option value="General Question">General</option>
    <option value="Advertise">Advertisement</option>
    <option value="Partnership">Partnership</option>
    </select></label>
    <label for="description"><span>Description About Crop <span class="required">*</span></span><textarea name="desc" class="textarea-field"></textarea></label>
    <label for="img"><span>Select Crop Image<span class="required">*</span></span><input id="cropimg" type="file" name="crop img" placeholder="Select Image" style="height:200px">
    <label><span> </span><input type="submit" value="Submit" /></label>
    </form>
    </div>
    </body>
</html>