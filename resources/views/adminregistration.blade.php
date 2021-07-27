<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/images/mmsu logo.png">

        <title>MMSU - Dorm Management | Registrants</title>

        <!-- CSS -->
          <link rel="stylesheet" type="text/css" href="/ADMINstyle.css">
        <!-- JS -->
          <script type="text/javascript" src="dormfinderadmin.js"></script>
    </head>
    
    <body class="antialiased">
        
    <div class="uppernav">
        <h3 style="color:#0C4B05;margin-left:20px;">MMSU </h3> <h3> - Admin</h3>
    </div>
    
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:10px;" src="/images/mmsu logo.png"  height="60" width="60">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
        <div class="titleheader">REGISTRANTS</div>
    </div>
                
    <div class="verticalnav">
        <ul>
            <li class="username">Admin Name</li>
            <li><a href="admindashboard"> <img src="https://img.icons8.com/fluent-systems-regular/96/000000/home.png"/> Home</a></li>
            <li><a class="active" href="adminregistration"> <img src="https://img.icons8.com/fluent-systems-regular/50/000000/parse-resume.png"/> Registrants</a></li>
            <li><a href="admindormmain"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/department.png"/> Dorm</a></li>
            <li><a href="#contact"><img src="https://img.icons8.com/fluent-systems-regular/96/000000/info-squared.png"/> Contact</a></li><br><br>
            <li><a href="welcome" style="color:red;"><img src="https://img.icons8.com/ios-filled/50/000000/exit.png"/>Log Out</a></li>
        </ul>    
    </div>

    <div class="listappcontainer">
    <div class="tableFixHeadtitle">LIST OF REGISTRANTS</div>  
    <div class="tableFixHead">
      <table>
        <thead>
          <tr>
            <th>NAME</th>
            <th>DORM NAME</th>
            <th>CONTACT NUMBER</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr> 
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr> 
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr> 
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr> 
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
          <tr>
            <td><a href="#">Paola Francisco</a></td>
            <td>Sample Dorm Name</td>
            <td>09355350600</td>
            <td><input type="checkbox" class="check"></td>
          </tr>
        </tbody>
      </table>
    </div>

    <button type="button" onclick="denyregister()" class="greenbutton" style="margin-top:30px;margin-right:70px;">DENY</button>  
    <button type="button" onclick="acceptregister()" class="secondyellowbutton" style="margin-right:10px;margin-top:30px;">ACCEPT</button>
</div>

</body>
</html>