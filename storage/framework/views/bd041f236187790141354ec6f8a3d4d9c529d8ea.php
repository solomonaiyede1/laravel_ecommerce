<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Breetek Integrated Solutions</title>
<style>

body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #172035;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media  screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
hr{
    border: 0.1px solid white;
    border-width: thin;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Breetek Integrated Solutions</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <?php if(Auth::user()->role=='admin'): ?>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	<ul class="navbar-nav ml-auto">
       <form class="form-inline" method="post" action="/product-admin-search">
           <?php echo csrf_field(); ?>
         <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search" required>
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
    </ul>
	
  </div>
  <?php endif; ?>
</nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <p class="bg-primary"><a href="#"style="color: white"><i class="fa fa-shopping-cart" style="font-size:20px; color: white"></i>&nbspBreetek Integrated Solutions Dashboard</a></p>
      <a href="<?php echo e(url('/')); ?>"><i class="fas fa-home" style="color: white"></i>&nbsp&nbsp&nbspHome</a>
      <a class="active" href="<?php echo e(url('/dashboard')); ?>"><i class="icon-dashboard" style="color: white"></i>&nbsp&nbsp&nbspDashboard</a>
      <?php if(Auth::user()->role=="admin"): ?>
      <a href="<?php echo e(url('/category')); ?>"><i class="fa fa-list-alt" aria-hidden="true" style="color: white"></i>&nbsp&nbsp&nbspCategory</a>
      <a href="<?php echo e(url('/product-admin')); ?>"><i class="fab fa-product-hunt" style="color: white"></i></i>&nbsp&nbsp&nbspProduct</a>
      <a href="<?php echo e(url('/users')); ?>"><i class="fab fa-first-order" style="color: white"></i>&nbsp&nbsp&nbsp Registered Users</a>
      <!-- <a href="#"><i style='font-size:24px; color: white' class='fas'>&#xf519;</i>&nbsp Accounts</a> -->
      <!--<a href="#"><i style='font-size:24px; color: white' class='fas'>&#xf086;</i>&nbsp Bulk SMS Services</a>-->
      <!-- <a href="#"><i style='font-size:24px; color: white' class='fas'>&#xf48b;</i>&nbsp Logistics</a> -->
      <?php endif; ?>
      <a href="<?php echo e(url('/orders')); ?>"><i style="font-size:24px; color: white" class="fa">&#xf080;</i>&nbsp Orders</a>
      <a href="https://api.whatsapp.com/send?phone=+2349063918851"><i style="font-size:24px" class="fa">&#xf232;</i></i>&nbsp&nbsp&nbspWhatsapp Chat</a>
      <form action="<?php echo e(url('/logout')); ?>" method="post">
      <?php echo csrf_field(); ?>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn" style="background-color:white">Logout</button>
      </form>
</div>

<div id="main">
  <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
<?php /**PATH C:\wamp64\www\backup_code\resources\views\sidebar.blade.php ENDPATH**/ ?>