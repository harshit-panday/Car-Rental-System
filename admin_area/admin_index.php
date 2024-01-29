<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
     crossorigin="anonymous">

     <!-- css file -->
     <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:aqua">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome to Admin Dashboard</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
        <div class="bg light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-item-center" style="background-color: aquamarine;">
                <div class="px-5">
                    <a href="#"><img src="../images/computer_pc.png" style="width:100px; object-fit:contain"></a>
                    <p class="text-light text-center text-dark">Admin Name</p>
                </div>
                <div class="button text-center  ">
                    <button  class="my-3"><a href="insert_categories.php" class="nav-link text-light bg-info mx-1 my-1 p-2">Insert Cars</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">View Cars</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">Insert Categories</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">View Categories</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">Insert Brands</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">View Brands</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">All orders</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">All Payment</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">List Users</a></button>
                    <button ><a href="" class="nav-link text-light bg-info mx-1 my-1 p-2">Logout</a></button>
                </div>
            </div>
        </div>    
    </div>


    <!--footer wala page hey ye -->
<footer class="footer" style="background-color: aqua; padding: 3px; text-align:center">
<p>All right is been reserved Designed by Harshit , Tanmay , Praveen</p>
    
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
 crossorigin="anonymous"></script>
</body>
</html>