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
        
    <div class="uppernav"><h3>MMSU - Admin Dorm Management</h3></div>
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
            <li><a href="occupantslist"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/user-rights.png"/> Occupants</a></li>
            <li><a class="active" href="admindormmain"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>
            
<div class="dormdeets">
    
    <form style="width:70%;margin-left:25%;">
       
    <div class="smallheader">FULL NAME</div>
        <label for="fname">First Name</label>
        <label for="fname">Middle Name</label>
        <label for="fname">Last Name</label><br>
            <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Sample Name">
            <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Sample Name">
            <input type="text" id="fname" name="fname" style="width: 20%;" class="inputapp" value="Sample Name"><br><br>
    
    <div class="smallheader">ADDRESS</div>
        <label for="brgy">Barangay</label>
        <label for="st">Street</label>
        <label for="nl">Nearest Landmark</label><br>
            <input type="text" id="brgy" name="fname" style="width: 20%;" class="inputapp" value="6 Quiling Sur">
            <input type="text" id="st" name="fname" style="width: 20%;" class="inputapp" value="Jakamo Street">
            <input type="text" id="nl" name="fname" style="width: 20%;" class="inputapp" value="Teatro Ilocandia"><br><br>

    <div class="smallheader">OTHER INFORMATION</div>
        <label for="dname">Dorm Name</label>
        <label for="contact">Contact</label>
        <label for="quantity">Available space</label><br>
            <input type="tel" id="fname" name="dname" style="width: 20%;" class="inputapp" value="Sample Dorm Name">
            <input type="text" id="fname" name="contact" style="width: 20%;" class="inputapp" value="Sample Contact">
            <input type="number" id="quantity" name="quantity"  style="width: 20%;" class="inputapp" min="0" value="10"><br><br>
    
    <label for="fname">Short Description</label><br>
    <textarea readonly></textarea><br><br>

    </form>

    <div style="display:flex;margin-left:25%;">
            <div>
                <table class="viewdormtable" id="room">
                    <tr>
                        <th>Ammenities</th>
                    </tr> 
                    <tr>
                        <td class="readapp">Single</td>
                    </tr>
                </table>
            </div>

            <div style="margin-left:5%;">
                <table class="viewdormtable" id="room">
                    <tr>
                        <th>Room Type</th>
                        <th>Vacancy</th>
                        <th>Price</th>
                    </tr> 
                    <tr>
                        <td class="readapp">Single</td>
                        <td class="readapp">5</td>
                        <td class="readapp">1500</td>
                    </tr>
                    
                </table>
            </div>
        
</div>
            

    <div class="btndorm_container">
    <button type="button" onclick="download()" class="btndownload">DOWNLOAD</button>
    <a href="dormoccupantslist"><button type="button" style="width:15%" class="btnviewocc">VIEW OCCUPANTS</button></a>
    </div>

</div>

   
</body>
</html>