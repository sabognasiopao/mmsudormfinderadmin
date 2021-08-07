<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">
        <title>MMSU - Dorm Management</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="ADMINstyle.css">
        
        <!-- JS -->
        <script type="text/javascript" src="dormfindercoed.js"></script>    
    </head>
    
    <body   style="background-image: url('/images/bg.png');  background-repeat: no-repeat;background-size:100% 100%;" class="antialiased">
        
    <div class="uppernav"><h3>MMSU - Admin Dorm Management</h3></div>
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:12px;" src="/images/mmsu logo.png"  height="3%" width="3%">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
    </div>
    <img style="right:23%;" class="__img" src="images/mmsu logo.png" />
                
    <div class="logincontainer">
        <form>
            <legend>Log In:</legend>
                <input type="text" id="name" placeholder="Staff ID" class="loginform" style="margin-top:30px;width:100%;"> <br>
                <input type="password" id="password" placeholder="Password" class="loginform" style="margin-top:10px;width:100%;"> <br>

                <a href="admindashboard"><button type="button" class="yellowbutton" style="width:101%;margin-top:15px; margin-bottom:50px;">Log In</button></a> 
        </form>
    </div>
            
    </body>
</html>
