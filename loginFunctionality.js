$(document).ready(function(){
  //  $("#add_err").css('display', 'none', 'important');
  jQuery.noConflict();
     $("#login").click(function(){  
          var username=$("#login-username").val();
          var password=$("#login-password").val();

             if(!username || !password)
             {
                document.getElementById('login-alert').style.display = 'none';
             }

          $.ajax({
           type: "POST",
           url: "userMGMT/login.php",
           dataType: 'html',
           data: "name="+username+"&pwd="+password,
           success: function(html){    
            console.log(html) 
            if(html.trim()=='1')    
            {                
                var hash = document.location.hash;
                if (hash == "#newgame")
                {                   
                    window.location="newgame.php";                    
                }
                if(hash == "#login")
                {
                     window.location="userpage.php"
                }            
            }

            else   
            {
              if(!username || !password)
             {
                document.getElementById('login-alert').style.display = 'none';
             }       
             else
             {
                document.getElementById('login-alert').style.display = "block";
                document.getElementById('login-alert').innerHTML = "Invalid Username or Password";
             }
            }
           },
           beforeSend:function()
           {
            //$("#add_err").css('display', 'inline', 'important');
            //$("#add_err").html("Loading...")
           }
          });
        return false;
    });
});

function trim(str){
var str=str.replace(/^\s+|\s+$/,'');
return str;
}

//----------------------------------------------------
//Check Username Function
$(document).ready(function(){
            $("#username").keyup(function(e){
                 $("#error").html(""); 
            var username=$("#username").val();
 
              $.ajax({
                    type:"post",
                    url:"userMGMT/AvailableUsername.php",
                    data:"name="+username,
                    dataType: 'html',
                        success:function(html){
                        if(html==1)
                        {
                          if(username && username.length >= 5)
                          {
                            document.getElementById('error').style.display = 'block';
                            $("#error").html("<img src='img/available.png' /> Username Available");
                          }
                          else
                          {
                            document.getElementById('error').style.display = 'none';
                          }

                        }
                        else{
                            if(username)
                            {
                                document.getElementById('error').style.display = 'block';
                            $("#error").html("<img src='img/not-available.png' /> Username already taken");

                            }
                           else
                           {
                            document.getElementById('error').style.display = 'none';

                           }
                        }
                    }
                 });
            });
 
         });
