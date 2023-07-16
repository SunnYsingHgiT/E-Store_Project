<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Mobile | E-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
    <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
</head>
   
<body style="padding-top: 50px;">
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
    <br>
    <br>
    
    <div class="container">
        <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>Welcome to our E-Store</h1>
                <p>We have the best Mobile phone from Biggest Brands for you. No need to hunt around, we have all in one place.</p>
              </center>
            </div>
            <hr>
            <br>
            
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:orange">Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#ios"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#samsung"><span style="color:black">SAMSUNG</span></a></p>
                           <p><a href="#oneplus"><span style="color:black">ONEPLUS</span></a></p>
                            <p><a href="#xiaomi"><span style="color:black">XIAOMI</span></a></p>
                            <p><a href="#realme"><span style="color:black">REALME</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="panel panel-default">
                    <div class="panel-heading  color">
                        <h3 style="color:red">Operating System</h3>
                    </div>
                    
                    <div class="panel-body">
                       <div class="rmvb">
                            <p><a href="#samsung"><span style="color:black">ANDROID</span></a></p>
                            <p><a href="#ios"><span style="color:black">IOS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!----------------------------------------------------featured phone----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:red">Featured Mobile</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-12 home-feature">
                            <div class="thumbnail">
                                <img src="./img/iphone14.jpg" alt="iphone x" >
                                    <div class="caption">
                                        <h3>iPhone 13 pro max</h3>
                                        <p>Price: Rs. 1,12,499.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-12 home-feature">
                            <div class="thumbnail">
                                <img src="./img/samsungs22ultra.jpg" alt="samsung s22 ultra">
                                    <div class="caption">
                                        <h3>Samsung S22 Ultra</h3>
                                            <p>Price: Rs. 1,08,399.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(6)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-12 home-feature">
                        <div class="thumbnail">
                            <img src="./img/oneplus10t.jpg" alt="oneplus 5t">
                                <div class="caption">
                                    <h3>OnePlus 10T</h3>
                                        <p>Price: Rs. 56,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(12)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-12 home-feature">
                        <div class="thumbnail">
                            <img src="./img/xiaomi11lite.webp" alt="mi mix 2">
                                <div class="caption">
                                    <h3>xiaomi 11 Lite</h3>
                                        <p>Price: Rs. 23,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(16)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------iphone----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="ios" style="color:red">apple</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-3 home-feature">
                            <div class="thumbnail">
                                <img src="./img/iphonex.png" alt="iphone 13" >
                                    <div class="caption">
                                        <h3>iPhone 13</h3>
                                        <p>Price: Rs. 1,04,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        128 GB ROM
