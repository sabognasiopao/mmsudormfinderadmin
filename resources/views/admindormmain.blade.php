<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Dormitories</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/ADMINstyle.css">
        
        <!-- JS -->
        <script type="text/javascript" src="dormfindercoed.js"></script>
    </head>
    
    <body class="antialiased">
    
    <div class="uppernav"><h3>MMSU - Admin Dorm Management</h3></div>
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:12px;" src="/images/mmsu logo.png"  height="3%" width="3%">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
        <div class="titleheader">DORMITORIES</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Admin Name</li>
            <li><a href="admindashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="adminregistration"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Registrants</a></li>
            <li><a href="occupantslist"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a  class="active" href="admindormmain"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><button type="button"><a href="welcome" style="padding-left: 0%;color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></button></li>
        </ul>    
    </div>

    <div class="dorm_con">
    <input type="radio" name="item" checked="checked" id="section1" />
    <input type="radio" name="item" id="section2" />

    <nav class="nav">
      <label class="nav-item" for="section1">ON</label>
      <label class="nav-item" for="section2">OFF</label>

    </nav>

    
    <section>
        <h2 class="h2nav"><p class="text--sub">admin management</p>On Campus <p class="text--normal">Pikachu is an Electric-type Pokémon introduced in Generation I. Pikachu are small, chubby, and incredibly 
          cute mouse-like Pokémon. They are almost completely covered by yellow fur.</p><p class="text--sub">CLICK BUTTONS ON THE <br>RIGHT SIDE TO CHOOSE</p><p class="text__background">ADMIN</p>
          <a href="oncampusdormslist"><button type="button" class="dorm">V I E W</button></a>
        </h2>
        <img class="__img" src="images/on.png" />
    </section>
   
    <section>
        <h2 class="h2nav"><p class="text--sub">admin management</p>Off Campus<p class="text--normal">Pikachu is an Electric-type Pokémon introduced in Generation I. Pikachu are small, chubby, and incredibly 
          cute mouse-like Pokémon. They are almost completely covered by yellow fur.</p><p class="text--sub">CLICK BUTTONS ON THE <br>RIGHT SIDE TO CHOOSE</p><p class="text__background">ADMIN</p>
          <a href="offcampusdormslist"><button type="button" class="dorm">V I E W</button></a>
        </h2>
        <img class="__img" src="images/off.png" />
        </section>
    </div>

    </body>
</html>