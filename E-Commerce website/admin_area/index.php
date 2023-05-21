<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrape css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
     rel="stylesheet" 
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
     crossorigin="anonymous">

     <!-- font awesome link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
     crossorigin="anonymous" 
     referrerpolicy="no-referrer" />

     <!-- css file-->
     <link rel="stylesheet" href="../style.css">

     <style>
        .logo {
            width:7%;
            height:7%;
        }
        .footer{
            position: absolute;
            bottom: 0;
        }
        </style>


</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo 2.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- 2nd child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--3rd child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-2 d-flex 
            align-items-center">
                <div class="p-2">
                    <a href="#"> <img src="../images/Pineapple juice.jpg" 
                    alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div> 
                <!--button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light 
                    bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_category" 
                    class="nav-link text-light 
                    bg-info my-1">Insert Categories </a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light 
                    bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">All Orders</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light 
                    bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

    <!--4th child-->
    <div class="container my-3">
        <?php
        if (isset($_GET["insert_category"])) {
            include("insert_categories.php");
        }
        if (isset($_GET["insert_brand"])) {
            include("insert_brands.php");
        }

        ?>
    </div>





<!--last child-->
    <div class="bg-info p-3 text-center footer">
  <p>All rights reserved-Designed by Misty-2023</p>
 </div>

 <!--bootstrap js link --> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
   integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>  
</body>
</html>