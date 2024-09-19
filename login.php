
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-circle fs-3 me-2"></i> User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="logincode.php" method="post">
          <div class="modal-body">
            <div class="mb-3">
              <label  class="form-label">Email address</label>
              <input type="email" name="email" class="form-control">
            </div> 
            <div class="mb-4">
              <label  class="form-label">Password</label>
              <input type="password" name="pass" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
            <button  type="submit"class="btn btn-dark shadow-none">Log In </button>
            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
          </div>
        </div>
         
      </form>
    </div>  
  </div>
</div>
 </body>
 </html>