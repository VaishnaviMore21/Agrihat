<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $cat=$_POST['category'];
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'uploaded_img/'.$p_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `sellerproducts`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');
   if($cat=='herbiside')
   {
      $insert_query = mysqli_query($conn, "INSERT INTO `herbicides`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
   }
   else if($cat=='insectiside')
   {
      $insert_query = mysqli_query($conn, "INSERT INTO `insecticide`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
   }
   else if($cat=='seeds')
   {
      $insert_query = mysqli_query($conn, "INSERT INTO `seed`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
   }
   else if($cat=='animalhusbandry')
   {
      $insert_query = mysqli_query($conn, "INSERT INTO `animal_husbandry`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
   }
   else if($cat=='equipment')
   {
      $insert_query = mysqli_query($conn, "INSERT INTO `equipment`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
   }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>



<div class="container">

<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new product</h3>
   <h4>Select the product category :</h4><br> 
   <select name='category'>
      <option value='herbiside'>Herbisides</option>
      <option value='insectiside'>Insectisides</option>
      <option value='seeds'>Seeds</option>
      <option value='animalhusbandry'>Animal husbandry</option>
      <option value='equipments'>Equipments</option>
   </select>
   <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
   <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>product image</th>
         <th>product name</th>
         <th>product price</th>
      </thead>

      <tbody>
        <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `sellerproducts`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>₹ <?php echo $row['price']; ?>/-</td>
            
         </tr>

         <?php
            }; 
         }
         ?>

      </tbody>
   </table>

</section>


</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>

        <div class="section-title" data-aos="fade-left">
          <h1>Categories</h1>
        </div>

        <div>
          
            <div class="category">
              <a href="../buyer/animal_husbandry.php"><img src="uploaded_img/animal_logo.jpg" class="img_logo"></a>
              <br><br><a class="nav-link scrollto active" id="txt1" href="animal_husbandry.php"><h2>Animal Husbandary</h2></a>
            </div>
            <div class="category">
              <a href="../buyer/herbicides.php"><img src="uploaded_img/herbicides_logo.jpg" class="img_logo" ></a>
              <br><br><a class="nav-link scrollto active" id="txt1" href="herbicides.php"><h2>Herbicides</h2></a>
            </div>
            <div class="category">
              <a href="../buyer/insecticides.php"><img src="uploaded_img/insectisides_logo.jpg" class="img_logo"></a>
              <br><br><a class="nav-link scrollto active" id="txt1" href="insecticides.php"><h2>Insecticides</h2></a>
            </div>
            <div class="category">
              <a href="../buyer/seeds.php"><img src="uploaded_img/seeds_logo.jpg" class="img_logo"></a>
              <br><br><a class="nav-link scrollto active" id="txt1" href="seeds.php"><h2>Seeds</h2></a>
            </div>
            <div class="category">
              <a href="../buyer/equiptment.php"><img src="uploaded_img/equipment_logo.jpg"class="img_logo"></a>
              <br><br><a class="nav-link scrollto active" id="txt1" href="equiptment.php"><h2>Equipments</h2></a>
            </div>
            <br><br><br><br>
        </div>
      </div>
    </section><!-- End Portfolio Section -->
</body>
</html>