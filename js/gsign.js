
      function onSignIn(googleUser) {

        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
            

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
       
        if(profile){
         $.post('js/login_gmail.php',{id_token:id_token}, function(data){
    
                     if(data==' xx'){
                      location.reload();
                        gapi.load('auth2', function() {
                            gapi.auth2.init({
                  client_id: '49446115720-gacrc8lhqmdj9rpn3efdpdsa3kh74usu.apps.googleusercontent.com'
                }).then(function(){
                                var auth2 = gapi.auth2.getAuthInstance();
                                auth2.signOut().then(function(){
                                  auth2.disconnect();
                                    window.location = "./";
                                    
                                });
                                
                            });
                
                        });
                    
                     } else {
                       window.location.href=data;
                     }
                           
                    
                 
              });
        }

      }
      
