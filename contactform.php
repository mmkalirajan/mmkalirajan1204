<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
<style>
.heading{
padding-top:60px;
padding-left:500px;
font-family:sans-serif;
font-weight:bold;
font-size:20px;
}
#head1{
padding-top:45px;
padding-left:600px;
font-size:18px;
font-family:sans-serif;
}
div{
padding-top:30px;
padding-left:550px;
font-size:12px;
}
input[type=text],[type=tel],[type=email]{
  width: 26%;
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1.9px solid black;
  border-radius: 3px;
  box-sizing: border-box;
}

.btn
{
width: 8%;
padding: 8px 20px;
margin: 8px 0;
 border: 1.8px solid black;
  border-radius: 4px;
  box-sizing: border-box;
background-color:#0096FF; 
text-align:center;
color:black;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
</head>
<body>
<div class="heading">
Contact Form and Contact List Page</div>

<div id="head1">Add Contacts</div>
<div>
<form action="contactform_action.php" method="post">
<label for="Name">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="name" id="name">
<br><br>
<label for="phno">Ph No</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="tel" name="phno" id="phno">
<br><br>
<label for="email">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" name="email" id="email">
<br><br>

<button class="btn">Save</button>
</div>


<?php

include "connection.php";

$sql="select name,phno,email from contactform";
$result=mysqli_query($dbconn,$sql);

?>

<div id="head1">My Contacts </div>
<br><br>
<table align="center"  style="border:1px solid black; font-size:13px; line-height:85px;">
<tr>
<th style="width:210px; color:white; background-color:grey;">Name</th>
<th style="width:210px; color:white; background-color:grey;">Ph No</th>
<th style="width:210px; color:white; background-color:grey;">Email</th>
</tr>
<?php
while($row=mysqli_fetch_array($result))
{
	?>
	<tr style="text-align:center; font-size:13px;">
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['phno']; ?></td>
	<td><?php echo $row['email']; ?></td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>