<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('log_form.php');
		exit();
	}
	include('conn.php');
	$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Gurumantra | Coaching Claases</title>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="home_page.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--Title Icon-->
    <link rel="shortcut icon" href="logo_guru.png" type="image/x-icon">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Header -->
    <h4  class="font_f">
      <b>गुरुमंत्र</b>
      <a href="logout.php"><button class="float-right" id="join-but:hover" style="background-color: #000000; color: white ;border-radius: 25px; margin-right: 20px; margin-top: 10px; font-family: Times New Roman;" value='click here'>
          Logout</button></a>
    </h4>
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav_list">  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
               <a class="nav-link" href="index.html">Hello <?php echo $row['fullname']; ?> <span class="sr-only">(current)</span></a>
            </li>

      <!-- Our Courses -->
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lessons </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">vectors</a>
                <a class="dropdown-item" href="#">L2</a>
                <a class="dropdown-item" href="#">L3</a>
                <a class="dropdown-item" href="#">L4</a>
                <a class="dropdown-item" href="#">L5</a>
                </div>
            </li>
      
      <!-- About SGS -->
          <li class="nav-item">
            <a class="nav-link" href="about_us.html">About Us<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        </div>
      </nav>
      <!--Section 1-->
      <section class="container">
      <div class="card-group">
  <div class="card">
    <img src="lesson.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <button onclick="location.href='chap_vector.php'">Learn Now !</button>
    </div>
  </div>
  <div class="card">
    <img src="lesson.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card">
    <img src="lesson.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>
    </section>
    
       <!-- About Us Section -->
    </section>

   <!-- About Us Section -->
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
	
	<a href="pg1.php">Next Page</a>