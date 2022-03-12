<?php

include "connection.php";


$name = $_POST["name"];
$phno = $_POST["phno"];
$email = $_POST["email"];

$sql = "INSERT INTO contactform VALUES(
            NULL,
            '$name',
            '$phno',
            '$email'
        )";
		
		if ($dbconn->query($sql) === TRUE) {  
?>
<script>
alert("Contacts Added Successfully.");
window.location.href='contactform.php';
</script>
<?php
} else {
}
$dbconn->close();
?>
