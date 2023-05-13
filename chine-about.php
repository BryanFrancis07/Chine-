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
</head>
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
                <a class="nav-link" href="bootstrap-practice.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">About</a>
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
            <a href=""><i class="fa-brands fa-facebook" style="color: #fff;"></i></a>
            <a href="https://twitter.com/Untold_07"><i class="fa-brands fa-twitter" style="color: #fff;"></i></a>
             <i class="fa-brands fa-instagram" style="color: #fff;"></i>
             <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>
           </div>
        </div>
      </nav>

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
          <a class="nav-link" href="bootstrap-practice.html" style="color: #fff;">Home</a>
        </li>
        <li class="nav-item" style="font-size: 13px;text-align: center;">
          <a class="nav-link" href="" style="color: #fff;">About</a>
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
     <a href=""><i class="fa-brands fa-facebook" style="color: #fff;"></i></a>
     <a href="https://twitter.com/Untold_07"><i class="fa-brands fa-twitter" style="color: #fff;"></i></a>
      <i class="fa-brands fa-linkedin" style="color: #fff;"></i>
      <i class="fa-brands fa-instagram" style="color: #fff;"></i>
      <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>
    </div>
  </div>
</body>
</html>