<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      
        <title>Welcome</title>

        
    </head>
    <body >

        

                <div class="header">
                    
                </div>

                        <div class="container-logo" style="padding-top: 10%"">
                        
                            <img src="{{URL('img/nmpc-logo.png')}}" alt="logo1">
                            <div class="tagline">
                                <h1>MSU-IIT NATIONAL <br>
                                MULTI-PURPOSE COOPERATIVE
                                </h1>
                                <span>Join us, Grow with us!</span>
                                <p style="font-family: 'Source Sans 3', sans-serif; "> Welcome to m.msuiitcoop.org!</p>
                            </div>

                            <div class="container-buttons" >
                                <div class="primary-button" onclick="window.location.href='login'">
                                    <span>LOG IN</span>
                                </div>
                            
                                <div class="secondary-button" onclick="window.location.href='register'">
                                    <span>REGISTER</span>
                                </div>
                        
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
