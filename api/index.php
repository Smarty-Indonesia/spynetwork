<?php
$pagetitle="Home";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
  '/' => '/api/index.php',
  '/help' => '/api/help.php',
  '/privacy-policy' => '/api/privacy-policy.php',
  '/roadmap' => '/api/roadmap.php',
];

if (array_key_exists($path, $routes)) {
  include $routes[$path];
} else {
  http_response_code(404);
  include '404.php';
}


include "includes/head.php";
?>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include "includes/navbar.php" ?>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      SPYN Utility with I-Spyn
                    </h1>
                    <p>
                      one of the prestigious projects in 2023, with a real project based on network marketing: I-Spyn
                    </p>
                    <div class="btn-box">
                      <a href="#" class="btn-1" onclick="CopyToClipboard()">
                        Copy Smart Contract
                      </a>
                      <a class="word-wrap" id="smart-contract" style="font-size: 10px">
                        0x3F76517F7aB600fd4879F0Ee735051Bb9691D5BB
                      </a>
                    </div>
                    <script>
                      function CopyToClipboard()
                        {
                        var r = document.createRange();
                        r.selectNode(document.getElementById("smart-contract"));
                        window.getSelection().removeAllRanges();
                        window.getSelection().addRange(r);
                        document.execCommand('copy');
                        window.getSelection().removeAllRanges();
                        }
                    </script>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="../assets/images/a.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      Buy & Burn with I-Spyn
                    </h1>
                    <p>
                     This I-Spyn utility is a utility that will buy & burn SPYN every month
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Contact Us
                      </a>
                      <a href="https://www.spynetwork.io/documents/introducing_spyn.pdf" target="_blank" class="btn-2">
                        Documentation
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="../assets/images/b.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail_box">
                    <h1>
                      The best marketing
                    </h1>
                    <p>
                      It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Contact Us
                      </a>
                      <a href="" class="btn-2">
                        Get A Quote
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="../assets/images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="../assets/images/about.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                What is I-Spyn?
              </h2>
            </div>
            <p>
              I-Spyn is one of SPYN Project Utility, which became one of biggest landing project for SPYN. I-Spyn is developing rapidly by one of the brightest channel network in big cities in Indonesia.
            </p>
            <a href="https://ispyn.co.id/" target="_blank">
            <div class="img-box" style="background-color: #330854">
              <img src="../assets/images/ispyn.jpg" alt="">
            </div>
            </a>
            <!--<a href="https://ispyn.co.id/" target="_blank">-->
            <!--  Join with I-Spyn-->
            <!--</a>-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          I-Spyn
        </h2>
        <!--<p>-->
        <!--  Learn these methods tho get more earn, more benefit, more profit.-->
        <!--</p>-->
      </div>

      <div class="service_container">
        <div class="box" style="width: 340px">
            <div class="img-box" style="background-color: #330854; height: 660px; width: 340px" >
              <video width="320" height="640" controls>
                  <source src="../assets/videos/01.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </div>
        </div>
        <div class="box" style="width: 340px">
            <div class="img-box" style="background-color: #330854; height: 660px; width: 340px">
              <video width="320" height="640" controls>
                  <source src="../assets/videos/02.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </div>
        </div>
        <div class="box" style="width: 340px">
            <div class="img-box" style="background-color: #330854; height: 660px; width: 340px">
              <video width="320" height="640" controls>
                  <source src="../assets/videos/03.mp4" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </div>
        </div>
        <!--<div class="box">-->
        <!--  <a href="">-->
        <!--    <div class="img-box" style="background-color: #330854">-->
        <!--      <img src="../assets/images/s-4.png" alt="">-->
        <!--    </div>-->
        <!--  </a>-->
        <!--  <div class="detail-box">-->
        <!--    <h5>-->
        <!--      Harvest Lockup Power-->
        <!--    </h5>-->
        <!--  </div>-->
        <!--</div>-->
        <!--<div class="box">-->
        <!--  <a href="">-->
        <!--    <div class="img-box" style="background-color: #330854">-->
        <!--      <img src="../assets/images/s-5.png" alt="">-->
        <!--    </div>-->
        <!--  </a>-->
        <!--  <div class="detail-box">-->
        <!--    <h5>-->
        <!--      Earn Power-->
        <!--    </h5>-->
        <!--  </div>-->
        <!--</div>-->
      </div>
      <div class="btn-box">
        <a href="https://ispyn.co.id/" target="_blank">
          Learn I-Spyn
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- work section -->

  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          SPYN Project
        </h2>
        <!-- <p>
        </p> -->
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="detail_container">
            <div class="box b-1">
              <div class="top-box">
                <div class="icon-box">
                  <img src="../assets/images/work-i1.png" alt="">
                </div>
                <h5>
                  Netfi SPYN
                </h5>
              </div>
              <div class="bottom-box">
                <p>
                  Netfi SPYN is a Defi that we have upgraded from web 3 to web 3.5
                  Equipped with lots of the latest technological features such as NFT, Swap, Add Liquidity, Farming, Stacking Pool, Power burning, Governance Protocol
                </p>
              </div>
            </div>
            <div class="box b-1">
              <div class="top-box">
                <div class="icon-box">
                  <img src="../assets/images/work-i2.png" alt="">
                </div>
                <h5>
                  SPYN Wallet
                </h5>
              </div>
              <div class="bottom-box">
                <p>
                  SPYN wallet is the world's first breakthrough Dex-based cryptocurrencies wallet which we successfully launched in March 2023
                  You can download SPYN wallet on Playstore and Aps Store.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="../assets/images/level.png" alt="">
          </div>
        </div>
      </div>

      <!-- <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div> -->
    </div>
  </section>
  <!-- end work section -->

  <!-- team section -->

  <section class="team_section layout_padding2-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Roadmap
        </h2>
        <p>
          Get to know more about our roadmap
        </p>
      </div>
    </div>
    <div class="team_container">
      <div class="box b-1">
        <a href="roadmap">
          <div class="img-box">
            <img src="../assets/images/2022.png" alt="">
          </div>
        </a>
        <div class="detail-box">
          <!-- <h5>
            2022
          </h5> -->
          <p>
            Smart Contract &#9899; Netfi Project &#9899; Pancakeswap &#9899; NFT
          </p>
          <!-- <div class="social_box">
            <a href="">
              <img src="../assets/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/insta.png" alt="">
            </a>
          </div> -->
        </div>
      </div>
      <div class="box b-2">
        <a href="roadmap">
          <div class="img-box">
            <img src="../assets/images/2023.png" alt="">
          </div>
        </a>
        <div class="detail-box">
          <!-- <h5>
            2023
          </h5> -->
          <p>
            SPYN wallet &#9899; New Pool on Netfi &#9899; I-Spyn Project &#9899; Buy and Burn
          </p>
          <!-- <div class="social_box">
            <a href="">
              <img src="../assets/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/insta.png" alt="">
            </a>
          </div> -->
        </div>
      </div>
      <div class="box b-3">
        <a href="roadmap">
          <div class="img-box">
            <img src="../assets/images/2024.png" alt="">
          </div>
        </a>
        <div class="detail-box">
          <!-- <h5>
            2024
          </h5> -->
          <p>
            ⁠Finishing Netfi Projects &#9899; Listing on Cexs &#9899; New items products &#9899; I-Spyn real projects until 1 Bio IDR 
          </p>
          <!-- <div class="social_box">
            <a href="">
              <img src="../assets/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="../assets/images/insta.png" alt="">
            </a>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Incoming I-Spyn Project
        </h2>
        <p>
        </p>
      </div>
    </div>
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="../assets/images/women-daycream.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Women Day Cream
                </h6>
                <!-- <p></p> -->
                <img src="../assets/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="../assets/images/body-care.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Body Care Series
                </h6>
                <!-- <p></p> -->
                <img src="../assets/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="../assets/images/skincare.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Skincare Series
                </h6>
                <!-- <p></p> -->
                <img src="../assets/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="../assets/images/men-facial.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Men Facial Wash
                </h6>
                <!-- <p></p> -->
                <img src="../assets/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="../assets/images/coffee.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Coffee Ginseng
                </h6>
                <!-- <p></p> -->
                <img src="../assets/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="box">
              <div class="img-box">
                <img src="../assets/images/berry-drink.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Berry Drink
                </h6>
                <!-- <p></p> -->
                <img src="../assets/images/quote.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </section>

  <!-- end client section -->

  

  <?php 
  include "includes/footer.php" ;
  include "includes/foot.php" ;
  
  ?>