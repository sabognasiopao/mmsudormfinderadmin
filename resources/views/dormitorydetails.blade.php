<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">
        <title>MMSU - Dorm Management | Dormitory</title>

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
        <div class="titleheader">DORM NAME - Details</div>
    </div>

    <div class="verticalnav">
        <ul>
        <li class="username">Admin Name</li>
            <li><a href="admindashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a href="adminregistration"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Registrants</a></li>
            <li><a class="active" href="admindormmain"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>
            
<div class="dorm_details_con">
    
<form>
    <label for="fname">Manager</label>
        <input type="text" id="fname" name="fname" style="width: 65%;" class="readapp" value="Sample Name" readonly="readonly"><br><br>
    <label for="fname">Address</label>
        <input type="text" id="fname" name="fname" style="width: 65%;" class="readapp" value="Sample Location" readonly="readonly"><br><br>
    <label for="fname">Contact</label>
        <input type="text" id="fname" name="fname" style="width: 65%;" class="readapp" value="Sample Contact" readonly="readonly"><br><br>
    <label for="fname">Amenities</label>
        <input type="text" id="fname" name="fname" style="width: 65%;" class="readapp" value="Sample Amenities" readonly="readonly"><br><br><br>
    
    <label for="room">Type of Room</label>
        <select name="room" id="room" style="width: 200px;"class="readapp" readonly="readonly">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select>
    <label for="fname" style="margin-left:15px;">Room Fee</label>
        <input type="text" id="fname" name="fname" style="width: 20%; margin-left:-10%;" class="readapp" value="1200" readonly="readonly"><br><br><br>
   
    <label for="quantity">Available space</label>
        <input type="number" id="quantity" name="quantity" class="readapp" min="0" value="10" readonly="readonly"><br><br>    
</form>    


</div>

    <div class="btndorm_container">
    <button type="button" onclick="download()" class="btndownload">DOWNLOAD</button>
    <a href="occupantslist"><button type="button" class="btnviewocc">VIEW OCCUPANTS</button></a>
    </div>

        </body>
    </head>
</html>