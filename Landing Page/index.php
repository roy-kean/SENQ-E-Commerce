<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="index.css">
     <!--font awesome-->
     <script src="https://kit.fontawesome.com/32afe344eb.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="navigation"  class="navbar fixed-top topnav"  id="top">
        <div class="nav-container">
          <div class="brand">
            <a href="#!"><img src="images/Vector Smart Object.png" class="logo" width="90%" alt=""></a>
          </div>

          <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
              <li>
                 <!-- search with category -->
          <section class="search-with-cat" id="topC">
            <select onchange="validate()" name="category" id="cat-for-search" class="combo-box">
            <option value="All">All</option>
          <option value="Electronics">Electronics</option>
          <option value="Cloths">Cloths</option>
          <option value="Furniture">Furniture</option>
          <option value="Beauty Supplies">Beauty Supplies</option>
          <option value="Office Supplies">Office Supplies</option>
          <option value="Sport & Fitness">Sport & Fitness</option>
          <option value="Books">Books</option>
          <option value="Computer & Accessories">Computer & Accessories</option>
          <option value="Other">Other</option>
            </select>
            <input type="text" name="search-field" id="" class="search-box" placeholder="Search for products">
            <button id="search-go" class="search-btn"><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
        </section>
              </li>
              <li>
                <a href="#!"><i class="fa-solid fa-circle-user fa-2x" id="icon1"></i></a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="#!">My Profile</a>
                  </li>
                  <li>
                    <a href="#!">History</a>
                  </li>
                  <li>
                    <a href="#!">Hmmm</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="Cart/index.html"><i class="fa-solid fa-cart-arrow-down fa-2x" id="icon2"></i></a>
              </li>
              <li>
                <a href="#!"><i class="fa-solid fa-moon fa-2x" id="icon3"></i></a>
              </li>
              <li>
                <a href="#!"><i class="fa-solid fa-sun fa-2x" id="icon4"></i></a>
              </li>
              <li>
                <a href="">Login/Logout</a>
              </li>
            </ul>
          </nav>
        </div>
      </section>


      <!-- FIRST PAGE SLIDER -->

      <section class="main">
  
        <section class="cd-slider">
          <ul>
            <li>
              <section class="image" style="background-image:url(https://i.ibb.co/C9hkdD7/sofa.png);"></section>
              <section class="content">
                <h2>Furnitures</h2>
              </section>
            </li>
            <li>
              <section class="image" style="background-image:url(https://i.picsum.photos/id/26/4209/2769.jpg?hmac=vcInmowFvPCyKGtV7Vfh7zWcA_Z0kStrPDW3ppP0iGI);"></section>
              <section class="content">
                <h2>Accessories</h2>
              </section>
            </li>
            <li>
              <section class="image" style="background-image:url(https://cdn.pixabay.com/photo/2020/08/24/21/40/fashion-5515135_960_720.jpg);"></section>
              <section class="content">
                <h2>Shoes</h2>
              </section>
            </li>
            <li>
              <section class="image" style="background-image:url(https://i.picsum.photos/id/535/2962/3949.jpg?hmac=Cs154XYJYEmSoM-YPHR1Kcp2LDRzxLfKxa67Av3ZIhY);"></section>
              <section class="content">
                <h2>Winter Collection</h2>
              </section>
            </li>
            <li>
              <section class="image" style="background-image:url(images/Your\ Image\ Heresdf.png);"></section>
              <section class="content">
                <h2>Traditional Clothes</h2>
              </section>
            </li>      
          </ul>
        </section> <!--/.cd-slider-->
        
        
      </section>



       <!-- Shop with category -->

       <h1 style="font-family:-Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; background-color: #D0C9C0;  height:65px ; padding-top: 20px;" >Shop with category</h1>
    <section class="main-container">
      <section>
          <section class="sub-main">
              <h4>Electronics</h4>
              <img src="Images/Electronics.jpg" alt="category-image" class="sub-main-img">
              <?php $cat="Electronics";?>
              <?php echo "<a class=\"shop-now\"  href=\"Products/index.php?cat=$cat\">Shop now</a>"?>
          </section>

      </section>

      <section class="sub-main">
          <h4>Furntiure</h4>
          <img src="Images/furntiure.jpg" alt="category-image" class="sub-main-img">
          <?php $cat="Furntiure";?>
          <?php echo "<a class=\"shop-now\"  href=\"Products/index.php?cat=$cat\">Shop now</a>"?>
      </section> 
      <section class="sub-main">
          <h4>Cloths</h4>
          <img src="Images/clothes.jpg" alt="category-image" class="sub-main-img">
          <?php $cat="Cloths";?>
          <?php echo "<a class=\"shop-now\"  href=\"Products/index.php?cat=$cat\">Shop now</a>"?>
      </section>

      <section class="sub-main">
          <h4>Beauty Supplies</h4>
          <img src="Images/beauty.jpg" alt="category-image" class="sub-main-img">
          <?php $cat="Beauty Supplies";?>
          <?php echo "<a class=\"shop-now\"  href=\"Products/index.php?cat=$cat\">Shop now</a>"?>

      </section>
  </section>
  <!-- banner -->
  <!-- <section class="banner"><img src="Images/banner.gif.crdownload" class="banner-img" alt=""></section> -->
  <!-- banner -->

  <!-- this section is to give space between 1st row category and the 2nd row -->
  <section style="margin-top: 30px;"></section>

  <section class="main-container">

      <section class="sub-main">
          <h4>Office supplies</h4>
          <img src="Images/office.jpg" alt="category-image" class="sub-main-img">
          <a class="shop-now" href="Products/index.php">Shop now</a>

      </section>
      <section class="sub-main">
          <h4>Books</h4>
          <img src="Images/books.jpeg" alt="category-image" class="sub-main-img">
          <a class="shop-now" href="Products/index.php">Shop now</a>

      </section>

      <section class="sub-main">
          <h4>Computers & Accessories</h4>
          <img src="Images/computer.jpg" alt="category-image" class="sub-main-img">
          <a class="shop-now" href="Products/index.php">Shop now</a>

      </section>
      <section class="sub-main">
          <h4>For your Fitness Needs</h4>
          <img src="Images/For your Fitness Needs.jpg" alt="category-image" class="sub-main-img">
          <a class="shop-now" href="Products/index.php">Shop now</a>

      </section>
  </section>

  <section class="features">
      <img src="Images/Service 01.png" alt=""  id="feature">
      <img src="Images/Service 02.png" alt=""  id="feature">
      <img src="Images/Service 03.png" alt=""  id="feature">
  </section>


  <!-- WHY YODAHE?? -->
  <!-- <script type="text/javascript">
      let image= document.getElementById('feature');
      image.background=line
  </script> -->


 <!-- Latest, Bestseller, Rating -->
 <section class="product-box">

  <section class="product-minimal">

      <section class="product-showcase">

          <h2 class="title">Latest</h2>
          <section class="showcase-container">

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$61.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>
                  </section>

              </section>


              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/jacket-1.jpg" alt="mens winter leathers jackets" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>



                      <section class="price-box">
                          <p class="price">$32.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/jacket-3.jpg" alt="mens winter leathers jackets" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$50.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/shorts-1.jpg" alt="better basics french terry sweatshorts"
                          class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$20.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>


          </section>

      </section>



      <section class="product-showcase">

          <h2 class="title">Bestseller</h2>

          <section class="showcase-container">

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$52.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>


              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Boot With Suede Detail</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$20.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$56.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$50.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

          </section>

      </section>


      <section class="product-showcase">

          <h2 class="title">Top Rated</h2>

          <section class="showcase-container">

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$62.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>


              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/watch-1.jpg" alt="smart watche vital plus" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Smart watche Vital Plus</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$56.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

              <section class="showcase">

                  <a href="#" class="showcase-img-box">
                      <img src="Images/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">shampoo conditioner packs</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$20.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

              <section class="showcase">
                  <a href="#" class="showcase-img-box">
                      <img src="Images/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img">
                  </a>

                  <section class="showcase-content">

                      <a href="#">
                          <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>

                      <section class="price-box">
                          <p class="price">$20.00</p>
                      </section>
                      <button class="addtocart">Add To Cart</button>

                  </section>

              </section>

          </section>

      </section>

  </section>

