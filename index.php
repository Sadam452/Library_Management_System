<!DOCTYPE html>
 <html>
 <head>
<meta http-equiv="refresh" content="70">
	 <title>Login/Register</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style>
	 #icon
	 {
	 text-align: center;
	 margin: auto;
	 }
     .fa {
  padding: 15px;
  font-size: 30px;
  width: 50px;
  text-align:center;
  text-decoration: none;
  margin:400px auto 3px auto;
  }
	 .fa:hover{
	 opacity:0.7;
	 }
	 .fa-twitter{
	 background: #55ACEE;
  color: white;
	 }
	 .fa-youtube {
  background: #bb0000;
  color: white;
}
.fa-yahoo {
  background: #430297;
  color: white;
}
.fa-whatsapp {
  background:green;
  color: white;
}
	 .button {
  background-color:indigo;
  color: white;
  font-weight:bold;
  padding: 15px 32px;
  text-align: center;
  text-shadow:5px 4px 4px red;
  display: inline-block;
  font-size:30px;
  margin: 4px 2px;
  cursor: pointer;
  }
	 h2
	 {
	 color:green;
	 border:solid;
	 border-width:5px;
	 border-radius:25px;
	 }
	 #hh
	 {
	 color:red;
	 border:solid;
	 border-width:5px;
	 border-radius:55px;
	 }
	 #div1,#div2,#div3
	 {
	 text-align:center;
	 font-weight:bold;
	 font-size:30px;
	 }
	 </style>
 </head>
	 <body bgcolor="pink">
	 <h2 id="hh"style="text-align:center"><b>Welcome; login here as User or Admin.<br>please register first,if you don't have account↓<b></h2>
	 <div id="div1">
	 <h2>User Login</h2>
	 <form action="validation.php" method="post">
	 <table>
	 <tr>
	 <input type="text" name="registration_no"style="width:40%;text-align:center;"placeholder="Enter Your Registration Number" required><br>
	 </tr>
	 <tr>
	 <input type="password" name="password" style="width:40%;text-align:center;"placeholder="Enter Password Here" required><br>
	 </tr>
	 <input class="button" type="submit" value="login">
	 </table>
	 </form>
<button onclick="window.location.href='forget.php';">FORGET PASSWORD</button>
	 </div>
	 <div id="div2">
	 <h2>Admin Login</h2>
	 <form action="validationE.php" method="post">
	 <table>
	 <tr>
	 <input type="text" name="employee_id"style="width:40%;text-align:center;"placeholder="Employee Id Here" required><br>
	 </tr>
	 <tr>
	 <input type="password" name="password"style="width:40%;text-align:center;"placeholder="Enter Password Here" required><br>
	 </tr>
	 <input class="button"type="submit" value="login">
	 </table>
	 </form>
<button onclick="window.location.href='forgetE.php';">FORGET PASSWORD</button>
	 </div>
	 <div id="div3">
	 <h2>If you don't have account, you can register here</h2>
	 	 <form action="Registration.php"method="post">
	 	 <input class="button"type="submit" value="Register Here">
	 	 </form>
	 	 </div>
	<div id="icon">
	<hr>
	 	<a href="https://twitter.com/myselfsadam_?s=09" class="fa fa-twitter"></a><a href="https://www.youtube.com/channel/UClC95wyDHN43yj7hMWoq8lw" class="fa fa-youtube"></a><a href="https://login.yahoo.com/?.src=fpctx&.intl=in&.lang=en-IN&.done=https://in.yahoo.com" class="fa fa-yahoo"></a><a href="https://api.whatsapp.com/send?phone=917889422245" class="fa fa-whatsapp"></a><hr>
	 	</div>
	 </body>
 </html>
