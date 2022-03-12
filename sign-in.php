<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.heading{
padding-top:45px;
padding-left:590px;
font-family:sans-serif;
font-weight: bold;
}
.container{
padding-top:30px;
padding-left:535px;
}
a{
text-decoration: none;
}
input[type=email],[type=password]{
  width: 40%;
  padding: 10px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btn
{
width: 40%;
padding: 8px 20px;
margin: 8px 0;
 border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
background-color:#6495ED; 
text-align:left;
color:white;
}

div{
padding-top:35px;
padding-left:500px;
}

p{
padding-top:10px;
padding-left:515px;
}


</style>
</head>
<body>
<div class="heading">
<h2>Sign In</h2></div>

<div class="container">
Don't have an account?&nbsp;&nbsp;<a href="index.php"><font color="#6495ED"><b>Sign Up</b></font></a>
</div>
<div>
<form action="signin_action.php" method="post">
<label for="email">Email</label><br>
<input type="email" name="email" id="email" required>

<br><br>
<label for="passwd">Password</label><br>
<input type="password" name="password" id="password" required>

<br><br>

<a href="#.html" style="font-size:13px; padding-left:180px; color:#6495ED;" class="demo">Forget your Password?</a>
<br><br>

<button class="btn"><i class="fa fa-lock" style="font-size:18px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign In</button>

</form>
</div>

</body>
</html>