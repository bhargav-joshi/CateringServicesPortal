


<!DOCTYPE>
<html>
<head>
<body>
  <link rel="stylesheet" type="text/css" href="feedback.css"/>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<body onLoad="doOnLoad();">
<div id="header">
  <span class="style2">
    <a href="">
    <span class="style4">
      
    </span></a>
  </span>
  <div id="header">
     
  <ul>
    <li><a href="login.php">Admin</a></li>
      <li><a href="Gallary.html">Gallary</a></li>
    <li><a href="Menu.php">Menu</a></li>
      <li><a href="book.php">Book Now</a></li>
      <li><a href="index.html">Home</a></li>
     
    </ul>
  </div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  margin:0px;
  padding:0px;
  }

#header{
  background-image:url(images/11.jpg);
  background-repeat:no-repeat;
  border:0px solid;
  width:1347px;
  height:150px;
  margin-top:20px;
  margin-right:0px;
  margin-left:0px;
  }
#header ul{
  list-style-type:none;
  }
#header ul li a{

  border:0px solid;
  font-size:18px;
  float:right;
  background-color:#FFD700;
  width:120px;
  height:50px;
  text-align:center;
  margin:35px 10px 0px 10px;
  font-weight:bold;
  font-family:Sofia;
  line-height:50px;
  border-radius:0px;
  transition-property:all;
  transition-duration:0.0s;
  transition-timing-function:linear;
  } 
#header ul li a{
  text-decoration:none;
  color:#000099;
  }
#header ul li a:hover{
      background-color:White;
      color:#4b388a;
      
      }
#header ul li a:active{
  background-color:#A8A6A6;
}

@keyframes lds-gear {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  50% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes lds-gear {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  50% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.lds-gear > div {
  -webkit-transform-origin: 100px 100px;
  transform-origin: 100px 100px;
  -webkit-animation: lds-gear 1s infinite linear;
  animation: lds-gear 1s infinite linear;
  position: relative;
}
.lds-gear > div div {
  position: absolute;
  width: 26px;
  height: 192px;
  background: #f08d43;
  left: 100px;
  top: 100px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.lds-gear > div div:nth-child(1) {
  width: 152px;
  height: 152px;
  border-radius: 50%;
}
.lds-gear > div div:nth-child(3) {
  -webkit-transform: translate(-50%, -50%) rotate(30deg);
  transform: translate(-50%, -50%) rotate(30deg);
}
.lds-gear > div div:nth-child(4) {
  -webkit-transform: translate(-50%, -50%) rotate(60deg);
  transform: translate(-50%, -50%) rotate(60deg);
}
.lds-gear > div div:nth-child(5) {
  -webkit-transform: translate(-50%, -50%) rotate(90deg);
  transform: translate(-50%, -50%) rotate(90deg);
}
.lds-gear > div div:nth-child(6) {
  -webkit-transform: translate(-50%, -50%) rotate(120deg);
  transform: translate(-50%, -50%) rotate(120deg);
}
.lds-gear > div div:nth-child(7) {
  -webkit-transform: translate(-50%, -50%) rotate(150deg);
  transform: translate(-50%, -50%) rotate(150deg);
}
.lds-gear > div div:nth-child(8) {
  -webkit-transform: translate(-50%, -50%) rotate(180deg);
  transform: translate(-50%, -50%) rotate(180deg);
}
.lds-gear > div div:nth-child(9) {
  -webkit-transform: translate(-50%, -50%) rotate(270deg);
  transform: translate(-50%, -50%) rotate(30deg);
}
.lds-gear > div div:nth-child(10) {
  -webkit-transform: translate(-50%, -50%) rotate(360deg);
  transform: translate(-50%, -50%) rotate(30deg);
}
.lds-gear > div div:nth-child(11) {
  width: 80px;
  height: 80px;
  background: #fff;
  border-radius: 50%;
}
.lds-gear {
  width: 59px !important;
  height: 59px !important;
  -webkit-transform: translate(29.5px, 29.5px) scale(0.595) translate(29.5px, 29.5px);
  transform: translate(370px, 190px) scale(0.595) translate(370px, 190px);
}


@media screen and (max-width:960px) {
.col{
  flex: 100%;
  max-width: 80%;
}
}

@media screen and (max-width:600px) {
.col{
  flex: 100%;
  max-width: 100%;
}
}



body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;

}

*{
  box-sizing: border-box;
}


.col-50 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}


.col-50,
 {
  padding: 0 250px;

}

.container {
  background-color: #f2f2f2;

  padding: 5px 20px 15px 20px;
  border: 2px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=number] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=email] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
