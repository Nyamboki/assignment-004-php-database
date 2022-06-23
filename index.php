<?php
$server = "localhost";
$username ="root";
$password ="";
$database ="web2";

$conn = mysqli_connect($server,$username,$password,$database);


if( isset($_POST['submitButton']) )
{
    //1. fetch form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];    
    //2. submit form data


    $insertData = mysqli_query($conn, "INSERT INTO 
    contactus(firstname,lastname,phonenumber,email,message)
    VALUES('$firstname','$lastname','$phone','$email','$message')");
    if($insertData)
    {
        echo "Data submitted successfuly";
    }
    else
    {
        echo "Error occured";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>DATABASE EXAMPLE</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-betal-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Nvbar starts here -->
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top-2fr shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego academy</a>
            <button class="navbar-toggler"type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.html"class="nav-link active">Home</a>
                    <a href="aboutus.html"class="nav-link">About Us</a>
                    <a href="#"class="nav-link">Contact Us</a>
                </div>
            </div>
        </div>
    </nav> -->
    <!--Navbar ends-->
    <main class="p-5 bg light mb-4">
        <h1>Welcome, Daniel Lewis</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas error corporis deserunt pariatur cumque necessitatibus delectus voluptatum, quas aliquam neque.
        </p>
        <button class="btn btn-primary">Learn more</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h1>Header 1</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint accusamus, repellat accusantium aut provident quidem nesciunt reprehenderit, laboriosam neque in perspiciatis modi inventore tempore eum delectus quia quaerat, assumenda fugit.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class="col-lg-3 col-md-6">
                <h1>Header 2</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint accusamus, repellat accusantium aut provident quidem nesciunt reprehenderit, laboriosam neque in perspiciatis modi inventore tempore eum delectus quia quaerat, assumenda fugit.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class="col-lg-3 col-md-6">
                <h1>Header 3</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint accusamus, repellat accusantium aut provident quidem nesciunt reprehenderit, laboriosam neque in perspiciatis modi inventore tempore eum delectus quia quaerat, assumenda fugit.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            
        </div>

        <!--cotact us starts here-->
        <div class="row pt-5">
            <h1>contact us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam sit blanditiis, quaerat praesentium possimus ad aut voluptatem porro. Suscipit facilis minus, rerum quas cum quos tempora nobis aut minima voluptates saepe nam odit deserunt consectetur molestias quidem commodi! Numquam, dolor.</p>
            
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="First name" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="name" placeholder="Enter your First name">
                    
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="Last name" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="name" placeholder="Enter your last name">
                </div>
                <div class="row"></div>
                <div class="mb-3 col-lg-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                
                    <div class="mb-3 col-lg-6">
                        <label for="phone number" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" id="phone number" placeholder="Enter your phone number">
                    </div>
                </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="message" class="form-label">Your message</label>
                            <textarea cols="30" name= "message" rows="5" class="form-control"></textarea>
                           

                        </div>
                    </div>
               
               
                <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!--end of contact us-->
        <hr>
        <footer>
            &copy; Zalego Academy 2022
        </footer>

    </div>
    


     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> 
     <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>-->
     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    
</body>
</html>