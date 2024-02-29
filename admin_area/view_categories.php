<h3 class="text-center text-success">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead>
        <tr class="table-primary text-center">
            <th>sr no</th>
            <th>Category Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $select_cat="select * from `categories`";
        $result=mysqli_query($con,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $category_id=$row['category_id'];
            $category_title=$row['category_title'];
            $number++;  
        ?>
        <tr class='table-light text-center '>
            <td><?php echo $number;?></td>
            <td><?php echo $category_title;?></td>
            <td><a href=''><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href=''><i class='fa-solid fa-trash'></i></a></td>
        </tr>
 <?php       
        }?>
    </tbody>
</table>