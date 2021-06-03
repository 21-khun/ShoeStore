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
            <!-- <ul class="list-inline">
            <li style="font-size:1em;"><i style="color:white;" class="fa fa-cart-plus"></i> </li>
            </ul> -->



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
  
          <!-- shop Subheading -->
        <!-- <div class="container"> -->
            <div class="row">
            
                <div class="col-xs-12">
                   <div class="row">
                        <div class="col-xs-12">
                            <h1 class="page-header">Shop <span style="font-size: 25px; color: grey;">Subheading</span> </h1>
                        </div>
                       
                   </div>
                </div>
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active"><a href="#">Shop</a></li>
                        
                    </ul>
                </div>

                <div class="col-xs-12">
                    <div class="row">

                          <!-- GALLERY SECTION START -->
                                <section class="container-fluid" id="gallery">
                                    <div class="title text-center">
                                        <h1>SHOP NOW</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, praesentium distinctio doloremque, incidunt ipsa aperiam placeat, porro tenetur dolor excepturi consequuntur? Maxime soluta fugit, eius dolor id laborum quidem enim.</p>

                                    </div>
                                    <div id="galleryNav">
                                        <div class="col-xs-12 text-center" id="btns">
                                            <div class="btn-group">
                                                <button style="color: white;background-color: red;" class="btn btn-default btn-lg " id="btn" data-filter="all">All</button>
                                                <button class="btn btn-default btn-lg" id="btn" data-filter="puma">Puma</button>
                                                <button class="btn btn-default btn-lg" id="btn" data-filter="nike">Nike </button>
                                                <button class="btn btn-default btn-lg" id="btn" data-filter="adidas">Adidas </button>
                                                <button class="btn btn-default btn-lg" id="btn" data-filter="other">Others </button>
                                            </div>




                                        </div>


                                        <div id="photo">
                                            <div class="col-xs-12 ">
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-6 itemBox nike ">
                                                        <div class="photo1">
                                                            <img src="shoes/nike4.jpg" class="img-responsive" class="photo1Img" alt="">
                                                            <div class="overlay overlayLeft">
                                                                <div class="text">
                                                                  <a href="/item?id=1"><i class="fa fa-search-plus" ></i></a>
                                                            


                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-sm-3 col-xs-6 itemBox  nike ">
                                                        <div class="photo1">
                                                            <img src="shoes/nike5.jpg" class="img-responsive" class="photo1Img" alt="">
                                                            <div class="overlay overlayLeft">
                                                                <div class="text">
                                                                <a href="/item?id=2"><i class="fa fa-search-plus" ></i></a>


                                                          

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 itemBox  nike ">
                                                        <div class="photo1">
                                                            <img src="shoes/nike6.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                            <div class="overlay overlayLeft">
                                                                <div class="text">
                                                                    <a href="/item?id=3"><i class="fa fa-search-plus" ></i></a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="col-sm-3 col-xs-6 itemBox  nike ">
                                                        <div class="photo1">
                                                            <img src="shoes/nike7.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                            <div class="overlay overlayLeft">
                                                                <div class="text">
                                                                <a href="/item?id=4"><i class="fa fa-search-plus" ></i></a>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="row">
                                                        <div class="col-sm-3 col-xs-6 itemBox  nike ">
                                                                <div class="photo1">
                                                                    <img src="shoes/nike8.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                    <div class="overlay overlayLeft">
                                                                        <div class="text">
                                                                        <a href="/item?id=5"><i class="fa fa-search-plus" ></i></a>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6 itemBox  nike ">
                                                            <div class="photo1">
                                                                <img src="shoes/nike10.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=6"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6 itemBox  nike ">
                                                            <div class="photo1">
                                                                <img src="shoes/nike11.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=7"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3  col-xs-6 itemBox  nike ">
                                                            <div class="photo1">
                                                                <img src="shoes/nike12.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=8"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                </div>   
                                                <div class="row">
                                                        <div class="col-sm-3 col-xs-6 itemBox  puma ">
                                                                <div class="photo1">
                                                                    <img src="shoes/puma9.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                    <div class="overlay overlayLeft">
                                                                        <div class="text">
                                                                        <a href="/item?id=9"><i class="fa fa-search-plus" ></i></a>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6 itemBox  puma ">
                                                            <div class="photo1">
                                                                <img src="shoes/puma10.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=10"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  puma ">
                                                            <div class="photo1">
                                                                <img src="shoes/puma11.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=11"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  puma ">
                                                            <div class="photo1">
                                                                <img src="shoes/puma4.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=12"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                </div>                                                               
                                                <div class="row">
                                                        <div class="col-sm-3 col-xs-6  itemBox  puma ">
                                                                <div class="photo1">
                                                                    <img src="shoes/puma5.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                    <div class="overlay overlayLeft">
                                                                        <div class="text">
                                                                        <a href="/item?id=13"><i class="fa fa-search-plus" ></i></a>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  puma ">
                                                            <div class="photo1">
                                                                <img src="shoes/puma6.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=14"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  puma ">
                                                            <div class="photo1">
                                                                <img src="shoes/puma7.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=15"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  puma ">
                                                            <div class="photo1">
                                                                <img src="shoes/puma8.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=16"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                </div>   
                                                <div class="row">
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                                <div class="photo1">
                                                                    <img src="shoes/adidas1.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                    <div class="overlay overlayLeft">
                                                                        <div class="text">
                                                                        <a href="/item?id=17"><i class="fa fa-search-plus" ></i></a>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                            <div class="photo1">
                                                                <img src="shoes/adidas2.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=18"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                            <div class="photo1">
                                                                <img src="shoes/adidas3.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=19"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                            <div class="photo1">
                                                                <img src="shoes/adidas4.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=20"><i class="fa fa-search-plus" ></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                </div>  
                                                <div class="row">
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                                <div class="photo1">
                                                                    <img src="shoes/adidas6.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                    <div class="overlay overlayLeft">
                                                                        <div class="text">
                                                                        <a href="/item?id=21"><i class="fa fa-search-plus" ></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                            <div class="photo1">
                                                                <img src="shoes/adidas5.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=22"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                            <div class="photo1">
                                                                <img src="shoes/adidas7.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=23"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  adidas ">
                                                            <div class="photo1">
                                                                <img src="shoes/adidas8.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=24"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                </div>    
                                                <div class="row">
                                                        <div class="col-sm-3 col-xs-6  itemBox  other ">
                                                                <div class="photo1">
                                                                    <img src="shoes/allstar1.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                    <div class="overlay overlayLeft">
                                                                        <div class="text">
                                                                        <a href="/item?id=25"><i class="fa fa-search-plus" ></i></a>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  other ">
                                                            <div class="photo1">
                                                                <img src="shoes/allstar2.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=26"><i class="fa fa-search-plus" ></i></a>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  other ">
                                                            <div class="photo1">
                                                                <img src="shoes/allstar3.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=27"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6 itemBox  other ">
                                                            <div class="photo1">
                                                                <img src="shoes/allstar4.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=28"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                </div>   
                                                <div class="row">
                                                        <div class="col-sm-3 col-xs-6  itemBox  other ">
                                                                <div class="photo1">
                                                                    <img src="shoes/lotto1.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                    <div class="overlay overlayLeft">
                                                                        <div class="text">
                                                                        <a href="/item?id=29"><i class="fa fa-search-plus" ></i></a>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  other ">
                                                            <div class="photo1">
                                                                <img src="shoes/lotto5.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=30"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  other ">
                                                            <div class="photo1">
                                                                <img src="shoes/lotto3.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=31"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="col-sm-3 col-xs-6  itemBox  other ">
                                                            <div class="photo1">
                                                                <img src="shoes/lotto4.jpg"  class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                    <a href="/item?id=32"><i class="fa fa-search-plus" ></i></a>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                </div>                                                                                                                         
                                                
                                            </div>          
                                            <!-- <div class="col-xs-12 visible-xs">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3 itemBox paint repair ">
                                                            <div class="photo1">
                                                                <img src="images/gallery/1.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage1" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3 itemBox paint repair ">
                                                            <div class="photo1">
                                                                <img src="images/gallery/2.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage2" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3  itemBox paint repair ">
                                                            <div class="photo1">
                                                                <img src="images/gallery/3.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayRight">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage3" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3  itemBox paint  ">
                                                            <div class="photo1">
                                                                <img src="images/gallery/4.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayTop">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage4" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3  itemBox wash support ">
                                                            <div class="photo1">
                                                                <img src="images/gallery/5.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayTop">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage5" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3  itemBox wash support">
                                                            <div class="photo1">
                                                                <img src="images/gallery/6.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage6" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3  itemBox wash  ">
                                                            <div class="photo1">
                                                                <img src="images/gallery/7.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage7" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="col-sm-3  itemBox wash support ">
                                                            <div class="photo1">
                                                                <img src="images/gallery/8.jpg" class="img-responsive" class="photo1Img" alt="">
                                                                <div class="overlay overlayLeft">
                                                                    <div class="text">
                                                                        <i class="fa fa-search-plus" href="#zoomImage8" data-keyboard="false" data-toggle="modal" data-backdrop="static"> </i>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div> -->


                                        </div>


                                    </div>          


                                </section>
                            <!-- GALLERY SECTION END -->
                    </div>
                 </div>





            </div>
        <!-- </div> -->
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
 

</div>
    
    <?php
require "views/partials/footer.php";
?>