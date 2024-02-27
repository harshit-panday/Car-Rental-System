<!-- file connect ho raha hey yaha per -->
<?php
include('includes/connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
     crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg" style="background-color:aqua">
  <div class="container-fluid">
    <img src="./images/logo.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg" style="background-color: aquamarine;">
<ul class="navbar-nav me-auto">
<li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
</ul>
</nav>

<!-- website ka introduction wala part -->
<div class="bg-light">
  <h3 class="text-center">Car Rental</h3>
  <p class="text-center">Welcome to Car Adda - your go-to destination for convenient and affordable car rentals. Discover a seamless booking experience, a diverse fleet of top-notch vehicles, and transparent pricing. Whether for a weekend getaway or daily commuting, we've got the perfect ride for you. Your journey begins with us.
</p>
</div>

<!-- side nav bar aur product ke liye ye code hey -->
<div class="row px-3">
  <div class="col-md -10">
    <!-- product -->
    <div class="row">
      <!-- fetching product -->
      <?php
      $select_query="Select * from `cars` order by rand() LIMIT 0,9" ;
      $result_query=mysqli_query($con,$select_query);
      // $row=mysqli_fetch_assoc($result_query);
      // echo $row['car_title'];
      while($row=mysqli_fetch_assoc($result_query)){
        $car_id=$row['car_id'];
        $car_title=$row['car_title'];
        $car_description=$row['car_description'];
        $car_image=$row['car_image'];
        $car_price=$row['car_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo "<div class='col-md-4  mb-2'>
        <div class='card'>
        <img src='./admin_area/car_images/$car_image' class='image_product' alt='$car_title'>
        <div class='card-body'>
        <h5 class='card-title'>$car_title</h5>
        <p class='card-text'>$car_description</p>
        <a href='#' class='btn btn-primary'>Book</a>
        </div>
        </div></div>";
      }
       ?>
      <!-- row end -->
    </div>
    <!-- col end -->
    </div>
  
  <!-- sidebar -->
  <div class="col-md-2" style="background-color: aquamarine; padding:0%">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h3>Car Brands</h3></a>
      </li>

    <?php
    $select_brands="Select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);
    // $row_data=mysqli_fetch_assoc($result_brands);
    // echo $row_data['brand_title'];
    while($row_data=mysqli_fetch_assoc($result_brands)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];
      echo " <li class='nav-item'>
      <a href='index.php?brand=$brand_id' class='nav-link'><h5>$brand_title</h5></a>
    </li>";
    }
    ?>
    </ul>

    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h3>Categories</h3></a>
      </li>
      <?php
    $select_categories="Select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
    // $row_data=mysqli_fetch_assoc($result_brands);
    // echo $row_data['brand_title'];
    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo " <li class='nav-item'>
      <a href='index.php?category=$category_id' class='nav-link'><h5>$category_title</h5></a>
    </li>";
    }
    ?>
    </ul>
    
    
  </div>
</div>
</div>





<!--footer wala page hey ye -->
<footer class="footer" style="background-color: aqua; padding: 3px; text-align:center">
<p>All right is been reserved Designed by Harshit , Tanmay , Praveen</p>
</div>
    

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
 crossorigin="anonymous"></script>
</body>
</html>