<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\navbar.css" />
    <link rel="stylesheet" href="css\footer.css" />
    <link rel="stylesheet" href="css\main.css" />
    
    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("navLinks");
            navLinks.style.right = navLinks.style.right === "0px" ? "-200px" : "0px";
        }
    </script>
</head>
<body>
<div class="navbar">

    <ul>
    <li><h1> Flexi-On Financial Inc.</h1> </li>
</ul>

    <ul>
    <li><h2><a href="index.php" ></i>Home</a></h2></li>
    <li><h2><a href="about-us.php"</i>About Us</a></h2></li>
    <li><h2><a href="emplogin.php" ></i>Employee Login</a></h2></li>
    <li><h2><a href="custsignup.php"</i>Customer Registration</a></h2></li>
    <li><h2><a href="contact-us.php" ></i>Contact Us  </a></h2></li>
</ul>
<button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    

</div>

<main>
    <div class="container-fluid">
        <div class="row>
            <!-- First Column spanning three rows -->
         <div class="col-4 bg-red cell-red cell"> 
            <img src="img\1.png" width="100%"> </div>

         <div class="col-8">
            <div class="row cell-blue">
             <!-- First Column spanning three rows -->
            <div class="col-12 bg-blue cell"> 
                <h1>Cheque Cashing</h1>
            <img src="img\2.jpg" >  </div>
         </div>
        
         <div class=row cell-green">
         <!-- First Column spanning three rows -->
          <div class="col-12 bg-green cell">
          <h1>Cash For Gold </h1>
            <img src="img\3.webp" > </div>

        </div>  

        </div>
    </div>
    </div>
</main>
<div class="footer">
<p>&copy; Flexi-On Financial Inc.  All rights reserved.</p>
</div>
</body>
</html>