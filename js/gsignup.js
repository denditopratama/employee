
      function onSignIn(googleUser) {

        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
            

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        
        if(profile){
          var kong = jQuery('#namyeng').val();
          
         $.post('js/login_gmail.php',{id_token:id_token, daftar : 1, kong : kong}, function(data){
                    
                    
          if(data==' y'){
            
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
              console.log(kong);
              window.location.href='./admin.php?page=usr&gmail=1';
            });
          
           } else {
             window.location.href=data;
           }
                 
                    
                 
              });
        }

      }
      
