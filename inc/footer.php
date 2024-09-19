<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('../links.php');?>
  <title>Document</title>
</head>
<body>
  
  <!-- footer start -->

<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3">sk hotel</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis repellat totam itaque deserunt assumenda tenetur amet provident id ullam excepturi aperiam voluptatem beatae libero ipsam, ut quae debitis commodi modi?</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">links</h5>
      <a href="#" class="d-inline-block mb-4 text-dark text-decoration-none">Home</a><br>
      <a href="#" class="d-inline-block mb-4 text-dark text-decoration-none">Rooms</a><br>
      <a href="#" class="d-inline-block mb-4 text-dark text-decoration-none">Facilties</a><br>
      <a href="#" class="d-inline-block mb-4 text-dark text-decoration-none">Contact</a><br>
      <a href="#" class="d-inline-block mb-4 text-dark text-decoration-none">About</a><br>
    </div>
    <div class="col-lg-4 p-4">

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

<!-- footer end -->

<script>

  function setActive()
  {

  }    
  let register_form = get_ElementById('register-form');

  register_form.addElement.Listener('submit', (e)=>{
    e.preventDefault();

    let data = new FormData();

    data.append('name',register_form.elements['name'].value);
    data.append('email',register_form.elements['email'].value);
    data.append('phone',register_form.elements['phone'].value);
    data.append('name',register_form.elements['name'].value);
    data.append('name',register_form.elements['name'].value);
    data.append('name',register_form.elements['name'].value);
    data.append('name',register_form.elements['name'].value);

  });

  setActive();


</script>

</body>
</html>