</section>


<!-- trending brands -->
<section class="trend-section">
  <section class="trending-label">
      <h2>Trending Brands</h2>
  </section>
  <section class="trending">
    <img src="Images/tommy.jpg" class="trending-brnads fade brands-mob" alt="" width="256" >

  <img src="Images/nike.jpg" class="trending-brnads fade brands-mob" alt="" width="256">

  <img src="Images/mac.png" class="trending-brnads fade brands-mob" alt="" width="256" height="256">

  <img src="Images/samsung.png" class="trending-brnads fade brands-mob" alt="" width="256" height="256">

  </section>
</section>

<script>


</script>













 <!-- Back to top button -->
 <a href="#" class="back-to-top-link"><button class="button-35" role="button"><h6>Back to top</h6></button></button></a>
            <!-- FOOTER START -->
            <footer class="footer">
              <section class="contain">
              <section class="col">
                <h1>Company</h1>
                <ul>
                  <li>About</li>
                  <li>Mission</li>
                  <li>Services</li>
                  <li>Social</li>
                  <li>Get in touch</li>
                </ul>
              </section>
              <section class="col">
                <h1>Products</h1>
                <ul>
                  <li>Prices drop</li>
                  <li>New products</li>
                  <li>Best sales</li>
                  <li>Contact us</li>
                  <li>Sitemap</li>
                </ul>
              </section>
              <section class="col">
                <h1>Accounts</h1>
                <ul>
                  <li>About</li>
                  <li>Mission</li>
                  <li>Services</li>
                  <li>Social</li>
                  <li>Get in touch</li>
                </ul>
              </section>
              <section class="col">
                <h1>Resources</h1>
                <ul>
                  <li>Delivery</li>
                  <li>Redeem code</li>
                  <li>Legal Notice</li>
                  <li>Site map</li>
                  <li>Web templates</li>
                  <li>Email templates</li>
                </ul>
              </section>
              <section class="col">
                <h1>Support</h1>
                <ul>
                  <li>Contact us</li>
                  <li>Web chat</li>
                  <li>Open ticket</li>
                </ul>
              </section>
              <section class="col social">
                <h1>Social</h1>
                <ul>
                  <li><i class="fa-brands fa-facebook fa-2x"></i></li>
                  <li><i class="fa-brands fa-instagram fa-2x"></i></li>
                  <li><i class="fa-brands fa-twitter fa-2x"></i></li>
                </ul>
              </section>
            <section class="clearfix"></section>
            </section>
            
            <section class="footer-bottom">

              <section class="container">
  
                  <img src="Images/payment.png" alt="payment method" class="payment-img">
  
                  <p class="copyright">
                      Copyright &copy; <a href="#">SENQ</a> all rights reserved.
                  </p>
  
              </section>
  
          </section>
            </footer>
            <!-- END OF FOOTER -->
</body>
</html>
<script src="jquery.min.js"></script>
<script src="index.js"></script>