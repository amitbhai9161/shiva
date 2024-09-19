<?php require('inc/links.php');?>
  <?php require('inc/header.php');?>  
    
 
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-line bd-dark"></div>
    <p class="text-center ">Lorem, ipsum dolor sit amet  consectetur adipisicing elit. <br> Magnam suscipit vero eaque amet rem eveniet esse nihil inventore maxime possimus.</p>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 px-4 mb-5 ">
          <div class="bg-white rounded shadow p-4">
                <iframe class="m-100 rounded " width="480px " height="300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.963708283198!2d80.94701827450464!3d26.90464686043883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd90f852511b%3A0xea3004cdf494ecbb!2sDigiCoders%20Technologies%20Private%20Limited%2C%20Best%20Software%2FWebsite%2FMobile%20App%20Development%20Company%20in%20Lucknow!5e0!3m2!1sen!2sin!4v1726344036692!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/8pG1ATwqLVAJY1FTA" target="_blank" class="d-inline-block text-decoration-none">
                  <i class="bi bi-geo-alt-fill"></i>xyz ,lucknow
                </a>
                <h5>call us</h5>
                <a href="tel:+918188829345" class="d-inline-block mb-4 text-decoration-none text-dark">
                <i class="bi bi-telephone-fill"></i>+918188829345</a> <br>
                <h5>Email</h5>
                <a href="mailto:santosh8188829345@gmail.com" class="d-inline-block mb-4 text-decoration-none text-dark">santosh8188829345@gmail.com</a>

                <h5 class="mt-4">Follow us</h5>
                <a href="#" class="d-inline-block mb-3 ">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter me-1"></i>Twitter
                  </span>
                </a>
                <a href="#" class="d-inline-block mb-3 ">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-facebook me-1"></i>Facebook
                  </span>
                </a>
                <a href="#" class="d-inline-block mb-3 ">
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram me-1"></i>instagram
                  </span>
                </a>
               
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <form method="POST" action="contactcode.php">
              <h5>Send  a message</h5>
              <div class="mb-3">
                <label  class="form-label" style="font-weight:500px">Name </label>
                <input name="name" required type="text" class="form-control">
              </div> 
              <div class="mb-3">
                <label  class="form-label" style="font-weight:500px">Email </label>
                <input name="email" required type="email" class="form-control">
              </div> 
              <div class="mb-3">
                <label  class="form-label" style="font-weight:500px">Subject</label>
                <input name="subject" required type="text" class="form-control">
              </div> <div class="mb-3">
                <label class="form-label" style="font-weight:500px">Message </label>
                <textarea name="message" required class="form-control shadow-none" row="1"></textarea>
              </div> 
              <button name="send" type="submit" class="btn btn-outline-dark shadow-none me-lg-3 me-2">
                Send me
              </button>
            </form>
          </div>  
        </div>
    </div>
  </div>


  <?php require('inc/footer.php');?>
  