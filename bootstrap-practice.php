
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/js/bootstrap.bundle.js">
    <!-- javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awesome links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">  
    <title>Document</title>
    <style>
      .row{
        background-color: whitesmoke;
      }
      @media(max-width:667px){
        .master{
          /* min-height: 40vh; */
          text-align: center;
          display: block;

        }
        .btnlast{
         margin-left: -50px;
        }
        .mybtn{
          display: none;
        }
      }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Chine's Couture</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chine-about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chine-services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chine-contact.html">Contact-Us</a>
          </li>    
        </ul>
      </div>
      <div class="mybtn" style="margin-top: 10px;font-size: 18px;">
        <a href="https://www.facebook.com/profile.php?id=100068785424306"><i class="fa-brands fa-facebook" style="color: #fff;"></i></a>
        <a href="https://twitter.com/Untold_07"><i class="fa-brands fa-twitter" style="color: #fff;"></i></a>
         <i class="fa-brands fa-instagram" style="color: #fff;"></i>
         <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>
       </div>
    </div>
  </nav>
  <!-- <br> elegance, and quality. With a strong
  focus on individuality and self-expression, Chine's Couture<br> is the perfect destination for
  fashion-forward women who want to stand out from the crowd. -->
  <div class="has-bg-img" >
      <div id="home" class="master bg-img bg-cover img-fluid" style="background-image: url(Images/IMG_3106.JPG);height: 100vh;background-position: center;background-size: cover;position: relative;max-width: 100%;height: auto;">
        <p style="padding-top: 180px;color: #000;padding-left: 40px;font-size: 19px;text-align: right;font-weight: 600;padding-bottom: 100px;">
          Chine's Couture is a fashion website that offers a unique<br> and exclusive range of clothing
          items and accessories for<br> women who appreciate luxury.
        </p>
  </div>
<!-- <div class="bg-img bg-cover" style="background-image: url(Images/black-african-american-woman-sitting-chair-stylish-green-leopard-printed-dress-isolated-green.jpg);height: 100vh;background-position: center;background-size: cover;position: relative;">
<p style="padding-top: 180px;color:black;padding-left: 40px;font-size: 30x;text-align: left;font-weight: 600;">At Chine's Couture, we understand that fashion is not just about clothing,<br> it's about making a statement. Our collection of clothing items and accessories<br> are carefully curated to cater to the diverse needs and preferences of our customers.<br> Whether you are looking for a statement piece to wear to a special event or an everyday wardrobe<br> staple, we have got you covered.</p>
</div> -->

<div class="row" id="about">
  <div class="col-sm-4">
    <p style="padding-top: 50px;padding-left: 30px;font-weight: 500;color: #222222">Our collection of clothing items is made from high-quality fabrics and designed by some of the most talented fashion designers in the industry. From chic and stylish dresses to elegant and timeless tops, our clothing collection is a reflection of the latest trends and styles.
    </p>
  </div>
  <div class="col-sm-8 text-dark">
    <img src="Images/black-african-american-woman-sitting-chair-stylish-green-leopard-printed-dress-isolated-green.jpg" alt="" style="height: 70vh;background-position: center;background-size: cover;margin-left: 110px;">
  </div>

  <div class="col-sm-4">
    <img src="Images/two-afro-american-women-studio.jpg" alt="" style="height: 70vh;background-position: center;background-size: cover;">
  </div>
  <div class="col-sm-8">
    <p style="text-align: right;padding-top: 60px;padding-right: 30px;font-weight: 500;color: #222222">At Chine's Couture, we believe that fashion<br>should be accessible to everyone.<br>That's why we offer our customers affordable<br> prices without compromising on quality or style. </p>
  </div>

</div>
<div class="container justify-content-center">
  <button type="button" class="btn btn-dark" style="margin-left: 45%;margin-top: 10px;">Show More</button>
