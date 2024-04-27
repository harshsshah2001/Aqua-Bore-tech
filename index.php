<!DOCTYPE html>
<html lang="en">
<?php
include 'connection.php';
session_start();



?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aqua Bore Tech</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>
  <!-- Nav-Bar -->
  <nav class="navbar navbar-expand-lg navbar-light pl-5 mt-2 font-weight-bold"
    style="background-color: rgb(235, 251, 251);">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active pr-4">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="products.html">Products</a>
        </li>
        <!-- <li class="nav-item pr-4">
          <a class="nav-link" href="#">Services</a>
        </li> -->
        <li class="nav-item pr-4">
          <a class="nav-link" href="contactUs.html">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Aboutus.html">About Us</a>
        </li>
      </ul>

    </div>
    <?php
    // $_SESSION['u_em']="";
    if(empty($_SESSION['u_em'])){
      echo"<div class='buttons' style='margin-left: 270px;'>
      <a target='_self' href='Sign_in.php' class='btn btn-outline-primary mr-3' >login</a>
     <a target='_self' href='Sign_up.php' class='btn btn-outline-primary mr-3'>sign in</a>
    </div>";
    }
    else{
      echo"
      <a target='_self' href='logout.php' class='btn btn-outline-primary mr-3'>logout</a>";
    }
   

    ?>
    <div class="carts" style="margin-right: 40px;">
     <a href="addtocart.html"> <i class="fa-solid fa-cart-shopping" style="font-size: larger;cursor: pointer;"></a></i>
    </div>
  </nav>

  <!-- first page of home -->
  <div class="container">
    <div class="row">
      <div class="col-md-7" style="margin-top: 20px;">
        <p>Our web services is most powerfull web-services.Selecting the best web services is crucial for achieving
          optimal performance and functionality in the online realm. A top-tier web service should exhibit reliability,
          security, and scalability. Amazon Web Services (AWS) stands out as a leader in cloud computing, offering a
          vast array of services such as computing power, storage, and databases. Its global infrastructure ensures
          low-latency access worldwide. Additionally, Microsoft Azure provides a robust platform with a focus on
          integration and hybrid solutions, making it suitable for diverse business needs.</p>
        <p> Google Cloud Platform (GCP) excels in data analytics, machine learning, and container orchestration, making
          it a preferred choice for innovative projects. These services prioritize customer support, compliance, and
          cost-effectiveness, empowering businesses to thrive in the digital landscape. Ultimately, the best web
          services align with specific organizational requirements, ensuring a seamless and efficient online presence.
        </p>
        <p>Google initially separated the browsing habits collected from AD tracking from data collected by its other
          services by default. Google removed this last layer of protection in 2016, making its tracking
          personally-identifiable</p>

      </div>

      <div class="col-md-5" style="margin-top: 20px;"">
            <img src=" images/first_home.jpg" class="rounded float-left" style="max-height: 800px;" alt="">
      </div>
    </div>
  </div>
  <hr class="hr1">




  <!-- Product Of Home Page -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-3">
        <span class="homeproduct"><u>Products</u></span>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row -">
      <div class="col-md-4">
        <!-- card-1 -->
        <div class="card mt-1" style="width: 18rem;border: 1px solid black;">
          <img src="images/images.jfif" class="card-img-top" alt="" style="max-height: 250px;">
          <div class="card-body">
            <h5 class="card-title">Orinon Motor</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
          <hr class="hr2">
          <div class="card-body">
            <button type="button" class="btn btn-success"><i class="fa-solid fa-bag-shopping mr-2"></i>Shop Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- card-2 -->
        <div class="card mt-2" style="width: 18rem;border: 1px solid black;">
          <img src="images/images_1.jfif" class="card-img-top" alt="" style="max-height: 250px;">
          <div class="card-body">
            <h5 class="card-title">Screw Vontage</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
          <hr class="hr2">
          <div class="card-body">
            <button type="button" class="btn btn-success"><i class="fa-solid fa-bag-shopping mr-2"></i>Shop Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- card-3 -->
        <div class="card mt-2" style="width: 18rem;border: 1px solid black;">
          <img src="images/image_2.jfif" class="card-img-top" alt="" style="max-height: 250px;">
          <div class="card-body">
            <h5 class="card-title">Scanner Multimeter</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
          <hr class="hr2">

          <div class="card-body">
            <button type="button" class="btn btn-success"><i class="fa-solid fa-bag-shopping mr-2"></i>Shop Now</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <hr class="hr1 mt-5">

  <!-- Our Customers -->

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-3">
        <span class="homeproduct"><u>Our Clients</u></span>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="width: 18rem; background-color: rgb(243, 240, 240); border-radius: 85%;">
          <img src="images/circle1.png" class="card-img-top" alt="..."
            style=" margin-left: 80px; margin-top: 15px;  max-height: 200px; max-width: 130px; background-color: rgb(249, 162, 237)antiquewhite;">
          <hr class="hr3">
          <div class="card-body">
            <h5 class="card-title text-center">Mahindra</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem; background-color: rgb(243, 240, 240); border-radius: 85%;">
          <img src="images/circle3.png" class="card-img-top" alt="..."
            style=" margin-left: 80px; margin-top: 15px;  max-height: 200px; max-width: 130px; background-color: rgb(249, 162, 237)antiquewhite;">
          <hr class="hr3">
          <div class="card-body">
            <h5 class="card-title text-center">Tata</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem; background-color: rgb(243, 240, 240); border-radius: 85%;">
          <img src="images/circle2.png" class="card-img-top" alt="..."
            style=" margin-left: 80px; margin-top: 15px;  max-height: 200px; max-width: 130px; background-color: rgb(249, 162, 237)antiquewhite;">
          <hr class="hr3">
          <div class="card-body">
            <h5 class="card-title text-center">Wolks-Wagoan</h5>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-5" style="margin-left: 50px;">
          <div class="card" style="width: 18rem; background-color: rgb(243, 240, 240); border-radius: 85%;">
            <img src="images/circle4.png" class="card-img-top" alt="..."
              style=" margin-left: 80px; margin-top: 15px;  max-height: 200px; max-width: 130px; background-color: rgb(249, 162, 237)antiquewhite;">
            <hr class="hr3">
            <div class="card-body">
              <h5 class="card-title text-center">Mercidize</h5>
            </div>
          </div>
        </div>
        <div class="col-md-5" style="margin-left: 50px;">
          <div class="card" style="width: 18rem; background-color: rgb(243, 240, 240); border-radius: 85%;">
            <img src="images/circle5.png" class="card-img-top" alt="..."
              style=" margin-left: 80px; margin-top: 15px;  max-height: 200px; max-width: 130px; background-color: rgb(249, 162, 237)antiquewhite;">
            <hr class="hr3">
            <div class="card-body">
              <h5 class="card-title text-center">BMW</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="hr1 mt-5">

  <!-- FeedBack Form -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p ><u style="font-size:xx-large; font-weight: 900;text-decoration:none;text-transform:capitalize">any query?</u></p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter Name" style="max-width: 500px; border: 1px solid black;" name="name">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email" style="max-width: 500px; border: 1px solid black;" name="email">
          <small id="emailHelp" class="form-text text-muted  mb-2">We'll never share your email with anyone
            else.</small>

          <label for="exampleInputEmail1">Your Message</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter Mobile No" style="max-width: 500px; border: 1px solid black;" name="mobile">
          <small id="emailHelp" class="form-text text-muted">We'll never share your Number with anyone else.</small>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <input type="submit" class="btn btn-primary" name="submit">
        </form>
      </div>
      <div class="col-md-6">
        <img src="images/map.png" alt="" style="cursor: pointer;">
      </div>
    </div>
  </div>
  </div>
  <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$n=$_POST['name'];
