<!doctype html>
<html>
	<head>
		<title></title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
</head>
  <style>
 body{
 background-image:url("signup1.jpg");
 background-repeat: no-repeat;
 background-size:cover;
}
 .txtbox{
 font-family:Montserrat
 font-weight:bold;
 opacity: 1;
 position:absolute;
 top:200px;
 right:150px;
 font-size:70px;
 display: inline-block;
 color:white
 }

 .signupbox{
 top:570px;
 position:absolute;
 display: inline-block;
 width:100%;
 left:0;
 background-color: black;
 color:white;
 height:640px;
 }

  #submit{
  position:relative;
  left:250px;
  cursor: pointer;
  padding:15px 32px;
  background-color: black;
  color:white;
  border: 5px solid white
  }
 .navbar-custom{
  background-color: black;
   }

 .form-group{
  position:relative;
  width:50%;
  left:340px

}
</style>

<body>
	<nav class="navbar navbar-expand-md navbar-custom navbar-dark sticky-top" style="border-bottom: 5px solid violet">
	<div class="container-fluid">
		<a class="navbar-brand" href="#" style="font-size:40px"><img src="/home/sandhiya/Desktop/Bootstrap/logo.jpeg" width="60" height="60" style="padding-right:5px">NEVER ALONE</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div collapse="collapse navbar-collapse" id="navbarResponsive" >
	<ul class="navbar-nav ml-auto">
	 <li class="nav-item active">
		 <a class="nav-link" href="#">HOME</a>
	 </li>
	 <li class="nav-item">
		 <a class="nav-link" href="#">BLOGS</a>
	 </li>
	<li class="nav-item">
		 <a class="nav-link" href="#">MUSIC LIBRARY</a>
	 </li>
	<li class="nav-item">
		 <a class="nav-link" href="#">ABOUT US</a>
	 </li>
	 <li class="nav-item">
			<a class="nav-link" href="Signup.html">SIGN UP</a>
		</li>

 </ul>
 </div>
 </div>
</nav>

<div class="signupbox" style="border-top: 5px solid violet">
<h3 style="font-size:35px;text-align:center;padding-top:25px">No Matter What You Are Going Through….</h3>
<h3 style="font-size:35px;text-align:center">We will deliver hope for your journey every week.</h3>
<br>
<h4 style="text-align:center">Subscribe to NEVER ALONE for weekly encouragement</h4>
 <div class="form-group" >
	 <form action="insert.php" method="POST">
      <br>
      <label >First Name: *</label>
      <input type="text" class="form-control" name="Firstname" id="Firstname" value="" required/>
      <br>
      <label for="Last name">Last Name: *</label>
      <input type="text" class="form-control" name="Lastname" id="Lastname" value="" required/>
      <br>
      <label for="Email_id">Email ID: *</label>
      <input type="email" class="form-control" name="Email_id" id="Email_id" value="" required/>
    <br>
    <h6 style=>Required *</h6>
    <br>
      <input type="submit" value="SUBSCRIBE" id="submit">
  </form>
</div>
</div>

<div class="txtbox">
<h2 style="text-align:center;font-size:70px">STAY IN</h2>
<h3 style="text-align:center;font-size:70px">TOUCH</h2>
</div>
</body>
