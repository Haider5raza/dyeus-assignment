<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/6abf891c0d.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Menu</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Complain</a>
  <a href="#">Contact-us</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ </button>  
    <a href="#"><i aria-hidden="true" class="fa-solid fa-shopping-cart" style="font-size:28px;color:white;float:right;padding:12px 24px 0px 0px"></i></a>
  
</div>

<!---------->

<div class="child">
<div class="responsive">
    <img src="image/intern.jpg" alt="Nature" class="respo" width="365" height="470">

</div>

<!--heading after image--->

<div class="heading">
    <p><b> Everyday rinse and reload</b></p>

</div>

<!--discription about the product-->

<div class="dis">
    <p><b>Achieve your dream skin goal with this complete package of skin care product that will rejuvenate your day.</b></p>

</div>

<!----rating star------>

<div class="rate">
    <span class="star">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star "></span>
    </span>
<span class="point">4.5</span>
<span class="review"> click the review</span>

</div>

<!-----discount-price---->

<div class="price">
    <span class="new">
       <i class="fa fa-rupee">899</i>

</span>
    <span class="old">
       <i class="fa fa-rupee"><del>1299</del></i>

</span>
</div>

<div class="card">
<a href="#" target="blank"><div class="sm-card"></a>
    <p class="pack"><span class="fa fa-star "></span>Most Popular<span class="fa fa-star "></span></p> 
    <h3 class="month">1 MONTH PACK(4 tubes)</h3><span class="rupees"><i class="fa fa-rupee"> 595</i></span>

    <p class="sav">Savings: <i class="fa fa-rupee"> 200</i></p><span class="del"> <i class="fa fa-rupee"><del>795</del></i></span>
    <span class="per">38% Saved</span><span class="result">Beat Result</span>
  </div>
</div>


<div class="card">
<a href="#" target="blank"><div class="sm-card"></a>
    
    <h3 class="month">3 MONTH PACK(12 tubes)</h3><span class="rupees"><i class="fa fa-rupee"> 899</i></span>

    <p class="sav">Savings: <i class="fa fa-rupee"> 100</i></p><span class="del"> <i class="fa fa-rupee"><del>999</del></i></span>
    <span class="per">38% Saved</span>
  </div>
</div>


  <div class="add-cart">
  <a href="#">
    <i aria-hidden="true" class="fa-solid fa-shopping-cart" style="font-size:24px;color:white;;padding: 0px"></i></a><span> ADD TO CART</span></div>
  
</div>


</div>
</div>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "140px";
  document.getElementById("main").style.marginLeft = "135px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html>