</div>
<div id="services" class="row" style="margin-left: 50px;margin-top: 20px;">
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" src="Images/Men wears.jpg" alt="Card image";>
      <div class="card-body">
        <h4 class="card-title">Men's Wears</h4>
        <p class="card-text">
          Elevate your style with our curated men's fashion collection.</p>
        <button type="button" class="last btn btn-outline-dark">See More</button>
      </div>
      </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <img class="card-img-top" src="Images/women wears 2.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Women's Wears</h4>
        <p class="card-text">Discover your style with our chic women's fashion collection.</p>
        <button type="button" class="btn btn-outline-dark ">See More</button>
      </div>
  </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="Images/children 2 wears.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Children's Wears</h4>
        <p class="card-text">
          Adorable and trendy clothes for your little ones. Shop now!</p>
        <button type="button" class="btn btn-outline-dark ">See More</button>
      </div>
  </div>
  </div>

  <div class="btnlast container justify-content-center">
    <button type="button" class="btn btn-dark" style="margin-left: 45%;margin-top: 10px;">Shop Now</button>
  </div>
</div>
<!-- form section -->
<div id="contact" class="container mt-3" style="margin-top: 20px;">
  <h2>Please Fill Out The Form Below</h2>
  <form method="post" action="submit.php">
    <div class="mb-3 mt-3">
      <label for="fname">Firstname:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter firstname" name="fname">
    </div>
    <div class="mb-3 mt-3">
      <label for="lname">Lastname:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter lastname" name="lname">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="phone">Phone:</label>
      <input type="tel" class="form-control" id="phone" placeholder="Enter phone-number" name="phone">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" id="check"> Remember me
      </label>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
      <input type="hidden" class="form-control" id="userid" name="userid">
      </label>
    </div>
    
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>
</div>
<!-- footer section -->
<div class="row" style="background-color: #222222;padding: 40px;margin-top: 10px;">
  <div class="col-sm-3">
    <p style="color: #fff;text-align: center;">ABOUT</p>
    <p style="color: #fff;font-size: 13px;text-align: center;"> Chine's Couture is a fashion website that offers a unique and exclusive range of clothing items and accessories for women who appreciate luxury, elegance, and quality. </p>
  </div>
  <div class="col-sm-3">
    <P style="color: #fff;text-align: center;">GET SUPPORT</P>
    <P style="color: #fff;font-size: 13px;"><i class="fa-sharp fa-solid fa-location-dot"></i>Address:Plot 5 tunde williams street.</P>
    <p style="color: #fff; font-size: 13px;"><i class="fa-sharp fa-solid fa-phone"></i>Tel:+1 8120890083</p>
    <p style="color: #fff; font-size: 13px;"><i class="fa-regular fa-envelope"></i>Email:fbryan28@yahoo.com</p>
  </div>
  <div class="col-sm-3">
    <p style="color: #fff;text-align: center;">COMPANY</p>
    <ul class="navbar-nav" style="color: #fff;text-align: center;">
      <li class="nav-item" style="font-size: 13px;text-align: center;">
        <a class="nav-link" href="" style="color: #fff;">Home</a>
      </li>
      <li class="nav-item" style="font-size: 13px;text-align: center;">
        <a class="nav-link" href="chine-about.html" style="color: #fff;">About</a>
      </li>
      <li class="nav-item" style="font-size: 13px;text-align: center;">
        <a class="nav-link" href="chine-services.html" style="color: #fff;">Services</a>
      </li>
      <li class="nav-item" style="font-size: 13px;text-align: center;">
        <a class="nav-link" href="chine-contact.html" style="color: #fff;">Contact-Us</a>
      </li>    
    </ul>
  </div>
  <div class="col-md-3">
    <p style="color: #fff;text-align: center;">SERVICES</p>
    <p style="color: #fff;font-size: 13px;text-align: center;">With a focus on individuality and self-expression, our collection is designed to cater to the diverse needs and preferences of our customers. Shop with us today and elevate your fashion game to the next level!</p>
  </div>
  <div style="text-align: center;align-items: center;margin-top: 10px;font-size: 18px;">
   <a href="https://www.facebook.com/profile.php?id=100068785424306"><i class="fa-brands fa-facebook" style="color: #fff;"></i></a>
   <a href="https://twitter.com/Untold_07"><i class="fa-brands fa-twitter" style="color: #fff;"></i></a>
    <i class="fa-brands fa-linkedin" style="color: #fff;"></i>
    <i class="fa-brands fa-instagram" style="color: #fff;"></i>
   <a href="https://wa.me/2348097852819"><i class="fa-brands fa-whatsapp" style="color: #fff;"></i></a>
  </div>
</div>
<?php include "submit.php"?>;

</body>
</html>