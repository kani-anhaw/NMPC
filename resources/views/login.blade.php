<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>Login</title>
</head>
<body >
    <div class="header" >
       
    </div>

    <div class="container-logo">
    
        <img src="{{URL('img/nmpc-logo.png')}}" alt="logo1">
        <div class="tagline">
            <h1>MSU-IIT NATIONAL <br>
            MULTI-PURPOSE COOPERATIVE
            </h1>
            <span>Join us, Grow with us!</span>
            <p style="font-family: 'Source Sans 3', sans-serif; "> Welcome to m.msuiitcoop.org!</p>
        </div>


        <div class="container-input" >

       
            <form action="{{route('login-user')}}" method="post" >
    
    
                
               
                    <input type="text" name="username" id="username" placeholder="Enter username">
                    <input type="password" name="password" id="password" placeholder="Enter password">
    
                    <div class="options">
                        <span>Not a member?</span>
                        <span>Forgot Password?</span>
                    </div>
    

                  <div class="container-buttons">
                    <div class="primary-button" style="width: 30%; text-align: center;"  onclick="window.location.href='login'">
                        <span>LOG IN</span>
                    </div>
    
                  </div>
                   
    
                </div>
    
            </form>
    
        </div>
    

       
       

    
    </div>

   

    

       
    <div class="container-services">
        <hr class = "hline">
        <p style="font-family: 'Source Sans 3', sans-serif; font-size: clamp(0.90em, 2vw + 0.6rem, 2rem); margin: 5px 0 5px 0;">Services Offered:</p>

        <div class="container-img" >
            <img src="{{URL('img/icons/1.png')}}" class="image">
            <img src="{{URL('img/icons/2.png')}}" class="image">
            <img src="{{URL('img/icons/3.png')}}" class="image">
            <img src="{{URL('img/icons/Picture11.png')}}" class="image">

        </div>

        <div class="footer"></div>

       
      


    </div>

    
    
</body>
</html>