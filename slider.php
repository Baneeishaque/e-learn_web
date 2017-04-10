<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>
<div style="margin-left:-500px; margin-top:100px; width: 100px;">
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="admin/images/6.jpg" alt="Chania" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="admin/images/1.jpg" alt="Chania" width="460" height="345">
        
      </div>
    
      <div class="item">
        <img src="admin/images/2.jpg" alt="Flower" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="admin/images/3.jpg" alt="Flower" width="460" height="345">
        
      </div>
  <div class="item active">
        <img src="admin/images/7.jpg" alt="Chania" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="admin/images/8.jpg" alt="Chania" width="460" height="345">
        
      </div>
    
      <div class="item">
        <img src="admin/images/9.jpg" alt="Flower" width="460" height="345">
        
      </div>

      <div class="item">
        <img src="admin/images/11.jpg" alt="Flower" width="460" height="345">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a  href="#myCarousel" role="button" data-slide="prev">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a  href="#myCarousel" role="button" data-slide="next">
      <span class="" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</body>
</html>
