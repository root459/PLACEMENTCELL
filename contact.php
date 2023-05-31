<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Subject = $_POST['Subject'];
    $message = $_POST['message'];

   
        $query= "insert into Contact (name, email, Subject, message) values ('$name', '$email', '$Subject', '$message')";
        $result=mysqli_query($con, $query);
        if($result){
        echo "<script type='text/javascript'> alert('Successfully Send Message')</script>";
        }
        else {
  echo "<script type='text/javascript'> alert('Please enter some valid information')</script>";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poornima about</title>
    <link rel="icon" type="image/x-icon" href="https://www.bing.com/th?id=OIP.Zp73XqWB5IvLrmLueHSIdQAAAA&w=212&h=222&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Clicker+Script&family=Poppins:wght@200;300;400;500;600;700&display=swap");
:root {
  --bg-black-900: #f2f2fc;
  --bg-black-100: #fdf9ff;
  --bg-black-50: #e8dfec;
  --text-black-900: #302e4d;
  --text-black-700: #504e70;
}
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;

  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}


  *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    
}

html{
    scroll-behavior: smooth;
}
#logo{
   width:150px;
     border:1px solid transparent;
    border-radius:50%; 
    float:left;
}
.headers{
   
    display:flex;
    
   box-sizing: border-box;
    border-bottom:1px solid rgba(128, 128, 128, 0.267);
    height:fit-content;

}
.navi{
    clear:left;
}
.set{
    position:relative;
    top:51px;
    left:26px;
    font-family: "Open Sans", sans-serif;
    color:rgb(236, 8, 8);
}
ul{
    list-style-type: none;
    overflow:hidden;
    background-color:rgb(219, 223, 197);
    display:inline;
    
}
li{
    display:inline-block;
    height:8px;
    font-size:large;
    


}
.navi li{
    float:right;
    padding:8px;
    height:8px;
    z-index: 999;

}
.set{
    position:relative;
    top:51px;
    left:26px;
    font-family: "Open Sans", sans-serif;
    color:rgb(236, 8, 8);
}
ul{
    list-style-type: none;
    overflow:hidden;
    background-color:rgb(219, 223, 197);
    display:inline;
    
}
li{
    display:inline-block;
    height:8px;
    font-size:large;
    


}
.navi li{
    float:right;
    padding:8px;
    height:8px;
  
}
.abou{
    height:80px;
    font-size:30px;
    background-color:#5c768d;
margin-top:36px;
padding:20px;
text-align: justify;
}
#chairphoto{
    height:550px;
    width:100%;
}

.chairmen{
    display:flex;
    height:700px;
}
.set{
margin-left:12px;
}
.setp{
text-align: justify;
width:70%;
margin-left: 35px;
margin-top:48px;
height:650px;
line-height: 2;
font-family: Verdana, sans-serif;
    font-weight: 400;
    font-size: 16px;
    color: #080808;
    overflow-x: hidden;
}
#aboutd{
    margin-left:82px;
}
.foot{
    display:flex;
    height:250px;
    background-color: #5c768d;
    color:aliceblue;
   margin-top: 15px;
   
}
.tab{
    margin-left: 35px;
    margin-top:30px;
}
.foot1{
    padding-top:20px;
    width:33%;
    
    padding-left:15px;
}
.foot2{
    padding-top:20px;
    width:33%;
    
    padding-left:15px;

}
.foot3{
    padding-top:20px;
width:33%;

padding-left:15px;
}

.uls{
    list-style-type: disc;;
}
.uls li{
    
    display:block;
    line-height: 1.5;
    list-style-type: disc;
   
}
.foots{
    background-color: #657e93;
    color:whitesmoke;
    text-align:center;
  
}
.cont{
    display:flex;
    padding-top:1em;

}
.left{
    background-color: red ;
    width: 100%;
    height: 100em;
}
.right{
    background-color: green;
    height: 100em;
    width: 100%;
}
/* Contact */
.contact-title {
  color: var(--skin-color);
  text-align: center;
  font-size: 25px;
  margin-bottom: 20px;
}
.contact-sub-title {
  color: var(--text-black-900);
  text-align: center;
  font-size: 15px;
  margin-bottom: 60px;
}
.contact .contact-info-item {
  flex: 0 0 25%;
  max-width: 25%;
  text-align: center;
  margin-bottom: 60px;
}
.contact .contact-info-item .icon {
  display: inline-block;
}
.contact .contact-info-item .icon .fa {
  font-size: 25px;
  color: var(--skin-color);
}
.contact .contact-info-item h4 {
  font-size: 18px;
  font-weight: 700;
  color: var(--text-black-900);
  text-transform: capitalize;
  margin-top: 15px 0 5px;
}
.contact .contact-info-item p {
  font-size: 16px;
  line-height: 25px;
  color: var(--text-black-700);
  font-weight: 400;
}
.contact .contact-form {
  flex: 0 0 100%;
  max-width: 100%;
}
.contact .contact-form .col-6 {
  flex: 0 0 50%;
  max-width: 50%;
}
.contact .contact-form .col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}
.contact .contact-form .form-item {
  margin-bottom: 30px;
}
.contact .contact-form .form-item .form-control {
  width: 100%;
  height: 50px;
  border-radius: 25px;
  background: var(--bg-black-100);
  border: 1px solid var(--bg-black-50);
  padding: 10px 25px;
  font-size: 15px;
  color: var(--text-black-700);
  transition: all 0.3s ease;
}
.contact .contact-form .form-item .form-control:focus {
  box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
}
.contact .contact-form .form-item textarea.form-control {
  height: 140px;
}
.contact .contact-form .btn {
  height: 50px;
  padding: 0 50px;
}
.cont{
    display:flex;
}
a {
    text-decoration: none;
  }
