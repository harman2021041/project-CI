<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="/css/css.css" rel="stylesheet" type="text/css">
  <script src="js/bootstrap.bundle.min.js"></script>
  
</head>
<body class="bg">

<nav class="navbar navbar-expand-sm bgnav">
  <div class="container-fluid">
    <ul class="navbar-nav  me-auto">
      <li class="nav-item">
        <a class="navbar-brand "><img src ="/logo(2).png" height="50"></a>
      </li>
      <li class="nav-item">
       <a class="navbar-brand lgname aa"> <b>DOCTORSITE</b></a>
      </li>
    </ul>
      <ul class="navbar-nav ">
      <a href="login">
        <li class="nav-item me-4">
        <button type="button  "  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signin">sign in</button>
        </li></a>
        <a href="register">
        <li class="nav-item">
          <button type="button " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup">sign up</button>
        </li></a>
      </ul>
      
  </div>
</nav>
<div class=" modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  " >
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" >SIGN IN </h5>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="col-form-label">username</label>
            <input type="text" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">password</label>
            <input type="password" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer ">
        <button type="button " class="btn btn-success w-100" data-bs-dismiss="modal">sign in</button>
        
      </div>
    </div>
  </div>
</div>

<div class=" modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  " >
    <div class="modal-content modalbg">
      <div class="modal-header text-center">
      <h5 class="modal-title w-100 font-weight-bold" >SIGN UP </h5>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="username" class="col-form-label">username</label>
            <input type="text" class="form-control" required >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">password</label>
            <input type="password" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">confirm-password</label>
            <input type="password" class="form-control" required>
          </div>
        
      </div>
      <div class="modal-footer ">
        <button type="submit " class="btn btn-success w-100" >sign up</button>
        
      </div></form>
    </div>
  </div>
</div>
<!-- Carousel -->
   
<br><br> 
<br>
<br>
      <div class="offset-sm-7 ab mt-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quasi maxime animi 
        consequatur porro aspernatur facere laboriosam, velit inventore, sed vero nobis officia repudiandae ex voluptatibus non maiores dolor earum.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ratione autem blanditiis tempora alias quaerat ipsum ex ea, eaque earum odit 
        quam tempore dolorem, velit similique. Nobis sapiente blanditiis assumenda facere.
        <br>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="login">
  <button class="btn btn-primary" type="button">GET YOUR APPOINTMENT BOOKED ->
  </button></a>
</div>
</div>

</body>
</html>
