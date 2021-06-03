
    
<?php
require "views/partials/heading.php";
?>

<div class="row">
        <div class="navbar-fixed-top">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                <i style="color: skyblue;font-size: 30px;" class="fa fa-align-left" ></i>
                
            </button>
        </div>


        <div class="navbar-collapse collapse " id="mainNav">
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

                    <li ><a href="/"><i class="fa fa-home"></i>Home</a></li><br>
                    <li><a href="/about"><i class="fa fa-user-circle"></i> About</a></li><br>
                    <li><a href="/service"><i class="fa fa-briefcase"></i> Service</a></li><br>
                    <li><a href="/shop"><i class="fa fa-cart-plus"></i> Shop</a></li><br>
                    <li class="active"><a href="/contact"><i class="fa fa-envelope"></i> Contact</a></li><br>
                   




                </ul>

                <div style="text-align: center;">
                    <p style="color: white;">&copy; Copyright 2021 </p>
                    <p style="color: white;padding-bottom: 20px;">Designed by Kyaw Lwin Moe</p>
                </div>




            </div>


        </div>




</div>



<div class="col-md-9 col-xs-12 col-md-offset-3" >
  
    <div class="col-md-12" id="contact" >
                      <div class="row">
                      <div class="col-md-12">
                            <h1 class="page-header">Contact <span style="font-size: 25px; color: grey;">Subheading</span> </h1>
                        </div>
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li class="active"><a href="#">Contact</a></li>
                                
                            </ul>
                        </div>
                      </div>

                       <div class="row">
                       <div class="col-md-6 col-xs-12" >
                            <form action="/message" class="form-group" method="post" >

                                                <label for="userName">Name:</label>

                                                    <input type="text" placeholder="Enter Your Name" name="name" id="userName" class="form-control input-lg" required/>

                                           
                                           
                                                <label for="email" >Email:</label>

                                                    <input type="email" placeholder="Enter Your Email" name="email" id="email" class="form-control input-lg" required/>

                                            
                                                <label for="ph" >Phone Number:</label>

                                                    <input type="text" placeholder="Enter Your Phone Number" name="phone" id="ph" class="form-control input-lg" required/>



                                                <label for="message" >Message:</label>
                                             
                                                    <input type="text"  placeholder="Enter Your Suggestions" name="message" id="" class="form-control input-lg"  required>
                                                    <br><br>
                                           
                                            
                                           
                                                <label for="" ></label>

                                                    <input class="btn btn-primary input-lg" type="submit" value="Send Message">
                                               
                                            
                             </form>

                        </div>
                        <div class="col-md-6 col-xs-12">
                                <div class="mapouter">
                                     <div class="gmap_canvas"><iframe width="400px" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=taunggyi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/nordvpn-coupon/"></a></div>

                                </div>

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