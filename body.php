<?php
    include_once 'header.php'
?>

    <?php
            if(isset($_SESSION["useruid"])){
                echo"<p>Hello " .$_SESSION["useruid"] . "</p>";
            }
        ?>

      <section class="menu-background" style="margin-bottom: 60px;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/images/banner1.jpg" class="d-block w-100 h-100" alt="...">
              <div class="carousel-caption d-md-block text-start text-dark">
                <h1 class="hindOnMobile">Summer <br>Collection</h1>
                <p class="hindOnMobile" style="margin-bottom: 50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat <br> amet, libero ipsum enim pharetra hac.</p>
                <div class="buttons">
                  <div class="contact" style="margin-bottom: 50px; width: 100%;"><a href="#" style="text-decoration: none; background-color: black; padding: 20px;">Shop it now!<i class="fa-solid fa-arrow-right" style="font-size: 13px; margin-left: 5px;"></i></a></div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/images/banner2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block text-start text-dark">
                <h1 class="hindOnMobile">Casual <br>Collection</h1>
                <p class="hindOnMobile" style="margin-bottom: 50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat <br> amet, libero ipsum enim pharetra hac.</p>
                <div class="buttons">
                  <div class="contact" style="margin-bottom: 50px; width: 100%;"><a href="#" style="text-decoration: none; background-color: black; padding: 20px;">Shop it now!<i class="fa-solid fa-arrow-right" style="font-size: 13px; margin-left: 5px;"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev bg-primary p-2" style="height: min-content; width: min-content;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next bg-primary p-2" style="height: min-content; width: min-content;" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
          </div>
        </div>
      </section>
  
        <!-- featured-products -->
  
        <section class="overflow-hidden mt-5">
          <div class="container">
            <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
              <h2 class="section-title">Featured Products</h2>            
              <div class="btn-wrap">
                <a href="#" class="d-flex align-items-center">View all products <i class="fa-solid fa-arrow-right"></i></a>
              </div>            
            </div>
              <div class="product-item">
                <div class="product">
                  <div class="image-holder">
                    <img src="./assets/images/product-item1.jpg" alt="" class="product-image">
                  </div>
                  <div class="product-detail">
                    <h5><a href="#">Full sleeve cover shirt</a></h5>
                    <span class="item-price text-primary">$40.00</span>
                  </div>
                </div>
                <div class="product">
                  <div class="image-holder">
                    <img src="./assets/images/product-item2.jpg" alt="" class="product-image">
                  </div>
                  <div class="product-detail">
                    <h5><a href="#">Full sleeve cover shirt</a></h5>
                    <span class="item-price text-primary">$40.00</span>
                  </div>
                </div>
                <div class="pro">
                  <div class="image-holder">
                    <img src="./assets/images/product-item3.jpg" alt="" class="product-image">
                  </div>
                  <div class="product-detail">
                    <h5><a href="#">Full sleeve cover shirt</a></h5>
                    <span class="item-price text-primary">$40.00</span>
                  </div>
                </div>
                <div class="product">
                  <div class="image-holder">
                    <img src="./assets/images/product-item4.jpg" alt="" class="product-image">
                  </div>
                  <div class="product-detail">
                    <h5><a href="#">Full sleeve cover shirt</a></h5>
                    <span class="item-price text-primary">$40.00</span>
                  </div>
                </div>
              </div>              
          </div>
        </section>
  
        <!-- latest-collection -->
       
        <section id="latest-collection overflow-hidden">
          <div class="container">
            <div class="product-collection row">
              <div class="col-lg-7 col-md-12 left-content">
                <div class="collection-item">
                  <div class="products-thumb">
                    <img src="./assets/images/collection-item1.jpg" alt="collection item" class="large-image image-rounded">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
                    <div class="categories">casual collection</div>
                    <h3 class="item-title">street wear.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam elementum.</p>
                    <div class="btn-wrap">
                      <a href="shop.html" class="bro d-flex align-items-center">Shop Collection <i class="icon icon-arrow-io"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-12 right-content flex-wrap">
                <div class="collection-item top-item">
                  <div class="products-thumb">
                    <img src="./assets/images/collection-item2.jpg" alt="collection item" class="small-image image-rounded">
                  </div>
                  <div class="col-md-6 product-entry">
                    <div class="categories">Basic Collection</div>
                    <h3 class="item-title">Basic shoes.</h3>
                    <div class="btn-wrap">
                      <a href="shop.html" class="d-flex align-items-center">Shop Collection <i class="icon icon-arrow-io"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="collection-item bottom-item">
                  <div class="products-thumb">
                    <img src="./assets/images/collection-item3.jpg" alt="collection item" class="small-image image-rounded">
                  </div>
                  <div class="col-md-6 product-entry">
                    <div class="categories">Best Selling Product</div>
                    <h3 class="item-title">woolen hat.</h3>
                    <div class="btn-wrap">
                      <a href="shop.html" class="d-flex align-items-center">Shop Collection <i class="icon icon-arrow-io"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- discount -->
  
        <section class="Discount-Coupons overflow-hidden">
          <div class="container">
            <div class="discount">
              <h1>Get 25% Off Discount Coupons</h1>
            </div>
            <div class="discount-text">
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere maecenas. At tellus ut nunc amet vel egestas.</h5>
            </div>
            <div class="email">
              <input type="email" name="email" placeholder="Enter your email address here" style="padding: 20px;">
              <button class="bg-dark text-light" style="padding: 20px;">Subscribe Now</button>
            </div>
          </div>
        </section>
  
        <!-- shop -->
  
        <section class="overflow-hidden mb-5">
          <div class="container">
            <div class="shop">
              <div class="shop-text"><h2>Shop</h2></div>
              <div class="shop-links">
                <a href="#">All</a>
                <a href="#">Shoes</a>
                <a href="#">T-Shirts</a>
                <a href="#">Pants</a>
                <a href="#">Hoddies</a>
                <a href="#">Outer</a>
                <a href="#">Jackets</a>
                <a href="#">Accessories</a>
              </div>
              <div class="shop-images" style="margin: 30px 0px;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <div class="card-wrapper">
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products1.jpg" class="card-img-top" alt="...">
                          </div>
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products2.jpg" class="card-img-top" alt="...">
                          </div>
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products5.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrapper">
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products4.jpg" class="card-img-top" alt="...">
                          </div>
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products7.jpg" class="card-img-top" alt="...">
                          </div>
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products8.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item active">
                      <div class="card-wrapper">
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products13.jpg" class="card-img-top" alt="...">
                          </div>
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products14.jpg" class="card-img-top" alt="...">
                          </div>
                          <div class="img-wrapper">
                            <img src="./assets/images/selling-products15.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products1.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products2.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products5.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products4.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products7.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products8.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products13.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products14.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="card-wrappers">
                          <div class="img-wrappers">
                            <img src="./assets/images/selling-products15.jpg" class="card-img-top" alt="...">
                          </div>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section>
          <div class="container text-center fw-bold">
            <h1 class="mb-5 fw-bolder">Quote Of The Day</h1>
            <h5 style="letter-spacing: 3px;">"It's true, I don't like the whole cutoff-<br>shorts-and-T-shirt look, but I think you can <br> look fantastic in casual clothes."</h5>
            <h5 class="mt-5">- Dr. Seuss</h5>
          </div>
        </section>
  
        <!-- journal -->
  
        <section class="mt-5">
          <div class="container">
            <div class="journal">
              <div class="journal-text">
                <h1 class="fw-bolder">Our Journal <a href="#">Read All Articles</a></h1>
              </div>
              <div class="journal-image">
                <div class="alljour">
                  <div class="journal-image-carry">
                    <div class="journal-carry">
                      <div class="img">
                        <img src="./assets/images/journal-1.jpg">
                      </div>
                    </div>
                  </div>
                  <div class="journal-image-text">
                    <h4>22 <p>Aug-2021</p></h4>
                    <a href="#">Top 10 Casual Look Ideas To Dress Up Your Kids <span><p>FASHION</p></span></a>
                  </div>
              </div>
              <div class="alljour">
                  <div class="journal-image-carry">
                    <div class="journal-carry">
                      <div class="img">
                        <img src="./assets/images/journal-2.jpg">
                      </div>
                    </div>
                  </div>
                  <div class="journal-image-text">
                    <h4>22 <p>Aug-2021</p></h4>
                    <a href="#">Latest Trends Of Wearing Street Wears Supremely <span><p>TRENDING</p></span></a>
                  </div>
              </div>
              <div class="alljour">
                  <div class="journal-image-carry">
                    <div class="journal-carry">
                      <div class="img">
                        <img src="./assets/images/journal-3.jpg">
                      </div>
                    </div>
                  </div>
                  <div class="journal-image-text">
                    <h4>22 <p>Aug-2021</p></h4>
                    <a href="#">Types Of Comfortable Clothes Ideas For Women <span><p>INSPIRATION</p></span></a>
                  </div>
              </div>
            </div>
          </div>
        </section>
  
        <!-- images -->
  
        <section>
          <div class="con">
            <div class="images-wrapper">
              <img src="./assets/images/brand1.png" alt="">
              <img src="./assets/images/brand2.png" alt="">
              <img src="./assets/images/brand3.png" alt="">
              <img src="./assets/images/brand4.png" alt="">
              <img src="./assets/images/brand5.png" alt="">
            </div>
          </div>
        </section>

        <!-- instagram -->

      <div id="Portfolio">
        <div class="container">
          <div class="text">
            <p style="font-size: 3rem; font-weight: bolder;">Follow our instagram</p>
            <p style=" font-weight: bolder;">Our official Instagram account <a href="">@ultras or #ultras_clothing</a></p>
          </div>
            <div class="manycc">
              <div class="work-list">
                  <img src="./assets/images/insta-image1.jpg" alt="">
                  <div class="layer">
                      <a href=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
              </div>
              <div class="work-list">
                  <img src="./assets/images/insta-image2.jpg" alt="">
                  <div class="layer">
                      <a href=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
              </div>
              <div class="work-list">
                  <img src="./assets/images/insta-image3.jpg" alt="">
                  <div class="layer">
                      <a href=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
              </div>
              <div class="work-list">
                  <img src="./assets/images/insta-image4.jpg" alt="">
                  <div class="layer">
                      <a href=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
              </div>
              <div class="work-list">
                  <img src="./assets/images/insta-image5.jpg" alt="">
                  <div class="layer">
                      <a href=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
              </div>
              <div class="work-list">
                  <img src="./assets/images/insta-image6.jpg" alt="">
                  <div class="layer">
                      <a href=""><i class="fa-brands fa-instagram"></i></a>
                  </div>
              </div>
            </div>
        </div>
    </div>
  
        <!-- others -->
  
        <section class="mt-5 mb-5">
          <div class="container">
            <div class="others">
              <p><i class="fa-solid fa-truck"></i> Free shipping <span style="color: #959595;">Over $200</span> </p>
              <p><i class="fa-solid fa-share-from-square"></i>Money back <span style="color: #959595;">7 days Return within</span></p>
              <p><i class="fa-solid fa-tag"></i>Buy 4 get 5th <span style="color: #959595;">50% off</span> </p>
              <p><i class="fa-regular fa-circle-question"></i>Any questions? <span style="color: #959595;"> experts are ready</span></p>
            </div>
          </div>
        </section>
  
        <!-- footer -->
  
        <section class="footer-carry">
          <div class="container">
            <div class="footer-part">
              <div class="footer">
                <h2>Ultras</h2>
                <a href="#">About Us</a>
                <a href="#">Conditons</a>
                <a href="#">Our Jouranls</a>
                <a href="#">Careers</a>
                <a href="#">Affilliate Programme</a>
                <a href="#">Ultras Press</a>
              </div>
              <div class="footer">
                <h2>Customer Service</h2>
                <a href="#">FAQ</a>
                <a href="#">Contact</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Returns &amp; Refunds</a>
                <a href="#">Cookie Guidelines</a>
                <a href="#">Delivery Information</a>
              </div>
              <div class="footer">
                <h2>Contact Us</h2>
                <h5>Do you have any questions or suggestions? <a href="#">ourservices@ultras.com</a> </h5>
                <span>Do you need assistance? Give us a call. <span class="d">+57 444 11 00 35</span> </span>
              </div>
              <div class="footer">
                <h2>Forever 2018</h2>
                <span>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</span>
                <div class="footer-links">
                  <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                  <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                  <a href="https://www.behance.com/"><i class="fa-brands fa-behance"></i></a>
                </div>
              </div>
            </div>
          </div>
        </section>
  

  <?php
      include_once 'footer.php'
  ?>