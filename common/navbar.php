<style>
    #navi {
        /* background:linear-gradient(135deg,#71b7e6,#9b59b6); */
        background-color:#3c4b64;
    }
    .float-div{
        margin-left:500px;
    }
</style>

<nav class="navbar navbar-expand-lg " id="navi">
  <div class="container-fluid " id="navBar">
    <h5 class="navbar-brand text-white" >E-Learning</h5>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end"   id="navbarSupportedContent">
      <ul class="navbar-nav mb-3 mb-lg-0 ">
         <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/DBMS">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#" >About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page"  onclick="login()">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page"  onclick="register()">Registration</a>
        </li>
        <?php
          if(isset($_SESSION['loggedin']) &&  $_SESSION['loggedin']==true){
        ?>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="common/my_profile.php">My Profile</a>
        </li>
        <?php }?>
      </ul> 
    
    </div>
  </div>
</nav>



