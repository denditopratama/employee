
      function onSignIn(googleUser) {

        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
            

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
           
        if(profile){
         $.post('js/login_gmail.php',{id_token:id_token, daftar : 1}, function(data){
                    
                    
                           window.location.href=data;
                    
                 
              });
        }

      }
      
