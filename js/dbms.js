
function login(){
        $('.login').css('display','block');
        $('.register').css('display','none');
    }
function register(){
        $('.login').css('display','none');
        $('.register').css('display','block');
    }
function loginbutton(){
        var loginEmail= $('#login_email').val();
        var loginPass= $('#login_pass').val();
     //    alert(loginEmail+loginPass);
         $.ajax({
         url:"common/login_post.php",
         type:"POST",
         data:{
             loginPass:loginPass,
             loginEmail:loginEmail,
             type:"user_login"
         },
         success:function(data){
             // alert(data);
             if(data==1){
             $("#navi").load(" #navi > *");
             $('input').val('');
             window.location = 'common/my_profile.php';
         }
         }

     });
     }


