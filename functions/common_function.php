<?php
include('includes/connect.php');

function getcars()
{
    global $con;
    //condition to check isset or not
    if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
        $select_query="Select * from `cars` order by rand() LIMIT 0,6" ;
    $result_query=mysqli_query($con,$select_query);
      // $row=mysqli_fetch_assoc($result_query);
      //echo $row['car_title'];
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
        <p class='card-text'>$car_price /hr</p>
        <a href='#' class='btn btn-primary'>Book</a>
        </div>
        </div></div>";
      }
}
}
}

function get_all_cars()
{
  global $con;
  //condition to check isset or not
  if(!isset($_GET['category'])){
  if(!isset($_GET['brand'])){
      $select_query="Select * from `cars` order by rand()" ;
  $result_query=mysqli_query($con,$select_query);
    // $row=mysqli_fetch_assoc($result_query);
    //echo $row['car_title'];
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
      <p class='card-text'>$car_price /hr</p>
      <a href='#' class='btn btn-primary'>Book</a>
      </div>
      </div></div>";
    }
}
}
}


function get_unique_categories()
{
    global $con;
    //condition to check isset or not
    if(isset($_GET['category'])){
        $category_no=$_GET['category'];
            $select_query="Select * from `cars` where `category_id`=$category_no" ;
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
      echo"<h2 class='text-center text-danger'>No Stocks for this Category</h2>";
    }
      // $row=mysqli_fetch_assoc($result_query);
      //echo $row['car_title'];
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
        <p class='card-text'>$car_price /hr</p>
        <a href='#' class='btn btn-primary'>Book</a>
        </div>
        </div></div>";
      }
}
}

function get_unique_brands()
{
    global $con;
    //condition to check isset or not
    if(isset($_GET['brand'])){
        $brand_no=$_GET['brand'];
            $select_query="Select * from `cars` where `brand_id`=$brand_no" ;
    $result_query=mysqli_query($con,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
      echo"<h2 class='text-center text-danger'>No Stocks for this Brand</h2>";
    }
      // $row=mysqli_fetch_assoc($result_query);
      //echo $row['car_title'];
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
        <p class='card-text'>$car_price /hr</p>
        <a href='#' class='btn btn-primary'>Book</a>
        </div>
        </div></div>";
      }
}
}

function getbrands()
{
    global $con;
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
}

function getcategories()
{
    global $con;
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
}

// Searching cars 
function search_cars()
{
    global $con;
    if(isset($_GET['search_data_product']))
    {
        $search_data_value=$_GET['search_data'];
        $search_query="Select * from `cars` where car_keywords like '%$search_data_value%'" ;
    $result_query=mysqli_query($con,$search_query);
      // $row=mysqli_fetch_assoc($result_query);
      //echo $row['car_title'];
      $num_of_rows=mysqli_num_rows($result_query);
      if($num_of_rows==0)
    {
      echo"<h2 class='text-center text-danger'>No Match found for this input</h2>";
    }
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
        <p class='card-text'>$car_price /hr</p>
        <a href='#' class='btn btn-primary'>Book</a>
        </div>
        </div></div>";
      }
}
}

  function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  


?>