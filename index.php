<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
.heading{
padding-top:45px;
padding-left:590px;
font-family:sans-serif;
font-weight: bold;
}
.container{
padding-top:30px;
padding-left:525px;
}
a{
text-decoration: none;
}
input[type=email],[type=password],[type=text] {
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
<h2>Sign Up</h2></div>

<div class="container">
Already have an account?&nbsp;&nbsp;<a href="sign-in.php"><font color="#6495ED"><b>Sign in</b></font></a>
</div>
<div>
<form action="signup_action.php" method="post">
<label for="email">Email</label><br>
<input type="email" name="email"  id="email" required>

<br><br>
<label for="passwd">Password</label><br>
<input type="password" name="password" id="pwd" required>
<i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

<br><br>
<label for="secret">Secret</label><br>
<input type="text" name="secret" id="secret" required>

<br><br>
<button class="btn"><i class="fa fa-lock" style="font-size:18px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Up</button>

</form>
</div>
<p style="font-size:13px;" class="demo">
By clicking the "Sign Up" button,you are creating an<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;account,and you agree to the Terms of Use.
</p>
</body>
</html>

<script>
 const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pwd');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>