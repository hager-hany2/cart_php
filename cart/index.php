<?php
session_start();

include_once './helpers/ConecationToBe.php';
if(isset($_POST['add_to_card'])){
$img=$_POST['img_cart'];
$name=$_POST['name_cart'];
$price=$_POST['price_cart'];
$desc=$_POST['description_cart'];
$insert_products=mysqli_query($conn,"INSERT INTO  `cart` (image_product, name_product, price_product)) values('$img','$name','$price') ");
}





?>
<?php
include_once './Templete/header.php';


?>
<style>
    .home{
        background-image: url('home.png');
        background-repeat: no-repeat;
        background-size: 100%;
        height: 100%;
    }
    /* body{
        background-image: url("bg.avif");
        background-repeat: no-repeat;
        background-size: cover;
    } */
</style>
<nav class="navbar navbar-expand-lg " style="        background: #414140;">
        <div class="container" style="    padding: 5px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand " style="       color: white;font-weight:bolder;font-size: 26px;" href="#">E-Commerce</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" style="     color: white; font-weight:bold;" href="./index.php">Home</a>
        </li>

        </ul>
        
            <form class="form-inline my-2 my-lg-0" style="width:980px">
            <div class="input-group mb-3" style="margin-top: 20px; padding-left:20px ">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2" fdprocessedid="02jugy">
            <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
            </svg></span>
            <a href="" class="link-offset-2 link-underline link-underline-opacity-0 " style="margin-left: 18px;position: relative;top: 8px;    color: white;font-weight:bold;">Add product</a>
            <a href="viewproduct.php" class="link-offset-2 link-underline link-underline-opacity-0 " style="margin-left: 18px;position: relative;top: 8px;    color: white;font-weight:bold;">view product</a>
            <a href="viewuser.php" class="link-offset-2 link-underline link-underline-opacity-0 text-light"style="    margin-left: 18px;position: relative;top: 8px;font-weight:bold;">view users</a>
             <a href="index.php #shop" class="link-offset-2 link-underline link-underline-opacity-0 text-light"style="    margin-left: 18px;position: relative;top: 8px;font-weight:bold;">shop product</a>
            </div>
            

    </form></div>
    </div>
    <div class="cart" style="color:white;position: relative;right: 100px; font-weight:bold; font-size:20px ">
        <a href="cart.php" class="link-offset-2 link-underline link-underline-opacity-0 text-light">
        <svg style=" color: white;font-weight:bold;" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"></path>
        </svg>
        <span style="    color: white;font-weight:bold;"><sup>4</sup></span>
    </a>
    </div>
    </nav>
            <div style=" position:relative;    " id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " style="    background-color: #ededed;" >
            <div class="carousel-item active">
            <img style="height: 800px;" class="d-block w-100" src="bg.avif" alt="First slide">
                    <div class="container  "id="shop">
                            <section class="products row">
                                <p class="col-4"></p>
                                <h1  class="container text-center col-4"style=" 
                                font-weight: bolder;
font-size: 28px;
position: relative;
margin-top:35px;
margin-bottom:35px;
text-align: center;
background-color: gray;
width:fit-content;
color:white;

    border-radius: 14px;
    padding: 10px;</p>
">let shop my product</h1>



                                <p class="col-4"></p>
                                <div class="product_container row ">
                                <?php
                                            $display_product=mysqli_query($conn,'select * from `product`');
                                            while( $row=mysqli_fetch_assoc($display_product)){
                            
                        
                                            
                                    ?>
                                    <div class="edit_form col-xl-4 col-lg-6 col-md-6 col-sm-12 ">
                                  
                                    <div class="card m-2 shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
                                    
                                    <img name="img_cart" class="" style="width: 100%; height:200px" src="<?php echo$row['image']?>" alt="<?php echo $row['name'];?>">
                                            <div class="card-body">
                                                <h5 class="card-title" name="name_cart"><?php echo $row['name'];?></h5>
                                                <p class="card-text"name="price_cart"><?php echo $row['price'];?></p>
                                                <p class="card-text" name="description_cart">Lorem, ipsum dolor sit amet 
                                                        consectetur adipisicing elit. Quas nesciunt 
                                                        est facilis possimus quidem unde!
                                                </p>
                                                <a href="cart.php" class="btn btn-warning text-light  text-center " name="add_to_card"> add to card</a>
                                            </div>
                                            </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                            
                            </section>
                          
                    </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="home3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="home4.jpg" alt="Third slide">
            </div>
        </div>
        </div>







<?php
include_once './Templete/footer.php'
?>

