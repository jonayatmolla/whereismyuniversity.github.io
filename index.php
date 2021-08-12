<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

<?php include 'menu.php'; ?>
  

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="kp.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="lp.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="op.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5px">
  <div class="py-5">
    <h2
     class="text-centre" >About Us
    </h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
     <img src="op.jpg" class="img-fluid" class="img-build anouyimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <h2>I am jonayed.</h2>
       <p>This is my first webside.it took 15 days to build it. so please leave your comment,about your opinion on this web</p>
       <a href="about.php"> know more</a>
     
    </div>
  </div>
  </div>
</section>
<section class="my-5px">
  <div class="py-5">
    <h2
     class="text-centre" >Our gellary
    </h2>
  </div>

  <div
    class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
  <img class="cad-ing-top" src="tc.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">technology :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
  <img class="cad-ing-top" src="tl.jfif" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">technology :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card" style="width:400px">
  <img class="cad-ing-top" src="tm.jfif" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">technology :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
    </div>
  </div>
</section>
  
<section class="my-5px">
  <div class="py-5">
    <h2
     class="text-centre" >Our gallery
    </h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="ga.jpg" class="img-fluid pb-2">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="gf.jpg" class="img-fluid pb-2">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="gs.jpg" class="img-fluid pb-2">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="gk.jfif" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="gb.jfif" class="img-fluid pb-3">

    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="lp.jpg" class="img-fluid pb-3">

    </div>
  </div>

</div>
</section>

<section class="my-5px">
  <div class="py-5">
    <h2
     class="text-centre" >About Us
    </h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post"> 
      <div class="form-group">
<label> Username</label>
<input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
<label> Phone Number</label>
<input type="text" name="phone" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<label> Email id</label>
<input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<label> Comments</label>
<textarea class="forn-control"name="comments"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</section>


<footer>
  <p class="p-3 bg-dark text-white text-center">
    @technicaljonayat
</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 90vs;
  }

  </style>
</body>
</html>

