<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="attachments/icon.jpg" />
    <title> Project STEM </title>
	<link rel="stylesheet" type="" href="loginstyle.css">
   </head>
   <body>
       <p font color='white'>This page collects information about your lab.  Be sure to gather the information first from your lab mentor or your daily supervisor and others in your lab.</p>
        <div class="container">
          <div class="login">
            <h1>Mentor Details</h1><br/>
            <form method="post" action="home.html" onsubmit="return validateForm()">
                      <p><select><option value="Mr.">Mr.</option><option value="Ms.">Ms.</option><option value="Dr.">Dr.</option></select><br/<input type="text" name="mefname" value="" placeholder="Mentor First Name" required></p>
                      <p><input type="text" name="melname" value="" placeholder="Mentor Last Name" required></p>
                      <p><input type="text" name="dname" value="" placeholder="Department Name" required></p>
                      <p><input type="text" name="insname" value="" placeholder="Name of the Institution" required></p>
                      <p><input type="text" name="bname" value="" placeholder="Name of the Building" required></p>
                      <p><input type="tel" name="roomnum" value="" placeholder="Room Number" required></p>
                      <p>Enter Mentor lab phone number<input type="tel" title="Enter Mentor lab phone number without any special characters" pattern="[0-9]{10}" name="mlnum" value="" placeholder="Mentor Lab Phone Number" required></p>
                      <p>Enter Mentor office phone number<input type="tel" title="Enter Mentor office phone number without any special characters" pattern="[0-9]{10}" name="monum" value="" placeholder="Mentor office phone Number" required></p>
                      <p class="submit"><input type="submit" name="commit" value="Click to save Details"></p>
                      <p class="submit"><input type="reset"  value="Reset the fields"></p>
            </form>
          </div>  
        </div>
   </body>
   <script>
      function validateForm(){
          var x = document.forms["signuppw"]["mefname"].value;
          var y = document.forms["signuppw"]["melname"].value;
          var z = document.forms["signuppw"]["dname"].value;
          var p = document.forms["signuppw"]["insname"].value;
          var q = document.forms["signuppw"]["bname"].value;
          var r = document.forms["signuppw"]["roomnum"].value;
          var s = document.forms["signuppw"]["mlnum"].value;
          var t = document.forms["signuppw"]["monum"].value;
          if (x == "") || (y == "")|| (z == "") ||(q == "") ||(p == "") {
              alert("All the Names must be filled out");
              return false;
           }
           else if (t == "") || (s == ""){
              alert("Mobile number fields must be filled out");
              return false;
           }
           else if (r == "") {
              alert("Roo Number field ust be filled out");
              return false;
           }

       }   
  </script>
</html>