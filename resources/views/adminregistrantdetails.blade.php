<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Registrants</title>

        <!-- CSS -->
          <link rel="stylesheet" type="text/css" href="/ADMINstyle.css">
        <!-- JS -->
          <script type="text/javascript" src="dormfinderadmin.js"></script>
    </head>
    
    <body class="antialiased">
        
    <div class="uppernav"><h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3><h3> - Admin Dorm Management</h3></div>
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:12px;" src="/images/mmsu logo.png"  height="3%" width="3%">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
        <div class="titleheader">REGISTRANT - Registrant Name</div>
    </div>
          
    <div class="verticalnav">
        <ul>
            <li class="username">Admin Name</li>
            <li><a href="admindashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a class="active" href="adminregistration"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Registrants</a></li>
            <li><a href="occupantslist"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a href="admindormmain"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>

    <div class="dorm_details_con">
    
    <form>
    <label for="fname">First Name</label>
    <label for="fname">Middle Name</label>
    <label for="fname">Last Name</label><br>
    <input type="text" id="fname" name="fname" style="width: 25%;" class="inputapp" value="Sample Name">
    <input type="text" id="fname" name="fname" style="width: 25%;" class="inputapp" value="Sample Name">
    <input type="text" id="fname" name="fname" style="width: 25%;" class="inputapp" value="Sample Name"><br><br>

    <label for="dname">Dorm Name</label>
    <label for="contact">Contact</label><br>
   
    <input type="tel" id="fname" name="dname" style="width: 25%;" class="inputapp" value="Sample Dorm Name">
    <input type="text" id="fname" name="contact" style="width: 25%;" class="inputapp" value="Sample Contact"><br>
   
    <button type="button" onclick="remove()" style="margin: 5% 7% 0% 1%;float:right;"class="btndelete">DENY</button>
    <button type="button" onclick="download()"  style="margin-left:0%;margin-top:5%;float:right;"class="btndownload">ACCEPT</button>
    </div>

    </form>    
    
   
</body>
</html>