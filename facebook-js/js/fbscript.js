 $(document).ready(function(){

 window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '151584375309760',
		      xfbml      : true,
		      version    : 'v2.8'
		    });
		    FB.getLoginStatus(function(response){
		    	if (response.status == 'connected') {
		    		/*document.getElementById('status').innerHTML = 'we are connected';*/
		    		

		    	}
		    	else if(response.status == 'not_authorized'){
		    		/*document.getElementById('status').innerHTML = 'we are not log in';*/
		    	}
		    	else{
		    		/*document.getElementById('status').innerHTML = 'you are not logged into facebook';*/
		    	}
		    });
		  // FB.AppEvents.logPageView();
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));


 });

 		  function login(){
		  	 FB.login(function(response){
		    	if (response.status == 'connected') {
		    	/*	document.getElementById('status').innerHTML = 'we are connected';
		    		document.getElementById('logout').style.display = 'block';
		    		document.getElementById('getinfo').style.display = 'block';
		    		document.getElementById('login').style.display = 'none';
		    	*/
		    	/*function getinfo(){*/
		  			FB.api('/me','GET',{fields : 'first_name,last_name,name,id'},function(response){
		  			/*document.getElementById('status').innerHTML = response.name;*/
		  			var name = response.name;
		  			var id = response.id;
		  			/*localStorage.setItem("Name",response.name);*/


 	/*
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {*/
                FB.logout(function(response) {
                  /*  $.post("/pucho/wall.php").done(function() {*/
                       /* $('#status').html('<p>Logged out.</p>');*/
                    /*    document.getElementById('logout').style.display = 'none';
                        document.getElementById('getinfo').style.display = 'none';
		    			document.getElementById('login').style.display = 'block';
                    */
                    $.ajax({
					        type: 'POST',
					        url: 'data.php',
					        data: { name: name, id: id },
					        success: function(data) {
									window.location.href = '35.154.33.11/pucho/wall.php';
									}

			    });
			                    /*window.location.href = '/pucho/wall.php';*/

                /*});*/
                /*window.open('/pucho/wall.php','_self');*/
                });/*
            }
        });*/
		  			
		  		
		  	/*});*/
		  });

		    }
		    	else if(response.status == 'not_authorized'){
		    		/*document.getElementById('status').innerHTML = 'we are not log in';*/
		    	}
		    	else{
		    		/*document.getElementById('status').innerHTML = 'you are not logged into facebook';*/
		    	}
		    },{scope : 'email'});
		  }

		 

