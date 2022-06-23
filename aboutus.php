<?php
$server = "localhost";
$username="root";
$password="";
$database="web2";

$conn= mysqli_connect($server,$username,$password,$database);
if(isset($_POST["submitbutton"]))
{
   //1.fetch form data
    
    $email= $_POST['email'];
    //2. submit form data
    $insertData = mysqli_query( $conn, "INSERT INTO
    subscribers(email)
    VALUES('$email')");
    
}
?>

<main class="p-5 bg-light mb-4"></main><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!--  Nvbar starts here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar ends -->
<main class="p-5 bg-secondary mb-4">
    <h1>About Us</h1>
    <p> This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique. </p>
</main>
<div class="container">
    <div class="row ">
        <div class="col-lg-6">
            <h1>Our program</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ut tempora aliquam commodi labore cumque quisquam, id aperiam, nesciunt eos maxime. Dolorum laboriosam vel magni, quaerat nulla saepe quod molestiae.</p>
        </div>
        <div class="col-lg-6">
            <img src="laptop.jfif"alt="" class="rounded" >
        </div>
    </div>
    <h1>The Programs</h1>
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem 18px;">
            <h2>Skill Discovery</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aliquam autem voluptates aspernatur, aperiam fuga velit unde repellendus in, deleniti, possimus dolorem quo iusto a? Incidunt quidem iure itaque blanditiis.</p>
            <button type="button" class="btn btn-primary">View Details</button>
            </div>
        </div>
        
            <div class="col-lg-4">
                <div class="card" style="width: 18rem 18px;">
                <h2>Upskill Program</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sint impedit ipsam repudiandae explicabo veniam necessitatibus consectetur temporibus incidunt! Praesentium libero nihil voluptas dignissimos molestiae sequi quod, magni magnam vitae.</p>
                <button type="button" class="btn btn-primary">View Details</button>
                </div>
            </div>
            
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem 18px;">
                    <h2>Path Findning Program</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, voluptatem. Eligendi ipsa omnis eum modi voluptatum dolores? Debitis temporibus pariatur odio atque deserunt ut recusandae quisquam repellendus labore, error doloribus.</p>
                    <button type="button" class="btn btn-primary">View Details</button>
                    </div>
                </div>
                
                   
                    
                    <br>
                 <form action ="aboutus.php" method = "POST">
                    <div class="row">
                    <p>Subscribe to get information, latest news about Zalego Academy</p></div>
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email Adress">
                        <button type="submit" name="submitbutton" class="btn btn-primary">subscribe</button>

                    </div>
                </form>
        
                    <hr>
                    <footer>
                        &copy; Zalego Academy 2022
                    </footer>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>    