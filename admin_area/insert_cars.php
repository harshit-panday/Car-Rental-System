<?php
include('../includes/connect.php');
if(isset($_POST['insert_car'])){
    $car_title=$_POST['car_title'];
    $description=$_POST['description'];
    $car_keywords=$_POST['car_keywords'];
    $car_categories=$_POST['car_categories'];
    $car_brands=$_POST['car_brands'];
    $car_prices=$_POST['car_prices'];
    $car_status='true';

    $car_images=$_FILES['car_images']['name'];

    $temp_images=$_FILES['car_images']['tmp_name'];

    //checking empty condtion
    if($car_title=='' or $description=='' or $car_keywords=='' or $car_categories=='' or $car_brands=='' or $car_prices=='' or $car_images==''){
        echo "<script>alert('please fill all the available field')</script>";
        exit();
    }else{
        move_uploaded_file($temp_images,"./car_images/$car_images");

        $insert_cars="insert into `cars` (car_title,car_description,car_keywords,category_id,brand_id,car_image,car_price,date,status)
        values('$car_title','$description','$car_keywords','$car_categories','$car_brands','$car_images','$car_prices',NOW(),'$car_status')";
        $result_query=mysqli_query($con,$insert_cars);
        if($result_query){
            echo "<script>alert('successfully inserted the product')</script>";
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Cars</title>
        <!-- bootstrap css link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
     crossorigin="anonymous">

     <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

     <!-- css file -->
     <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Product</h1>

        <!-- detail form of product -->
        <form action="" method="post" enctype="multipart/form-data">

        <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="car_title" class="form-label">car title</label>
                <input type="text" name="car_title" id="car_title" class="form-control" placeholder="enter car title" autocomplete="off" required="required">

            </div>

        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">car description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="enter car description" autocomplete="off" required="required">
            </div>

        <!-- product keyword -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="car_keywords" class="form-label">car keywords</label>
                <input type="text" name="car_keywords" id="car_keywords" class="form-control" placeholder="enter car keywords" autocomplete="off" required="required">
            </div>

        <!-- categories -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="car_categories" id="" class="form-select">
            <option value=''>select the category</option>";
                <?php
                $select_query="select * from `categories`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                ?>        
            </select>
        </div>

        <!-- brands -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="car_brands" id="" class="form-select">
            <option value=''>select the brands</option>";
            <?php
                $select_query="select * from `brands`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $brand_title=$row['brand_title'];
                    $brand_id=$row['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }
                ?> 
            </select>
        </div>

        <!-- images -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="car_images" class="form-label">car images</label>
                <input type="file" name="car_images" id="car_images" class="form-control" required="required">
            </div>

        <!-- prices -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="car_prices" class="form-label">car prices</label>
                <input type="text" name="car_prices" id="car_prices" class="form-control" placeholder="enter car price" autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_car" class="btn btn-info">
            </div>

        </form>
    </div>
    
</body>
</html>