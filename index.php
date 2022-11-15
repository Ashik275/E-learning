<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/register.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/fontawesome/css/all.css">
    <style>
    .whatsapp-float{
        position: fixed;
        bottom: 40px;
        margin-left:10px;
        right:20px; 
        z-index:1000;
    }
    </style>
</head>
<body>
  
<?php include 'common/navbar.php'; ?>
 <header>
   <div class="row">
    <div class="col-sm-8">
        
        <div class="register">
        <?php include 'common/register.php'; ?>
        </div>
        <div class="login">
        <?php include 'common/login.php'; ?>
        </div> 
    </div>
   
    <div class="col-sm-4 image">
      <img class="head-image" src="image/b.png" alt="">
    </div>
    
</header>

</div>
    
     <div class="mb-2">
     <?php include 'our-courses.php'; ?> 
     </div>

      <?php include 'common/footer.php'; ?>

    <script src="boot-js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/dbms.js"></script>
</body>
</html>