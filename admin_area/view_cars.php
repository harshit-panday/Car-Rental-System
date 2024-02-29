<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center text-success">All Cars</h3>
    <table class="table table-bordered mt-5">
    <thead>
        <tr class="table-primary text-center">
            <th>Car id</th>
            <th>Car title</th>
            <th>Car image</th>
            <th>Car price</th>
            <th>Total sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $get_cars="select * from `cars`";
        $result=mysqli_query($con,$get_cars);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $car_id=$row['car_id'];
            $car_title=$row['car_title'];
            $car_image=$row['car_image'];
            $car_price=$row['car_price'];
            $status=$row['status'];
            $number++;
            ?>
            <tr class='table-light text-center '>
            <td><?php echo $number;?></td>
            <td><?php echo $car_title?></td>
            <td><img src='./car_images/<?php echo $car_image;?>' class='car_img'/></td>
            <td><?php echo $car_price; ?>/-</td>
            <td>1</td>
            <td><?php echo $status;?></td>
            <td><a href=''><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href=''><i class='fa-solid fa-trash'></i></a></td>
        </tr>
            
        <?php
        }
           
        ?>
    </tbody>

    </table>
    
</body>
</html>