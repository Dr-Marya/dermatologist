<?php

// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];

// $mailheader = "From:".$name."<".$email.">\r\n"

// $recipient = "asadqureshi120i61@gmail.com";

// mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dropdown Menu Responsive</title>
</head>
<body>
    <div class="copy">
    <div class="container">
        <h1>Thank you for contacting me. I will get <br> back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="./index.html">homepage</a></p>
    </div>
</div>
</body>
</html>

 ';

$server_name="localhost";
$username="root";
$password="";
$database_name="database2";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
     $message = $_POST['message'];

	 $sql_query = "INSERT INTO entry_details (name,email,mobile,message)
	 VALUES ('$name','$email','$phone','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>