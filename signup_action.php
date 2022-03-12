<?php

include "connection.php";


$email = $_POST["email"];
$password = $_POST["password"];
$secret = $_POST["secret"];

$sql = "INSERT INTO signup VALUES(
            NULL,
            '$email',
            '$password',
            '$secret'
        )";
		$sql2 = "INSERT INTO signin VALUES(
            NULL,
            '$email',
            '$password',
			'yes'
        )";
		
		if ($dbconn->query($sql) === TRUE) {  
?>
<script>
alert("Account Created and Login Succssfully");
window.location.href='sign-in.php';
</script>
<?php
} else {?>
<script>
alert("Duplicate Entry");
window.location.href='index.php';
</script>
<?php
}

if ($dbconn->query($sql2) === TRUE) {  

} else {

}

$dbconn->close();
?>