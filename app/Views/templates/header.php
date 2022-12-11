<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/css.css">
    <title></title>

  </head>
  <body>
    <?php
      $uri = service('uri');
     ?>
    <nav class="navbar navbar-expand-sm bgnav">
      <div class="container-fluid">
      <ul class="navbar-nav  me-auto">
        <li class="nav-item">
          <a class="navbar-brand "><img src ="/logo(2).png" height="50"></a>
        </li>
        <li class="nav-item">
         <a class="navbar-brand lgname aa" href="/"> <b>DOCTORSITE</b></a>
        </li>
      </ul>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (session()->get('isLoggedIn')): ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item pr-3 <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
          <a  href="/dashboard">
              <button type="button"class="btn btn-primary">dashboard </button></a>
          </li>
          <li class="nav-item pr-3 <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
          <a  href="/profile">
              <button type="button"class="btn btn-primary">profile </button></a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
             <a  href="/logout">
              <button type="button"class="btn btn-primary">Logout</button></a>
          </li>
        </ul>
      <?php else: ?>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item pr-3 <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
            <a  href="/login">
              <button type="button"class="btn btn-primary">Login </button></a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
          <a  href="/register">
          <button type="button"class="btn btn-primary">register</button></a>
          </li>
        </ul>
        <?php endif; ?>
      </div>
      </div>
    </nav>
