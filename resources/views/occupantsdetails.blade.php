<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Occupants</title>

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
        <div class="titleheader">DORM NAME - Occupant's Details</div>
    </div>

    <div class="verticalnav">
        <ul>
        <li class="username">Admin Name</li>
            <li><a href="admindashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="adminregistration"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Registrants</a></li>
            <li><a class="active" href="occupantslist"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a href="admindormmain"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><button type="button"><a href="welcome" style="padding-left: 0%;color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></button></li>
        </ul>    
    </div>
    
    <div class="dorm_details_con">

    <form>
    <label style="width:20%;" for="fstudentid">Student Number</label>  
        <label style="width:20%;" for="sex" >Sex</label>
        <label style="width:20%;" for="email">Email</label>
        <label style="width:20%;" for="number">Mobile Number</label><br>
        
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;" id="fstudentid" value="18-020008" class="inputapp" readonly >
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;" id="sec" value="Female" class="inputapp" readonly>
        <input type="email" style="width:20%;margin-right:2%;margin-left:0%;" id="email" value="pjnfrancisco@gmail.com"  class="inputapp" readonly>
        <input type="tel" style="width:20%;margin-left:0%;" id="number" value="09355350600" class="inputapp" readonly><br><br>

        <label style="width:20%;" for="fname">First Name</label>
        <label style="width:20%;" for="mname">Midle Name</label>
        <label style="width:20%;" for="lname">Last Name</label>
        <label style="width:20%;" for="sname">Suffix (Jr,,III)</label><br>

        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="fname" value="Paola Joy" class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="mname" value="Nuque"  class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="lname" value="Francisco"  class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;margin-left:0%;" id="sname" value="Jr."  class="inputapp" readonly><br><br>

        <label style="width:20%;" for="birthday">Barangay</label>
        <label style="width:20%;" for="birthday">Street</label>
        <label style="width:20%;" for="birthday">City</label>
        <label style="width:20%;" for="birthday">Province</label>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;" id="birthday" value="6"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="birthday" value="T. Alonzo Street"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="birthday" value="Laoag City"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-left:0%;"id="birthday" value="Ilocos Norte" class="inputapp" readonly><br><br>


        <label style="width:20%;" for="nameg">Name of Guardian</label>
        <label style="width:20%;" for="number">Contact of Guardian</label>
        <label style="width:20%;" for="college">College:</label>
        <label style="width:20%;" for="course">Course:</label><br>

        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="nameg" value="Philbert Francisco"  class="inputapp" readonly>
        <input type="tel" style="width:20%;margin-right:2%;margin-left:0%;"id="number" value="09355350600"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="college" value="CAS"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;margin-left:0%;"id="course" value="BSCS"  class="inputapp" readonly><br><br>

        <button type="button" onclick="remove()" style="margin: 5% 7% 0% 1%;float:right;"class="btndelete">DELETE</button>
        <button type="button" onclick="download()"  style="margin-left:0%;margin-top:5%;float:right;"class="btndownload">DOWNLOAD</button>
    </form>
    </div>

        </body>
    </head>
</html>