15.49 cm (6.1 inch) Super Retina
12MP + 12MP | 12MP Front Camera
A15 Bionic Processor
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-5 home-feature">
                            <div class="thumbnail">
                                <img src="./img/ipnone7plus.png" alt="ipnone 12">
                                    <div class="caption">
                                        <h3>iPhone 12</h3>
                                            <p>Price: Rs. 89,000.00 </p>
                                            
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(3)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p>64 GB ROM
15.49 cm (6.1 inch) Super Retina XDR Display
12MP + 12MP | 12MP Front Camera
A14 Bionic Processor</P>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-3 home-feature">
                        <div class="thumbnail">
                            <img src="./img/iphone7.png" alt="iphone 7">
                                <div class="caption">
                                    <h3>iPhone 14 pro max</h3>
                                        <p>Price: Rs. 1,39,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(2)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p>128 GB ROM
                                            17.02 cm (6.7 inch) Display
                                            48MP + 12MP + 12MP | 12MP Front Camera
                                            A16 Bionic Processor</p>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-12 home-feature">
                        <div class="thumbnail">
                            <img src="./img/iphone6splus.png" alt="iphone 11">
                                <div class="caption">
                                    <h3>iPhone 11</h3>
                                        <p>Price: Rs. 69,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(1)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p>64 GB ROM
                                           15.49 cm (6.1 inch) Display
                                           12MP + 12MP | 12MP Front Camera
                                           A13 Bionic Processor
                                        </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------samsung----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="samsung" style="color:orange">samsung</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/samsungs22ultra.jpg" alt="galaxy s8 plus">
                                </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="caption">
                                <h3>Samsung s22 ultra</h3>
                                <p>Price: Rs. 104,000.00 </p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                  <p><a href="#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                } else {
                                  if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                  } else {
                                ?>
                                  <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                  }
                                }
                                ?>
                                <p></p>
                                  12 GB RAM | 256 GB ROM
                                  17.27 cm (6.8 inch) Display |
                                    108MP Rear Camera | Super AMOLED Display | 120 Hz Rate
                                  5000 mAh Battery</p>
                             
                              </div>
                            </div>
                        </div> 


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/samsungnote8plus.png" alt="note 8 plus">
                            </div>
                            </div>
                                <div class="col-sm-6">
                                    <div class="caption">
                                    <h3>Samsung s20 FE</h3>
                                        <p>Price: Rs. 35,000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                            <?php
                                        } else {
                                        if (check_if_added_to_cart(7)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                       } else {
                                        ?>
                                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                            }
                                        }
                                    ?>
                                    <p></p>
                                        <p>8 GB RAM | 128 GB ROM |
                                        16.51 cm (6.5 inch) Full HD+ Display
                                        12MP + 12MP + 8MP Rear Camera | 32MP Front 
                                        4500 mAh Battery
                                        Super AMOLED Display | 120 Hz Rate
                                        IP68 Rating</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">    
                        <div class="col-sm-6">
                        <div class="thumbnail">
                            <img src="./img/samsungs7edge.png" alt="galaxy s7 edge">
                                    </div>
                                    </div>
                            <div class="col-sm-6">   
                            <div class="caption">
                                    <h3>Samsung Galaxy flip 3</h3>
                                        <p>Price: Rs. 85,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(5)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p></p>
                                        <p>8 GB RAM | 128 GB ROM
                                        17.02 cm (6.7 inch) Full HD+ Display
                                        12MP + 12MP | 10MP Front Camera
                                        3300 mAh Lithium-ion Battery
                                        Qualcomm Snapdragon 888 Octa-Core Processor</p>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                        <div class="thumbnail">
                            <img src="./img/samsunga8.png" alt="galaxy a8">
                                        </div>
                                        </div>
                            <div class="col-sm-6">    
                            <div class="caption">
                                    <h3>Samsung Galaxy s22</h3>
                                        <p>Price: Rs. 68,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(8)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p></p>
                                        <p>8 GB RAM | 128 GB ROM
                                        15.49 cm (6.1 inch) Full HD+ Display
                                        50MP + 12MP + 10MP | 10MP Front Camera
                                        3700 mAh Lithium-ion Battery
                                        Octa Core Processor</p>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                   
                   <!----------------------------------------------------oneplus----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="oneplus" style="color:orange">oneplus</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/oneplus10t.jpg" alt="oneplus 5t" >
                                </div>            
                            </div>
                            <div class="col-sm-6">    
                                <div class="caption">
                                    <h3>OnePlus 10T</h3>
                                        <p>Price: Rs. 56000.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(12)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    <p></p>
                                    <p>12 GB RAM | 256 GB ROM
                                        17.02 cm (6.7 inch) Display
                                        50MP Rear Camera
                                        4800 mAh Battery
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/oneplus9rt.webp" alt="oneplus 5">
                                </div>            
                            </div>
                            <div class="col-sm-6">    
                                <div class="caption">
                                    <h3>OnePlus 9RT</h3>
                                        <p>Price: Rs. 46999.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(11)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    <p>12 GB RAM | 256 GB ROM
                                        17.02 cm (6.7 inch) Display
                                        50MP Rear Camera
                                        4800 mAh Battery
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/oneplus nord2t.webp" alt="oneplus 3t">
                                </div>                
                            </div>
                            <div class="col-sm-6">    
                                
                            <div class="caption">
                                    <h3>OnePlus Nord 2T</h3>
                                        <p>Price: Rs. 28999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(10)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    <p>
                                        8 GB RAM | 128 GB ROM
                                        17.02 cm (6.7 inch) Display
                                        50MP Rear Camera
                                        4500 mAh Battery 
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/Oneplus10r.webp" alt="oneplus 3">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="caption">
                                    <h3>OnePlus 10R</h3>
                                        <p>Price: Rs. 38999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(9)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p></p>
                                    <p>12 GB RAM | 256 GB ROM
                                        17.02 cm (6.7 inch) Display
                                        50MP Rear Camera
                                        4500 mAh Battery
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>


                <!----------------Realme---->

                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="realme" style="color:orange">realme</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/realme-GT-neo3.jpg" alt="oneplus 5t" >
                                </div>            
                            </div>
                            <div class="col-sm-6">    
                                <div class="caption">
                                    <h3>Realme GT Neo 3</h3>
                                        <p>Price: Rs. 28999.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(18)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    <p></p>
                                    <p>12 GB RAM | 256 GB ROM
                                        17.02 cm (6.7 inch) Display
                                        50MP Rear Camera
                                        4800 mAh Battery
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/realme gt master.webp " alt="oneplus 5">
                                </div>            
                            </div>
                            <div class="col-sm-6">    
                                <div class="caption">
                                    <h3>Realme GT Master</h3>
                                        <p>Price: Rs. 46999.00 </p>
                                            <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(11)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    <p>12 GB RAM | 256 GB ROM
                                        17.02 cm (6.7 inch) Display
                                        50MP Rear Camera
                                        4800 mAh Battery
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/realme gt neo 3t.webp" alt="oneplus 3t">
                                </div>                
                            </div>
                            <div class="col-sm-6">    
                                
                            <div class="caption">
                                    <h3>Realme GT NEO 3T</h3>
                                        <p>Price: Rs. 22999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(19)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    <p>
                                        
                                        6 GB RAM | 128 GB ROM
                                        6.62 inch Full HD+ AMOLED
                                        64MP + 8MP + 2MP | 16MP Front Camera
                                        | 5000 mAh Battery |
                                        Qualcomm Snapdragon 870 Processor 
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/Realme 10 pro plus.webp" alt="oneplus 3">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="caption">
                                    <h3>Realme 10 pro plus</h3>
                                        <p>Price: Rs. 24999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(9)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p></p>
                                    <p>8 GB RAM | 128 GB ROM |
                                        17.02 cm (6.7 inch) 
                                        Display | 50MP + 8MP + 2MP Rear Camera |
                                        5000 mAh Battery
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
                   
                   <!----------------------------------------------------xiaomi----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="xiaomi" style="color:orange">xiaomi</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/xiaomi11lite.webp" alt="mi mix2" >
                                </div>        
                            </div>
                            <div class="col-sm-6">        
                            <div class="caption">
                                        <h3>Xiaomi 11 Lite</h3>
                                        <p>Price: Rs. 23,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(16)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p></p>
                                        <p>
                                            6 GB RAM | 128 GB ROM | 
                                            16.64 cm (6.55 inch) Full HD+ Display
                                            64MP + 8MP + 5MP | 16MP Front Camera
                                            4250 mAh Battery |
                                            Qualcomm Snapdragon 732G 
                                        </p>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="./img/xioami12pro.webp" alt="mi max 2">
                                </div>            
                            </div> 

                            <div class="col-sm-6">  
                                <div class="caption">
                                    <h3>Xioami 12 Pro</h3>
                                    <p>Price: Rs. 54,999.00 </p>
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                    } else {
                                        if (check_if_added_to_cart(15)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                         ?>
                                         <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                         <?php
                                             }
                                         }
                                         ?>
                                        <p>
                                        8 GB RAM | 256 GB ROM
                                        17.09 cm (6.73 inch) Full HD+ AMOLED
                                        50MP Rear Camera
                                        4600 mAh Battery
                                        Snapdragon@ 8 Gen 1 Processor
                                        </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                 <img src="./img/mi11x.webp" alt="mi a1">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="caption">
                                    <h3>Mi 11X</h3>
                                        <p>Price: Rs. 29,999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(14)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p>
                                        8 GB RAM | 128 GB ROM
                                        16.94 cm (6.67 inch) Display
                                        48MP Rear Camera
                                        4520 mAh Battery  
                                        </p>
                                </div>
                            </div>
                        </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="thumbnail">
                                <img src="./img/Xiaomi11t.webp" alt="redmi note 4">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="caption">
                                    <h3>Xioami 11T Pro</h3>
                                        <p>Price: Rs. 36999.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            if (check_if_added_to_cart(13)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                        <p>
                                        8 GB RAM | 128 GB ROM
                                        16.94 cm (6.67 inch) Display
                                        108MP Rear Camera
                                        5000 mAh Battery</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>