.row {
  
  display:inline;
  flex-wrap: wrap;
  margin-left: -15px;
  margin-right: -15px;
  position: relative;
}




    </style>
</head>

<body>
 <div">
    <div class="headers">
        <img id="logo" src="https://th.bing.com/th/id/OIP.YNovgzHK5jA-Op1rAy7EmQHaHa?pid=ImgDet&rs=1" alt="poornima logo"><span class="set">
   
        <h1>POORNIMA GROUP</h1>
        <h2>Poornima institute of engineering and technology</h2>
        </span>
        </div>
        <div class="navi">
        <ul>
            <li style="float:left; font-weight:bold;">PLACEMENT CELL</li>
            <li style="font-family: Georgia, serif"><a href="home.php">Home</a></li>
            <li style="font-family: Georgia, serif; text-decoration-line: none">
              <a href="about.php">About</a>
            </li>
            
            <li style="font-family: Georgia, serif"><a href="trainingcrt.php">Training CRT</a></li>
            <li style="font-family: Georgia, serif"><a href="gallery.php">Gallery</a></li>
            <li style="font-family: Georgia, serif"><a href="contact.php">Contact</a></li>
            <li style="color: rgb(18, 31, 220); font-family: Georgia, serif">
              <a href="login.php">Login</a></li>
        </ul>
       </div>
        </div>

        <h3 class="abou" >Contact us</h3>
        <section class="contact section" id="contact">
            <div class="container">
              <div class="row">
                
              </div>
              <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "placstu";

    // Create a new database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve the submitted form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Prepare and execute the SQL query to insert the form data into the database
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();

        // Check if the data is inserted successfully
        if ($stmt->affected_rows > 0) {
            echo "<p>Thank you for your message. We will get back to you soon.</p>";
        } else {
            echo "<p>Error: Unable to submit the form. Please try again later.</p>";
        }

        // Close the prepared statement
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
    ?>
              <!-- contact form start -->
              <form method="POST">
              <div class="cont">
              <div class="row">
                <div class="contact-form padd-15">
                  <div class="row">
                    <div class="form-item col-6 padd-15">
                      <div class="form-group">
                        <input style="width:30em;"
                          type="text"
                          class="form-control"
                          id="name" name="name"
                          placeholder="Name" />
                      </div>
                    </div>
                    <div class="form-item col-6 padd-15">
                      <div class="form-group">
                        <input  style="width:30em;"
                          type="email"
                          class="form-control"
                          id="name" name="email"
                          placeholder="Email" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-item col-12 padd-15">
                      <div class="form-group">
                        <input  style="width:30em;"
                          type="text"
                          class="form-control"
                          id="name" name="Subject"
                          placeholder="Subject" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-item col-12 padd-15">
                      <div class="form-group">
                        <textarea  style="width:30em;"
                          name=""
                          class="form-control"
                          id=""  name="message"
                          placeholder ="Messages"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-item col-12 padd-15">
                      <button type="submit" class="btn" style="border-radius:20px;
                      border-color:red; background-color: red;"><strong>Message</strong></button>
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            </form>
          </section>
        
          <!-- contact section end -->
       


          <div class="foot">
            <div class="foot1">
            <h4 style="padding-bottom:5px;font-size:large;font-family: Georgia, serif;">Placement Cell</h4>
            <p style=" font-family: Verdana, sans-serif;">Isi-2, Riico Institutional Area, Goner Road, 
                Sitapura, Jaipur, 302022
                Rajasthan India<br>
                
                Phone:0141- 2771259, 68<br>
                Email: pietjaipur@rtu.ac.in</p>
            </div>
            <div class="foot2">
                <p style="padding-bottom:5px;font-size:large; font-family: Georgia, serif;"><strong> Useful links</strong> </p>
                <ul class="uls">
                    
                  <li style="font-family: Georgia, serif"><a style="font-family: Georgia, serif;color:whitesmoke;" href="home.php"> Home</a></li>
                  <br />
                  <li style="font-family: Georgia, serif"><a style="font-family: Georgia, serif;color:whitesmoke;" href="about.php"> About</a></li>
                  <br />
                  <li style="font-family: Georgia, serif"><a style="font-family: Georgia, serif;color:whitesmoke;" href="https://placement.gujgov.edu.in/schedule" >Schedule</a></li>
                  <br />
                  <li style="font-family: Georgia, serif"><a style="font-family: Georgia, serif;color:whitesmoke;" href="https://placement.gujgov.edu.in/#">Industry Registration </a></li>
                  <br />
                  <li style="font-family: Georgia, serif;text-decoration-color:black;"><a style="font-family: Georgia, serif;color:whitesmoke;" href="gallery.php">Gallery</a></li>
                  <br />
                </ul>
            </div>
            <div class="foot3">
            <p style="padding-bottom:5px;font-size:large; font-family: Georgia, serif;"><strong> Important Links</strong> </p>
            <ul class="uls"><li style="font-family: Georgia, serif;"><a style="font-family: Georgia, serif;color:whitesmoke;" href="login.php"
              >Login</a></li><br>
              <li style="font-family: Georgia, serif"><a  style="font-family: Georgia, serif;color:whitesmoke;" href="contact.php" >Contact Us</a></li></ul>
            </div>
            
            
                </div>
                <footer class="foots">
                    <p style="padding-top:9px; font-family: Verdana, sans-serif;">© Copyright 2022. All Rights Reserved | Education Department,Poornima Group.</p><br>
                    
                </footer>
            </body>
            </html>

    
</body>
</html>