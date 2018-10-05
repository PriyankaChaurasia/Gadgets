<!DOCTYPE html>
<html>
<head>
  <title>home page</title>
<meta name="viewport" content="width=device-width initial-scale=1">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>

.side-nav{
  height:100%;
  width:0PX;
  position: fixed;
  left:0px;
  opacity:0.9;
  background-color: black;
}
.side-nav a{
 font-size:20px;
 margin:30px;
 display:block;
 text-decoration: none;
 color:white;
}
.side-nav a:hover{
 background-color:green;
}
.side-nav .btn-close{
  position:absolute;
  top:-30px;
  right: 22px;
  margin-left:50px;
  font-size:30px;
}
.main{
  width:100%;
  overflow-x:scroll;
}

  .card-title{
    margin: 20px;
  }
 #card-title{
   margin-left: 200px;
 }
 #card-body{
   background-color: black;
   opacity:0.8;
 }
 .text{
   margin-left: 400px;
   color:white;
 }
.text1{

  color:white;
  margin-left: 430px;
}
.contact{
  margin-left: 410px;
  color:white;
}

.guru{
  color:green;
}

  </style>


</head>

<body>


  <nav class="navbar navbar-inverse navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="http://www.stickpng.com/assets/images/5847f9cbcef1014c0b5e48c8.png"  height="40" width="40" style="margin:50" alt="">gadget
  </a>

   <!--div class="container bg-info"-->

   <span class="open-slide  mr-sm-4">
     <a href="#" onclick="openSideMenu()">
       <svg width="30" height="30">
         <path d="M0,5 30,5" stroke="white" stroke-width="4"/>
         <path d="M0,14 30,14" stroke="white" stroke-width="4"/>
         <path d="M0,23 30,23" stroke="white" stroke-width="4"/>
       </svg>
     </a>
   </span>


<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Welcome
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="guru">Welcome To Gadget Guru!!!</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle" style="color:green">Personal info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--section class="main-container"-->
   <div class="main-wrapper">
     <form class="Signup-form" action="registration_code.php" method="POST">
       <input type="text" name="first" placeholder="First Name"><br><br>
       <input type="text" name="last" placeholder="Last Name"><br><br>
       <input type="email" name="email" placeholder="Email"><br><br>
       <input type="text" name="uid" placeholder="Username"><br><br>
       <input type="password" name="pwd" placeholder="Password"><br><br>

       <button type="submit" name="submit" >Register</button>
     </form>
   </div>
 <!--/section-->
      </div>
</nav>
       <div id="side-menu" class="side-nav">
         <a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a>
         <a  href="home.php">Home</a>
         <a  href="mobile_computer.php">Mobile Computers</a>
         <a  href="micro_comp.php">Micro Computers</a>
         <a  href="pl.php">Programming languages</a>
       </div>

        <script>
            function openSideMenu()
            {
              document.getElementById('side-menu').style.width='250px';
              document.getElementById('main').style.marginLeft='250px';
            }
            function closeSideMenu()
            {
              document.getElementById('side-menu').style.width='0px';
              document.getElementById('main').style.marginLeft='0px';
            }
       </script>


        <!--adding carousel-->
<div id="main">
  <div class="row">
    <div class="col-sm-12">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

         <div class="carousel-inner">
 <div class="carousel-item active">
 <img class="d-block w-100" src="https://www.grrup.com/wp-content/uploads/2018/03/Successful-Tips-To-Buying-Electronic-Gadgets-Online-916x509.jpg"  height="500">
  </div>
<div class="carousel-item">
<img class="d-block w-100%" src="http://wallpaperistic.com/wp-content/uploads/2018/02/mobile-device-technology-wallpaper.jpg"  height="500" width="1500">
</div>

<div class="carousel-item">
 <img class="d-block w-100" src="http://infotech.my/betong/wp-content/uploads/2017/11/gadgets.jpg"  height="500">
</div>

<div class="carousel-item">
 <img class="d-block w-100" src="https://images.jacobinmag.com/wp-content/uploads/2018/04/11134906/20607701226_4eaa5e3458_k.jpg"  height="500">
 </div>

 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

        </div>
     </div>
    </div>
 </div>
</div>
</div>
<br><br><br>



<div class="card">
  <div class="card-body">
    <h2 id="card-title" >Get the latest updations on Gadget</h2>
    <p class="card-text">We provide you exciting updations in Gadgets,Softwares, Programming languages and upcoming Technologies in Industry.</p>
      </div>
<div class="container">
  <div class="row">

    <div class="col-sm">
      <img src="https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg" width="200" height="300" alt="mobile image">
    </div>

    <div class="col-sm">
      <img src="https://techpaltan.com/wp-content/uploads/2018/06/amazonecho.jpg" width="200" height="300" alt="echo">
    </div>

    <div class="col-sm">
      <img src="https://img.purch.com/rc/300x200/aHR0cHM6Ly93d3cuYnVzaW5lc3NuZXdzZGFpbHkuY29tL2ltYWdlcy9pLzAwMC8wMDUvMjQwL29yaWdpbmFsL3RhYmxldC5qcGc=" width="400" height="300" alt="laptop">
    </div>

  </div>
</div>
</div>
<br><br>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://www.v3.co.uk/w-images/44e30995-4612-4d9e-84d3-ad1e51322a88/0/javalogo-580x358.png" width="200" height="200" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">JDK</h5>
      <p class="card-text">The Java Development Kit (JDK) is a software development environment used for developing Java applications and applets.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="http://www.michaeljacobsen.ninja/cms-images/large/atom-text-editor-LFZjk5qiy5.jpg"  height="150" alt="Card image cap">
    <div class="card-body"><br><br>
      <h5 class="card-title">Atom</h5>
      <p class="card-text">Atom is a free and open-source text and source code editor developed by Github.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://png.icons8.com/windows/1600/git.png"  height="180" alt="Card image cap">
    <div class="card-body"><br>
      <h5 class="card-title">Git</h5>
      <p class="card-text">Git is a version control system for tracking changes in computer files and coordinating work on those files among multiple people.</p>
    </div>
  </div>
</div>
<br><br><br>

<div class="card">
  <img src="https://www.rasmussen.edu/~/media/images/blogs/school-of-technology/whichprogramminglanguage_banner.ashx?la=en" width="100%" height="400" alt="programming languages">
</div><br>

<div id="card-body">
    <h4 class="text">Stay connected</h4><br>
<a class="text1" href="home.php"><small>Home</small></a><br>
<a class="text1" href="mobile_compter.php"><small>mobile_compter</small></a><br>
<a class="text1" href="micro_comp.php"><small>micro_computer</small></a><br>
<a class="text1" href="pl.php"><small>Programming languages</small></a>


<br><br>
<div class="contact mr-sm-12">Contact:<small>abcd123@gmail.com</small></div>
  <div class="contact"><small>Gadget</small><br></div>
  <div class="contact"><small>developed by P.C</small></div>
</div>





</body>
</html>
