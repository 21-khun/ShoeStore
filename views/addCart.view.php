<?php
require "views/partials/heading.php";
?>
    <div class="row">
    <div class="navbar-fixed-top">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                <i style="color: skyblue;font-size: 30px;" class="fa fa-align-left" ></i>
                
            </button>
        </div>


        <div class="navbar-collapse collapse  " id="mainNav">
            <div class="col-md-3  mobile-menu">



                <div class="icon">
                    <img src="shoes/home.jpg" class="img-responsive" alt="">
                    <h1><span style="color: red;"><i>Shoe</i></span><span style="color: white;">Store</span>
                    </h1>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                    </ul>
                </div>
                <ul class="nav nav-pills nav-stacked ">

                <li  ><a href="/"><i class="fa fa-home"></i> Home</a></li><br>
                    <li><a href="/about"><i class="fa fa-user-circle"></i> About</a></li><br>
                    <li><a href="/service"><i class="fa fa-briefcase"></i> Service</a></li><br>
                    <li class="active"><a href="/shop"><i class="fa fa-cart-plus"></i> Shop</a></li><br>
                    <li ><a href="/contact"><i class="fa fa-envelope"></i> Contact</a></li><br>



                </ul>

                <div style="text-align: center;">
                    <p style="color: white;">&copy; Copyright 2021 </p>
                    <p style="color: white;padding-bottom: 20px;">Designed by Kyaw Lwin Moe</p>
                </div>




            </div>


        </div>




    </div>


<div class="col-md-9 col-md-offset-3 ">
    <div class="col-xs-12" id="shop">
           
        <div class="row">
            <div class="col-md-12">
                    <div class="row">
                            <div class="col-xs-12">
                                <h1 class="page-header">Shop <span style="font-size: 25px; color: grey;">Subheading</span> </h1>
                            </div>
                        
                    </div>
            </div>
                    <div class="col-xs-12">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li ><a href="/shop">Shop</a></li>
                            <li ><a href="#">Add To Cart</a></li>
                            
                        </ul>
                    </div> 


        </div>

       <div class="col-xs-12" style="padding-bottom:20px;" >
           
            <form action="/order" class="form-group" method="post" >
                    <table class="table table-bordered text-center"  >
                                            <thead >
                                                <tr>
                                                    <th width="200px" class="text-center" >Image</th>
                                                    <th class="text-center">Brand</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Size</th>
                                                </tr>
                                            </thead>
                                <tbody>
                                        <?php foreach($getItems as $item): ?>
                                            

                                            <br>
                                            <tr height="100px" > 
                                                <td><img src="<?= $item->image ?>" width="200px" height="200px" class="img-responsive" alt></td>
                                                <td style="line-height:100px;"><?= $item->brand?></td>
                                                <td style="line-height:100px;" ><?= $item->price?></td>
                                                
                                                <td style="line-height:100px;" ><input type="number" value="1"    max="60" min="1" name="quantity" id="" required ></td>
                                                <td style="line-height:100px;" ><input type="number" value="40"   max="60" min="40" name="size" id="" required></td>

                                                
                                            </tr>

                                        <?php endforeach; ?>







                                
                                        
                                </tbody>
                                                
                                                
                        </table>
                                        <input type="hidden" name="price" value="<?= $item->price?>"> 
                                        <input type="hidden" name="brand" value="<?= $item->brand?>">
                                        <input type="hidden" name="id" value="<?= $item->id?>">
                                        <label for="fullname">Full Name:</label>

                                        <input type="text" id=" fullname" name="name" class="form-control" required>

                                        <label for="ph">Phone Number:</label>
                                        <input type="number" id="ph" name="phone" class="form-control" required>


                                        <label for="em">Email:</label>

                                        <input type="email" id="em" name="email" class="form-control" required>

                                        <label for="address">Address:</label>
                                        <input type="text" id="address" name="address" class="form-control" required>
                                        <label for="visa">Visa-Card:</label>
                                        <input type="text" id="visa" name="visa" class="form-control" required><br>

                                       

                                        <input type="submit" value="Buy Now" class="btn btn-danger"><br>


            </form>                    


        </div>

       

    
    

                    
    </div>
    <div class="row">
                <div id="featureProudct" style="text-align: center;">
                <div class="col-xs-12" >
                    <div>                    <h1 style="background-color: rgba(6, 176, 243, 0.2);"><span style="color: black;">Feature</span> <i style="color: red;">Products</i></h1></div>
                 </div>

                    <div class="col-xs-12">

                        <div class="carousel slide " data-pause="false" data-interval="3000" id="imageCarousel">

                            <ol class="carousel-indicators" style="margin-bottom: 30px;">
                                <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#imageCarousel" data-slide-to="1"></li>
                                <li data-target="#imageCarousel" data-slide-to="2"></li>
                                <li data-target="#imageCarousel" data-slide-to="3"></li>
                                <li data-target="#imageCarousel" data-slide-to="4"></li>
                            </ol>

                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="shoes/puma5.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>PUMA</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/nike9.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>NIKE</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/adidas4.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>ADIDAS</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item ">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="shoes/puma4.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>PUMA</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/nike8.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>NIKE</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/adidas1.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>ADIDAS</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item ">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="shoes/puma6.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>PUMA</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/nike6.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>NIKE</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/adidas2.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>ADIDAS</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="item ">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="shoes/puma8.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>PUMA</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/nike5.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>NIKE</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/adidas3.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>ADIDAS</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="item ">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="shoes/puma7.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>PUMA</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/nike11.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>NIKE</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <img src="shoes/adidas6.jpg" class="img-responsive" alt="">
                                            <div class="carouser-caption">
                                                <h6>ADIDAS</h6>
                                                <h6>&dollar;50</h6>

                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>

                        <a href="#imageCarousel" class="carousel-control left " data-slide="prev">
                            <span style="color: red;" class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#imageCarousel" class="carousel-control right " data-slide="next">
                            <span style="color: red;" class="glyphicon glyphicon-chevron-right"></span>
                        </a>


                    </div>




                </div>

    </div>
   


    <section class="container-fluid" id="footer">
            <div class="col-sm-12">
                <div class="col-sm-4 text-center">
                    <h4>
                        <i style=" font-size: larger; color: red ;font-family:Georgia, 'Times New Roman', Times, serif;">SHOE</i> <span style="color: whitesmoke;font-size: larger;"> STORE</span>

                    </h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos aperiam dolorum pariatur! Explicabo nam totam odio quidem quas. Cum ad omnis fuga hic libero aliquid aperiam minima quam facilis amet!</p>
                </div>
                <div class="col-sm-4 text-center">
                    <h4 style="color: whitesmoke;">
                        NEW &amp; UPDATE
                    </h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia a necessitatibus doloremque nobis impedit molestias quo hic vel porro assumenda culpa corrupti sapiente, consequatur quas maiores itaque rem quasi consectetur?</p>


                </div>

                <div class="col-sm-4  ">
                    <h4 style="color: whitesmoke;">
                        CONTACT US...

                    </h4>
                    <p><i class="glyphicon glyphicon-home"> </i> :Shan,Taunggyi,AungThapyae.. </p>

                    <p><i class="glyphicon glyphicon-earphone"></i> :(959) 665 550 885 </i>
                    </p>
                    <p> <i class="fas fa-envelope"></i> :kyawlwinmoe.taungyi.myanmar@gmail.com</p>









                </div>

            </div>




    </section>
 
    
     


</div>
    
<?php
require "views/partials/footer.php";
?>




