<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="anime.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    
  </ul>
</nav>

<div class="container">
  <div class="row">
  
  
    <div class="col-md-4">
    
  <div class="card card2" style="width:400px; text:center">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">Me yet to be Updated. Actual Image.
      <h4 class="card-title">Charulasha Gunawardana</h4>
      <p class="card-text">Contact No - 0774181544</p>
      <!-- <a href="#" class="btn btn-primary stretched-link">See Profile</a> -->
    </div>
  </div>
  </div>
  </div>
</div>


<div class="jumbotron text-center">
<h1 class="animate1">My Few of Projects</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>


  
<div class="container">
  <div class="row">
  
    <div class="col-sm-4">
    
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>

<style>

</style>

<script>
anime({
targets :'.animate1',
translateX: 0,
rotateZ:360,
duration : 3000,
loop: true
});

anime({
targets :'.card2',
translateX: 370,
  direction: 'alternate',
  loop: true,
  duration : 3000,
  delay: function(el, i, l) {
    return i * 100;
  },
  endDelay: function(el, i, l) {
    return (l - i) * 100;
  }
});

</script>
