<!--registerModal-->
<div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"     aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">
  <form action="signupcode.php" method="post" enctype="multipart/form-data">
    <div class="modal-header">
      <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registeration
      </h5>
      <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark me-3 text-wrap lh-base">
        Note:Your details must match with your ID(Aadhar card, passport,driving licence ,etc. ) that will be required during check-in.
      </span>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Name</label>
            <input name="name" type="text" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Phone no</label>
            <input name="phonenum" type="number" class="form-control shadow-none" required>
          </div>
          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Picture</label>
            <input name="profile" type="file" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none" required>
          </div>
          <div class="col-md-12 p-0 mb-3">
            <label class="form-label">Address</label>
            <textarea name="address" class="form-control shadow-none" required></textarea>
          </div>
          <div class="col-md-6 ps-0 mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control shadow-none" required >
          </div>
          <div class="col-md-6 p-0 mb-3">
            <label class="form-label">Confirm-Password</label>
            <input name="cpassword" type="password" class="form-control shadow-none" required >
          </div>
          
          <div class="text-center my-1">
            <button  type="submit"class="btn btn-dark shadow-none">REGISTER </button>
          </div>
        </div>
      </div>
    </div>
  </form>
   </div>  
  </div>
</div>