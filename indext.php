<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sk HOTEL-home</title>
    <link rel="stylesheet" href="css/common.css"/>
    <?php require('inc/links.php')?>
    <style>
      
      .availablity-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
      @media screen and (max-width:575px){
        .availablity-form{
          margin-top: 25px;
          padding: 0 35px;
        }     
      }
    </style>
</head>
<body class="bg-light">
  
  <?php require('inc/header.php');?>


 <!-- Swiper -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="h1.jpg" width="100%" height="400px" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
         <img src="h2.jpg"width="100%" height="400px" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
         <img src="h3.jpg"width="100%" height="400px" class="w-100 d-block"/>
        </div>
      </div>
      
    </div>
  </div>


  
<!--- check availability form start-->

<div class="container availability-form">
  <div class="row">
  <div class="col-lg-12 bg-white shadow p-4 rounded">
    <h5 class="mb-4">Check Booking Availability</h5>
    <form>
     <div class="row align-items-end">
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Check-In </label><br>
          <input type="date" class="form-label shadow none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Check-Out </label><br>
          <input type="date" class="form-label shadow none">
        </div>
        <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight:500;">Adult </label><br>
          <select class="form-select shadow-none" >
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight:500;">Child</label><br>
          <select class="form-select shadow-none" >
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-lg-1 mb-lg-3 mt-2 ">
          <button type="submit" class="btn text-white shadow-none custom-bg ">Submit</button>
        </div>
      </div>
    </form>
   </div>
 </div>
</div>

<!--- check availability form end-->


<!---room card start-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font ">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow " style="max-width:350px; margin:auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 >simple room</h5>
          <h6 class="mb-4" >₹300 per night </h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              2 Rooms 
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              1 Bathrooms
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              3 Sofa
            </span>
          </div>
          <div class="Facitlities mb-4">
            <h6 class="">Facitlities</h6>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Room heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn text-white custom-bg shadow-none">Book now</a>
            <a href="#" class="btn btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow " style="max-width:350px; margin:auto;">
        <img src="images/rooms/2.png" class="card-img-top">
        <div class="card-body">
          <h5 >simple room</h5>
          <h6 class="mb-4" >₹300 per night </h6>
          <div class="features mb-4">
            <h6 class="">Features</h6>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              2 Rooms 
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              1 Bathrooms
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              3 Sofa
            </span>
          </div>
          <div class="Facitlities mb-4">
            <h6 class="">Facitlities</h6>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Room heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn text-white custom-bg shadow-none">Book now</a>
            <a href="#" class="btn btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow " style="max-width:350px; margin:auto;">
        <img src="images/rooms/3.png" class="card-img-top">
        <div class="card-body">
          <h5 >simple room</h5>
          <h6 class="mb-4" >₹300 per night </h6>
          <div class="features mb-4">
            <h6 class="">Features</h6>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              2 Rooms 
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              1 Bathrooms
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              3 Sofa
            </span>
          </div>
          <div class="Facitlities mb-4">
            <h6 class="">Facitlities</h6>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Ac
            </span>
            <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
              Room heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn text-white custom-bg shadow-none">Book now</a>
            <a href="#" class="btn btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-outline-dark rounded-0 fw-bold shadow-none"> More rooms >></a>
    </div>
  </div>
</div>



<!---room card end-->


<!--our facilities start--->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly">
    <div class="col-lg-2 col-md-2 texgt-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_27079.svg" alt="wifi" width="80px">
      <h5 class="mt-3">Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 texgt-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_41622.svg" alt="wifi" width="80px">
      <h5 class="mt-3">TV</h5>
    </div>
    <div class="col-lg-2 col-md-2 texgt-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_43553.svg" alt="wifi" width="80px">
      <h5 class="mt-3">wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 texgt-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_47816.svg" alt="wifi" width="80px">
      <h5 class="mt-3">bad</h5>
    </div>
    <div class="col-lg-2 col-md-2 texgt-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/IMG_49949.svg" alt="wifi" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    
    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilties >></a>
    </div>
  </div>
</div>

<!--our facilitices end--->

<!--testimonials start-->
<!-- <h2 class="mt-5 pt-4 text-center fw-bold "> Testimonials </h2> 
<div class="container">
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="profile">
          <img src="h1.jpeg" alt="">
        </div>
      </div>  
    <div class="swiper-pagination"></div>
  </div>
</div>-->
<!--testimonials end--->

<!--reach us start --->
<h2 class="mt-5 pt-4 text-center fw-bold ">Reach Us </h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-3 bg-white rounded">
    <iframe class="m-100" width="700px" height="360px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.963708283198!2d80.94701827450464!3d26.90464686043883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd90f852511b%3A0xea3004cdf494ecbb!2sDigiCoders%20Technologies%20Private%20Limited%2C%20Best%20Software%2FWebsite%2FMobile%20App%20Development%20Company%20in%20Lucknow!5e0!3m2!1sen!2sin!4v1726344036692!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel:+918188829345" class="d-inline-block mb-4 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+918188829345</a> <br>
          <a href="tel:+9184849384" class="d-inline-block mb-4 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+91800000021</a>  
      </div>
      <div class="bg-white p-4 rounded mb-4">
      <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i>Twitter
          </span>
        </a><br>
        <a href="#" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>Facebook
          </span>
        </a> <br>
        <a href="#" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i>instagram
          </span>
        </a><br>
      </div>
        
       
      </div>
    </div>
  </div>
</div>




<!--reach us end--->


<?php require('inc/footer.php');?>  








<!--- js start-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
     loop:true,
     autoplay:{
      delay:3500,
      disableOneIntertion:false,
     }
    });

    /*testimonals*/
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>

</body>
</html>