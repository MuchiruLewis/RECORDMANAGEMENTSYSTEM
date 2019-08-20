<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("images/e.jpg"); }
.img2 { background-image: url("images/f.jpg"); }
.img3 { background-image: url("images/g.jpg"); }
.img4 { background-image: url("images/h.jpg"); }
.img5 { background-image: url("images/i.jpg"); }
.img6 { background-image: url("images/j.jpg"); }

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 500px;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>
    <a href="{{ url('/home') }}">Home</a>
<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>

<div class="bg-text">UTUMISHI KWA WOTE

   
</div>


</body>
</html>