select {
  width: auto;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: black;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: auto;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: red;
}

a {
  color: #2196F3;
}

hr {
  border: 2px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 500px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
.form1
{
  width:40%;
  height:auto;
  padding:10px;
  margin:30px auto;
  box-shadow: 5px 10px #888888;
  border:2px solid;
 border-radius:10px;
  text-align:center;
   font: italic bold 12px/30px Georgia, serif;
   font-family: georgia, sans-serif;
background-image:url(images/515.jpg);
  
}
</style>
</head>
<body>
<title>Feedback Form</title>
</head>
<body>

  <h1 style="text-align:center; font-family: sofia, sans-serif;">Feedback Form</h1>
 <form action="feedback.php" class="form1" method="POST">
  <table>
   <tr>
    <td><label>Name :</label></td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td><label>Address :</label></td>
    <td><input type="text" name="address" required></td>
   </tr>
   <tr>
    <td><label>Gender :</label></td>
    <td>
     <input type="radio" name="gender" value="male" required>Male
     <input type="radio" name="gender" value="female" required>Female
    </td>
   </tr>
   <tr>
    <td><label>Email :</label></td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td><label>Phone no :</label></td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="+91">+91</option>
     </select>
     <input type="number" name="phone" required>
    </td>
   </tr>
   <tr>
    <tr>
    <td><label>Your Feedback:</label></td>
    <td><input type="text" name="YourFeedback" required></td>
   </tr>
    <td><input type="submit" name="submit" class="btn" value="submit">   </td>   
     <td> <input type="reset" class="btn" value="cancel"></td>
   </tr>
  </table>
 </form>



 
 <?php
  
  require "include/connection.php";
 
  if(isset($_POST['submit'])){
   
    $username=$_POST['username'];
    
    $address=$_POST['address'];
    
    $gender=$_POST['gender'];

    $email=$_POST['email'];

    $phoneCode=$_POST['phoneCode'];

    $phone=$_POST['phone'];

    $YourFeedback=$_POST['YourFeedback'];
      
    $query="INSERT INTO `feedback`(`name`, `address`, `gender`, `email`, `ph_code`, `phone_no`,`YourFeedback`) VALUES ('".$username."','".$address."','".$gender."','".$email."','".$phoneCode."','".$phone."','".$YourFeedback."')";
    
    
    
       if($result=mysql_query($query)){
      //for popup window................
        echo '<script>alert("Thank You !!.");</script>';
     
     }else{
       
       echo mysql_error();
     
     }
     
     
  }


?>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <link rel="stylesheet" href="demo.css">
  <link rel="stylesheet" href="footer.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Absolute Solutions</span></h3>

        <p class="footer-links">
          <a href="index.html">Home</a>
          &nbsp
          <a href="feedback.php">Feedback</a>
          &nbsp
          <a href="about us.html">About Us</a>
          &nbsp

        <p class="footer-company-name">Absolute Solutions &copy; 2019</p> &nbsp
        
        <p style="font-family:Trebuchet MS;color:yellow;">
        All Rights Reserved. Created By 
        <a href="https://91projects.blogspot.com/">91Projects.com</a></p>
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

        <a href="https://91projects.blogspot.com/"><img src="logo.jpg" width="82" height="86" title="91Projects.com" alt=""></a>
        
      


      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>1st floor, Vishnu Prasad, </span>
            <span>Near Kamala Nehru Park,</span>
                <span>Off. Bhandarkar Rd. Erandawan</span> Pune, Maharastra,India</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 9423507991</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:pune.absolutesolutions@gmail.com">pune.absolutesolutions@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Absolute solutions is a catering service provider company who provides best service for your function. :)
        </p>

        <div class="footer-icons">

          <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 0px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>
</head>
<body>
<!-- Add font awesome icons -->
<center><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>


        </div>

      </div>

    </footer>

</body>
</head>

</html>