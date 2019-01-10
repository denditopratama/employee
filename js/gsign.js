
      function onSignIn(googleUser) {

        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
            
        var sig = googleUser.isSignedIn.get();

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
       
        if(sig==false){
          if(profile){
            $.post('js/login_gmail.php',{id_token:id_token}, function(data){
                        
                              window.location.href=data;
                       
                    
                 });
           }
        }
        

      }
      
