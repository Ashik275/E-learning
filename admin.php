<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<body class="body">
    <div class="containers">
        <div class="myForm">
            <form action="">
                <h2>ADMIN LOGIN</h2>
                <input type="text" placeholder="Admin Name" id="admin_name">
                <input type="text" placeholder="Password" id="admin_pass">
                <button type="submit" onclick="admin_login()">LOGIN</button>
            </form>
        </div>
        <div class="image">
        <img  src="image/admin.png" alt="">
       </div>
    </div>
  
  
 

    <script src="boot-js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/dbms.js"></script>
    <script>
         function admin_login(){
            var adminName= $('#admin_pass').val();
            var adminPass= $('#admin_pass').val();
            $.ajax({
                url:"common/login_post.php",
                type:"POST",
                data:{
                    adminName:adminName,
                    adminPass:adminPass,
                    type:"admin_login"
                },
             success:function(data){
                // alert(data);
                 if(data==1){
                 window.location ='admin_panel.php';
                // alert('yes');
                }
             }
            })
         }

    </script>
</body>
</html>