$e=$_POST['email'];
$m=$_POST['mobile'];

$sql="INSERT INTO user_query(name, email, messege) VALUES ('$n','$e','$m')";
$s=$conn->query($sql);
if($s){

  echo'<script>alert("data inseted");</script>';
}
else{
  
  echo'<script>alert("not inseted");</script>';
}
}

?>
  <hr class="hr1 mt-4">


  <!-- Our Specialities -->

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-3">
        <span class="homeproduct"><u>Our Specialities</u></span>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card text-center">
          <div class="card-header">
            Featured
          </div>
          <div class="card-body">
            <h5 class="card-title">We stay here approximately at least 5 years.</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="hr1 mt-4">

  <!-- Footer Start Here -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <footer class="small bg-light">
          <div class="container py-3 py-sm-5">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <h6>Quick links</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">What's new</a></li>
                  <li><a href="#">Featured Product</a></li>
                  <li><a href="#">News letter</a></li>
                  <li><a href="#">Company account</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <h6>Information</h6>
                <ul class="list-unstyled">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Membership</a></li>
                  <li><a href="#">Shipping &amp; returns</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Sitemap</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <h6>Follow us</h6>
                <ul class="list-unstyled">
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">LinkedIn</a></li>
                  <li><a href="#">YouTube</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <address>
                  <strong>near Swami-Narayan Temple </strong><br />
                  Highway Mahesana<br />
                  Gujrat 562-548<br />
                  <abbr title="Telephone">T:</abbr><a href="tel:+917567521564">(+91) 7567521564</a><br />
                  <abbr title="Mail">M:</abbr><a href="mailto:info@domain.com">info@domain.com</a>
                </address>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6 col-md-9">
                <ul class="list-inline">
                  <li class="list-inline-item">&copy; 2017 Aqua Bore Tech, Inc.</li>
                  <li class="list-inline-item">All rights reserved.</li>
                  <li class="list-inline-item">
                    <a href="#">Terms of use and privacy policy</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <script src="index.js"></script>
</body>

</html>